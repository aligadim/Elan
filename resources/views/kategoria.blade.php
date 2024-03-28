@extends('layouts.app')

@section('title')
Category
@endsection
@section('java')





@isset($edit_data)
<div class="card-body">
<form method="post" action="{{route('kategoria_edit',$edit_data)}}" enctype="multipart/form-data">
        @csrf
                   <div class="form-group">
                      <label for="exampleInputPassword1">Kategoria</label>
                      <input type="text" class="form-control" name="cat" id="exampleInputPassword1" value="{{$edit_data->cat}}">
                    </div>

                    <div class="form-group">                
                     <label for="select2Single">Ana Kategoria</label>
                       <select class="select2-single form-control select2-hidden-accessible" name="maincat" >
                       <option value="0">Ana kategoria</option>
                        @foreach($elan as $elans)
                        @if($elans->id == $edit_data->cat)
                         <option selected  value="{{$elans->id}}" data-select2-id="46">{{$elans->cat}}</option>
                         @else
                         <option  value="{{$elans->id}}" data-select2-id="46">{{$elans->cat}}</option>
                         @endif
                        @endforeach
                      </select>
                    </div>
                    
                    
                   
                    <div class="form-group">
                      <label for="exampleInputPassword1">Haqqinda</label>
                      <input type="text" class="form-control" name="about" id="exampleInputPassword1" value="{{$edit_data->about}}">
                    </div>
                    <div class="form-group">
                      <img style="width:60px; height:50px;" src="{{url($edit_data->image)}}">
                      <div class="custom-file">
                       
                        <input type="file" class="custom-file-input" id="customFile" name="image">
                      
                        <label class="custom-file-label">Foto</label>
                      </div>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm"><i class="bi bi-arrow-down-square-fill"></i></button>
                    <a href="{{route('kategoria')}}"><button type="button" class="btn btn-danger mb-1 btn-sm"><i class="bi bi-file-earmark-excel-fill"></i></button></a>
                    </div>
                  </form>
                </div>
                </div>

 
@endisset

@empty($edit_data)
<div class="card-body">
                  <form method="post" action="{{route('kategoria_data')}}" enctype="multipart/form-data">
                    @csrf

                       
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Kategoria</label>
                      <input type="text" class="form-control" name="cat" id="exampleInputPassword1" >
                    </div>
                    <div class="form-group">                
                     <label for="select2Single">Ana Kategoria</label>
                       <select class="select2-single form-control select2-hidden-accessible" name="maincat" >
                        <option value="0">Ana kategoria</option>
                        @foreach($elan as $elans)
                         <option value="{{$elans->id}}" data-select2-id="46">{{$elans->cat}}</option>
                        @endforeach
                      </select>
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Haqqinda</label>
                      <input type="text" class="form-control" name="about" id="exampleInputPassword1" placeholder="Haqqinda">
                    </div>
                    <div class="form-group">
                      <div class="custom-file">
                     
                        <input type="file" class="custom-file-input" id="customFile" name="image">
                        <label class="custom-file-label">Foto</label>
                      </div>
                    </div>
                   
                    <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i></button>
                  </form>
                </div>
                </div>
              
    

@endempty



@if(Session::has ('mesaj'))
<div class="alert alert-primary alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    {{Session::get ('mesaj')}}
                  </div>

@endif
@isset($sil_id)
<div class="alert alert-primary alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                   Siz melumatlari silmeye eminsinizmi?
                  </div>
                 
<a href="{{route('delete',$sil_id)}}"><button type="button" class="btn btn-primary mb-1 btn-sm" name="beli"><i class="bi bi-check-circle-fill"></i></button></a>
<a href="{{route('kategoria')}}"><button type="button" class="btn btn-danger mb-1 btn-sm" name="xeyir"><i class="bi bi-backspace-reverse-fill"></i></button></a>
@endisset

<div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Kategoriya cədvəli</h6>
                </div> 
                
                <div class="table-responsive">
                    
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                       
                      <tr>
                        <th>#</th>
                        <th>Kategoria</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        
                      </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($data as $i=>$info)
                      <tr>
                        <td>{{$i+=1}}</td>
                        <td>
                          <b>{{$info->cat}}</b> <img style="width:35px; height:35px;" src="{{url($info->image)}}"> <br><br>
                         
                         @php

                        $alts = App\Models\Category::where('maincat',$info->id)->get();

                        @endphp

                        @foreach($alts as $alt)
                            -{{$alt->cat}} <img style="width:35px; height:35px;" src="{{url($alt->image)}}">  <a href="{{route('sil',$alt->id)}}"><button type="button"  class="btn btn-danger mb-1 btn-sm"><i class="fas fa-trash"></i></button></a> <a href="{{route('edit',$alt->id)}}"><button type="button" class="btn btn-success mb-1 btn-sm"><i class="bi bi-pencil-square"></i></button></a><br>
                            
                        @endforeach

                        </td>
                        <td class="text-right">
                        <a href="{{route('sil',$info->id)}}"><button class="btn btn-danger mb-1 btn-sm"><i class="fas fa-trash"></i></button></a>
                        <a href="{{route('edit',$info->id)}}" ><button class="btn btn-success mb-1 btn-sm"><i class="bi bi-pencil-square"></i></button></a>
                         </td>
                        
                       
                        </tr>

                 
                       @endforeach
                    </tbody> 
                  
                  </table>
                   
                </div>
               
                <div class="card-footer"></div>
              </div>
            </div>
    



@endsection