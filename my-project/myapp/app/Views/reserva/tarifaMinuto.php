<?= $this->extend('/login/formausuario') ?>

<?= $this->section('contenido') ?>
  <div class="container mt-5">
  	<?php if($reserva): ?>
		<div class="form-group" align=center>
     		<h6><?php echo($reserva->alias); ?></h6>	 
		<div class="form-group" align=center>
     	<label>Estacionamiento:</label>
		<?php echo($reserva->nombre); ?>	 
      </div>
      <div class="form-group" align=center>
        <label >Tarifa por minuto:</label>
		<?php echo($reserva->tarm); ?>	 
	  </div>
	   
  <?php
$mindate = date("d-m-Y");
$mintime = date("0:00");
$min = $mindate."T".$mintime;
$maxdate = date("Y-m-d");
$maxtime = date("0:00");
$max = $maxdate."T".$maxtime;
?>
<div align=center>
	Selecciona la hora de llegada para el dia <?php echo $mindate;?>: 
	<br><br>
<input type="time" style="width : 200px; heigth : 1px" class="form-control" id="time" name="time" required>

</div>
  		<a href="<?php echo site_url('/reserva-pagarReservaMinuto/'.$reserva->id);?>" class="btn btn-primary btn-sm">Reservar</a>
		<a href="<?php echo site_url('/reserva-lista/');?>" class="btn btn-secondary btn-sm">Volver</a>

	  </div>

      
	  <?php else :?>
	  <div class="form-group">
	  <a href="<?php echo site_url('/concierto-cancelar/');?>" class="btn btn-secondary btn-sm">Volver</a>
	  </div>	  
	  <?php endif; ?>

<?= $this->endSection() ?>