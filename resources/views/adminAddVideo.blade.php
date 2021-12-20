@extends('layouts/layouts')
@section('title', 'Add Movie')

@section('content')
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
@endsection
