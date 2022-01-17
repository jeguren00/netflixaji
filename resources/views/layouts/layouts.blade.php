<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>@yield('title')</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #000000;
            height: 100vh;
        }
        .nav-item:hover {
            background-color: red;
        }
        .foot-item:hover {
            color: red;
        }
    </style>
</head>
<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="{{ url('/home') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">   
                    <img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/fa314a/external-movie-cinema-kiranshastry-solid-kiranshastry-3.png"/>
                    <span class="fs-4">StreamingAJI</span>
                </a>

                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="{{ url('/home#general') }}" class="nav-link text-white" aria-current="page">Inicio</a></li>
                    <li class="nav-item"><a href="{{ url('/home#peliculas') }}" class="nav-link text-white">Películas</a></li>
                    <li class="nav-item"><a href="{{ url('/home#series') }}" class="nav-link text-white">Series</a></li>
                    <!--<li class="nav-item"><a href="{{ url('/home') }}" class="nav-link text-white">Mis favoritas</a></li>-->
                    <!--in case user hasn't logged in -->
                    @guest
                    <li class="nav-item"><a href="{{ url('/start') }}" class="nav-link text-white">Entrar</a></li>
                    @endguest

                    <!--in case user has logged in -->
                    @auth
                    <li class="nav-item"><a class="nav-link text-white">Hola (username)</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white">Salir</a></li>
                    @endauth
                    <!--<li class="nav-item"><a href="{{ url('/user/viewData') }}" class="nav-link text-white">Mi perfil</a></li>-->
                </ul>
            </div>
            <br>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Genres</button>
                    <div class="dropdown-menu">
                    @forelse ($generes as $genere)
                        <a class="dropdown-item" href="/search/{{$genere->name}}">{{$genere->name}}</a>
                    @empty
                        <p>No hay generos</p>
                    @endforelse
                    </div>
                </div>
                <form method="POST" action="/search">
                    {{ csrf_field() }}
                    <input type="text" name="searchBox" aria-label="Text input with dropdown button"><input type="submit" value="Buscar" class="btn btn-primary"></input>
                </form>
            </div>
        </div>  
    </header>

    @yield('content')

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">&copy; 2021 Company, Inc</p>

            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/fa314a/external-movie-cinema-kiranshastry-solid-kiranshastry-3.png"/>
            </a>

            <ul class="nav nav-pills">
                    <li class="nav-item"><a href="{{ url('/home#general') }}" class="nav-link text-white" aria-current="page">Inicio</a></li>
                    <li class="nav-item"><a href="{{ url('/home#peliculas') }}" class="nav-link text-white">Películas</a></li>
                    <li class="nav-item"><a href="{{ url('/home#series') }}" class="nav-link text-white">Series</a></li>
                    <!--<li class="nav-item"><a href="{{ url('/home') }}" class="nav-link text-white">Mis favoritas</a></li>-->
                    <!--in case user hasn't logged in -->
                    @guest
                    <li class="nav-item"><a href="{{ url('/start') }}" class="nav-link text-white">Entrar</a></li>
                    @endguest

                    <!--in case user has logged in -->
                    @auth
                    <li class="nav-item"><a class="nav-link text-white">Hola (username)</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white">Salir</a></li>
                    @endauth
                    <!--<li class="nav-item"><a href="{{ url('/user/viewData') }}" class="nav-link text-white">Mi perfil</a></li>-->
                </ul>
        </footer>
    </div>

    </body>
</html>