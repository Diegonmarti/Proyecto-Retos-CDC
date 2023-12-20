<?php
    require_once "MODELO/Model.php";
    $modelo = new Model;
    
    $listaPaises = $modelo -> cargarPaises();
    $listaNiveles = $modelo -> cargarNiveles();

    include "VISTA/vistaLanding.php";
?>
