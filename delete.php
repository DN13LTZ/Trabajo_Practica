<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "final";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$nm = $_GET['nm'];


$sql="DELETE FROM producto WHERE id='$nm' ";

if(mysqli_query($conn,$sql)){
    header("Location:inicio.php");
}else {
    echo "ERROR AL BORRAR EL DATO: ".mysqli_error($conn);
}

?>