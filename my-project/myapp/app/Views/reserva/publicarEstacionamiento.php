<?= $this->extend('/login/formausuario2') ?>

<?= $this->section('contenido') ?>



 <h6 align=center>Publicar Estacionamiento</h6>
<div class="container mt-4" align="center" style="width:28%">


  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/estacionamiento-agregar-continuar') ?>">
      
      <div class="form-group">
      <select id="cod_estac_partner" name="cod_estac_partner">
      <?php if($registros2): ?>
      <?php foreach($registros2 as $reg): ?>
      <option value="<?php echo $reg->ide; ?>"><?php echo $reg->alias; ?></option>
      <?php endforeach; ?>
      <?php endif; ?>
      </select>
      </div

       <br>
      <div class="form-group">
      <input type="text" name="codigo_estacionamiento" placeholder="Codigo de estacionamiento" class="form-control"/>
      </div>
      <div class="form-group">
      <input type="text" name="estado" class="form-control"  placeholder="Estado"/>
      </div>
      <div class="form-group">
      <input type="text" name="tarifa_dia" class="form-control"  placeholder="Tarifa $ x día"/>
      </div>
      <div class="form-group">
      <input type="text" name="tarifa_minuto" class="form-control"  placeholder="Tarifa $ x minuto"/>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary btn-sm">Agregar</button>
      <a href="<?php echo site_url('/login-login02Validar/');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </form>
  </div>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          concierto: {
            required: true,
            maxlength: 100
          },
          ubicacion: {
            required: true,
            maxlength: 150
          },
        },
        messages: {
          concierto: {
            required: "El nombre del conciorto es obligatorio",
            maxlength: "El nombe del concierto a lo más es de 100 caracteres.",
          },
          ubicacion: {
            required: "El nombre de la ubicación es obligatorio",
            maxlength: "La ubcicación a lo más es de 150 caracteres.",
          },
        },
      })
    }
  </script>
  

</div>


<script>
  $(document).ready(function () {
    $('#users-list').DataTable();
  });
</script>

<?= $this->endSection() ?>
