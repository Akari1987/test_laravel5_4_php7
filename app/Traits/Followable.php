<?php
namespace App\Traits;

use App\User;

trait Followable
    {
        public function isFollowing($target_id)
        {
            return (bool)$this->follows()->where('target_id', $target_id)->first(['id']);
        }
    
        public function followingUsers() {
            $fs = $this->follows()->get();
            $follows = array();
            
            foreach($fs as $f)
            {
                array_push($follows, User::find($f->target_id));
            }
            return $follows;
        }
        
        public function res_follows()
        {
            $fs = $this->follows()->get();
            $follows_id = array();
            foreach($fs as $f)
            {
                array_push($follows_id, $f->target_id);
            }
            $follows = \App\User::whereIn('id', $follows_id)->paginate(10);
            return $follows;
        }
        
        public function res_recommend() // users not follow
        {
            $fs = $this->follows()->get();  // Auth_userがfollowしているuser
            $follows = array();
            foreach($fs as $f) {
                array_push($follows, $f->target_id);
            }
            array_push($follows, $this->id);
            $users = \App\User::whereNotIn('id', $follows)->paginate(3);  // $follows以外のuser
            return $users;
        }
    }