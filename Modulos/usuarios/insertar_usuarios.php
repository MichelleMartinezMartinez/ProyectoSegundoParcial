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
    require_once 'conexion.php';
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    
    $consulta = "INSERT INTO usuarios (nombre_usr, telefono_usr, direccion_usr, correo_usr, password_usr) VALUES ('$nombre','$telefono','$direccion','$correo','$password')";
    mysqli_query($mysqli, $consulta);
    header("Location: index.php");
?>