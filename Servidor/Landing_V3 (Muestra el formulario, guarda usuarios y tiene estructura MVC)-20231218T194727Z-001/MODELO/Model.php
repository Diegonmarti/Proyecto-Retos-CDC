<?php 
    include "MODELO/BBDD.php";

class Model{
    public $conn;

    public function __construct(){
        $bbdd = new BBDD;
        $this -> conn = $bbdd -> getConn();
    }

    public function guardarUsuario() {
        if (isset($_POST["enviar"])) {
    
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
    
    
            $resultado = mysqli_query($this -> conn, $consulta);
    
            session_start();
            $_SESSION['mensaje'] = "Usuario guardado con éxito";
            header("Location: ../index.php");
            exit(); 
    
        }
    }

    

    function cargarPaises(){
        $consulta = "SELECT * FROM paises";
        $resultado = mysqli_query($this -> conn, $consulta);

        if ($resultado) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $codigoPais = $fila["codigo"];
                $nombrePais = $fila["nombre"];
                $listaPaises[] = [$codigoPais, $nombrePais];
            }
        } else {
            echo "Error en la consulta: " . mysqli_error($this -> conn);
        }

        return $listaPaises;
    }

    function cargarNiveles(){
        $consulta = "SELECT * FROM niveles";
        $resultado = mysqli_query($this -> conn, $consulta);

        if ($resultado) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $codigoNivel = $fila["codigo"];
                $nombreNivel = $fila["nombre"];
                $listaNiveles[] = [$codigoNivel, $nombreNivel];
            
            }
        } else {
            echo "Error en la consulta: " . mysqli_error($this -> conn);
        }
        
        return $listaNiveles;
    }
}

    
?>
