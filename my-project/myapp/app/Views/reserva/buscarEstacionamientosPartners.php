<?= $this->extend('/login/formausuario') ?>

<?= $this->section('contenido') ?>
<!DOCTYPE html>
<html>

<div>
  Latitud: <?php echo $latitud*10000000 ?><br/>
  Longitud: <?php echo $longitud*10000000 ?><br/>
<?php 
$lat_entera = $latitud*10000000;
$long_entera = $longitud*10000000;
echo $lat_entera ." ". $long_entera;
?>

</div>


<h5 align="center">Buscar Estacionameinto</h5>
        <div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th >Estacionamiento</th>
             <th >Tarifa Promedio Minuto</th>
             <th >Tarifa promedio dia</th>
             <th >Direccion</th>
             <th >Latitud</th>
             <th >Longitud</th>
             
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
            <td align=center><a href="<?php echo site_url('/reserva-tarifaMinuto/'.$reg->alias);?>" class="btn btn-info btn-sm"><?php echo $reg->alias; ?></a>
            <td align=center><?php echo $reg->pmeddia;?></td>
            <td align=center><?php echo $reg->pmedmin;?></td>
            <td align=center><?php echo $reg->direst;?></td>
            <td align=center><?php echo $reg->latitud;?></td>
            <td align=center><?php echo $reg->longitud  ;?></td>
             </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>

  <div align="right"> <a href="<?php echo site_url('/login-volver/');?>" class="btn btn-secondary btn-sm">Volver</a></div>
  
 
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>

<?= $this->endSection() ?>


</body>
</html>



 
