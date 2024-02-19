<?php  
  session_start();


  require_once "MODELO/Model.php";
  $modelo = new Model;
  
  $listaPaises = $modelo->cargarPaises();
  $listaNiveles = $modelo->cargarNiveles();


  if (isset($_SESSION["sesionIniciada"]) && $_SESSION["sesionIniciada"] == true) {
    include "VISTA/tiendaBootstrap.php";    

  } else{
    include "VISTA/vistaLanding.php";
  }



