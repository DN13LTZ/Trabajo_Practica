<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "final";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$nm = $_GET['nm'];

$nombre = $_POST['Nombre'];
$descripcion = $_POST['Descripcion'];
$stock = $_POST['Stock'];
$precio = $_POST['Precio'];

$sql="UPDATE producto SET nombre='$nombre' , descripcion='$descripcion' , stock='$stock' , precio='$precio' WHERE id='$nm' ";

if(mysqli_query($conn,$sql)){
    header("Location:inicio.php");
}else {
    echo "ERROR AL ACTUALIZAR LOS DATOS: ".mysqli_error($conn);
}

?>