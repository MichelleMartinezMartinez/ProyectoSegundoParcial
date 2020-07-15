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
    $nombre = $_POST['nombre1'];
    $des = $_POST['des'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $compra = $_POST['venta'];
    
    $consulta = "UPDATE productos set venta_prod = '$compra' WHERE id_prod = '$id'";
    mysqli_query($mysqli, $consulta);
    $consulta2 = "INSERT INTO compras (usr_compra,prod_compra,cant_compra) VALUES ('El usuario ".$_SESSION['nombre'].",Ha realizado una compra','$nombre','$compra')";
    mysqli_query($mysqli, $consulta2);
    header("Location: index.php");
?>