<?= $this->extend('/login/formausuario') ?>

<?= $this->section('contenido') ?>
<!DOCTYPE html>
<html>
<body>

<h1>Mapa estaciona</h1>

<div align="center" id="googleMap" style="width:50%;height:400px;align:center"></div>

<script>
function myMap() {
var mapProp= {
  
  center:new google.maps.LatLng(-33.4051476,-70.6827313),
  zoom:15,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAw6WsNzg_29tKLgEulinYe-16IJ2dI2K0&callback=myMap"></script>
<?= $this->endSection() ?>
</body>
</html>   