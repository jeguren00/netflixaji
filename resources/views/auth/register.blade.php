@extends('layouts/layouts')
@section('title', 'Movies')

@section('content')
<!DOCTYPE html>
<html lang="en">

<body class="text-center">
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">
                    <a href="home_sin_login.php">StreamingAJI</a>
                </h3>
            </div>
        </header>
        <h2 class="cover-heading">Please introduce the requested data</h2>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <div class="form-floating mb-3">
                    <input required type="text" class="form-control" name="name" placeholder="Pepe" />
                    <label for="nombre">Name</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-floating mb-3">
                    <input required type="text" class="form-control" name="surname" placeholder="Pepe" />
                    <label for="apellidos">Surname</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-floating mb-3">
                    <input required type="text" class="form-control" name="userName" placeholder="Pepe" />
                    <label for="userName">Username</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-floating mb-3">
                    <input required type="email" class="form-control" name="email" placeholder="Pepe@macario.com" />
                    <label for="email">Mail</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-floating mb-3">
                    <input required type="password" class="form-control" name="password" placeholder="Pepe" />
                    <label for="password">Password</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-floating mb-3">


                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required />
                    <label for="password_confirmation">Confirm password</label>
                </div>
            </div>

            <button type="submit" class="btn btn-secondary">Submit</button>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button class="ml-4">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</body>

</html>
@endsection