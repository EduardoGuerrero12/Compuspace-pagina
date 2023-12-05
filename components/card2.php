
<div class="d-flex justify-content-evenly row">
<?php
include "./../include/config.php";
$peticion = "SELECT * FROM productos WHERE recomendacion = 1 LIMIT 4";
$resultado = mysqli_query($conexion, $peticion);
while($fila = mysqli_fetch_array($resultado)) {


?>

<div class="card col-12 col-sm-12 col-md-6 col-lg-3 mb-5">
  <img src="./../assets/resources/img/<?php echo $fila ['img']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $fila ['nombre']?></h5>
    <p class="card-text"><?php echo $fila ['descripcion']?></p>
    <p class="card-text">$<?php echo $fila ['precio']?></p>
    <a href="producto.php?idp=<?php echo $fila['id']?>" class="btn btn-secondary">ver mas</a>
    <a id="bcomprar" class="btn btn-primary">Comprar</a>
  </div>
</div>

<?php
     }
    ?>
    </div>