<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    function login(){
        return view('login');
    }

    function registration(){
        return view('registration');
    }

    function logicPost(Request $request){
        $request ->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $credentials =$request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with('error','Login details are not valid');

    }
    function registrationPost(Request $request){
        $request ->validate([
            'name'=>'password',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);

        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=Hash::make($request->password);
        $user= User::create($data);

        if($user){
            return redirect(route('registration'))->with('error','Registration failed, Try again');
        }
        return redirect(route('login'))->with('sucess','Registration sucess, Login to access the app');
    }

    function logout(){

    }


}
