<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ecom_users;

class UserController extends Controller
{
    //
    function login(Request $req){

        $user = ecom_users::where(['email'=>$req->email])->first();
        $password = ecom_users::where(['password'=>$req->password])->first();
        // $password = $user->password;
        if(!$user || !$password){
            return "Username Password Not match";
        }
        else{
            // return $req->session()->put('user',$user);
            return redirect('/');
            return "Username Password match";
        }
    }
}
