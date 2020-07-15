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
.number-input input[type="number"] {
-webkit-appearance: textfield;
-moz-appearance: textfield;
appearance: textfield;
}

.number-input input[type=number]::-webkit-inner-spin-button,
.number-input input[type=number]::-webkit-outer-spin-button {
-webkit-appearance: none;
}

.number-input {
  display: flex;
  justify-content: space-around;
  align-items: center;
}

.number-input button {
-webkit-appearance: none;
background-color: transparent;
border: none;
align-items: center;
justify-content: center;
cursor: pointer;
margin: 0;
position: relative;
}

.number-input button:before,
.number-input button:after {
display: inline-block;
position: absolute;
content: '';
height: 2px;
transform: translate(-50%, -50%);
}

.number-input button.plus:after {
transform: translate(-50%, -50%) rotate(90deg);
}

.number-input input[type=number] {
text-align: center;
}

.number-input.number-input {
border: 1px solid #ced4da;
width: 10rem;
border-radius: .25rem;
}

.number-input.number-input button {
width: 2.6rem;
height: .7rem;
}

.number-input.number-input button.minus {
padding-left: 10px;
}

.number-input.number-input button:before,
.number-input.number-input button:after {
width: .7rem;
background-color: #495057;
}

.number-input.number-input input[type=number] {
max-width: 4rem;
padding: .5rem;
border: 1px solid #ced4da;
border-width: 0 1px;
font-size: 1rem;
height: 2rem;
color: #495057;
}

@media not all and (min-resolution:.001dpcm) {
@supports (-webkit-appearance: none) and (stroke-color:transparent) {

.number-input.def-number-input.safari_only button:before,
.number-input.def-number-input.safari_only button:after {
margin-top: -.3rem;
}
}
}
</style>  

</head>
<body>

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
              <form method="post" action="comprar_prod.php">
                <div class="form-group">
                    <label for="nombre1">Prodcuto</label>
                    <input type="text" id="nombre1" name="nombre1" class="form-control" value="<?php echo $fila['nombre_prod']?>" readonly>
                    <input type="hidden" name="id" id="id" class="form-control" placeholder="" value="<?php echo $fila['id_prod']?>">
                </div>

                <div class="form-group">
                    <label for="des">Descripcion</label>
                    <input type="text" id="des" name="des" class="form-control" value="<?php echo $fila['des_prod']?>"disabled>
                </div>

                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="text" id="precio" name="precio" class="form-control" value="$<?php echo $fila['precio_prod']?>"disabled>
                </div>

                <div class="form-group">
                  <label for="stock">En stock</label>
                  <input type="text" id="stock" name="stock" class="form-control" value="<?php echo $fila['stock_prod']?>"disabled>
                    
                  </br>
                  <div class="form-group">
                    <label for="venta">Cunatos deseas comprar</label>
                    <input type="number" id="venta" name="venta" min="1" max="<?php echo $fila['stock_prod']?>">           
                  </div>
                </div>

                <div class="form-group">
                    <label for="color">Colores disponibles</label>
                    <select name="color" id="color" class="form-control">
                        <option value="0">Seleccione el color:</option>
                        <?php
                        $consulta = "SELECT * FROM colores";
                        $resultado = mysqli_query($mysqli, $consulta);
                        while ($fila = mysqli_fetch_array($resultado))
                        
                        {
                            ?>
                            <option value="<?php echo $fila["id_color"]; ?>"><?php echo $fila["nombre_color"];?></option>
                            <?php
                        }
                        ?>
                    </select>                
                </div>
                <?php 
                  $consulta = "SELECT * FROM productos";
                  $resultado = mysqli_query($mysqli, $consulta);
                  $fila = mysqli_fetch_array($resultado)
                ?>
                <div class="form-group">
                    <input type="submit" value="Comprar" class="btn btn-success">
                </div>
  </form>           
</div>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>