@extends('templates.default')

@section('content')

<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: #f2f2f2;
}
</style>
</head>
<body>

</body>
</html>



<div style="background:transparent !important" class="">
  <h1 class="display-3">Hello, there!</h1>
  <hr class="m-y-2">
  <p>Fill out this very simple form to get started.</p>

  <div class="row">
    <div class="col-lg-12">
        <form class="form-vertical" role="form" method="post" action="{{ route('auth.signup') }}">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="control-label">Email</label>
                <input type="text" name="email" class="form-control" id="email" value="{{ Request::old('email') ?: '' }}">

                @if ($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
                @endif

            </div>

            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <label for="username" class="control-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" value="{{ Request::old('username') ?: '' }}">

                @if ($errors->has('username'))
                <span class="help-block">{{ $errors->first('username') }}</span>
                @endif

            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="control-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" value="">

                @if ($errors->has('password'))
                <span class="help-block">{{ $errors->first('password') }}</span>
                @endif

            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label for="password-confirm" class="control-label">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                @if ($errors->has('password_confirmation'))
                <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
                @endif
                            
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-success">Sign up for Swapidea</button>
            </div>
            
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
</div>
<div> <p><a class="btn btn-info" href="{{ route('home') }}" role="button">Or, Sign in</a></p>  </div>

</div>



@stop