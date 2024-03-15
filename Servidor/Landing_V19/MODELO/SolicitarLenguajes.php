<?php
    require_once "BBDD.php";
    $bbdd = new BBDD;

    $conn = $bbdd->getConn();

    $sentencia = $conn->prepare("SELECT DISTINCT Lenguaje FROM cursos");
    $sentencia->execute();

    $lenguajes = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    $lenguajesJSON = json_encode($lenguajes);

    header('Content-Type: application/json');

    echo $lenguajesJSON;
?>
