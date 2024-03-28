<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\citiRequest;
use App\Models\City;
use App\Models\Elans;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class CityController extends Controller
{
    public function update_city(citiRequest $post,$id){

    $yoxla=City::where('city','=',$post->city)->count();
    if($yoxla == 0)
    {
    $con = City::find($id);
    $con->city = $post->city;
    $con->user_id = Auth::id();
    $con->save();

    return redirect()->route('city')->with('mesaj','Məlumatlar uğurla yenilendi');
    }
    return redirect()->route('city')->with('mesaj','Şəhər artıq mövcuddur');
}

    public function edit_city($id){
        $user_id = Auth::id();
        $edit_data = City::find($id);
        $data = City::orderBy('id','desc')->get();
        $say = City::count();

        $csay = City::where('user_id','=',$user_id)->count();
        $esay = Elans::where('user_id','=',$user_id)->count();
        $ksay = Category::where('user_id','=',$user_id)->count();
        $user_info = User::find('user_id');
 
        return view('city',[
         'data'=>$data,
         'say'=>$say,
         'edit_data'=>$edit_data,
         'csay'=>$csay,
         'esay'=>$esay,
         'ksay'=>$ksay,
         'user_info'=>$user_info
        ]);
     }



    public function index(){
        $user_id = Auth::id();
       $data = City::orderBy('id','desc')->get();
       $say = City::count();

       $csay = City::where('user_id','=',$user_id)->count();
       $esay = Elans::where('user_id','=',$user_id)->count();
       $ksay = Category::where('user_id','=',$user_id)->count();
       $user_info = User::find('user_id');

       return view('city',[
        'data'=>$data,
        'say'=>$say,
        'csay'=>$csay,
        'esay'=>$esay,
        'ksay'=>$ksay,
        'user_info'=>$user_info
       ]);
    }

    public function city_sil($id){
        $user_id = Auth::id();
        $data = City::orderBy('id','desc')->get();
        $say = City::count();

       $csay = City::where('user_id','=',$user_id)->count();
       $esay = Elans::where('user_id','=',$user_id)->count();
       $ksay = Category::where('user_id','=',$user_id)->count();
       $user_info = User::find('user_id');
 
        return view('city',[
         'data'=>$data,
         'say'=>$say,
         'sil_id'=>$id,
         'csay'=>$csay,
         'esay'=>$esay,
         'ksay'=>$ksay,
         'user_info'=>$user_info

        ]);
     }

     public function city_del($id){
     $sil_data = City::find($id)->delete();
     return redirect()->route('city')->with('mesaj','Məlumatlar uğurla silindi');
     }

    public function city(citiRequest $post){
        $yoxla=City::where('city','=',$post->city)->count();
        if($yoxla == 0)
        {
        $con = new City;
        $con->city = $post->city;
        $con->user_id = Auth::id();
        $con->save();

        return redirect()->route('city')->with('mesaj','Məlumatlar uğurla əlavə edildi');
        }
        return redirect()->route('city')->with('mesaj','Şəhər artıq mövcuddur');
        
    }
}
