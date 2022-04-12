<?= $this->extend('/login/formausuario') ?>
<?= $this->section('contenido') ?>

<div>
    <?php if(isset($_SESSION['USR'])) {
      
      $usr =   $_SESSION['USR'];
    ?>
    <p>
        <ul>
        <li><a href="<?php echo site_url('/reserva-lista/') ?>">Reservar</a> </li>
        </ul>
    </p>
    <?php }else{ ?>
    <p>
        Sin Conexion
    </p>
    <?php } ?>

</div>

<?= $this->endSection() ?>