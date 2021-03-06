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
        @forelse ($videos as $video)
            @if ($video->idVideo == 1)
                <div class="carousel-item active">
            @else
                <div class="carousel-item">
            @endif
                <video class="img-fluid w-100" style="height: 50em" autoplay loop muted>
                    <source src="{{ $video->trailer }}" type="video/mp4" />
                </video>

                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>{{ $video->title }}</h1>
                        <p class="w-50">
                            {{ $video->sinopsis }}
                        </p>
                        <p><a class="btn btn-lg btn-danger" href="#">Ver película</a></p>
                    </div>
                </div>
            </div>
        @empty
            <div class="carousel-item">
                <p>No hay películas ni series actualmente</p>
            </div>
        @endforelse
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
<div class="container mt-5">   
    <div class="row">
        <h1 id="peliculas" class="text-white mt-5">Películas</h1>
        @forelse ($pelis as $peli)
        <div class="col col-4 d-flex flex-wrap mt-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ $peli->image }}" alt="Card image cap">
                <div class="card-body text-center">
                    <h3 class="card-title">{{ $peli->title }}</h3>
                    <p class="card-text">{{ $peli->sinopsis }}</p>
                    <a href="/stream?id={{ $peli->idVideo }}" class="btn btn-primary">Ver película</a>
                    <a href="/addFavourite?id={{ $peli->idVideo }}" class="btn btn-success">Me gusta</a>
                </div>
            </div>
        </div>
        @empty
            <p>No hay películas</p>
        @endforelse
    </div>   
    <div class="row">
        <h1 id="series">Series</h1>
        @forelse ($series as $serie)
            <div class="col col-4 d-flex flex-wrap mt-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $serie->image }}" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title">{{ $serie->title }}</h3>
                        <p class="card-text">{{ $serie->sinopsis }}</p>
                        <a href="/stream?id={{ $serie->idVideo }}" class="btn btn-primary">Ver serie</a>
                        <a href="/addFavourite?id={{ $serie->idVideo }}" class="btn btn-success">Me gusta</a>
                    </div>
                </div>
            </div>
        @empty
            <p>No hay series</p>
        @endforelse
    </div>     
</div>
@endsection