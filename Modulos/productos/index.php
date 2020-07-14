<?php 
session_start();
error_reporting(0);
$varsesion = $_SESSION['nombre'];

if($varsesion == null || $varsesion = ''){
  header("Location:///Localhost/tiendaProyectoMichelleMartinez/index.php"); 
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <style>
    .btn-primary1{
    background-color:#D22929;
    color:white;
    }
    </style>  

</head>
<body>
<?php require_once 'conexion.php'; ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Tiendita UNID</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Carrito</a>
      </li>
        </div>
    </ul>
    <form class="form-inline mb--1 mr-sm-3">
    <h6 class="usr text-success">Bienvenido: <?php print_r($_SESSION['nombre'])?></h6>
    </form>
    <form class="form-inline my-2 my-lg-0">
      <a href="cerrarsesion.php" class="btn btn-danger my-2 my-sm-0" type="submit">Cerrar Sesion</a>
    </form>
  </div>
</nav>
    <br/>
    <br/>
    <div class="container">
        <br>
            <div class="alert alert-success">
                Ver compras!
                <a href="#" class="badge badge-success">Compras</a>
            </div>
<div class="container mt-5">
    <div class="row">
    <div class="col-sm-12">
    </div>
    <div class="col-sm-12">
  <div class="table-reponsive">
    <table class="table table-stripped">
    <thead>
      <tr>
        <th>Producto</th>
        <th>Precio</th>
        <th>En stock</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $consulta = "SELECT * FROM productos";
      $resultado = mysqli_query($mysqli, $consulta);
      while($fila = mysqli_fetch_array($resultado)){
      ?>
      <tr>
        <td><?php echo $fila["nombre_prod"]; ?></td>
        <td>$<?php echo $fila["precio_prod"]; ?></td>
        <td><?php echo $fila["stock_prod"]; ?></td>
        <td><a href="comprar.php?id=<?php echo $fila['id_prod']; ?>" class="btn btn-success my-2 my-sm-0" type="submit">Comprar</a></td>
        <td>
        </td>
      </tr>
      <?php }  ?>
    </tbody>
    </table>
  </div>
  </div>
  </div>
  </div>
</div>
              
    </div>
</body>
</html>