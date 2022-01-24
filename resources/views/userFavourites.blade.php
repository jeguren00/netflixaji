@extends('layouts/layouts')
@section('title', 'Favourites')

@section('content')
<h2 class="cover-heading">Tus favoritos</h2>
<div class="container">
    <div class="row">
        <h1 id="general">Favoritas</h1>
        @forelse ($videos as $video)
            <div class="col col-4 d-flex flex-wrap mt-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $video->image }}" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title">{{ $video->title }}</h3>
                        <p class="card-text">{{ $video->sinopsis }}</p>
                        @if ($video->type === "serie")
                            <a href="/chapters?id={{ $video->idVideo }}" class="btn btn-primary">Ver serie</a>
                        @else
                            <a href="/stream?id={{ $video->idVideo }}" class="btn btn-primary">Ver película</a>
                        @endif
                        <a href="/deleteFavourite?id={{ $video->idVideo }}" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            </div>
        @empty
            <p>No hay videos en favoritos</p>
        @endforelse
    </div>        
</div>
@endsection