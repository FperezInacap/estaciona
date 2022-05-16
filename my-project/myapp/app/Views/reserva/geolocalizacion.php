<!DOCTYPE html>
<html>
<body onload="getLocation()">

<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

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
  windows.location = "geolocalizacion.php?lat=" + lat;  

    
    

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
$variablephp = "<script> document.write(lat) </script>";
echo "variablephp = $variablephp";
?>


</body>
</html>
