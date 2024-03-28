<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\profilRequest;
use App\Models\Elans;
use App\Models\User;
use App\Models\Category;
use App\Models\City;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class profilController extends Controller
{
    public function index(){
        $user_id = Auth::id();
        $data= User::get();
        $say = User::count();
          $ksay = Category::where('user_id','=',$user_id)->count();
            $csay = City::where('user_id','=',$user_id)->count();
            $esay = Category::where('user_id','=',$user_id)->count();
            $user_info = User::find('user_id');
        return view('profil',[
            'data'=>$data,
            'say'=>$say,
            'csay'=>$csay,
            'esay'=>$esay,
            'ksay'=>$ksay,
            'user_info'=>$user_info
            
        ]);
    }
    public function profil_update(profilRequest $post){
        if(!empty($post->password)){
            if(Hash::check($post->password,Auth::user()->password)){
                $con = User::find(Auth::id());
                $yoxla = User::where('email','=',$post->email)
                ->where('id','!=',Auth::id())
                ->count();
                if($yoxla == 0){
                    if($post->file('image')){

                        $post->validate([
                            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10000|dimensions:min_width=100,min_height=100,max_width=2000,max_height=5000',
                        ]);

                        $file = time().'.'.$post->image->extension();
                        $post->image->storeAs('public/uploads/profiles',$file);
                        $con ->image = 'storage/uploads/profiles/'.$file;
            
                    }

                    $con->name = $post->name;
                    $con->email = $post->email;
                    if(!empty($post->parol))
                    {$con->password = $post->parol;}
                    $con->user_id = Auth::id();
                    $con ->save();

                    

                }
                else
                {return redirect()->route('profil')->with('mesaj','Bu email artıq mövcudur');}
                return redirect()->route('profil')->with('mesaj','Profil uğurla yeniləndi');
            }
            return redirect()->route('profil')->with('mesaj','Cari parol daxil etmədiniz');
        }
        return redirect()->route('profil')->with('mesaj','Parol daxil etmədiniz');
    }

    public function profil_edit($id){
        $user_id = Auth::id();
        $edit_data = User::find($id);
        $data= User::get();
        $say = User::count();
        $ksay = Category::where('user_id','=',$user_id)->count();
        $csay = City::where('user_id','=',$user_id)->count();
        $esay = Elan::where('user_id','=',$user_id)->count();
        $user_info = User::find('user_id');

        return view('profil',[
            'edit_data'=>$edit_data,
            'data'=>$data,
            'say'=>$say,
            'csay'=>$csay,
            'esay'=>$esay,
            'ksay'=>$ksay,
            'user_info'=>$user_info

        ]);
    }
}
