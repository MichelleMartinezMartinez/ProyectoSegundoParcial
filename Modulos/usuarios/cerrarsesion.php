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
    session_start();
    session_destroy();
    header("Location:///Localhost/ProyectoBD/Modulos/index.php");
?>