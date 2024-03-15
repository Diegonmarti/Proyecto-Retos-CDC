<?php 
    include "MODELO/BBDD.php";

class Model{
    public $conn;

    public function __construct(){
        $bbdd = new BBDD;
        $this -> conn = $bbdd -> getConn();
    }

    public function guardarUsuario() {
        if (isset($_POST["enviar"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
            $dsn = 'mysql:host=localhost;dbname=landing_cdc';
            $username = 'root';
            $password = '';

            try {
                $pdo = new PDO($dsn, $username, $password);

                $sql = "INSERT INTO usuarios (Nombre_Apellido, DNI, Correo, Contraseña, Nivel, FechaNaci, codigo_pais, Notificaciones, Revista)
                VALUES (:nombre, :nif, :email, :contrasenia, :nivel, :fechaNacimiento, :paises, :notificaciones, :revista)";

                $stmt = $pdo -> prepare($sql);

                $nombre = $_POST["nombre"];
                $stmt -> bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $nif = $_POST["nif"];
                $stmt -> bindParam(':nif', $nif, PDO::PARAM_STR);
                $email = $_POST["email"];
                $stmt -> bindParam(':email', $email, PDO::PARAM_STR);
                $contrasenia = $_POST["contrasenia"];
                $stmt -> bindParam(':contrasenia', $contrasenia, PDO::PARAM_STR);
                $nivel = $_POST["nivel"];
                $stmt -> bindParam(':nivel', $nivel, PDO::PARAM_STR);
                $fechanacimiento = $_POST["fechanacimiento"];
                $stmt -> bindParam(':fechaNacimiento', $fechanacimiento, PDO::PARAM_STR);
                $notificaciones = $_POST["notificaciones"];
                $stmt -> bindParam(':notificaciones', $notificaciones, PDO::PARAM_INT);
                $revista = $_POST["revista"];
                $stmt -> bindParam(':revista', $revista, PDO::PARAM_INT);

                if ($stmt->execute()) {
                    header("HTTP/1.1 201 Se guardó el cliente correctamente");
                }

            } catch (PDOException $e) {
                header("HTTP/1.1 401 Se guardó el cliente correctamente");
            }
        }

    }
    
    

    

    function cargarPaises(){
            $dsn = 'mysql:host=localhost;dbname=landing_cdc';
            $username = 'root';
            $password = '';

            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $consulta = "SELECT codigo, nombre FROM paises";
            $stmt = $pdo -> prepare($consulta);

            if ($stmt->execute()) {
                $listaPaises = $stmt -> fetchAll(PDO::FETCH_ASSOC);

            } else {
                echo "Error en la consulta: " . $pdo -> errorCode();
            }
        
            return $listaPaises;
    }

    function cargarNiveles(){
        $dsn = 'mysql:host=localhost;dbname=landing_cdc';
        $username = 'root';
        $password = '';

        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = "SELECT * FROM niveles";
        $stmt = $pdo -> prepare($consulta);

        if ($stmt -> execute()) {
            $listaNiveles = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo "Error en la consulta: " . $pdo -> errorCode();
        }
        
        return $listaNiveles;
    }

    function solicitarLenguajes(){
        $sentencia = $this -> conn -> prepare("SELECT DISTINCT Lenguaje FROM cursos");
        $sentencia -> execute();
        
        $lenguajes = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        return $lenguajes;
    }

    function solicitarCursos(){
        try {
            $lenguaje = null;

            if (isset($_GET["lenguaje"])) {
                $lenguaje = $_GET["lenguaje"];          
                $sentencia = $this -> conn -> prepare("SELECT * FROM cursos WHERE lenguaje = :lenguaje");

                $sentencia -> bindParam(':lenguaje', $lenguaje, PDO::PARAM_STR);

                $sentencia -> execute();
                
                $cursos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

                $json_cursos = json_encode($cursos);      

                return $json_cursos;

            } elseif (isset($_GET["nivel"])) {
                $nivel = $_GET["nivel"];
                $sentencia = $this -> conn -> prepare("SELECT * FROM cursos WHERE LOWER(nivel) = :nivel");

                $sentencia -> bindParam(':nivel', $nivel, PDO::PARAM_STR);

                $sentencia -> execute();
                
                $cursos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

                $json_cursos = json_encode($cursos);      

                return $json_cursos;
            }
            
        } catch(PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }

        // Cerrar la conexión
        $conn = null;

    }

    function insertarCurso($icono, $lenguaje, $nivel, $descripcion) {
    
        try {
            $consulta = "INSERT INTO cursos (Icono, Lenguaje, Nivel, Descripcion) VALUES (:icono, :lenguaje, :nivel, :descripcion)";
            $sentencia = $this -> conn -> prepare($consulta);
    
            $sentencia -> bindParam(':icono', $icono);
            $sentencia -> bindParam(':lenguaje', $lenguaje);
            $sentencia -> bindParam(':nivel', $nivel);
            $sentencia -> bindParam(':descripcion', $descripcion);
    
            $sentencia -> execute();
    
            $conn = null;
    
            return "Curso insertado correctamente.";

        } catch(PDOException $e) {
            return "Error al insertar el curso: " . $e->getMessage();
        }
    }
}

    
?>
