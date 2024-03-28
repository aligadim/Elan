<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\elanRequest;
use App\Models\Elans;
use App\Models\User;
use App\Models\Category;
use App\Models\City;
use Illuminate\Support\Facades\Auth;
use App\Models\Foto;

class elanController extends Controller
{
    public function elan_update(elanRequest $post, $id){

   
      

        $con = Elans::find($id);
         
        if($post->file('image')){
            $post->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10000|dimensions:min_width=100,min_height=100,max_width=2000,max_height=5000',
            ]);

            $file = time().'.'.$post->image->extension();
            $post->image->storeAs('public/uploads/elans',$file);
            $con->image = 'storage/uploads/elans/'.$file;
        }

        $con->cat_id = $post->cat_id;
        $con->citi_id = $post->citi_id;
        $con->title = $post->title;
        $con->about = $post->about;
        $con->user_id = Auth::id();

        $con->save();

        return redirect()->route('elan')->with('mesaj','Melumatlar ugurla yenilendi');

    }



    public function elan_edit($id){
        $user_id = Auth::id();
        
        $data = Elans::join('categories','categories.id','=','elans.cat_id')
    ->join('cities','cities.id','=','elans.citi_id')
    
    ->select('*','categories.cat as cat','cities.city as city','elans.id as eid','elans.image as efoto','elans.about as eabout')
    ->get();
    $cities  = City::orderBy('id','asc')->get();
    $categories  = Category::orderBy('id','asc')->get();
    $say = Elans::count();
    $edit_data = Elans::find($id);

    $csay = City::where('user_id','=',$user_id)->count();
    $esay = Elans::where('user_id','=',$user_id)->count();
    $ksay = Category::where('user_id','=',$user_id)->count();
    $user_info = User::find('user_id');
    
    return view('elan',[
        'data'=>$data,
        'categories'=>$categories,
        'cities'=>$cities,
        'say'=>$say,
        'edit_data'=>$edit_data,
        'csay'=>$csay,
        'esay'=>$esay,
        'ksay'=>$ksay,
        'user_info'=>$user_info

    ]);

    }




public function elan_del($id){
    $sil_elan = Elans::find($id)->delete();

    return redirect()->route('elan')->with('mesaj','Melumatlar ugurla silindi');
}



public function elan_sil($id){

    $user_id = Auth::id();
    $data = Elans::join('categories','categories.id','=','elans.cat_id')
    ->join('cities','cities.id','=','elans.citi_id')
    
    ->select('*','categories.cat as cat','cities.city as city','elans.id as eid','elans.image as efoto','elans.about as eabout')
    ->get();
    $cities  = City::orderBy('id','asc')->get();
    $categories  = Category::orderBy('id','asc')->get();
    $say = Elans::count();

    $csay = City::where('user_id','=',$user_id)->count();
    $esay = Elans::where('user_id','=',$user_id)->count();
    $ksay = Category::where('user_id','=',$user_id)->count();
    $user_info = User::find('user_id');
    
    return view('elan',[
        'data'=>$data,
        'categories'=>$categories,
        'cities'=>$cities,
        'say'=>$say,
        'sil_id'=>$id,
        'csay'=>$csay,
        'esay'=>$esay,
        'ksay'=>$ksay,
        'user_info'=>$user_info
    ]);
}



   public function index(){
    $user_id = Auth::id();
    $data = Elans::join('categories','categories.id','=','elans.cat_id')
    ->join('cities','cities.id','=','elans.citi_id')
    
    ->select('*','categories.cat as cat','cities.city as city','elans.id as eid','elans.image as efoto','elans.about as eabout')
    ->get();
    $cities  = City::orderBy('id','asc')->get();
    $categories  = Category::where('maincat',0)->orderBy('cat','asc')->get(); 
    $say = Elans::count();

    $csay = City::where('user_id','=',$user_id)->count();
    $esay = Elans::where('user_id','=',$user_id)->count();
    $ksay = Category::where('user_id','=',$user_id)->count();
    $user_info = User::find('user_id');
    
    return view('elan',[
        'data'=>$data,
        'categories'=>$categories,
        'cities'=>$cities,
        'say'=>$say,
        'csay'=>$csay,
        'esay'=>$esay,
        'ksay'=>$ksay,
        'user_info'=>$user_info
       
    ]);

   }

    public function elan(elanRequest $post){
        $con = new Elans;

        $post->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10000|dimensions:min_width=100,min_height=100,max_width=2000,max_height=5000',
        ]);
        if($post->file('image')){
            $file = time().'.'.$post->image->extension();
            $post->image->storeAs('public/uploads/elans',$file);
            $con -> image = 'storage/uploads/elans/'.$file;
        }
        
        $con->cat_id = $post->cat_id;
        $con->citi_id = $post->citi_id;
        $con->title = $post->title;
        $con->about = $post->about;
        $con->kod = $post->kod;
        $con->user_id = Auth::id();
        $con->activ = 0;
       
        $con->save();

        return redirect()->route('elan')->with('mesaj','Melumatlar ugurla daxil edildi');
    }


    public function activ($id){
        $active = Elans::find($id);
        $active->activ = 1;
        $active->save();

        return redirect()->route('elan')->with('mesaj','Elan aktiv edildi');
    }
    
   
    public function legv($id){
        $active = Elans::find($id);
        $active->activ = 0;
        $active->save();

        return redirect()->route('elan')->with('mesaj','Elan legv edildi');
    }

    
    public function fileCreate()
    {
        return view('imageupload');
    }
    public function fileStore(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);
        
        $imageUpload = new Foto();
        $imageUpload->foto = $imageName;
        $imageUpload->kod = $request->kod;
        $imageUpload->save();
        return response()->json(['success'=>$imageName]);
    }
    public function fileDestroy(Request $request)
    {
        $filename =  $request->get('filename');
        Foto::where('filename',$filename)->delete();
        $path=public_path().'/images/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;  
    }
}
