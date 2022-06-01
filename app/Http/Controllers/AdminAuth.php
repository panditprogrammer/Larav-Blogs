<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminAuth extends Controller
{
    // sign up 
    function signup(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = array(
            'username' => $username,
            'email' => $email,
            'password' => $password
        );

        $registered = DB::table('users')->insert($user);
        if ($registered) {
            return redirect("/admin/signin")->with(["success" => "1", "msg" => "Registration Successfull"]);
        } else {
            return redirect("/admin/signup")->with(["success" => "0", "msg" => "Unable to register!"]);
        }
    }

    // sign in 
    function signin(Request $request)
    {
        $email = $request->input("email");
        $password = $request->input("password");

        $result = DB::table("users")->where("email", $email)->where('password', $password)->get();

        if (isset($result[0]->id)) {

            if ($result[0]->status == 1) {
                // start the session 
                Session::put("BLOG_USER_ID", $result[0]->id);
                Session::put("BLOG_USER_USERNAME", $result[0]->username);
                return redirect("/admin");
            } else {
                return redirect("/admin/signin")->with(["success" => "0", "msg" => "Your account is not active!"]);;
            }
        } else {
            return redirect("/admin/signin")->with(["success" => "0", "msg" => "Please Enter Valid Details!"]);;
        }
    }
}
