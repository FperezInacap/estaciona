<?= $this->extend('/login/formausuario2') ?>

<?= $this->section('contenido') ?>


<h6 align=center>Consulta Estacionamiento</h6>

<div class="mt-3" align="center">
  <select id="cod_estacionamiento" name="cod_estacionamiento">


    <?php if($registros): ?>
    <?php foreach($registros as $reg): ?>
    <option value="<?php echo$reg->id ?>"><?php echo $reg->nombre; ?></option>
    <?php endforeach; ?>
    <?php endif; ?>

  </select>

</div>

<div class="mt-3" align="center">
  <select id="est_estacionamiento" name="estado">
   
    <option value="Disponible">Disponible</option>
    <option value="Ocupado">Ocupado</option>
  
  </select>
  <br> <br>
  <input type="submit" value="buscar" class="btn btn-primary btn-sm" align="center">
</div>


<script>
  $(document).ready(function () {
    $('#users-list').DataTable();
  });
</script>

<?= $this->endSection() ?>
