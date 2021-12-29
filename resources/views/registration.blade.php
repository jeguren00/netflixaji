@extends('layouts/layouts')
@section('title', 'Movies')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico" />

        <title>StreamingAJI</title>

        <!-- Bootstrap core CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
        />
        <!-- Custom styles for this template -->
        <link href="../css/cover.css" rel="stylesheet" />
    </head>

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

            <form method="POST" action="/register/save">
                {{ csrf_field() }} 
                <div class="form-group">
                    <div class="form-floating mb-3">
                        <input
                            required
                            type="text"
                            class="form-control"
                            name="name"
                            placeholder="Pepe"
                        />
                        <label for="nombre">Name</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-floating mb-3">
                        <input
                            required
                            type="text"
                            class="form-control"
                            name="surname"
                            placeholder="Pepe"
                        />
                        <label for="apellidos">Surname</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-floating mb-3">
                        <input
                            required
                            type="text"
                            class="form-control"
                            name="username"
                            placeholder="Pepe"
                        />
                        <label for="username">Username</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-floating mb-3">
                        <input
                            required
                            type="email"
                            class="form-control"
                            name="mail"
                            placeholder="Pepe@macario.com"
                        />
                        <label for="mail">Mail</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-floating mb-3">
                        <input
                            required
                            type="password"
                            class="form-control"
                            name="password"
                            placeholder="Pepe"
                        />
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-floating mb-3">
                        <input
                            required
                            type="date"
                            class="form-control"
                            name="birthday"
                            placeholder="Pepe"
                        />
                        <label for="birthday">Birth date</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
    </body>
</html>
@endsection
