<?php 

require 'conexion.php';
session_start();

$Usuario = $_POST['Usuario'];
$Clave = $_POST['clave'];



$q = "SELECT COUNT(*) as contar FROM  usuarios where usuario = '$Usuario' and clave = '$Clave' ";

$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if ($array['contar']>0) {
    $_SESSION['username'] = $Usuario;
    header("location: ../Principal.php");
}
else {
    echo "DATOS INCORRECTOS";
}













?>