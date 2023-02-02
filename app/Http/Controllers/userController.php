<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use Illuminate\facades\hash;

class userController extends Controller
{
        function register()
        {
            return view('main.register');
        }
        function registerPost(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password'=>'required|min:8',
              
            ]);
            // $seller = new seller();
            // $seller->name =  $request->name;
            // $seller->email =  $request->email;
            // $seller->password =  $request->password;
            // $seller->save();

            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password
            ]);
            return view('main.login');

        }
        function login()
        {
            return view('main.login');
        }


        function loginPost(Request $request)
        {
            $request->validate([
                'email'=>'required|email',
                'password'=>'required|min:8',
            ]);

            $user = user::where(['name'=>$request->email , 'password'=>$request->password]);

            // if(\Auth::attempt($request->only('email','password')))
            // {
            //     return view("main.home");
            // }
            return redirect()->back()->with('error','invalid credentials');
        }
}
