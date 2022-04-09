<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>

<?php if($registros): ?>
          <?php foreach($registros as $reg): ?>
          <tr>
            <td><?php echo $reg->alias; ?></td>
             </tr>
         <?php endforeach; ?>
         <?php endif; ?>

         <h5 align=center>Tipo de Reserva</h5>

<div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th >Estacionamiento</th>
             <th >Tarifa por minuto</th>
             <th >Tarifa por dia</th>
             <th >Estado</th>
             
          </tr>
       </thead>
       <tbody>
		   <?php
				// Primero se revisa que el arreglo "registros" no este vacio (siempre la BD puede devolver NADA)
				// Luego apra cada Concierto (reg  --- por registro) en el listado dibujamos la tablita
				// Brujeria maxima nivel 1: ahcemos link a los ver pero pasando el ID !!!  Ojo que podemos hacerlo igual para modificar y eliminar

				// Recordar que los path de lso links SON los de los Routes no lo de los sistemas operativos

				// Los nombres de lso clases salen de acá
				// https://getbootstrap.com/docs/4.0/components/buttons/
				// Simpre respetar usar el mismo foramto
		   ?>
          <?php if($registros): ?>
          <?php foreach($registros as $reg): ?>
          <tr>
            <td align=center><?php echo $reg->nombre; ?></td>
            <td align=center><a href="<?php echo site_url('/concierto-ver/'.$reg->id);?>" class="btn btn-info btn-sm"><?php echo $reg->tarm; ?></a>
            <td align=center><a href="<?php echo site_url('/concierto-ver/'.$reg->id);?>" class="btn btn-info btn-sm"><?php echo $reg->tard; ?></a>
            <td align=center><?php echo $reg->estado; ?></td>
             </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
 
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>

<?= $this->endSection() ?>
 