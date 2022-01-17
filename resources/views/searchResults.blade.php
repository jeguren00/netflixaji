@extends('layouts/layouts')
@section('title', 'Search results')

@section('content')
        <div>
            <h2 class="text-center text-white">Resultados para {{ $searchPattern }}</h2>
        </div>

        <div class="container mt-5">
            <div class="row">
                <h1 id="peliculas">Películas</h1>
                @forelse ($movies as $peli)
                    <div class="col col-4 d-flex flex-wrap mt-5">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset($peli->image) }}" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">{{ $peli->title }}</h3>
                                <p class="card-text">{{ $peli->sinopsis }}</p>
                                <a href="#" class="btn btn-primary">Ver película</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No hay películas</p>
                @endforelse
            </div>
        </div>
        
        <div class="container mt-5">
            <div class="row">
                <h1 id="Series">Series</h1>
                @forelse ($series as $serie)
                    @if ($serie->season == 0 && $serie->chapter == 0)
                        <div class="col col-4 d-flex flex-wrap mt-5">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="{{ asset($peli->image) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $serie->title }}</h3>
                                    <p class="card-text">{{ $serie->sinopsis }}</p>
                                    <a href="#" class="btn btn-primary">Ver película</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <p>No hay Series</p>
                @endforelse
            </div>
        </div>
@endsection
