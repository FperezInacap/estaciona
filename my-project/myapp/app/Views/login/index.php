<?= $this->extend('/login/formausuario') ?>
<?= $this->section('contenido') ?>
<!DOCTYPE html>
<html>
<body onload="getLocation()">

<!--<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>-->

<div class="container mt-4" align="center" style="width:30%">
    <?php if(isset($_SESSION['USR'])) {
      
      $usr =   $_SESSION['USR'];
    ?>
    <img class="mb-4" src="\images\iconoestacionasmall.jpg" alt="" >
    <a href="<?php echo site_url('/reserva-buscarConGeo/') ?>" class="btn btn-lg btn-primary btn-block">Buscar</a>
    <a href="<?php echo site_url('/reserva-lista/') ?>" class="btn btn-lg btn-primary btn-block">Reservar</a>
    <?php }else{ ?>
    <p>
        Sin Conexion
    </p>
    <?php } ?>

</div>
<div class="container mt-5">
    <form method="post" id="add_create" name="add_create" action="<?php echo site_url('reserva-buscarConGeo') ?>">
      
      <div class="form-group">
      <input type="text" name="ide_estacionamiento" placeholder="Codigo de estacionamiento" class="form-control"/>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary btn-sm">Agregar</button>
       </div>
    </form>
  </div>
<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  var lat =  position.coords.latitude;
  var long = position.coords.longitude;
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
  console.log("Tu posision es...:" + lat + "," + long);
  windows.location = "Views/reserva/geolocalizacion.php?lat=" + lat;  

}
</script>
<?php
        $var_PHP = "<script> document.writeln(lat); </script>"; // igualar el valor de la variable JavaScript a PHP 

    echo $var_PHP   // muestra el resultado 

    ?>

<script>
  var lat =  "position.coords.latitude";
  var long = position.coords.longitude;
var variablejs = "contenido de la variable javascript" ;
</script>
<?php
//$variablephp = "<script> document.write(lat) </script>";
//echo "variablephp = $variablephp";
?>


</body>
</html>


<?= $this->endSection() ?>