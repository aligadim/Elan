<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\loginRequest;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view('login');
    }


    public function login(loginRequest $post){
        if(!Auth::attempt(['email'=>$post->email,'password'=>$post->password]))
        {
            return redirect()->back()->with('mesaj','Sizin daxil etdiyiniz email və ya parol yanlışdır');
        }
        
        return redirect()->route('elan');
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }
}
