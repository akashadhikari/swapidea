@extends('templates.default')

@section('content')

<div style="background:transparent !important" class="jumbotron">
  <h1>Let's not just talk; let's ACT!</h1>
  <hr class="m-y-2">
  <p>Join the awesome community and be the part of change!</p>

  <p><a class="btn btn-success btn-lg" href="{{ route('auth.signup') }}" role="button">Sign up</a></p>


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

<div class="inline">
  <h3>Already a member? Sign in.</h3>


   <div class="row">
        <div class="col-lg-12">
                <form class="form-vertical" role="form" method="post" action="{{ route('home') }}">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">Email</label>
                                <input type="text" name="email" class="form-control" id="email">

                                @if ($errors->has('email'))
                                <span class="help-block">{{ $errors->first('email') }}</span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password">

                                @if ($errors->has('password'))
                                <span class="help-block">{{ $errors->first('password') }}</span>
                                @endif
                        </div>
                        <div class="checkbox">
                                <label>
                                        <input type="checkbox" name="remember"> Remember me
                                </label>
                        </div>
                        <div class="form-gorup">
                                <button type="submit" class="btn btn-info">Sign in</button> Forgot Password?
                        </div>
                        <input type="hidden" name="_token" value="{{ Session::token() }}" >
                </form>
        </div>
</div>

</div>
<hr>
Term Policies bla bla bla 

@stop