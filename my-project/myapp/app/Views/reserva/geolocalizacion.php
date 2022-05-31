
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mapa Estaciona</title>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAw6WsNzg_29tKLgEulinYe-16IJ2dI2K0&callback=initMap"></script>
  
 <script>
      var map;
      var marker;
      var WatchID;
      var geoLoc;

      function initMap(){
        const myLatLng =  {lat: -33.4051, lng:  -70.6826};
        map = new google.maps.Map(document.getElementById("map"), {
            zoom: 13,
            center: myLatLng,
         });
         marker = new google.maps.Marker({
           position: myLatLng,
           map,
           title:"Mi Ubicación"
         });
         marker = new google.maps.Marker({
           position: {lat: -33.4046, lng:  -70.6663},
           map,
           title:"Estacionamiento 1"
         });  
         marker = new google.maps.Marker({
           position: {lat: -33.4680, lng:  -70.6262},
           map,
           title:"Estacionamiento 2"
         });
         getPosition()
      }

      function getPosition(){
    if (navigator.geolocation) {
        var options= {timeout:60000};
        geoLoc = navigator.geolocation;
        watchId =geoLoc.watchPosition(showLocationOnMap, errorHandler,options);

}else{
  alert("No soporta Geolocalizacion");
}
}
 
    function showLocationOnMap(position){
        var latitud = position.coords.latitude;
        var longitud = position.coords.longitude;
        console.log(latitud +longitud);
        const myLatLng = {lat: latitud, lang: longitud};
        marker.setPosition(myLatLng);
        map.setCenter(myLatLng);

        

    }

    function errorHandler(err){
        if(err.code == 1){
        alert("Error: acceso denegado.");
        } else if(err.code==2){
          alert("error posision no se encuentra");

        }

    }
 
 
    </script>
 <style type="text/css">
#map {
  height: 80%;
  width:  70%;
}

html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}
</style>
  </head>
  <body>
    <div id="map"></div>
     
</body>
</html>