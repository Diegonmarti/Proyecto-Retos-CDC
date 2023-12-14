<?php 

    include "../MODELO/BBDD.php";

    if (isset($_POST["enviar"])) {
        $bbdd = new BBDD;
        $conn = $bbdd->getConn();

        $nombre = $_POST["nombre"];
        $nif = $_POST["nif"];
        $correo = $_POST["email"];
        $contrasenia = $_POST["contrasenia"];
        $nivel = $_POST["nivel"];
        $fechaNacimiento = $_POST["fechanacimiento"];
        $pais = $_POST["paises"];

        $notificaciones = isset($_POST["notificaciones"]) ? 1 : 0;
        $revista = isset($_POST["revista"]) ? 1 : 0;

        $consulta = "INSERT INTO usuarios (Nombre_Apellido, DNI, Correo, Contraseña, Nivel, FechaNaci, codigo_pais, Notificaciones, Revista)
             VALUES ('$nombre', '$nif', '$correo', '$contrasenia', '$nivel', '$fechaNacimiento', '$pais', $notificaciones, $revista)";


        $resultado = mysqli_query($conn, $consulta);

        session_start();
        $_SESSION['mensaje'] = "Usuario guardado con éxito";
        header("Location: ../index.php");
        exit(); 

    }

    function cargarPaises(){
        $bbdd = new BBDD;
        $conn = $bbdd->getConn();
        $consulta = "SELECT * FROM paises";
        $resultado = mysqli_query($conn, $consulta);

        if ($resultado) {
            $primero = true;
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $codigoPais = $fila["codigo"];
                $nombrePais = $fila["nombre"];

                if ($primero) {
                    echo "<option value='$codigoPais' selected> $nombrePais</option>";
                    $primero = false;

                } else {
                    echo "<option value='$codigoPais'> $nombrePais</option>";
                }
                
                
            }
        } else {
            echo "Error en la consulta: " . mysqli_error($conn);
        }
        
        mysqli_close($conn);
    }

    function cargarNiveles(){
        $bbdd = new BBDD;
        $conn = $bbdd->getConn();
        $consulta = "SELECT * FROM niveles";
        $resultado = mysqli_query($conn, $consulta);

        if ($resultado) {
            $primero = true;
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $codigoNivel = $fila["codigo"];
                $nombreNivel = $fila["nombre"];

                if ($primero) {
                    echo "<option value='$codigoNivel' selected> $nombreNivel</option>";
                    $primero = false;
                    
                } else {
                    echo "<option value='$codigoNivel'> $nombreNivel</option>";
                }
                
                
            }
        } else {
            echo "Error en la consulta: " . mysqli_error($conn);
        }
        
        mysqli_close($conn);
    }
?>
