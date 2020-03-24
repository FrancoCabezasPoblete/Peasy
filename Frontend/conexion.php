<?php
$link = 'mysql:host=localhost:8889;dbname=peasy';
$user = 'root';
$pass = 'root';

try{
    $pdo = new PDO($link,$user,$pass);
    //echo 'Conectado';
}catch (PDOException $e){
    print "¡Error!: ".$e->getMessage()."<br/>";
    die();
}
?>