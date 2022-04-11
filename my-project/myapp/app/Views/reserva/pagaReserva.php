<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
<p id="fecha"></p>
  <div class="container mt-5">
  	<?php if($reserva): ?>
      <div class="form-group" align=center>
     	<label>Estacionamiento:</label>
		<?php echo($reserva->nombre); ?>	 
      </div>
      <div class="form-group" align=center>
        <label >Tarifa por minuto:</label>
		<?php echo($reserva->tarm); ?>	 
	  </div>
      <div class="form-group" align=center>
		<a href="<?php echo site_url('/concierto-editar/'.$reserva->id);?>" class="btn btn-primary btn-sm">Editar</a>
		<a href="<?php echo site_url('/concierto-eliminar/'.$reserva->id);?>" class="btn btn-danger btn-sm">Borrar</a>
		<a href="<?php echo site_url('/concierto-cancelar/');?>" class="btn btn-secondary btn-sm">Volver</a>
	  </div>
	  <?php else :?>
	  <div class="form-group">
	  <a href="<?php echo site_url('/concierto-cancelar/');?>" class="btn btn-secondary btn-sm">Volver</a>
	  </div>	  
	  <?php endif; ?>
      <script>

function myFunction() {
    var fecha = document.getElementById("fechaReserva").value;
    //document.getElementById("demo").innerHTML = fecha;
}
</script>
<?= $this->endSection() ?>