<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Encabezado con Bootstrap</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container-fluid border-bottom border-dark shadow-sm fixed-top bg-white">
        <div class="row p-1">
            <div class="col-1">
            <a class="navbar-brand" href="CONTROLADOR/cambioEstadoSesion.php" id="cerrarSesion">
                <img src="MULTIMEDIA/Imágenes/ApartadoCursos/casa.png" alt="Logo Casa" style="max-height: 25px;">
            </a>
            </div>

            <div class="col-10 d-flex justify-content-center">
            <a class="navbar-brand" href="#">
                <img src="MULTIMEDIA/Imágenes/Logo_header.png" alt="Logo Centro" style="max-height: 35px;">
            </a>
            </div>
            <div class="col-1 d-flex justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="MULTIMEDIA/Imágenes/ApartadoCursos/carrito.png" alt="Carrito" style="max-height: 25px;">
                </a>
                </li>
            </ul>    
            </div>
        </div>
    </div>

    <div class="container-fluid vh-100 mt-5" style="background-color: #292929">
    <!-- Contenido principal aquí -->
    </div>

  <!-- jQuery, Popper.js, Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



