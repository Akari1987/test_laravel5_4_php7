<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index($id)
    {
        $user = User::where('id', $id)->first();
        // return view('home')->with('user', $user);
        return $user;
    }
}
