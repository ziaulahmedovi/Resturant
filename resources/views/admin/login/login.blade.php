@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('public/admin/')}}//vendors//bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('public/admin/')}}//vendors//font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('public/admin/')}}//vendors//nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('public/admin/')}}//vendors//animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('public/admin/')}}//build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          {!! Form::open(['url'=>'/login', 'method' =>'POST']) !!}
              <h1>Login Form</h1>
          
                 <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder'=>'enter you email']) }}
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
 <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
 {{ Form::password('password',  ['class' => 'form-control', 'placeholder'=>'enter you password']) }}
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
 <div class="checkbox">
                                <label>
{{ Form::checkbox('name', 'rememberMe') }} Remember Me </label>
                            </div>
                            <div class="form-group col-sm-10">
 {{ Form::submit('Login', ['class' => 'btn btn-success btn-block ', 'name' => 'btn']) }}
                            </div>

              <div class="clearfix"></div>

            {!!Form::close()!!}
          </section>
        </div>

    
      </div>
    </div>
  </body>
</html>

@endsection

