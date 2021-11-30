<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css " rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js "></script>
    <style>
    body {
        background: #eee
    }

    .card {
        border: none;
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        cursor: pointer
    }
    
    .fonts {
        font-size: 11px
    }

    .social-list {
        display: flex;
        list-style: none;
        justify-content: center;
        padding: 0
    }

    .social-list li {
        padding: 10px;
        color: #8E24AA;
        font-size: 19px
    }

    .buttons button:nth-child(1) {
        border: 1px solid #8E24AA !important;
        color: #8E24AA;
        height: 40px
    }

    .buttons button:nth-child(1):hover {
        border: 1px solid #8E24AA !important;
        color: #fff;
        height: 40px;
        background-color: #8E24AA
    }

    .buttons button:nth-child(2) {
        border: 1px solid #8E24AA !important;
        background-color: #8E24AA;
        color: #fff;
        height: 40px
    }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
            <h5 class="mt-2 mb-0 text-center">StreamingAJI</h5>
            <br>
                <div class="card p-3 py-4">
                    <div class="container">
                        <div class="row form-group">
                            <h5 class="col-sm">Name: </h5>
                            <p class="col-sm sticky-left">actual value</p>
                            <input type="text" class="w-25 col-sm"></input>
                        </div>
                        <br>
                        <div class="row form-group">
                            <h5 class="col-sm">Surname: </h5>
                            <p class="col-sm sticky-left">actual value</p>
                            <input type="text" class="w-25 col-sm"></input>
                        </div>
                        <br>
                        <div class="row form-group">
                            <h5 class="col-sm">Username: </h5>
                            <p class="col-sm sticky-left">actual value</p>
                            <input type="text" class="w-25 col-sm"></input>
                        </div>
                        <br>
                        <div class="row form-group">
                            <h5 class="col-sm">Email: </h5>
                            <p class="col-sm sticky-left">actual value</p>
                            <input type="text" class="w-25 col-sm"></input>
                        </div>
                        <br>
                        <div class="row form-group">
                            <h5 class="col-sm">Password: </h5>
                            <p class="col-sm sticky-left">actual value</p>
                            <input type="password" class="w-25 col-sm"></input>
                        </div>
                        <br>
                        <div class="row form-group">
                            <h5 class="col-sm">Birth date: </h5>
                            <p class="col-sm sticky-left">actual value</p>
                            <input type="date" class="w-25 col-sm"></input>
                        </div>
                        <br>
                        <button class="btn btn-outline-primary mt-2">Guardar cambios</button>
                        <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>