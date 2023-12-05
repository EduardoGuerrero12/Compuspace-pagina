<div id="carouselExampleControls" class="carousel slide w-100 carrusel" data-bs-ride="carousel">
  <div class="carousel-inner">
<?php
include "./../include/config.php";
$peticion = "SELECT * FROM slider";
$resultado = mysqli_query($conexion, $peticion);
while($fila = mysqli_fetch_array($resultado)) {

?>

    <div class="carousel-item <?php echo $fila ['estado'];?>" class="d-block w-100 img-carrusel" alt="...">
      <img src="./../assets/resources/img/<?php echo $fila ['img'];?>" class="d-block w-100 img-carrusel" alt="...">
    </div>
    <?php
     }
    ?>
    
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>