<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Elans;
use App\Models\City;
use App\Models\Category;

class homeController extends Controller
{
   public function index(){
    $data = Elans::join('categories','categories.id','=','elans.cat_id')
    ->join('cities','cities.id','=','elans.citi_id')
    
    ->select('*','categories.cat as cat','cities.city as city','elans.id as eid','elans.image as efoto','elans.about as eabout','categories.image as cfoto')
    ->get();
    $cities  = City::orderBy('id','asc')->get();
    $categories  = Category::where('maincat',0)->orderBy('cat','asc')->get(); 
    return view('home',[
        'data'=>$data,
        'categories'=>$categories,
        'cities'=>$cities,
    ]);
    
   }
   public function single($id){
    $data = Elans::join('categories','categories.id','=','elans.cat_id')
    ->join('cities','cities.id','=','elans.citi_id')
    ->where('elans.id',$id)
    ->select('*','categories.cat as cat','cities.city as city','elans.id as eid','elans.image as efoto','elans.about as eabout','categories.image as cfoto')
    ->get();
    $cities  = City::orderBy('id','asc')->get();
    $categories  = Category::where('maincat',0)->orderBy('cat','asc')->get(); 
    return view('single',[
        'data'=>$data,
        'categories'=>$categories,
        'cities'=>$cities,
    ]);
}


  
}
