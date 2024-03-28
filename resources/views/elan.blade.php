@extends('layouts.app')

<!-- imageupload.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Laravel Multiple Images Upload Using Dropzone</title>
    <meta name="_token" content="{{csrf_token()}}" />
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css')}}">
    <script src="{{url('http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js')}}"></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js')}}"></script>
</head>
<body>
<div class="container">




@section('java')



@isset($edit_data)
<div class="card-body">

   

    @php
    $kod = $edit_data->kod;
    @endphp

    <form method="post" action="{{route('fileStore')}}" enctype="multipart/form-data" 
                  class="dropzone" id="dropzone">
    @csrf
    <div class="dz-message" data-dz-message><span>Fotoları buraya yükləyin</span></div>
    <input type="hidden" name="kod" value="{{$kod}}">
   
    
    @php
    $photos = App\Models\Foto::where('kod',$edit_data->kod)->get();
    @endphp

   
</form>   

<script type="text/javascript">
        Dropzone.options.dropzone =
         {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
               return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 50000,
            removedfile: function(file) 
            {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            },
                    type: 'POST',
                    url: '{{ url("image/delete") }}',
                    data: {filename: name},
                    success: function (data){
                        console.log("File has been successfully removed!!");
                    },
                    error: function(e) {
                        console.log(e);
                    }});
                    var fileRef;
                    return (fileRef = file.previewElement) != null ? 
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
       
            success: function(file, response) 
            {
                console.log(response);
            },
            error: function(file, response)
            {
               return false;
            }
};

</script>

      <form method="post" action="{{route('elan_update',$edit_data)}}" enctype="multipart/form-data">
        @csrf

@foreach($photos as $photo)
<img src="{{url('images/'.$photo->foto)}}" style="width:60px; height:70px;" >
sil
<input type="checkbox" name="f[]" value="{{$photo->id}}">
@endforeach

       
                    <div class="form-group">                
                     <label for="select2Single">Kategoria</label>
                       <select class="select2-single form-control select2-hidden-accessible" name="cat_id" >
                        <option value="" >Kategoria seçin</option>
                        @foreach($categories as $cat)
                        @if($cat->id == $edit_data->cat_id)
                         <option selected  value="{{$cat->id}}" data-select2-id="46">{{$cat->cat}}</option>
                         @else
                         <option  value="{{$cat->id}}" data-select2-id="46">{{$cat->cat}}</option>
                         @endif
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">                
                     <label for="select2Single">Şəhər</label>
                       <select class="select2-single form-control select2-hidden-accessible" name="citi_id">
                        <option value="" >Şəhər seçin</option>
                        @foreach($cities as $citi)
                        @if($citi->id == $edit_data->citi_id)
                         <option selected value="{{$citi->id}}" data-select2-id="46">{{$citi->city}}</option>
                         @else
                         <option value="{{$citi->id}}" data-select2-id="46">{{$citi->city}}</option>
                         @endif
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" value="{{$edit_data->title}}">
                      
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
                     <button type="submit" class="btn btn-primary btn-sm" name="yenile"><i class="bi bi-arrow-down-square-fill"></i></button>
                    <a href="{{route('elan')}}"><button type="button" class="btn btn-danger mb-1 btn-sm"><i class="bi bi-file-earmark-excel-fill"></i></button></a>
                    </div>
                  </form>
                </div>
                </div>
  
@endisset



@empty($edit_data)
<div class="card-body">

   

    @php
    $kod = time();
    @endphp

    <form method="post" action="{{route('fileStore')}}" enctype="multipart/form-data" 
                  class="dropzone" id="dropzone">
    @csrf
    <div class="dz-message" data-dz-message><span>Fotoları buraya yükləyin</span></div>
    <input type="hidden" name="kod" value="{{$kod}}">
</form>   

<script type="text/javascript">
        Dropzone.options.dropzone =
         {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
               return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 50000,
            removedfile: function(file) 
            {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            },
                    type: 'POST',
                    url: '{{ url("image/delete") }}',
                    data: {filename: name},
                    success: function (data){
                        console.log("File has been successfully removed!!");
                    },
                    error: function(e) {
                        console.log(e);
                    }});
                    var fileRef;
                    return (fileRef = file.previewElement) != null ? 
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
       
            success: function(file, response) 
            {
                console.log(response);
            },
            error: function(file, response)
            {
               return false;
            }
};

</script>

                  <form method="post" action="{{route('elan_data')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="kod" value="{{$kod}}">
                    <div class="form-group">                
                     <label for="select2Single">Kategoria</label>
                       <select class="select2-single form-control select2-hidden-accessible" name="cat_id" >
                        <option value="" >Kategoria seçin</option>
                        @foreach($categories as $cat)
                        <optgroup label="{{$cat->cat}}">

                          @php
                            $altcats = App\Models\Category::where('maincat',$cat->id)->orderby('cat','asc')->get();
                          @endphp
                          @foreach($altcats as $altcat)
                          <option value="{{$altcat->id}}" data-select2-id="46">{{$altcat->cat}}</option>
                          @endforeach
                        </optgroup>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">                
                     <label for="select2Single">Şəhər</label>
                       <select class="select2-single form-control select2-hidden-accessible" name="citi_id" >
                        <option value="">Şəhər seçin</option>
                        @foreach($cities as $citi)
                         <option value="{{$citi->id}}" data-select2-id="46">{{$citi->city}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" placeholder="Title">
                      
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
                    <div class="alert alert-primary alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
Melumatlari silmeye eminsinizmi?</div>


<a href="{{route('elan_del',$sil_id)}}"><button type="button" class="btn btn-primary mb-1 btn-sm" name="beli"><i class="bi bi-check-circle-fill"></i></button></a>
<a href="{{route('elan')}}"><button type="button" class="btn btn-danger mb-1 btn-sm" name="xeyir"><i class="bi bi-backspace-reverse-fill"></i></button><br>
@endisset

<div class="alert alert-primary" role="alert">
  {{$say}} Elan var
                  </div>
                    
        

<div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Elan cədvəli</h6>
                </div> 
                
                <div class="table-responsive">
                    
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                       
                      <tr>
                        <th>#</th>
                        <th>Kategoria</th>
                        <th>Şəhər</th>
                        <th>Title</th>
                        <th>Haqqında</th>
                        <th>Foto</th>
                        <th></th>
                        
                      </tr>
                    </thead>
                    @foreach($data as $i=>$info)
                    <tbody>
                      <tr>
                        <td>{{$i+=1}}</td>
                        <td>{{$info->cat}}</td>
                        <td>{{$info->city}}</td>
                        <td>{{$info->title}}</td>
                        <td>{{$info->eabout}}</td>
                        <td><img style="width:35px; height:35px;" src="{{url($info->efoto)}}"></td>

                       
                        
                        <td>
                          @if($info->activ == 0)
                            <a href="{{route('elan_edit',$info->eid)}}"><button type="button" class="btn btn-success mb-1" name="edit"><i class="bi bi-pencil-square"></i></button></a>
                            <a href="{{route('elan_sil',$info->eid)}}"><button type="button" class="btn btn-danger mb-1"  name="sil"><i class="fas fa-trash"></i></button></a>
                            <a href="{{route('activ',$info->eid)}}"><button type="button" class="btn btn-primary mb-1" name="activ"><i class="bi bi-card-checklist"></i></button></a><br><br>
                           @else
                           <a href="{{route('legv',$info->eid)}}"><button type="button" name="legv" class="btn btn-light mb-1"><i class="bi bi-file-earmark-excel-fill"></i></button></a><br><br>
                           @endif
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
</div>
</body>
</html>