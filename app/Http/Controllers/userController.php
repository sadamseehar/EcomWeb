<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use Illuminate\facades\hash;
use Illuminate\Support\Facades\Auth;
use DB;

use App\models\car; 

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
            
  
         $email = $request->email;
         $password = $request->password;


        $login = DB::table("users")->select('name')->where(['email'=>$email,'password'=>$password])->first();

       
         
         if($login)
         {
            $car = car::all();
             session(["username"=>$login->name]);
             return View("main.home",compact('car'));
         }
         else
         {
            return redirect()->back()->with("error","Data not found");

         }
        }


        function logout()
        {
            session()->forget('username');
            
            return view("main.login");
        }
}
