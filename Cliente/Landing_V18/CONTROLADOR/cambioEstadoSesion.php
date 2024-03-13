<?php
    session_start();
    if(array_key_exists('inicioSesion', $_POST)) { 
        $_SESSION["sesionIniciada"] = true;

    } else {
        $_SESSION["sesionIniciada"] = false;
    }

    header("Location: ../index.php");
    exit();   
    
    
    
    