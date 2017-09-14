<?php
namespace App\Traits;

use App\User;

trait Recommendation
    {
        public function res_recommends()
        {
            $follows = array();
            
            // $user = \App\User::whereId($id)->first();
            $fs = $this->follows()->get();
            // $fs = $user->follows()->get();
            foreach($fs as $f) {
                array_push($follows, $f->target_id);
            }
            // array_push($follows, $user->id);  // $followsはfollowしているuserと自分のid
            array_push($follows, $this->id);
            $users = \App\User::whereNotIn('id', $follows)->paginate(3);  // $follows以外のuser
            return $users;
        }
        public function hello()
        {
            return "hello wos";
        }
    }