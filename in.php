<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "final";

session_start();
//Conexion a Base de Datos
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//Verificar Conexion
if(!$conn){
    die("No se pudo conectar: ".mysqli_connect_erro());
} else{

$correo = $_POST['correo'];
$pass = $_POST['pass'];

$sql = "SELECT COUNT(*) as contar FROM clientes WHERE correo ='$correo' AND pass ='$pass'";

$resultado = mysqli_query($conn,$sql);
$cadena = mysqli_fetch_array($resultado);

if($cadena['contar'] > 0){
    $_SESSION['uss'] = $correo;
    header("Location: inicio.php");
} else{
//Datos Incorrectos
header("Location: sign-in.php?estado=2");
}
}
?>