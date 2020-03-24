<?php
include_once 'conexion.php';

$str_var = $_GET['setup'];
$setup = unserialize(base64_decode($str_var));

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!--El conjunto de caracteres usado, Ej: UTF-8 tiene caracteres universales-->
    <title>Peasy - Set-up</title> <!-- Cambia el titulo del sitio! -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="Bootstrap_4.11/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/set up.css">
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
                            <form class="form-inline" id="lupa" action="busqueda.php" method="GET">
                                <input class="form-control mr-sm-2" type="text" placeholder="ᴇꜱᴄʀɪʙᴇ ᴛᴜ ʙᴜᴅɢᴇᴛ ᴀᴄᴀ!" aria-label="search" id="boton-buscar" name="budget" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                                <input class="form-control" type="hidden" name="pagina" value="1">
                                <div><button class="btn" onmouseover="hoverLupa(this);" onmouseout="unhoverLupa(this);" type="submit"><img src="img/lupa%201.png" id="lupita" class="icono_lupa"></button></div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
    <!-- card -->
        <div class="fondo-cuadrado row">
            <div class="media position-relative border mt-2 mb-2 mx-auto" style="width: 60rem; min-height: 11rem;">
                <img src="<?php echo $setup['gab']['imagen'] ?>" class="col-2 mt-auto mb-auto" alt="..." style="width: 14%;"> 
                <div class="media-body col-10">
                    <h5 class="titulo-carta mt-2 ml-3"><?php echo $setup['gab']['nombre'] ?></h5>
                    <h3 class="text-muted ml-3">$<?php echo number_format($setup['gab']['precio'], 0, ',', '.') ?></h3>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Formato: </b> 
                        <?php echo $setup['gab']['formato'] ?> <br>
                        <b>Fuente de poder: </b> 
                        <?php echo $setup['gab']['fuentepoder'] ?><br>
                        <b>Ubicación fuente de poder: </b>
                        <?php echo $setup['gab']['ubfuente'] ?>
                    </p>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Panel lateral: </b> 
                        <?php echo $setup['gab']['panellateral'] ?><br>
                    </p>
                <a href="<?php echo $setup['gab']['link'] ?>" class="stretched-link text-monospace col-3 mb-auto mt-auto"  style="float:right;">ɪʀ ᴀ ʟᴀ ᴘᴀɢɪɴᴀ﹥</a>
                </div>
              </div>
              <div class="media position-relative border mt-2 mb-2 mx-auto" style="width: 60rem; min-height: 11rem;">
                <img src="<?php echo $setup['cpu']['imagen'] ?>" class="col-2 mt-auto mb-auto" alt="..." style="width: 14%;"> 
                <div class="media-body col-10">
                    <h5 class="titulo-carta mt-2 ml-3"><?php echo $setup['cpu']['nombre'] ?></h5>
                    <h3 class="text-muted ml-3">$<?php echo number_format($setup['cpu']['precio'], 0, ',', '.') ?></h3>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Frecuencia: </b> 
                        <?php echo $setup['cpu']['frecuencia'] ?><br>
                        <b>Núcleos: </b> 
                        <?php echo $setup['cpu']['nucleos'] ?><br>
                        <b>Socket: </b>
                        <?php echo $setup['cpu']['socket'] ?>
                    </p>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Cache: </b> 
                        <?php echo $setup['cpu']['cache'] ?><br>
                        <b>Puntuacion Benchmark: </b> 
                        <?php echo $setup['cpu']['benchmark'] ?><br>
                        <b>Arquitectura: </b> 
                        <?php echo $setup['cpu']['arquitectura'] ?>
                    </p>
                <a href="<?php echo $setup['cpu']['link'] ?>" class="stretched-link text-monospace col-3 mb-auto mt-auto" style="float:right;">ɪʀ ᴀ ʟᴀ ᴘᴀɢɪɴᴀ﹥</a>
                </div>
              </div>
            <div class="media position-relative border mt-2 mb-2 mx-auto" style="width: 60rem; min-height: 11rem;">
                <img src="<?php echo $setup['gpu']['imagen'] ?>" class="col-2 mt-auto mb-auto" alt="..." style="width: 14%;"> 
                <div class="media-body col-10">
                    <h5 class="titulo-carta mt-2 ml-3"><?php echo $setup['gpu']['nombre'] ?></h5>
                    <h3 class="text-muted ml-3">$<?php echo number_format($setup['gpu']['precio'], 0, ',', '.') ?></h3>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>GPU: </b> 
                        <?php echo $setup['gpu']['gpu'] ?><br>
                        <b>Memoria: </b> 
                        <?php echo $setup['gpu']['memoria'] ?><br>
                        <b>Frecuencias: </b>
                        <?php echo $setup['gpu']['frecuencia'] ?>
                    </p>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Bus: </b> 
                        <?php echo $setup['gpu']['bus'] ?><br>
                    </p>
                <a href="<?php echo $setup['gpu']['link'] ?>" class="stretched-link text-monospace col-3 mb-auto mt-auto" style="float:right;">ɪʀ ᴀ ʟᴀ ᴘᴀɢɪɴᴀ﹥</a>
                </div>
              </div>
              <?php if($setup['gab']['ubfuente'] != "No posee"): ?>
              <div class="media position-relative border mt-2 mb-2 mx-auto" style="width: 60rem; min-height: 11rem;">
                <img src="<?php echo $setup['psu']['imagen'] ?>" class="col-2 mt-auto mb-auto" alt="..." style="width: 14%;"> 
                <div class="media-body col-10">
                    <h5 class="titulo-carta mt-2 ml-3"><?php echo $setup['psu']['nombre'] ?></h5>
                    <h3 class="text-muted ml-3">$<?php echo number_format($setup['psu']['precio'], 0, ',', '.') ?></h3>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Potencia: </b> 
                        <?php echo $setup['psu']['potencia'] ?><br>
                        <b>Certificación: </b> 
                        <?php echo $setup['psu']['certificacion'] ?><br>
                    </p>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Modular: </b> 
                        <?php echo $setup['psu']['modular'] ?><br>
                        <b>PFC activo: </b> 
                        <?php echo $setup['psu']['pcf'] ?>
                    </p>
                <a href="<?php echo $setup['psu']['link'] ?>" class="stretched-link text-monospace col-3 mb-auto mt-auto" style="float:right;">ɪʀ ᴀ ʟᴀ ᴘᴀɢɪɴᴀ﹥</a>
                </div>
              </div>
              <?php endif ?>
              <div class="media position-relative border mt-2 mb-2 mx-auto" style="width: 60rem; min-height: 11rem;">
                <img src="<?php echo $setup['placa']['imagen'] ?>" class="col-2 mt-auto mb-auto" alt="..." style="width: 14%;"> 
                <div class="media-body col-10">
                    <h5 class="titulo-carta mt-2 ml-3"><?php echo $setup['placa']['nombre'] ?></h5>
                    <h3 class="text-muted ml-3">$<?php echo number_format($setup['placa']['precio'], 0, ',', '.') ?></h3>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Socket: </b> 
                        <?php echo $setup['placa']['socket'] ?><br>
                        <b>Chipset: </b> 
                        <?php echo $setup['placa']['chipset'] ?><br>
                        <b>Memorias: </b>
                        <?php echo $setup['placa']['memorias'] ?>
                    </p>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Formato: </b> 
                        <?php echo $setup['placa']['formato'] ?>
                    </p>
                <a href="<?php echo $setup['placa']['link'] ?>" class="stretched-link text-monospace col-3 mb-auto mt-auto" style="float:right;">ɪʀ ᴀ ʟᴀ ᴘᴀɢɪɴᴀ﹥</a>
                </div>
              </div>
              <div class="media position-relative border mt-2 mb-2 mx-auto" style="width: 60rem; min-height: 11rem;">
                <img src="<?php echo $setup['ram']['imagen'] ?>" class="col-2 mt-auto mb-auto" alt="..." style="width: 14%;"> 
                <div class="media-body col-10">
                    <h5 class="titulo-carta mt-2 ml-3"><?php echo $setup['ram']['nombre'] ?></h5>
                    <h3 class="text-muted ml-3">$<?php echo number_format($setup['ram']['precio'], 0, ',', '.') ?></h3>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Capacidad: </b> 
                        <?php echo $setup['ram']['capacidad'] ?> <br>
                        <b>Tipo: </b> 
                        <?php echo $setup['ram']['tipo'] ?><br>
                        <b>Frecuencia: </b>
                        <?php echo $setup['ram']['frecuencia'] ?>
                    </p>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Formato: </b> 
                        <?php echo $setup['ram']['formato'] ?><br>
                        <b>Voltaje: </b> 
                        <?php echo $setup['ram']['voltaje'] ?>
                    </p>
                <a href="<?php echo $setup['ram']['link'] ?>" class="stretched-link text-monospace col-3 mb-auto mt-auto" style="float:right;">ɪʀ ᴀ ʟᴀ ᴘᴀɢɪɴᴀ﹥</a>
                </div>
              </div>
              <div class="media position-relative border mt-2 mb-2 mx-auto" style="width: 60rem; min-height: 11rem;">
                <img src="<?php echo $setup['almacenamiento']['imagen'] ?>" class="col-2 mt-auto mb-auto" alt="..." style="width: 14%;"> 
                <div class="media-body col-10">
                    <h5 class="titulo-carta mt-2 ml-3"><?php echo $setup['almacenamiento']['nombre'] ?></h5>
                    <h3 class="text-muted ml-3">$<?php echo number_format($setup['almacenamiento']['precio'], 0, ',', '.') ?></h3>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Tipo: </b> 
                        <?php echo $setup['almacenamiento']['tipo'] ?><br>
                        <b>Capacidad: </b> 
                        <?php echo $setup['almacenamiento']['capacidad'] ?><br>
                        <b>RPM: </b>
                        <?php echo $setup['almacenamiento']['rpm'] ?>
                    </p>
                    <p class="descripcion-carta ml-3 col-4" style="float:left; font-size:80%;">
                        <b>Tamaño: </b> 
                        <?php echo $setup['almacenamiento']['tamano'] ?><br>
                        <b>Bus: </b> 
                        <?php echo $setup['almacenamiento']['bus'] ?>
                    </p>
                <a href="<?php echo $setup['almacenamiento']['link'] ?>" class="stretched-link text-monospace col-3 mb-auto mt-auto" style="float:right;">ɪʀ ᴀ ʟᴀ ᴘᴀɢɪɴᴀ﹥</a>
                </div>
              </div>
        </div>
        </ul>
    </div>
    <!--Bootstrap JS-->
    <script src="script/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="Bootstrap_4.11/js/bootstrap.min.js"></script>
    <script src="script/busqueda.js"></script>
</body>
</html>