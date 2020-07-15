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
    $id = $_POST['id'];
    $nombre = $_POST['nombre_usr'];
    $telefono = $_POST['telefono_usr'];
    $direccion = $_POST['direccion_usr'];
    $correo = $_POST['correo_usr'];
    $password = $_POST['password_usr'];
    
    $consulta = "UPDATE usuario set nombre_usr = '$nombre', telefono_usr = '$dtelefono', correo_usr = '$correo', password_usr = '$password' WHERE id_blog = $id ";
    mysqli_query($mysqli, $consulta);
    header("Location: index.php");
?>