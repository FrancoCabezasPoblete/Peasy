<?php

header('Content-Type: application/json');   //Para que la informacion tenga formato JSON
header("Access-Control-Allow-Origin: *");   //Para que el api sea publico

if($_GET['variable'] == 'cpubench' || $_GET['variable'] == 'gpubench' || $_GET['variable'] == 'ssdbench' || $_GET['variable'] == 'hddbench' || $_GET['variable'] == 'rambench'){ //en '' deberian ir todos los nombres de las tablas dentro del db
    include_once 'conexion.php';

    //if($_GET['variable'] == ''){ tantos if como nombres de tabla allá (investigar listas para hacerlo más optimo)
      //  $nombredetabla = 'nombredetabla'
    //}

    $sql = 'SELECT * FROM '.$_GET['variable'];
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute();
    $datos = $sentencia->fetchAll();

} else {
    echo 'Solicitud no encontrada';
}

echo json_encode($datos);