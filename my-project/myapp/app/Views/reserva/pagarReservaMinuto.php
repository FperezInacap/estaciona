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
        <label >Tarifa por Minuto:</label>
		<?php echo($reserva->tarm); ?>	 
	  </div>
      <div class="form-group" align=center>
        <label for="">Dia de reserva</label>
        <?php echo date("d-m-Y");?>
        
    </div>
        <div class="form-group" align=center>
      
      <a href="<?php echo site_url('/reserva-pagaReserva/'.$reserva->id);?>" onclick="myFunction()" class="btn btn-primary btn-sm">Pagar</a>
		<a href="<?php echo site_url('/reserva-lista/');?>" class="btn btn-secondary btn-sm">Volver</a>
       </div>
      
	  <?php else :?>
	  <div class="form-group">
	  <a href="<?php echo site_url('/concierto-cancelar/');?>" class="btn btn-secondary btn-sm">Volver</a>
	  </div>	  
	  <?php endif; ?>

    <?//=$msg?>
<?= $this->endSection() ?>
 
