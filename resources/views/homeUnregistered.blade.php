<!DOCTYPE html>
<html>
<head>
  <title>StreamingAJI</title>

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Custom styles for this template -->
  <link href="../css/cover.css" rel="stylesheet">
  <style>
    /* #background-video {
      width: 100vw;
      height: 100vh;
      object-fit: cover;
      position: fixed;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
      z-index: -1;
    } */

    footer {
      position: absolute;
      bottom: 0;
      right: 42vw;
    }

    body {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: space-evenly;
      background: rgb(203,0,0);
background: radial-gradient(circle, rgba(203,0,0,1) 0%, rgba(150,4,4,1) 57%, rgba(36,0,0,1) 100%);
    }

    video {
      position: absolute;
      top: 0;
      right: 0;
      z-index: 36;

    }


  </style>

</head>

<body class="text-center">
  
  <main role="main" class="inner cover">
    <h1 class="cover-heading">StreamingAJI</h1>
    <p class="lead">Pelis y series a tutiplén</p>
    <p class="lead">
      <a href="{{ url('/register') }}" class="btn btn-lg btn-dark">Regístrate</a>
      <a href="{{ url('/login') }}" class="btn btn-lg btn-dark">Entra</a>
    </p>
  </main>
 


  </div>
  <footer>
    <p>Desarrollado con ♥ por Jordi, Ignasi y Adán</p>
  </footer>

  
</body>

</html>