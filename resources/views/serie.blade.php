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
        <div class="row m-5">
            @for ($i = 1; $i <= $seasons; $i++)
                <h1 class="mt-5">Temporada {{ $i }}</h1>
                @forelse ($chapters as $chapter)
                    @if ($chapter->chapter != 0 && $chapter->season == $i)
                        <div class="col col-4 d-flex flex-wrap mt-5">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="{{ $chapter->image }}" alt="Card image cap">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $chapter->title }}</h3>
                                    <p>
                                        Capítulo: {{ $chapter->chapter }}
                                    </p>
                                    <p class="card-text">{{ $chapter->sinopsis }}</p>
                                    <a href="/stream?id={{ $chapter->idVideo }}" class="btn btn-primary">Ver capítulo</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <p>No hay capítulos</p>
                @endforelse
            @endfor
        </div>
    </body>
</html>
@endsection