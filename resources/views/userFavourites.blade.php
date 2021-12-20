<!DOCTYPE html>
@extends('layouts/layouts')
@section('title', 'Movies')

@section('content')
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
            <h2 class="cover-heading">Tus favoritos</h2>
            <div class="container">
                <div class="d-flex flex-wrap">
                    <div style="height: 300px; width: 300px; background-color: red;" class="m-2">Peli</div>
                    <div style="height: 300px; width: 300px; background-color: red;" class="m-2">Peli</div>
                    <div style="height: 300px; width: 300px; background-color: red;" class="m-2">Peli</div>
                    <div style="height: 300px; width: 300px; background-color: red;" class="m-2">Peli</div>
                    <div style="height: 300px; width: 300px; background-color: red;" class="m-2">Peli</div>
                    

                  </div>
                  
            </div>
            <footer class="mastfoot mt-auto">
                <div class="inner">
                    <!--<p>Desarrollado con ❤️ por Jordi, Ignasi y Adán</p>-->
                </div>
            </footer>
        </div>
    </body>
</html>
@endsection