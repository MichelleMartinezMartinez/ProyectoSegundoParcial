<?php 
session_start();
error_reporting(0);
$varsesion = $_SESSION['nombre'];

if($varsesion == null || $varsesion = ''){
  header("Location:///Localhost/tiendaProyectoMichelleMartinez/index.php"); 
  die();
}
?>
<?php
    require_once 'conexion.php';
    $id = $_POST['id'];
    $nombre = $_POST['nombre_prod'];
    $des = $_POST['des_prod'];
    $precio = $_POST['precio_prod'];
    $stock = $_POST['stock_prod'];
    $colores = $_POST['color'];
    
    $consulta = "UPDATE productos set nombre_prod = '$nombre', des_prod = '$des', precio_prod = '$precio', color = '$color', stock_prod = '$stock' WHERE id_prod = $id ";
    mysqli_query($mysqli, $consulta);
    header("Location: index.php");
?>