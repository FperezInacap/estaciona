<!DOCTYPE html>
<html>
    <body>

    <body onLoad="getLocation()">
</p>

<form name="lat_lon" method="post" action="<?php echo site_url('reserva-buscarConGeo') ?>">
    <input type="hidden" name="latitud" value="0"><BR>
    <input type="hidden" name="longitud" value="0"><BR>
    <input type="submit" style="color: transparent; background-color: transparent; border-color: transparent; cursor: default;" />
</form>
<script>

ll = document.forms[0];
var x = document.getElementById("la_lo");

function showPosition(position) {
   setLatLon( position.coords.latitude , position.coords.longitude);
}

function getLocation(){
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);        
  } else { 
      setLatLon(-1,-1);
  }
}


  function setLatLon(lat,lon){

    ll.latitud.value = lat;
    ll.longitud.value = lon;
    ll.submit();
}
</script> 
</body>
</html>