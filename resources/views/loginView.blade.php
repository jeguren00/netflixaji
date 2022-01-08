@extends('layouts/layouts')
@section('title', 'Login - StreamingAJI')

@section('content')
<!-- <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #000000;
            height: 100vh;
        }
        #login .container #login-row #login-column #login-box {
            margin-top: 120px;
            max-width: 600px;
            height: 320px;
            border: 1px solid #9C9C9C;
            background-color: #ff0000;
        }
        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        }
        #login .container #login-row #login-column #login-box #login-form #register-link {
            margin-top: -85px;
        }
    </style>
</head>

<body> -->
<div id="login">
    <h3 class="text-center text-white pt-5">Login StreamingAJI</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="{{ route('login-validation') }}" method="post">

                        @csrf
                        @error('not_valid')
                        <p>{{$message}}</p>
                        @enderror
                        <div class="form-group">
                            <label for="userName" class="text-white">Username:</label><br>
                            <input type="text" name="userName" id="username" class="form-control">
                            <span class="text-danger">{{ $errors->first('userName') }}</span>

                        </div>
                        <div class="form-group">
                            <label for="password" class="text-white">Password:</label><br>
                            <input type="text" name="password" id="password" class="form-control">
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-white"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            <input type="submit" name="submit" class="btn btn-light btn-md " value="submit">
                        </div>
                        <div id="register-link" class="text-right">
                            <a href="/register" class="text-white">Register here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection