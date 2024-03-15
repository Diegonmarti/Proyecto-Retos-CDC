<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Encabezado con Bootstrap</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- FUENTES -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #292929;
      margin: 0;
      padding: 0;
    }

    .container-fluid {
      border-bottom: 2px solid #000;
    }

    .navbar {
      background-color: #343a40;
    }

    .navbar-brand img {
      max-height: 35px;
    }

    #buscador {
      width: 100%;
      max-width: 300px;
      /* Ajusta el ancho según tu preferencia */
      margin-right: 250px;
    }

    #mostrarNivelesBtn {
      margin-right: 40px;
    }

    .navbar-toggler-icon {
      background-color: #fff;
    }

    .navbar-toggler {
      border-color: #fff;
    }

    .navbar-nav .nav-link {
      color: #fff !important;
    }

    .navbar-nav .nav-link:hover {
      color: #ffc107 !important;
    }

    .navbar-nav .active {
      color: #ffc107 !important;
    }

    #botonBuscador:disabled {
      color: inherit; 
      opacity: 1;
      pointer-events: auto;
      cursor: pointer;
    }

    #cursos{
      opacity: 0;
      transition: opacity 1s;
    }

  </style>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
        const cursos = document.getElementById("cursos");
        cursos.style.opacity = "1"; // Cambia la opacidad a 1
    });
  </script>
</head>

<body id="content" class="hidden">
  <!-- HEADER -->
  <div class="container-fluid border-bottom border-dark shadow-sm bg-white w-100">
    <div class="row p-1">
      <div class="col-1 mt-2">
        <a class="navbar-brand" href="CONTROLADOR/cambioEstadoSesion.php" id="cerrarSesion">
          <img src="MULTIMEDIA/Imágenes/ApartadoCursos/Header/casa.png" alt="Logo Casa" style="max-height: 25px;">
        </a>
      </div>

      <div class="col-10 d-flex justify-content-center">
        <a class="navbar-brand" href="#">
          <img src="MULTIMEDIA/Imágenes/Logo_header.png" alt="Logo Centro" style="max-height: 35px;">
        </a>
      </div>

      <div class="col-1 d-flex justify-content-end">
        <form class="d-flex" action="MODELO/CambioURL.php" method="POST">
          <input type="text" name="valorBuscado" id="valorBuscado" class="rounded">
          <button type="submit" class="btn text-center bg-warning ml-2 mr-5" id="botonBuscador">
            <img src="MULTIMEDIA\Imágenes\ApartadoCursos\buscar.png" alt="Imagen del botón" style="max-width: 25px;">
          </button>
        </form>

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#carritoModal">
              <img src="MULTIMEDIA/Imágenes/ApartadoCursos/Header/carrito.png" alt="Carrito" style="max-height: 25px;">
            </a>
            <!-- Modal -->
            <div class="modal fade" id="carritoModal" tabindex="-1" aria-labelledby="carritoModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="carritoModalLabel">Carrito</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div id="carrito" class="row m-0 p-0"></div>
                  </div>
                  <div class="modal-footer text-start">
                    <p></p>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!--                                                      TÍTULO                                                      -->
  <div class="row justify-content-center w-100 mt-5">
    <div class="col-3 bg-transparent w-50 text-center text-white p-2 rounded" style="font-size: 3em;">
      Elige un lenguaje
    </div>
  </div>


  <!--                                                   BOTONES CURSOS                                                      -->
  <div class="row justify-content-center mt-5 w-100 mb-5">
    <form action="MODELO/CambioURL.php" method="POST" class="row w-50 justify-content-around" id="lenguajesDisponibles">
    <script>
      jQuery(document).ready(function($){
        $.ajax({
          url: "MODELO/SolicitarLenguajes.php",
          type: "GET",
          dataType: "json", 
          success: function(datos){
              $.each(datos, function(index, lenguaje){
                  $("#lenguajesDisponibles").append("<button name=" + lenguaje.Lenguaje + " class='btn btn-primary rounded col-3 text-dark text-center bg-white p-1' style='font-size: 1.5em'>" + lenguaje.Lenguaje + "</button>");
              });
          },
          error: function(xhr, status, error){
              console.log("Error:", error);
          }
        });
      });
    </script>
    </form>
  </div>


  <!--                                                        CURSOS                                                      -->
  <div id="cursos" class="row mt-5 justify-content-around w-100">
    <?php
    $datosJSON = $modelo->solicitarCursos();

    $datosDecodificados = json_decode($datosJSON, true);

    if (isset($datosDecodificados)) {
      foreach ($datosDecodificados as $datosCurso) {
        echo "<div class='row mt-5 w-25 bg-white d-flex rounded' style='max-height: 60vh;'>";
        echo "<div class='w-100 text-center mb-3'><img src='" . $datosCurso["Icono"] . "' style='max-width: 150px; margin-top: -35px;'></div>";
        echo "<div class='w-100 text-center font-weight-bold' style='font-size: 2em'>" . $datosCurso["Nivel"] . "</div>";
        echo "<div class='w-100 text-center mb-3'>Lenguaje: " . $datosCurso["Lenguaje"] . "</div>";
        echo "<div class='w-100 text-center mb-3'>" . $datosCurso["Descripcion"] . "</div>";
        echo "<div class='w-100 text-center mb-3'>Precio: " . $datosCurso["precio"] . "€</div>";
        $datosCursoJson = json_encode($datosCurso);
        $datosCursoJson = htmlspecialchars($datosCursoJson, ENT_QUOTES, 'UTF-8');
        echo "<button name='" . $datosCurso["Nivel"] . "' class='curso-btn btn p-2 text-center w-100 bg-warning mt-5' data-curso='$datosCursoJson'><img src='MULTIMEDIA/Imágenes/ApartadoCursos/Header/carrito.png' style='max-width: 35px;'></button>";
        echo "</div>";
      }
    }
    ?>
  </div>

  <!--                                                      BOOTSTRAP                                                      -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!--                                                      JS                                                      -->
  <script src="JS/carrito.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
  <script>

    var total = 0; // Inicializa una variable 'total' a 0. Esta variable se usa para llevar la cuenta del precio total de los cursos en el carrito.
    var carrito = JSON.parse(localStorage.getItem('carrito') || '[]'); // Recupera los datos del carrito del almacenamiento local del navegador. Si no hay nada en el almacenamiento local, se usa un array vacío.

    document.addEventListener('DOMContentLoaded', function () { // Asegura que el código no se ejecuta hasta que toda la página se ha cargado.

      var botones = document.querySelectorAll('.curso-btn'); // Selecciona todos los elementos con la clase 'curso-btn'. Estos son los botones que añaden cursos al carrito.

      botones.forEach(function (boton) {
        boton.addEventListener('click', function () {

          var datosCurso = JSON.parse(this.dataset.curso) // Obtiene los datos del curso del atributo 'data-curso' del botón.

          var nombreCurso = datosCurso.Lenguaje; // Obtiene el nombre del curso de los datos del curso.
          var nivelCurso = datosCurso.Nivel; // Obtiene el nivel del curso de los datos del curso.
          var precioCurso = datosCurso.precio; // Obtiene el precio del curso de los datos del curso.

          total += precioCurso; // Añade el precio del curso al total.

          carrito.push(datosCurso); // Añade los datos del curso al carrito.

          var modalBody = document.querySelector('#carritoModal .modal-body'); // Selecciona el cuerpo del modal donde se mostrarán los detalles del carrito.

          var cursoElemento = document.createElement('div');// Crea un nuevo elemento div para mostrar los detalles del curso.
          cursoElemento.innerHTML = 
          '<p>Nombre del curso: <b>' + nombreCurso + "</b>" +
          '<br>Nivel del curso: <b>' + nivelCurso + "</b>" +
          '<br>Precio del curso: <b>' + precioCurso + "€</b>" +
          '<br><button class="eliminar-curso bg-warning rounded p-2 col-3 text-center d-flex">Eliminar</button><br><hr>'; // Rellena el div con los detalles del curso y un botón para eliminar el curso del carrito.

          modalBody.appendChild(cursoElemento); // Añade el div al cuerpo del modal.

          cursoElemento.querySelector('.eliminar-curso').addEventListener('click', function () {// Añade un controlador de eventos al botón de eliminar.

            total -= precioCurso; // Resta el precio del curso del total.
            modalBody.removeChild(cursoElemento); // Elimina el div del curso del cuerpo del modal.

            var index = carrito.indexOf(datosCurso); // Encuentra el índice del curso en el array del carrito.

            if (index > -1) {
              carrito.splice(index, 1); // Si el curso está en el carrito, lo elimina.
            }

            localStorage.setItem('carrito', JSON.stringify(carrito)); // Guarda el carrito actualizado en el almacenamiento local.

            mostrarTotal(); // Actualiza el total mostrado.
          });

          localStorage.setItem('carrito', JSON.stringify(carrito)); // Guarda el carrito en el almacenamiento local después de añadir un curso.

          mostrarTotal(); // Actualiza el total mostrado.
        });
      });

      carrito.forEach(function (datosCurso) {

        var nombreCurso = datosCurso.Lenguaje; // Obtiene el nombre del curso de los datos del curso.
        var nivelCurso = datosCurso.Nivel; // Obtiene el nivel del curso de los datos del curso.
        var precioCurso = datosCurso.precio; // Obtiene el precio del curso de los datos del curso.

        total += precioCurso; // Añade el precio del curso al total.

        var modalBody = document.querySelector('#carritoModal .modal-body'); // Selecciona el cuerpo del modal donde se mostrarán los detalles del carrito.
        var cursoElemento = document.createElement('div');// Crea un nuevo elemento div para mostrar los detalles del curso.

        cursoElemento.innerHTML = 
        '<p>Nombre del curso: <b>' + nombreCurso + "</b>" +
        '<br>Nivel del curso: <b>' + nivelCurso + "</b>" +
        '<br>Precio del curso: <b>' + precioCurso + "€</b>" +
        '<br><button class="eliminar-curso bg-warning rounded p-2 col-3 text-center d-flex">Eliminar</button><br><hr>'; // Rellena el div con los detalles del curso y un botón para eliminar el curso del carrito.

        modalBody.appendChild(cursoElemento); // Añade el div al cuerpo del modal.

        cursoElemento.querySelector('.eliminar-curso').addEventListener('click', function () { // Añade un controlador de eventos al botón de eliminar.

          total -= precioCurso; // Resta el precio del curso del total.
          modalBody.removeChild(cursoElemento); // Elimina el div del curso del cuerpo del modal.

          var index = carrito.indexOf(datosCurso);// Encuentra el índice del curso en el array del carrito.

          if (index > -1) {
            carrito.splice(index, 1); // Si el curso está en el carrito, lo elimina.
          }
          localStorage.setItem('carrito', JSON.stringify(carrito)); // Guarda el carrito actualizado en el almacenamiento local.
          mostrarTotal(); // Actualiza el total mostrado.
        });
      });

      mostrarTotal();// Muestra el total actualizado.
    });

    function mostrarTotal() { // Esta función actualiza el total mostrado en el pie de página del modal.
      var modalFooter = document.querySelector('#carritoModal .modal-footer');
      modalFooter.innerHTML = 'Total: <b>' + total + '€</b>';
    }

    document.addEventListener("DOMContentLoaded", function() {
      var valorBuscadoInput = document.getElementById("valorBuscado");
      var botonBuscador = document.getElementById("botonBuscador");
        
      valorBuscadoInput.addEventListener("input", function() {
        var valorBuscado = valorBuscadoInput.value.toLowerCase();

        if (/^(principiante|intermedio|avanzado)$/.test(valorBuscado)) {
            valorBuscadoInput.style.border = "none";
            botonBuscador.disabled = false;
            

          } else {
            valorBuscadoInput.style.border = "3px solid red";
            botonBuscador.disabled = true;
          }
      });
      

      botonBuscador.addEventListener("mouseenter", function() {
        var valorBuscado = valorBuscadoInput.value.toLowerCase();

        if (/^(principiante|intermedio|avanzado)$/.test(valorBuscado)) {
            valorBuscadoInput.style.border = "none";
            botonBuscador.disabled = false;
            

          } else {
            valorBuscadoInput.style.border = "3px solid red";
            botonBuscador.disabled = true;
          }
      });

    });




  </script>

</body>

</html>