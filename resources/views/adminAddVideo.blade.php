<!DOCTYPE html>
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
            <h2 class="cover-heading">Introduce los datos del vídeo</h2>

            <form>

                <div class="form-group">
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            id="titulo"
                            placeholder="Amelie"
                        />
                        <label for="titulo">Título</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            id="duracion"
                            placeholder="Pepe@macario.com"
                        />
                        <label for="duracion">Duración</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            id="year"
                            placeholder="Pepe"
                        />
                        <label for="year">Año</label>
                    </div>
                </div>
                <div class="form-group">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Selecciona el género</option>
                        <option value="comedia">Comedia</option>
                        <option value="terror">Terror</option>
                        <option value="drama">Drama</option>
                        <option value="documental">Documental</option>
                        <option value="accion">Acción</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-floating mb-3">
                        <textarea id="sinopsis" class="form-control" aria-label="With textarea"></textarea>
                        <label for="sinopsis">Sinopsis</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile01">Imagen</label>
                    <input type="file" class="form-control" id="imagen">
                  </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile01">Video</label>
                    <input type="file" class="form-control" id="video">
                  </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Serie
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Película
                        </label>
                      </div>
                </div>
                <div class="form-group">
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            id="temporada"
                            placeholder="Pepe" disabled
                        />
                        <label for="temporada">Temporada</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            id="capitulo"
                            placeholder="Pepe" 
                            disabled
                        />
                        <label for="capitulo">Capítulo</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-secondary">Subir película</button>
            </form>
            <footer class="mastfoot mt-auto">
                <div class="inner">
                    <p>Desarrollado con ❤️ por Jordi, Ignasi y Adán</p>
                </div>
            </footer>
        </div>
    </body>
</html>
