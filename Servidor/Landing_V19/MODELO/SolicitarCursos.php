<?php
    require_once "BBDD.php";
    $bbdd = new BBDD;

    $conn = $bbdd -> getConn();

    try {
        $lenguaje = null;

        if (isset($_GET["lenguaje"])) {
            $lenguaje = $_GET["lenguaje"];          
            $sentencia = $conn -> prepare("SELECT * FROM cursos WHERE lenguaje = :lenguaje");

            $sentencia -> bindParam(':lenguaje', $lenguaje, PDO::PARAM_STR);

            $sentencia -> execute();
            
            $cursos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

            $json_cursos = json_encode($cursos);      

            return $json_cursos;

        } elseif (isset($_GET["nivel"])) {
            $nivel = $_GET["nivel"];
            $sentencia = $conn -> prepare("SELECT * FROM cursos WHERE LOWER(nivel) = :nivel");

            $sentencia -> bindParam(':nivel', $nivel, PDO::PARAM_STR);

            $sentencia -> execute();
            
            $cursos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

            $json_cursos = json_encode($cursos);      

            echo $json_cursos;
        }
        
    } catch(PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }

    // Cerrar la conexión
    $conn = null;
?>