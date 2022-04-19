<?= $this->extend('/login/formausuario') ?>

<?= $this->section('contenido') ?>

  <div class="container mt-5">
  	<?php if($reserva): ?>
      <div class="form-group" align=center>
     		<h6><?php echo($reserva->alias); ?></h6>	 
      </div>
      <div class="form-group" align=center>
     	<label>Estacionamiento:</label>
		<?php echo($reserva->nombre); ?>	 
      </div>
      <div class="form-group" align=center>
        <label >Tarifa por dia:</label>
		<?php echo($reserva->tarm); ?>	 
	  </div>
      <div class="form-group" align=center>
        <label for="">Hora de reserva</label>
        <form action="<?= site_url('/PagarReservaMinutoController/hora') ?>" method=post>
            <input type='time'  required='required' name='hora' value='00:00:00' step='1' >
            <br><br><input type='submit'  class="btn btn-primary btn-sm" value='Pagar' onclick="<?= site_url('/PagarReservaMinutoController/hora') ?>">
            <a href="<?php echo site_url('/reserva-pagarReservaMinuto/'.$reserva->id);?>"  onclick="myFunction()"class="btn btn-secondary btn-sm">Viculo</a>
            <a href="<?php echo site_url('/reserva-lista/');?>" class="btn btn-secondary btn-sm">Volver</a>
        </form>
        
    </div>
       <!-- <div class="form-group" align=center>
      
      <a href="<?php echo site_url('/reserva-pagaReserva/'.$reserva->id);?>" onclick="myFunction()" class="btn btn-primary btn-sm">Pagar</a>
		
       </div> -->
      
	  <?php else :?>
	  <div class="form-group">
	  <a href="<?php echo site_url('/concierto-cancelar/');?>" class="btn btn-secondary btn-sm">Volver</a>
	  </div>	  
	  <?php endif; ?>

<?= $this->endSection() ?>