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
  			<label>Tarifa por minuto:</label>
  			<?php echo($reserva->tarm); ?>
  		</div>

  		<div align=center>
		  <input id="appt-time" type="time" name="appt-time" value="<?php echo time();?>">
		
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