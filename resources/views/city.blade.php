@extends('layouts.app')


@section('title')
City
@endsection


@section('java')


@isset($edit_data)
<div class="card-body">
                <form method="post" action="{{route('update_city',$edit_data)}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Şəhər</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="city" value="{{$edit_data->city}}">
                      
                    </div>
                   
                    
                    <button type="submit" class="btn btn-primary btn-sm" name="yenile"><i class="bi bi-arrow-down-square-fill"></i></button>
                    <a href="{{route('city')}}"><button type="button" class="btn btn-danger mb-1 btn-sm"><i class="bi bi-file-earmark-excel-fill"></i></button></a>
                  </form>
                </div>
                </div>

@endisset

@empty($edit_data)
<div class="card-body">
                <form method="post" action="{{route('city_data')}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Şəhər</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="city" aria-describedby="emailHelp" >
                      
                    </div>
                   
                    
                    <button type="submit" class="btn btn-primary" name="ok"><i class="fas fa-check"></i></button>
                  </form>
                </div>
</div>


   

@endempty
<div class="alert alert-primary" role="alert">
{{$say}} Seher var
</div>



@if(Session::has('mesaj'))
                    <div class="alert alert-primary alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    {{Session::get('mesaj')}}
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
@endif<br>

@isset($sil_id)
<div class="alert alert-primary" role="alert">
                Siz melumatlri silmeye eminsinizmi
                  </div>

<a href="{{route('city_del',$sil_id)}}"><button type="button" class="btn btn-primary mb-1 btn-sm" name="beli"><i class="bi bi-check-circle-fill"></i></button></a>
<a href="{{route('city')}}"><button type="button" class="btn btn-danger mb-1 btn-sm" name="xeyir"><i class="bi bi-backspace-reverse-fill"></i></button></a>
@endisset




<div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Şəhər cədvəli</h6>
                </div> 
                
                <div class="table-responsive">
                    
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                       
                      <tr>
                        <th>#</th>
                        <th>Şəhər</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        
                      </tr>
                    </thead>
                    @foreach($data as $i=> $info)
                    <tbody>
                      <tr>
                        <td>{{$i+=1}}</td>
                        <td>
                          {{$info->city}}

                          

                        </td>
                       
                        
                        <td class="text-right">
                        <a href="{{route('city_sil',$info->id)}}"><button type="button" class="btn btn-danger mb-1 btn-sm" name="sil"> <i class="fas fa-trash"></i></button></a>
                        <a href="{{route('edit_city',$info->id)}}"><button type="button" class="btn btn-success mb-1 btn-sm" name="edit"><i class="bi bi-pencil-square"></i></button></a>

                      </td>
                      </tr>

                 
                    
                    </tbody> 
                     @endforeach
                  </table>
                   
                </div>
               
                <div class="card-footer"></div>
              </div>
            </div>
    



@endsection