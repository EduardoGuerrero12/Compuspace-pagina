<?php include "../include/header.php"; ?>
<div class="row d-felx justify-content-center mt-5 mb-5">
    <div class="col-12 col-lg-6">
    </div>
    <div class="d-flex justify-content-between row">
<?php
include "./../include/config.php";
$peticion = "SELECT * FROM productos WHERE id = '".$_GET['idp']."'";
$resultado = mysqli_query($conexion, $peticion);
while($fila = mysqli_fetch_array($resultado)) {


?>

<div class="row">
    <h2 class="text-center text-white"><?php echo $fila ['nombre'] ?></h2>
    <div class="col-12 col-lg-4">
        <img class= "w-100"src="./../assets/resources/img/<?php echo $fila ['img'] ?>" alt="Error al cargar la imagen">
    </div>
    <div class="col-12 col-lg-8 mt-3 text-white">
        <p><strong>Descripción del producto: <br> </strong><?php echo $fila ['descripcion'] ?></strong></p>
        
        <p><strong>Precio del producto: <br> </strong>$<?php echo $fila ['precio'] ?></strong></p>
        
        <p><strong>Existencias del producto: <br>  </strong><?php echo $fila ['inventario'] ?> pz</strong></p>

        <a href="./" class="btn btn-secondary">Regresar</a>
    <a id="bcomprar" target="_blank" href="<?php echo $fila ['walink']?>"  class="btn btn-primary">comprar</a>
        
    </div>
    
</div>

<?php
     }
    ?>
    </div>
    

</div>

<?php include "../include/footer.php"; ?>