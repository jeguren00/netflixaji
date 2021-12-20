@extends('layouts/layouts')
@section('title', 'Search results')

@section('content')

    <body class="text-center">
        <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
            <header class="masthead mb-auto">
                <div class="inner">
                    <h3 class="masthead-brand">
                        <a href="home_sin_login.php">StreamingAJI</a>
                    </h3>
                    <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Películas</a>
            <a class="nav-link" href="#">Series</a>
            <a class="nav-link" href="#">Mi Perfil</a>
          </nav>
                </div>
            </header>
            <h2 class="cover-heading">Resultados para XXXX</h2>
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
                    <p>Desarrollado con ❤️ por Jordi, Ignasi y Adán</p>
                </div>
            </footer>
        </div>
    </body>
</html>
@endsection
