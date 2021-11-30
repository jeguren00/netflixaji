@include('layouts/header')

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <video class="img-fluid w-100" autoplay loop muted>
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
            <video class="img-fluid" autoplay loop muted>
                <source src="trailerInterstellar.mp4" type="video/mp4" />
            </video>

            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Título peli 2</h1>
                    <p>
                        Descripción. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </p>
                    <p><a class="btn btn-lg btn-danger" href="#">Ver película</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <video class="img-fluid" autoplay loop muted>
                <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
            </video>

            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Título peli 3</h1>
                    <p>
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

@include('layouts/footer')