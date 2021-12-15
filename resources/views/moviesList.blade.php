@extends('layouts/layouts')
@section('title', 'Movies')

@section('content')
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <video class="img-fluid w-100" style="height: 50em" autoplay loop muted>
                <source src="trailerInterstellar.mp4" type="video/mp4" />
            </video>

            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Título peli 1</h1>
                    <p class="w-50">
                        Descripción. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </p>
                    <p><a class="btn btn-lg btn-danger" href="#">Ver película</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <video class="img-fluid w-100" style="height: 50em" autoplay loop muted>
                <source src="trailerInterstellar.mp4" type="video/mp4" />
            </video>

            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Título peli 2</h1>
                    <p class="w-50">
                        Descripción. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </p>
                    <p><a class="btn btn-lg btn-danger" href="#">Ver película</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <video class="img-fluid w-100" style="height: 50em" autoplay loop muted>
                <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
            </video>

            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Título peli 3</h1>
                    <p class="w-50">
                        Descripción. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </p>
                    <p><a class="btn btn-lg btn-danger" href="#">Ver película</a></p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Movies Carousel -->
<div class="container">
    <div class="row">
        <div class="col col-4 d-flex flex-wrap mt-5">    
            <h1 class="text-dark">American History X</h1>
            <img src="../img/american_historyX.jpg" style="height: 500px;
                                                        background-repeat: no-repeat;
                                                        background-position: center;
                                                        background-size: cover;">
            <p>Descripción</p>
        </div>
        <div class="col col-4 d-flex flex-wrap mt-5">    
            <h1 class="text-dark">El Efecto Mariposa</h1>
            <img src="../img/efecto_mariposa.jpg" style="height: 500px;
                                                        background-repeat: no-repeat;
                                                        background-position: center;
                                                        background-size: cover;">
            <p>Descripción</p>
        </div>
        <div class="col col-4 d-flex flex-wrap mt-5">    
            <h1 class="text-dark">El Club de la Lucha</h1>
            <img src="../img/club_de_la_lucha.jpg" style="height: 500px;
                                                        background-repeat: no-repeat;
                                                        background-position: center;
                                                        background-size: cover;">
            <p>Descripción</p>
        </div>
    </div>
    <div class="row">
        <div class="col col-4 d-flex flex-wrap mt-5">    
            <h1 class="text-dark">Peli 4</h1>
            <p>Descripción</p>
        </div>
        <div class="col col-4 d-flex flex-wrap mt-5">    
            <h1 class="text-dark">Peli 5</h1>
            <p>Descripción</p>
        </div>
        <div class="col col-4 d-flex flex-wrap mt-5">    
            <h1 class="text-dark">Peli 6</h1>
            <p>Descripción</p>
        </div>
    </div>        
</div>

<!--
<div class="container">
    <div class="row">
        <div id="carouselMovies" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="1000">
                    <div class="card bg-danger d-block w-100">
                        <img src="..." class="card-img-top">
                        <div class="card-body">
                            <h1 class="card-title">Hola</h1>
                            <p class="card-text">vsfdsfvf</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-interval="1000">
                    <div class="card bg-primary d-block w-100">
                        <img src="..." class="card-img-top">
                        <div class="card-body">
                            <h1 class="card-title">Hocvdasvfsla</h1>
                            <p class="card-text">vsfdsfvf</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-interval="1000">
                    <div class="card bg-black d-block w-100">
                        <img src="..." class="card-img-top">
                        <div class="card-body">
                            <h1 class="card-title">Hovsfdsfvla</h1>
                            <p class="card-text">vsfdsfvf</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
-->
            <!-- Carousel controls -->
<!--
            <button class="carousel-control-prev" data-bs-target="#carouselMovies" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" data-bs-target="#carouselMovies" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
        <div class="col col-3 m-2">
            <div class="card bg-danger">
                <img src="..." class="card-img-top">
                <div class="card-body">
                    <h1 class="card-title">Hola</h1>
                    <p class="card-text">vsfdsfvf</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col col-3 m-2">
            <div class="card bg-primary">
                <img src="..." class="card-img-top">
                <div class="card-body">
                    <h1 class="card-title">Hola</h1>
                    <p class="card-text">vsfdsfvf</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col col-3 m-2">
            <div class="card bg-black">
                <img src="..." class="card-img-top">
                <div class="card-body">
                    <h1 class="card-title">Hola</h1>
                    <p class="card-text">vsfdsfvf</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<!-- <div id="carousel2" class="container mt-5 mb-5">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel slide">
        <div class="carousel-item active">
            <div class="row">
                <div class="col col-4">
                    <h1>vcwsgvfd</h1>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col col-4">
                    <h1>vcwsgvfd</h1>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col col-4">
                    <h1>vcwsgvfd</h1>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div> -->


@endsection