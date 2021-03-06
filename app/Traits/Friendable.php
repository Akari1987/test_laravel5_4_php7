<?php
namespace App\Traits;

use App\Friendship;

trait Friendable
    {
        public function add_friend($user_requested_id)
        {
            if($this->id === $user_requested_id)
            {
                return 0;
            }
            
            if($this->has_pending_friend_request_sent_to($user_requested_id) === 1)  // kazi #14
            {
                return "already sent a friend request";
            }
            
            if($this->is_friends_with($user_requested_id) == 1)  // kazi #14
            {
                return "already friends";
            }
            
            
            // リクエストをすでに受けているので承認
            if($this->has_pending_friend_request_from($user_requested_id) === 1)
            {
                return $this->accept_friend($user_requested_id);
            }
            
            // creating friendship data to the table
            $friendship = Friendship::create([
                'requester' => $this->id, // User calling this method
                'user_requested' => $user_requested_id
            ]);
            
            
            // check if friendship already exists
            if($friendship)
            {
                return response()->json($friendship, 200);
            }
            
            return response()->json('fail', 501);
        }
        
        
        public function accept_friend($requester)
        {
            // リクエストの保留が存在していない
            if($this->has_pending_friend_request_from($requester) === 0)
            {
                return 0;
            }
            
            
            // リクエストを特定
            $friendship = Friendship::where('requester', $requester)
                                            ->where('user_requested', $this->id)
                                            ->first();
             
             
            // リクエストを承認                               
            if($friendship)
            {
                $friendship->update([
                    'status' => 1
                ]);
                return response()->json($friendship, 200);
            }
            
            return response()->json('fail', 501);
        }
        
        
        public function friends()  // kati #11
        {
            $friends = array();  // こちらがリクエストしたUser
            
            
            $f1 = Friendship::where('status', 1)
                                    ->where('requester', $this->id)
                                    ->get();
                                    
            foreach($f1 as $friendship)
            {
                array_push($friends, \App\User::find($friendship->user_requested));
            }
            
            $friends2 = array();  // // リクエストを受けたUser
            
            $f2 = Friendship::where('status', 1)
                                    ->where('user_requested', $this->id)
                                    ->get();
            
            foreach($f2 as $friendship)
            {
                array_push($friends2, \App\User::find($friendship->requester));
            }
            
            
            return array_merge($friends, $friends2);
        }
        
        
        public function friends_ids() // kati #13
        {
            return collect($this->friends())->pluck('id')->toArray(); // create Laravel collection instance
        }
        
        
        public function is_friends_with($user_id) // kati #13
        {
            if(in_array($user_id, $this->friends_ids()))
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }
        
        
        public function pending_friends_requests() // kati #13
        {
            $users = array(); // リクエストを保留しているUser
            
            $friendships = Friendship::where('status', 0)
                                            ->where('user_requested', $this->id)
                                            ->get();
                                            
            foreach($friendships as $friendship)
            {
                array_push($users, \App\User::find($friendship->requester));
            }
            
            return $users;
        }
        
        public function pending_friends_requests_ids() // kati #14
        {
            return collect($this->pending_friends_requests())->pluck('id')->toArray();
        }
        
        public function pending_friends_requests_sent()  // kati #14
        {
            $users = array(); // リクエストを保留されているUser
            
            $friendships = Friendship::where('status', 0)
                                            ->where('requester', $this->id)
                                            ->get();
            foreach($friendships as $friendship)
            {
                array_push($users, \App\User::find($friendship->user_requested));
            }
            
            return $users;
        }
        
        public function pending_friends_requests_sent_ids()  // kati #14
        {
            return collect($this->pending_friends_requests_sent())->pluck('id')->toArray();
        }
        
        public function has_pending_friend_request_from($user_id) // kati #14
        {
            if(in_array($user_id, $this->pending_friends_requests_ids()))
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }
        
        public function has_pending_friend_request_sent_to($user_id) // kati #14
        {
            if(in_array($user_id, $this->pending_friends_requests_sent_ids()))
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }
    }
