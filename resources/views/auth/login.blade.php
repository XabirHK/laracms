@extends('layouts.auth')

@section('content')
    <div class="login-box">
      <div class="login-logo">
        <a href="{{ url('/') }}"><b>{{@$companyName}}</b>LTD</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form method="POST" action="{{ url('/login') }}">
          {{ csrf_field() }}
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
             @if ($errors->has('email'))
                <span class="help-block text-red">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
             @endif 
          </div>
            

          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
                <span class="help-block text-red">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
            


          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name="remember"> Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <!-- <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
            Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
            Google+</a>
        </div> -->
        <!-- /.social-auth-links -->

        <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a><br>
        <a class="btn btn-link" href="{{ url('/register') }}" class="text-center">Register a new membership</a>

      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
@endsection