<?= $this->extend('/login/formausuario') ?>

<?= $this->section('contenido') ?>
	
<!--<button onclick="myFunction()">Try it</button>
<p id="demo"></p> -->
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
		<?php echo($reserva->tard); ?>	 
	  </div>
      <div class="form-group" align=center>
        <label for="">Dia de reserva</label>
        <input id="fechaReserva" type="date" name="diaReserva" step="1" min="<?php echo date("Y-m-d");?>" max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>">
        
    </div>
        <div class="form-group" align=center>
      
      <a href="<?php echo site_url('/reserva-pagarReservaDia/'.$reserva->id);?>" onclick="myFunction()" class="btn btn-primary btn-sm">Reservar</a>
		<a href="<?php echo site_url('/reserva-lista/');?>" class="btn btn-secondary btn-sm">Volver</a>
       </div>
      
	  <?php else :?>
	  <div class="form-group">
	  <a href="<?php echo site_url('/concierto-cancelar/');?>" class="btn btn-secondary btn-sm">Volver</a>
	  </div>	  
	  <?php endif; ?>

      
<script>

function myFunction() {
    var fecha = document.getElementById("fechaReserva").value;
    document.getElementById("demo").innerHTML = fecha;
}
</script>
<?= $this->endSection() ?>