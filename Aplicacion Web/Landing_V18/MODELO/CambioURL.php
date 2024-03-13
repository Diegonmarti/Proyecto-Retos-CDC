<?php

    if (isset($_POST["HTML"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
        header('Location: ../index.php?lenguaje=HTML');
        exit;
    } elseif (isset($_POST["JavaScript"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
        header('Location: ../index.php?lenguaje=JavaScript');

    } elseif (isset($_POST["Python"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
        header('Location: ../index.php?lenguaje=Python');

    } elseif (isset($_POST["valorBuscado"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
        header('Location: ../index.php?nivel=' . $_POST["valorBuscado"]);

    } else{
        header('Location: ../index.php');
    }

    
