<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "final";
//Conexion a Base de Datos
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//Verificar Conexion
if(!$conn){
    die("No se pudo conectar: ".mysqli_connect_erro());
} else{

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

$sql = "SELECT * FROM clientes WHERE  nombre ='$nombre'AND correo ='$correo'";

$resultado = mysqli_query($conn,$sql);
$cadena = mysqli_fetch_array($resultado);

    if(!isset($cadena['id'])){
        header("Location: forgoten-password.php?estado=1");
    }{
    $id = $cadena['id'];
    $nueva = randoma();
    $sql2 = "UPDATE clientes SET pass='$nueva' WHERE id='$id' ";
    if(mysqli_query($conn,$sql2)){
        echo "Tu Nueva Contraseña es: ". $nueva;
        header("Refresh: 5; URL=sign-in.php?estado=3");
    } else{
        echo "ERROR AL INTRODUCIR LOS DATOS" . mysqli_error($conn);
    }
    }
}
    function randoma(){
        $caracteres = 'ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz0123456789';
        $longpalabra = 12;
        for($pass = '', $n = strlen($caracteres)-1; strlen($pass) < $longpalabra ;){
            $x = rand(0, $n);
            $pass.= $caracteres[$x];
        }
        return ($pass);
    }
?>