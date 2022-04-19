<?= $this->extend('/login/formausuario') ?>

<?= $this->section('contenido') ?>


         <h6 align=center>Consulta Estacionamiento</h6>

<div class="mt-3" align="center">
                <select id="cars" name="cars">
               
            
            <?php if($registros): ?>
            <?php foreach($registros as $reg): ?>
            <option value="volvo"><?php echo $reg->nombre; ?></option>
             <?php endforeach; ?>
            <?php endif; ?>
        
        
        
        </select>
         
      </div>
 
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>

<?= $this->endSection() ?>
 
