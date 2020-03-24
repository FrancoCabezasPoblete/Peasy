<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!--El conjunto de caracteres usado, Ej: UTF-8 tiene caracteres universales-->
    <title>Peasy - Set-ups</title> <!-- Cambia el titulo del sitio! -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="Bootstrap_4.11/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/busqueda.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/favicon.ico" type="image/ico">
</head>
<body>
    <!-- header vaporwave -->
    <div class="container">
        <div class="row">
            <img src="img/header.png" alt="vaporwave" id="header" class="center col">
        </div>
        <ul class="borde-pag-completa">
    <!-- navbar -->
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #48146d;">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="position-relative" id="pos_logo">
                            <img src="img/logo.png" class="mx-auto img-fluid" id="logo">
                        </div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html" onmouseover="hoverCasa(this);" onmouseout="unhoverCasa(this);" id="contactanos"><img src="img/house%201.png" width="10px" height="auto" id="casita" class="icono">H O M E</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" onmouseover="hoverContacto(this);" onmouseout="unhoverContacto(this);" id="contactanos"><img src="img/mail%201.png" width="10px" height="auto" id="mailsito" class="icono">C O N T A C T A N O S</a>
                                </li>
                            </div>
                            <form class="form-inline" id="lupa">
                                <input class="form-control mr-sm-2" type="search" placeholder="ᴇꜱᴄʀɪʙᴇ ᴛᴜ ʙᴜᴅɢᴇᴛ ᴀᴄᴀ!" aria-label="search" id="boton-buscar">
                                <div><button class="btn" onmouseover="hoverLupa(this);" onmouseout="unhoverLupa(this);" type="submit"><img src="img/lupa%201.png" id="lupita" class="icono_lupa"></button></div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
    <!-- card -->
        <div class="fondo-cuadrado row">
                <div class="card mx-auto rounded-0 mt-2" style="width: 16rem;">
                    <img src="img/ejemplo1.png" class="card-img-top" alt="...">
                    <div class="flex-column">
                        <img src="img/ejemplo2.png" class="card-img-left col" alt="..." style="width: 49%;">
                        <img src="img/ejemplo3.png" class="card-img-right col" alt="..." style="width: 49%;">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">$2.240.000</h5>
                      <p class="card-text">Óptimo para gaming</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Gamemax Expedition - Blue</li>
                      <li class="list-group-item">Gigabyte AORUS GeForce RTX 2080...</li>
                      <li class="list-group-item">Intel Core i9-9900KS</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary center rounded-0">ʀᴇᴠɪꜱᴀ ᴇʟ ꜱᴇᴛ-ᴜᴘ ᴀᴄᴀ!</a>
                    </div>
                </div>
                <div class="card mx-auto rounded-0 mt-2" style="width: 16rem;">
                    <img src="img/ejemplo4.png" class="card-img-top" alt="...">
                    <div class="flex-column">
                        <img src="img/ejemplo5.png" class="card-img-left col" alt="..." style="width: 49%;">
                        <img src="img/ejemplo6.png" class="card-img-right col" alt="..." style="width: 49%;">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">$3.125.000</h5>
                      <p class="card-text">Óptimo para gaming</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">DeepCool GamerStorm Quadstellar</li>
                      <li class="list-group-item">Galax RTX 2080Ti HOF</li>
                      <li class="list-group-item">Intel Core i9-9960X</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary center rounded-0">ʀᴇᴠɪꜱᴀ ᴇʟ ꜱᴇᴛ-ᴜᴘ ᴀᴄᴀ!</a>
                    </div>
                </div> 
                <div class="card mx-auto rounded-0 mt-2" style="width: 16rem;">
                    <img src="img/ejemplo7.png" class="card-img-top" alt="...">
                    <div class="flex-column">
                        <img src="img/ejemplo8.png" class="card-img-left col" alt="..." style="width: 49%;">
                        <img src="img/ejemplo9.png" class="card-img-right col" alt="..." style="width: 49%;">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">$1.891.000</h5>
                      <p class="card-text">Óptimo para gaming</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">NZXT Manta - Black Windowless</li>
                      <li class="list-group-item">ASUS ROG-STRIX-RXVEGA64-O8G...</li>
                      <li class="list-group-item">AMD Ryzen 7 3700X</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary center rounded-0">ʀᴇᴠɪꜱᴀ ᴇʟ ꜱᴇᴛ-ᴜᴘ ᴀᴄᴀ!</a>
                    </div>
                </div>
                <div class="card mx-auto rounded-0 mt-2" style="width: 16rem;">
                    <img src="img/ejemplo10.png" class="card-img-top" alt="...">
                    <div class="flex-column">
                        <img src="img/ejemplo11.png" class="card-img-left col" alt="..." style="width: 49%;">
                        <img src="img/ejemplo12.png" class="card-img-right col" alt="..." style="width: 49%;">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">$2.957.000</h5>
                      <p class="card-text">Óptimo para gaming</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Fractal Design Define S2 Vision RGB</li>
                      <li class="list-group-item">AMD Radeon PRO WX 7100</li>
                      <li class="list-group-item">Intel Core i7-9700</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary center rounded-0">ʀᴇᴠɪꜱᴀ ᴇʟ ꜱᴇᴛ-ᴜᴘ ᴀᴄᴀ!</a>
                    </div>
                </div>

    <!-- pagination -->
        <nav aria-label="Page navigation example" class="col">
            <ul class="pagination justify-content-center mt-2 mb-2">
              <li class="page-item">
                <a class="page-link rounded-0" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link rounded-0" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
        </ul>
    </div>
    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="Bootstrap_4.11/js/bootstrap.min.js"></script>
    <script src="script/busqueda.js"></script>
</body>
</html>