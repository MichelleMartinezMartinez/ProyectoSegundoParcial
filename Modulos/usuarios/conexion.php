<?php 
session_start();
error_reporting(0);
$varsesion = $_SESSION['nombre'];

if($varsesion == null || $varsesion = ''){
  header("Location:///Localhost/ProyectoBD/Modulos/index.php"); 
  die();
}
print_r($_SESSION);
?>
<?php
    $usuario = "root";
    $password = "";
    $database = "tienda";
    $server = "localhost";
    $mysqli = mysqli_connect($server, $usuario, $password, $database);
?>