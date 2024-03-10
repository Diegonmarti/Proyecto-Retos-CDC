<?php

    if (isset($_POST["HTML"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
        header('Location: ../index.php?lenguaje=HTML');
        exit;
    }

    if (isset($_POST["JavaScript"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
        header('Location: ../index.php?lenguaje=JavaScript');
    }

    if (isset($_POST["Python"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
        header('Location: ../index.php?lenguaje=Python');
    }
