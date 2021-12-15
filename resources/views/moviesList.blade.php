@extends('layouts/layouts')
@section('title', 'Movies')

@section('content')
<?php
//var_dump($videos);
?>
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
    @forelse ($videos as $video)
        <div class="col col-4 d-flex flex-wrap mt-5">    
            <h1 class="text-dark">{{$video->title}}</h1>
            <img src="{{$video->image}}">
            <p>Descripción</p>
        </div>
    @empty
        <p>No hay videos</p>
    @endforelse
    </div>        
</div>
<!--
       <div class="col col-4 d-flex flex-wrap mt-5">    
            <h1 class="text-dark">Peli 5</h1>
            <p>Descripción</p>
        </div>
        <div class="col col-4 d-flex flex-wrap mt-5">    
            <h1 class="text-dark">Peli 6</h1>
            <p>Descripción</p>
        </div> type="button" class="btn btn-lg btn-default">button</        <div class="col col-4 d-flex flex-wrap mt-5">    
            <h1 class="text-dark">Peli 5</h1>
            <p>Descripción</p>
        </div>
        <div class="col col-4 d-flex flex-wrap mt-5">    
            <h1 class="text-dark">Peli 6</h1>
            <p>Descripción</p>
        </div>>
    
-->
@endsection