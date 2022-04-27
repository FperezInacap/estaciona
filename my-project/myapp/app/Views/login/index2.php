<?= $this->extend('/login/formausuario2') ?>
<?= $this->section('contenido') ?>

<div class="container mt-4" align="center" style="width:30%">
    <?php if(isset($_SESSION['USR'])) {
      
      $usr =   $_SESSION['USR'];
    ?>
    <img class="mb-4" src="\images\iconoestacionasmall.jpg" alt="" >
    <a href="<?php echo site_url('/reserva-consultarEstacionamiento/') ?>" class="btn btn-lg btn-primary btn-block">Consultar</a>
    <?php }else{ ?>
    <p>
        Sin Conexion
    </p>
    <?php } ?>

</div>

<?= $this->endSection() ?>