<?php 
session_start();
error_reporting(0);
$varsesion = $_SESSION['nombre'];

if($varsesion == null || $varsesion = ''){
  header("Location:///Localhost/ProyectoBD/Modulos/index.php"); 
  die();
}

?>
<?php
    session_start();
    session_destroy();
    header("Location:///Localhost/tiendaProyectoMichelleMartinez/index.php");
?>