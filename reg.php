<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "final";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn){
    die("No se pudo conectar: ".mysqli_connect_erro());
} else{
    $nombre = $_POST['Nombre'];
    $descripcion = $_POST['Descripcion'];
    $stock = $_POST['Stock'];
    $precio = $_POST['Precio'];

    $sql = "INSERT INTO producto (nombre, descripcion, stock, precio) VALUE ('".$nombre."' , '".$descripcion."' , '".$stock."' , '".$precio."')";

    if(mysqli_query($conn,$sql)){
            header("Location:inicio.php");
    } else{
        echo "ERROR AL INTRODUCIR LOS DATOS" . mysqli_error($conn);
    }
}
?>