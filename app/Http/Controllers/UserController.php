<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // create unique image name
        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        // upload image to public/images/"imagename"
        $request->image->move(public_path(''), $input['image']);

        Auth::user()->update(["avatar" => $input['image']]);
    	return back()
    		->with('success','Image Uploaded successfully.');
    }
    
    /*----------------------------
    | For Frontend Authentication |
    -----------------------------*/
    public function signup(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        
        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();
        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }
    
    public function Signin(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        try {
            if(!$token = JWTAuth::attempt($credentials))
            {
                return response()->json([
                    'error' => 'Invalid Credentials!'
                ], 401);
            }
        } catch(JWTException $e) {
            return response()->json([
                'error' => 'Could not create token!'
            , 500]);
        }
        return response()->json([
            'token' => $token
        ], 200);
    }
}
