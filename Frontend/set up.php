<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!--El conjunto de caracteres usado, Ej: UTF-8 tiene caracteres universales-->
    <title>Peasy - Set-up</title> <!-- Cambia el titulo del sitio! -->
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
            <div class="media position-relative border mt-2 mb-2 mx-auto" style="width: 60rem; min-height: 11rem;">
                <img src="img/ejemplo4.png" class="col-2 mt-auto mb-auto" alt="..." style="width: 14%;"> 
                <div class="media-body col-10">
                    <h5 class="titulo-carta mt-2 ml-3">DeepCool GamerStorm Quadstellar</h5>
                    <h3 class="text-muted ml-3">$339.990</h3>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Formato: </b> 
                        Extended ATX <br>
                        <b>Fuente de poder: </b> 
                        No posee <br>
                        <b>Ubicación fuente de poder: </b>
                        Inferior
                    </p>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Panel lateral: </b> 
                        Vidrio templado<br>
                        <b>Ventiladores incluidos: </b> 
                        5 x 120 mm
                    </p>
                <a href="#" class="stretched-link text-monospace col-3 mb-auto mt-auto"  style="float:right;">ɪʀ ᴀ ʟᴀ ᴘᴀɢɪɴᴀ﹥</a>
                </div>
              </div>
              <div class="media position-relative border mt-2 mb-2 mx-auto" style="width: 60rem; min-height: 11rem;">
                <img src="img/ejemplo5.png" class="col-2 mt-auto mb-auto" alt="..." style="width: 14%;"> 
                <div class="media-body col-10">
                    <h5 class="titulo-carta mt-2 ml-3">Intel Core i9-9960X</h5>
                    <h3 class="text-muted ml-3">$1.899.990</h3>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Frecuencia: </b> 
                        3100 - 4400 MHz <br>
                        <b>Núcleos: </b> 
                        16 <br>
                        <b>Socket: </b>
                        LGA 2066
                    </p>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Cache: </b> 
                        16 x 1MB L2 / 16 x 1MB L3<br>
                        <b>Arquitectura: </b> 
                        Intel Skylake-X
                    </p>
                <a href="#" class="stretched-link text-monospace col-3 mb-auto mt-auto" style="float:right;">ɪʀ ᴀ ʟᴀ ᴘᴀɢɪɴᴀ﹥</a>
                </div>
              </div>
            <div class="media position-relative border mt-2 mb-2 mx-auto" style="width: 60rem; min-height: 11rem;">
                <img src="img/ejemplo6.png" class="col-2 mt-auto mb-auto" alt="..." style="width: 14%;"> 
                <div class="media-body col-10">
                    <h5 class="titulo-carta mt-2 ml-3">Galax RTX 2080Ti HOF </h5>
                    <h3 class="text-muted ml-3">$1.449.990</h3>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>GPU: </b> 
                        NVIDIA GeForce RTX 2080 Ti <br>
                        <b>Memoria: </b> 
                        11 GB GDDR6 (352 bit) <br>
                        <b>Frecuencias: </b>
                        1350 MHz core / 1750 MHz memorias
                    </p>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Bus: </b> 
                        PCI Express 3.0 x16<br>
                    </p>
                <a href="#" class="stretched-link text-monospace col-3 mb-auto mt-auto" style="float:right;">ɪʀ ᴀ ʟᴀ ᴘᴀɢɪɴᴀ﹥</a>
                </div>
              </div>
              <div class="media position-relative border mt-2 mb-2 mx-auto" style="width: 60rem; min-height: 11rem;">
                <img src="img/ejemplo13.png" class="col-2 mt-auto mb-auto" alt="..." style="width: 14%;"> 
                <div class="media-body col-10">
                    <h5 class="titulo-carta mt-2 ml-3">Antec High Current Pro HCP-1300 (1300 W)</h5>
                    <h3 class="text-muted ml-3">$220.956</h3>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Potencia: </b> 
                        1300 W <br>
                        <b>Certificación: </b> 
                        80PLUS Platinum <br>
                        <b>Corriente 12V: </b>
                        Desconocido
                    </p>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Modular: </b> 
                        Sí<br>
                        <b>PFC activo: </b> 
                        Sí
                    </p>
                <a href="#" class="stretched-link text-monospace col-3 mb-auto mt-auto" style="float:right;">ɪʀ ᴀ ʟᴀ ᴘᴀɢɪɴᴀ﹥</a>
                </div>
              </div>
              <div class="media position-relative border mt-2 mb-2 mx-auto" style="width: 60rem; min-height: 11rem;">
                <img src="img/ejemplo14.png" class="col-2 mt-auto mb-auto" alt="..." style="width: 14%;"> 
                <div class="media-body col-10">
                    <h5 class="titulo-carta mt-2 ml-3">Gigabyte Z390 AORUS MASTER</h5>
                    <h3 class="text-muted ml-3">$357.256</h3>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Socket: </b> 
                        LGA 1151-v2 <br>
                        <b>Chipset: </b> 
                        Intel Z390 (LGA 1151-v2) <br>
                        <b>Memorias: </b>
                        4x DDR4
                    </p>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Formato: </b> 
                        ATX
                    </p>
                <a href="#" class="stretched-link text-monospace col-3 mb-auto mt-auto" style="float:right;">ɪʀ ᴀ ʟᴀ ᴘᴀɢɪɴᴀ﹥</a>
                </div>
              </div>
              <div class="media position-relative border mt-2 mb-2 mx-auto" style="width: 60rem; min-height: 11rem;">
                <img src="img/ejemplo15.png" class="col-2 mt-auto mb-auto" alt="..." style="width: 14%;"> 
                <div class="media-body col-10">
                    <h5 class="titulo-carta mt-2 ml-3">Dell AA601616</h5>
                    <h3 class="text-muted ml-3">$824.500</h3>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Capacidad: </b> 
                        1 x 32GB <br>
                        <b>Tipo: </b> 
                        DDR4 <br>
                        <b>Frecuencia: </b>
                        2933 MHz
                    </p>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Formato: </b> 
                        DIMM <br>
                        <b>Voltaje: </b> 
                        1.20 V
                    </p>
                <a href="#" class="stretched-link text-monospace col-3 mb-auto mt-auto" style="float:right;">ɪʀ ᴀ ʟᴀ ᴘᴀɢɪɴᴀ﹥</a>
                </div>
              </div>
              <div class="media position-relative border mt-2 mb-2 mx-auto" style="width: 60rem; min-height: 11rem;">
                <img src="img/ejemplo16.png" class="col-2 mt-auto mb-auto" alt="..." style="width: 14%;"> 
                <div class="media-body col-10">
                    <h5 class="titulo-carta mt-2 ml-3">Toshiba X300 Performance 14 TB </h5>
                    <h3 class="text-muted ml-3">$569.477</h3>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Tipo: </b> 
                        HDD <br>
                        <b>Capacidad: </b> 
                        14 TB <br>
                        <b>RPM: </b>
                        7200 rpm
                    </p>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Tamaño: </b> 
                        3.5" <br>
                        <b>Bus: </b> 
                        SATA 3 (6.0 Gb/s)
                    </p>
                <a href="#" class="stretched-link text-monospace col-3 mb-auto mt-auto" style="float:right;">ɪʀ ᴀ ʟᴀ ᴘᴀɢɪɴᴀ﹥</a>
                </div>
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
    <script src="script/busqueda.js"></script>
</body>
</html>