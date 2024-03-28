<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\kategoriaRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Elans;
use App\Models\User;


use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{


    public function update(kategoriaRequest $post, $id){
    $con = Category::find($id);
        
        if($post->file('image')){

            $post->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10000|dimensions:min_width=100,min_height=100,max_width=2000,max_height=5000',
            ]);

            $file = time().'.'.$post->image->extension();
            $post->image->storeAs('public/uploads/kategoria',$file);
            $con -> image='storage/uploads/kategoria/'.$file;

        }
            
        $con->cat = $post->cat;
        $con->maincat = $post->maincat;
        $con->about = $post->about;
        $con->user_id = Auth::id();
        $con->save();

        return redirect()->route('kategoria')->with('mesaj','Melumat ugurla yenilendi');
    

        
    }


   public function edit($id){
    $user_id = Auth::id();

        $edit_data = Category::find($id);
        $data = Category::where('maincat','=',0)->orderBy('id','asc')->get();
        $elan = Category::where('maincat','=',0)->orderBy('cat','desc')->get();
        $csay = City::where('user_id','=',$user_id)->count();
        $esay = Elans::where('user_id','=',$user_id)->count();
        $ksay = Category::where('user_id','=',$user_id)->count();
        $user_info = User::find('user_id');

       
        

        return view('kategoria',[
            'data'=>$data,
            'elan'=>$elan,
            'edit_data'=>$edit_data,
            'csay'=>$csay,
            'esay'=>$esay,
            'ksay'=>$ksay,
            'user_info'=>$user_info
        ]);
   }

   public function sil($id){
    $user_id = Auth::id();
    $data = Category::where('maincat','=',NULL)->orderBy('id','asc')->get();
    $elan = Category::where('maincat','=',NULL)->orderBy('cat','desc')->get();
    $csay = City::where('user_id','=',$user_id)->count();
    $esay = Elans::where('user_id','=',$user_id)->count();
    $ksay = Category::where('user_id','=',$user_id)->count();
    $user_info = User::find('user_id');
    

    return view('kategoria',[
        'data'=>$data,
        'elan'=>$elan,
        'sil_id' =>$id,
        'csay'=>$csay,
        'esay'=>$esay,
        'ksay'=>$ksay,
        'user_info'=>$user_info
    ]);
   }
   public function delete($id){
    $kat_sil= Category::find($id)->delete();

    return redirect()->route('kategoria')->with('mesaj','Melumat ugurla silindi');
   }



    public function index(){
        $user_id = Auth::id();

        $data = Category::where('maincat','=',0)->orderBy('id','asc')->get();
        $elan = Category::where('maincat','=',0)->orderBy('cat','desc')->get();
        $csay = City::where('user_id','=',$user_id)->count();
        $esay = Elans::where('user_id','=',$user_id)->count();
        $ksay = Category::where('user_id','=',$user_id)->count();
        $user_info = User::find('user_id');
        
        return view('kategoria',[
            'data'=>$data,
            'elan'=>$elan,
            'csay'=>$csay,
            'esay'=>$esay,
            'ksay'=>$ksay,
            'user_info'=>$user_info
        ]);
    }

    






    public function kategoria(kategoriaRequest $post){

        $yoxla = Category::where('cat','=',$post->cat)->count();

        //return $post->maincat;

        if($yoxla==0)
        {
            $con = new Category();
            $post->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10000|dimensions:min_width=100,min_height=100,max_width=2000,max_height=5000',
            ]);
            
            if($post->file('image'))
            {
                 $file = time().'.'.$post->image->extension();
                $post->image->storeAs('public/uploads/kategoria',$file);
                $con -> image = 'storage/uploads/kategoria/'.$file;
            }

            $con->cat = $post->cat;
            $con->maincat = $post->maincat;
            $con->about = $post->about;
            $con->user_id = Auth::id();
            $con->save();

            return redirect()->route('kategoria')->with('mesaj','Melumat ugurla elave edildi');
        }

        return redirect()->route('kategoria')->with('mesaj','Bu kateqoriya artiq movcuddur');
    
    }
    public function cat($id){
        $data = Elans::join('categories','categories.id','=','elans.cat_id')
        ->join('cities','cities.id','=','elans.citi_id')
        ->where('elans.cat_id',$id)
        ->select('*','categories.cat as cat','cities.city as city','elans.id as eid','elans.image as efoto','elans.about as eabout','categories.image as cfoto')
        ->get();
        $categories  = Category::where('maincat',0)->orderBy('cat','asc')->get();

        return view('category',[
            'data'=>$data,
            'categories'=>$categories
        ]);
    }
    
      
}