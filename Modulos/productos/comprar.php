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
<?php require_once 'conexion.php';
$id = $_GET["id"];
$consulta = "SELECT * FROM productos WHERE id_prod = $id";
$resultado = mysqli_query($mysqli, $consulta);
$fila = mysqli_fetch_array($resultado);
?>
  <div class="container mt-5">
        <div class="row">
        <div class="col-sm-12">
            <form action="comprar_prod.php" method="POST">
            <div class="container">
  <div class="card-deck">
    <div class="col-lg-6 col-md-2 col-sm-4 mb-3">
          <img class='card-img-top rounded' src="<?php echo $fila['img_prod']?>">
        </div>
            <div class='card-body'>
          <h4 class='card-title'><a href='$path'><?php echo $fila['nombre_prod']?></a></h4>
            <ul class='list-unstyled'>
              <li>
                <span class='badge badge-primary'>64GB</span>
                <span class='badge badge-success'>Touch</span>
                <span class='badge badge-danger'>5G</span>
                <span class='badge badge-warning'>Liberado</span>
              </li>
            </ul>
            <div class="form-group">
                    <label for="nombre_prod">Prodcuto</label>
                    <input type="text" id="inputDisabledEx2" class="form-control" placeholder="<?php echo $fila['nombre_prod']?>" disabled>
                </div>

                <div class="form-group">
                    <label for="des_prod">Descripcion</label>
                    <input type="text" id="inputDisabledEx2" class="form-control" placeholder="<?php echo $fila['des_prod']?>" disabled>
                </div>

                <div class="form-group">
                    <label for="fecha">fecha</label>
                    <input type="date" name="fecha" id="fecha" class="form-control" placeholder="Ingresa la fecha" value="<?php echo $fila['fecha']?>">
                </div>

                <div class="form-group">
                    <label for="autor">Autor</label>
                    <input type="text" name="autor" id="autor" class="form-control" placeholder="Ingresa tu nombre" value="<?php echo $fila['autor']?>">
                    <input type="hidden" name="id" id="id" class="form-control" placeholder="" value="<?php echo $fila['id_blog']?>">
                </div>

                <div class="form-group">
                    <label for="categorias">Categorias</label>
                    <select name="categorias" id="categorias" class="form-control">
                        <option value="0">Seleccione la categoria:</option>
                        <?php
                        $consulta = "SELECT * FROM categorias";
                        $resultado = mysqli_query($mysqli, $consulta);
                        while ($fila = mysqli_fetch_array($resultado))
                        
                        {
                            ?>
                            <option value="<?php echo $fila["id_cat"]; ?>"><?php echo $fila["nombre_cat"];?></option>
                            <?php
                        }
                        ?>
                    </select>                
                </div>
        </div>
        
        <div class='card-footer text-center bg-primary card-footer text-center bg-primary col-lg-12 col-md-2 col-sm-4 mb-3'>
          <a href='#' class='btn btn-primary stretched-link'>Comprar</a>
        </div>
      </div>
    </div>
            </form>
        </div>
        </div>
    </div>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>