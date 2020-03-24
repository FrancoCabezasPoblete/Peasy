<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!--El conjunto de caracteres usado, Ej: UTF-8 tiene caracteres universales-->
    <title>Peasy</title> <!-- Cambia el titulo del sitio! -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="Bootstrap_4.11/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/principal.css">
    <link rel="icon" href="img/favicon.ico" type="image/ico">
</head>
<body>
    <div class="container">
        <!-- header vaporwave -->
        <div class="row">
            <img src="img/header.png" alt="vaporwave" id="header" class="center col">
        </div>
        <ul class="borde-pag-completa">
            <!-- navbar -->
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #48146d;">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="position-relative" id="pos_logo">
                            <img src="img/logo.png" class="mx-auto img-fluid" id="logo">
                        </div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" id="casa" href="#"><img src="img/house%202.png" width="10px" height="auto" class="icono">H O M E<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" onmouseover="hoverContacto(this);" onmouseout="unhoverContacto(this);" id="contactanos"><img src="img/mail%201.png"  width="10px" height="auto" id="mailsito" class="icono">C O N T A C T A N O S</a>
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
            <!-- carousel -->
            <div class="row">
                <div id="carouselExampleCaptions" class="carousel slide carousel-fade col" data-ride="carousel" style="z-index: 0;">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/img1.png" class="d-block w-100" alt="GamingSetup1">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><strong>Peasy</strong> te ofrece</h5>
                                <p class="texto-carousel">un set-up adecuado al presupuesto <strong>tú</strong> escoges</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/img2.png" class="d-block w-100" alt="GamingSetup2">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><strong>Peasy</strong> te ofrece</h5>
                                <p class="texto-carousel">variados set-up que se acomodan a las distintas necesidades y gustos</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/img3.png" class="d-block w-100" alt="GamingSetup3">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><strong>Peasy</strong> te ofrece</h5>
                                <p class="texto-carousel">los mejores precios del mercado</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
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
    <script src="script/principal.js"></script>
</body>
</html>