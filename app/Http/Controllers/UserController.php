<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function member() {
        return User::where('id', '!=', Auth::id())->get();
        
    }
    
    /*-------------------
    |  For Edit Mode
    ---------------------*/
    public function editAvatar(Request $request)
    {
    	$this->validate($request, [
    	    //'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // create unique image name
        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        // upload image to public/images/"imagename"
        $request->image->move(public_path(''), $input['image']);

        // User::find(1)->update(["avatar" => $input['image']]);
        Auth::user()->update(["avatar" => $input['image']]);
    	return back()
    		->with('success','Image Uploaded successfully.');
    }
}
