<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{url('img/logo/logo.png')}}" rel="icon">
  <title>RuangAdmin - Login</title>
  <link href="{{url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('css/ruang-admin.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form method="post" class="user" action="{{route('login_data')}}">
                    @csrf
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Enter Email Address">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password" id="exampleInputPassword" placeholder="Password">
                    </div>
                     <!--<div class="form-group">
                     <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                          Me</label>
                      </div>
                    </div>-->
                 
                    <div class="form-group">
                      <button class="btn btn-primary btn-block">Login</button>
                    </div>
                    <hr>
                    <a href="index.html" class="btn btn-google btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="{{route('user')}}">Qeydiyyatdan keçin</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

  
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
  <!-- Login Content -->
  <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{url('js/ruang-admin.min.js')}}"></script>
</body>

</html>