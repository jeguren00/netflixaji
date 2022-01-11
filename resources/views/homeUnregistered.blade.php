@extends('layouts/layouts')
@section('title', 'Movies')

@section('content')
    <title>StreamingAJI</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="../css/cover.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <video id="background-video" autoplay loop muted>
      <source src="../../public/img/Film - 9615.mp4" type="video/mp4">
    </video>
      <main role="main" class="inner cover">
        <h1 class="cover-heading">StreamingAJI</h1>
        <p class="lead">Pelis y series a tutiplén</p>
        <p class="lead">
          <a href="{{ url('/register') }}" class="btn btn-lg btn-secondary">Regístrate</a>
          <a href="{{ url('/login') }}" class="btn btn-lg btn-secondary">Entra</a>
        </p>
      </main>


    </div>

    @endsection
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
