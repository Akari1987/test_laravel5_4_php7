<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Follow;

class FollowController extends Controller
{
    /*-------------------------------
    | For Social Functionality
    --------------------------------*/
    public function index()
    {
        return view('users.index', [
            'users' => User::where('id', '!=', Auth::id())->get()
        ]);
    }
    
    public function follow(User $user)
    {
        if (!Auth::user()->isFollowing($user->id)) {
            // Create a new follow instance for the authenticated user
            Auth::user()->follows()->create([
                'target_id' => $user->id,
            ]);
            // create a new followPagination instance for follow pagination
            $target = \App\User::find($user->id);
            $target->followPaginations()->create([
                'requester' => Auth::user()->id
            ]);
            return back()->with('success', 'You are now friends with '. $user->name);
        } else {
            return back()->with('error', 'You are already following this person');
        }

    }

    public function unfollow(User $user)
    {
        if (Auth::user()->isFollowing($user->id)) {
            $follow = Auth::user()->follows()->where('target_id', $user->id)->first();
            $follow->delete();

            return back()->with('success', 'You are no longer friends with '. $user->name);
        } else {
            return back()->with('error', 'You are not following this person');
        }
    }
    
    /*---------------------------------
    | For Social Functionality from Vue
    ----------------------------------*/
    public function res_follows_array($id)
    {
        $user = User::where('id', $id)->first();
        $fs = $user->follows()->get();
        $follows = array();
        foreach($fs as $f) {
            array_push($follows, User::find($f->target_id));
        }
        return $follows;
    }
    
    public function res_recommend() // users not follow
    {
        $fs = Auth::user()->follows()->get();  // Auth_userがfollowしているuser
        $follows = array();
        foreach($fs as $f) {
            array_push($follows, $f->target_id);
        }
        array_push($follows, Auth::id());
        $users = User::whereNotIn('id', $follows)->paginate(10);  // $follows以外のuser
        return $users;
        console.log($users);
    }
}
