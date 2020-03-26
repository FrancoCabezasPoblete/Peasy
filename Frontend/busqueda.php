<?php
include_once 'conexion.php';
$budget = $_GET['budget'];
if($budget < 150516){
    $budget = 150516;
} elseif($budget > 6155200){
    $budget = 6155200;
} elseif($budget > 999570 && $budget < 1003970){
    if($budget < 1001770){
        $budget = 999570;
    }else{
        $budget = 1003970;
    }
}
include('consultaBudget.php'); //$cpu,$gab,$gpu,$placa,$psu,$ram,$hdd,$ssd
include('creacionSetups.php'); //$resultados[num] = ['cpu','gab','gpu','placa','psu','ram','almacenamiento','precioTotal']
function cmp($a, $b) {
    return $a['precioTotal'] < $b['precioTotal'];
}
  
uasort($resultados, "cmp");
$cantidadelementos = count($resultados);
$cantidadPag = ceil($cantidadelementos/12);
$inicio = ($_GET['pagina']-1)*12;
$resultadosPag = array_slice($resultados,$inicio,12);


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!--El conjunto de caracteres usado, Ej: UTF-8 tiene caracteres universales-->
    <title>Peasy - Set-ups</title> <!-- Cambia el titulo del sitio! -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<!-- bootstrap CSS -->
    <link rel="stylesheet" href="Bootstrap_4.11/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/busqueda.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/favicon.ico" type="image/ico">
</head>
<body>

<!-- header -->
<div class="container">
        <div class="row">
            <img src="img/header.png" alt="vaporwave" id="header" class="center col">
        </div>
<div class="borde-rosado p-0 m-0 mb-5">

<!-- navbar -->
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="position-relative" id="logo">
                    <img src="img/logo.png" class="mx-auto img-fluid">
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav mr-auto">
                        <li class="nav-item mt-1">
                            <a class="nav-link" href="index.html" onmouseover="hoverCasa(this);" onmouseout="unhoverCasa(this);" id="menu-texto"><img src="img/house%201.png" id="icono-casa" class="iconos m-2">H O M E</a>
                        </li>
                        <li class="nav-item mt-1">
                            <a class="nav-link" href="contacto.html" onmouseover="hoverContacto(this);" onmouseout="unhoverContacto(this);" id="menu-texto"><img src="img/mail%201.png" id="icono-contacto" class="iconos m-2">C O N T A C T A N O S</a>
                        </li>
                    </div>
                    <form class="form-inline" action="busqueda.php" method="GET">
                        <input class="form-control mr-sm-2 rounded-0" type="text" placeholder="ᴇꜱᴄʀɪʙᴇ ᴛᴜ ʙᴜᴅɢᴇᴛ ᴀᴄᴀ!" aria-label="search" id="boton-buscar" name="budget" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                        <input class="form-control" type="hidden" name="pagina" value="1">    
                        <div>
                                <button class="btn" id="botonEnter" onmouseover="hoverLupa(this);" onmouseout="unhoverLupa(this);" type="submit"><img src="img/lupa%201.png" id="icono-lupa" class="icono-lupa"></button>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>

<!-- card -->
    <div class="bg-white container">
        <div class="row">
        <?php $mejorcpu = 0; foreach($resultadosPag as $setup): ?>
        <?php if(base64_encode(serialize($setup)) != "Tjs="): if($mejorcpu <= $setup['cpu']['benchmark']){ $mejorcpu = $setup['cpu']['benchmark']; if($setup['gpu'] != 'no'): ?>
                <div class="col-3 d-flex justify-content-center">
                    <div class="card rounded-0 mt-2">
                        <img src="<?php echo $setup['gab']['imagen'] ?>" class="card-img-top" alt="...">
                        <div class="flex-column">
                            <img src="<?php echo $setup['gpu']['imagen'] ?>" class="imagen-carta card-img-left col" alt="...">
                            <img src="<?php echo $setup['cpu']['imagen'] ?>" class="imagen-carta card-img-right col" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">$<?php echo number_format($setup['precioTotal'], 0, ',', '.') ?></h5>
                            <p class="procesador">el mejor procesador del presupuesto, hace al computador <strong>más rápido</strong></p>
                            <p>recomendado para </u>gaming</u></p>
                        </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item overflow"><?php echo $setup['gab']['nombre'] ?></li>
                                <li class="list-group-item overflow"><?php echo $setup['gpu']['nombre'] ?></li>
                                <li class="list-group-item overflow"><?php echo $setup['cpu']['nombre'] ?></li>
                            </ul>
                        <form class="card-body" action="set-up.php" method="POST">
                            <input class="form-control" type="hidden" name="setup" value="<?php print base64_encode(serialize($setup)) ?>">  
                            <button type="submit" class="btn btn-primary center rounded-0">ʀᴇᴠɪꜱᴀ ᴇʟ ꜱᴇᴛ-ᴜᴘ ᴀᴄᴀ!</button>
                        </form>
                    </div>
                </div>
                <?php else: ?>
                <div class="col-3 d-flex justify-content-center">
                    <div class="card rounded-0 mt-2">
                        <img src="<?php echo $setup['gab']['imagen'] ?>" class="card-img-top" alt="...">
                        <div class="flex-column">
                            <img src="<?php echo $setup['placa']['imagen'] ?>" class="imagen-carta card-img-left col" alt="...">
                            <img src="<?php echo $setup['cpu']['imagen'] ?>" class="imagen-carta card-img-right col" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">$<?php echo number_format($setup['precioTotal'], 0, ',', '.') ?></h5>
                            <p class="procesador">el mejor procesador del presupuesto, hace al computador <strong>más rápido</strong></p>
                            <p>recomendado para <u>oficina</u></p>
                        </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item overflow"><?php echo $setup['gab']['nombre'] ?></li>
                                <li class="list-group-item overflow"><?php echo $setup['placa']['nombre'] ?></li>
                                <li class="list-group-item overflow"><?php echo $setup['cpu']['nombre'] ?></li>
                            </ul>
                        <form class="card-body" action="set-up.php" method="POST">
                            <input class="form-control" type="hidden" name="setup" value="<?php print base64_encode(serialize($setup)) ?>">  
                            <button type="submit" class="btn btn-primary center rounded-0">ʀᴇᴠɪꜱᴀ ᴇʟ ꜱᴇᴛ-ᴜᴘ ᴀᴄᴀ!</button>
                        </form>
                    </div>
                </div>
                <?php endif ?>
            <?php } else { if($setup['gpu'] != 'no'): ?>
                <div class="col-3 d-flex justify-content-center">
                    <div class="card rounded-0 mt-2">
                        <img src="<?php echo $setup['gab']['imagen'] ?>" class="card-img-top" alt="...">
                        <div class="flex-column">
                            <img src="<?php echo $setup['gpu']['imagen'] ?>" class="imagen-carta card-img-left col" alt="...">
                            <img src="<?php echo $setup['cpu']['imagen'] ?>" class="imagen-carta card-img-right col" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">$<?php echo number_format($setup['precioTotal'], 0, ',', '.') ?></h5>
                            <br/>
                            <br/>
                            <p>recomendado para <u>gaming</u></p>
                            <br/>
                        </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item overflow"><?php echo $setup['gab']['nombre'] ?></li>
                                <li class="list-group-item overflow"><?php echo $setup['gpu']['nombre'] ?></li>
                                <li class="list-group-item overflow"><?php echo $setup['cpu']['nombre'] ?></li>
                            </ul>
                        <form class="card-body" action="set-up.php" method="POST">
                            <input class="form-control" type="hidden" name="setup" value="<?php print base64_encode(serialize($setup)) ?>">  
                            <button type="submit" class="btn btn-primary center rounded-0">ʀᴇᴠɪꜱᴀ ᴇʟ ꜱᴇᴛ-ᴜᴘ ᴀᴄᴀ!</button>
                        </form>
                    </div>
                </div>
                <?php else: ?>
                <div class="col-3 d-flex justify-content-center">
                    <div class="card rounded-0 mt-2">
                        <img src="<?php echo $setup['gab']['imagen'] ?>" class="card-img-top" alt="...">
                        <div class="flex-column">
                            <img src="<?php echo $setup['placa']['imagen'] ?>" class="imagen-carta card-img-left col" alt="...">
                            <img src="<?php echo $setup['cpu']['imagen'] ?>" class="imagen-carta card-img-right col" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">$<?php echo number_format($setup['precioTotal'], 0, ',', '.') ?></h5>
                            <br/>
                            <br/>
                            <p>recomendado para <u>oficina</u></p>
                            <br/>
                        </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item overflow"><?php echo $setup['gab']['nombre'] ?></li>
                                <li class="list-group-item overflow"><?php echo $setup['placa']['nombre'] ?></li>
                                <li class="list-group-item overflow"><?php echo $setup['cpu']['nombre'] ?></li>
                            </ul>
                        <form class="card-body" action="set-up.php" method="POST">
                            <input class="form-control" type="hidden" name="setup" value="<?php print base64_encode(serialize($setup)) ?>">  
                            <button type="submit" class="btn btn-primary center rounded-0">ʀᴇᴠɪꜱᴀ ᴇʟ ꜱᴇᴛ-ᴜᴘ ᴀᴄᴀ!</button>
                        </form>
                    </div>
                </div>
                <?php endif ?> 
            <?php } ?>
        <?php endif ?>
        <?php endforeach ?>               
        </div>

<!-- pagination -->
    <div class="row">
        <nav aria-label="Page navigation example" class="col">
            <ul class="pagination justify-content-center mt-2 mb-2">
              <li class="page-item <?php echo $_GET['pagina']<=1 ? 'd-none' : '' ?>">
                <a class="page-link rounded-0" href="busqueda.php?budget=<?php echo $budget ?>&pagina=<?php echo $_GET['pagina']-1 ?>" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <?php for($i=1; $i < $cantidadPag+1; $i++): ?>
                  <li class="page-item <?php echo $_GET['pagina']==$i ? 'active' : '' ?>"><a class="page-link" href="busqueda.php?budget=<?php echo $budget ?>&pagina=<?php echo $i ?>"><?php echo $i ?></a></li>
              <?php endfor ?>
              <li class="page-item <?php echo $_GET['pagina']>=$cantidadPag ? 'd-none' : '' ?>">
                <a class="page-link rounded-0" href="busqueda.php?budget=<?php echo $budget ?>&pagina=<?php echo $_GET['pagina']+1 ?>" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
        </nav>
    </div>
    </div>
</div>
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