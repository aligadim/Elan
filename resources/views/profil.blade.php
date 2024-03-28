@extends('layouts.app')

@section('title')
Profil
@endsection


@section('java')

<div class="card-body">

  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> {{Auth::user()->name}}</div>
<br><br>
                  <form method="post" action="{{route('profil_update')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Ad</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="{{Auth::user()->name}}" > 
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="email" class="form-control" id="exampleInputPassword1" name="email" value ="{{Auth::user()->email}}">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Parol</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="parol" placeholder="Dəyişmirsinizsə boş buraxın">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Dəyişikləri yadda saxlamaq üçün cari parol daxil edin">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Foto</label>
                      <img style="width:70px; height:60px;" src="{{url(Auth::user()->image)}}">
                      <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp" >
                      
                    </div>
                   
                    
                    <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i></button><br><br>
                  </form>
              


                
@if(Session::has ('mesaj'))
                    <div class="alert alert-primary alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    {{Session::get ('mesaj')}}
                     </div>

@endif

@if($errors->any())
@foreach($errors->all() as $mesaj)
                    <div class="alert alert-primary alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    {{$mesaj}}
                    <div>

                    @endforeach
                    @endif
  </div>
                @endsection
