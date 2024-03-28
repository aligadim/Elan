<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\userRequest;

use App\Models\City;
use App\Models\Elans;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
   public function index(){
    $user_id = Auth::id();
     $data = User::get();

 

       $csay = City::where('user_id','=',$user_id)->count();
       $esay = Elans::where('user_id','=',$user_id)->count();
       $ksay = Category::where('user_id','=',$user_id)->count();
       $user_info = User::find('user_id');
     return view('user',[
        'data'=>$data,
        'csay'=>$csay,
        'esay'=>$esay,
        'ksay'=>$ksay,
        'user_info'=>$user_info

     ]);
   }

   public function user(userRequest $post){

    $yoxla = User::where('email','=',$post->email)->orwhere('name','=',$post->name)->count();
    if($yoxla==0)
    {
        $con = new User();
        
        $con->name = $post->name;
        $con->email = $post->email;
        $con->image = 'user.png';
        $con->password =Hash::make($post->password);
       
        
        $con->save();

        return redirect()->route('user')->with('mesaj','User uğurla daxil edildi');
    }

    return redirect()->route('user')->with('mesaj','User artıq mövcuddur');

    


   }
}
