{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!DOCTYPE html>
<html>
<head>
  <title>BPR Cleaning Login System </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .box{
      width:600px;
      margin:0 auto;
      border:1px solid #ccc;
  }
</style>
</head>
<body style="background: linear-gradient(rgba(255,255,255,0.7), rgba(255,255,255,0.7)), url('public/images/1.jpg'); background-repeat: no-repeat; background-size: cover; height: 100vh; display: flex; align-items: center;">
  <br />

  <div class="container box" style="height: 400px; width: 700px; border: 0px;">
    <div class="row">
      @if($errors->any())
      <div class="alert alert-danger">
        @foreach($errors->all() as $e)
        <li>{{$e}}</li>
        @endforeach
    </div>
    @endif
    @if(Session::has('userError'))
    <div class="alert alert-info"><li>These credentials do not match our records.</li></div>
    @endif
    @if(Session::has('change_success'))
    <div class="alert alert-success">Password Changed Successfully.Login Now</div>
    @endif
    @if(Session::has('change_success'))
    <div class="alert alert-success">Password Changed Successfully.Login Now</div>
    @endif
    <div class="col-md-6">  <!-- 8 is the width of the left side -->
        <div class="image-form" style="background: #fff;height:400px; border: 1px solid rgba(0,0,0,0.2);padding: 25px; box-shadow: 0 0 15px 0 rgba(0,0,0,0.1);">
          <img src="https://www.vhv.rs/dpng/d/483-4839905_logo-no-background-grey-large-transparent-background-cool.png" style="height: 100%; width:100%; object-fit:contain;">
      </div>

  </div>

  <div class="col-md-6" style="height:400px;">  <!-- 4 is the width of the right side -->

    <div class="login-form" style="background: #fff;width: 100%; height:100%; padding: 40px;display: flex;align-items:center;justify-content:center;text-align: center; border:1px solid rgba(0,0,0,0.1); box-shadow:0 0 15px 0 rgba(0,0,0,0.1);">



      @if(Session::has('success') && !empty(Session::get('success')))<br>
      <div class=" col-md-12 label label-danger" >{{ Session::get('success')}}</div>
      @endif



      <form method="post" action="{{ route('submit.login') }}" style="width: 100%;">


        <h3 align="center" style="margin-top: 0;"> Login</h3><br />

        {{ csrf_field() }}
        <div class="form-group">
          <label>Enter Email</label>
          <input type="text" name="email" class="form-control" />
      </div>
      <div class="form-group">
          <label>Enter Password</label>
          <input type="password" name="password" class="form-control" />
      </div>
      <div class="form-group">
          <input type="submit" name="login" class="btn btn-primary" value="Login" />
      </div>
  </form>
</div>



</div>

</div>

</div>
</body>
</html>
{{-- @endsection --}}
