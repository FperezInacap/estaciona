<?= $this->extend('formaStandar') ?>
<?= $this->section('contenido') ?>
<div>
				<ul>
				<li><a href="<?php echo site_url('/reserva-lista/') ?>" >Reserva</a> </li>
				<li><a href="<?php echo site_url('/reserva-tarifaMinuto/') ?>">Tarifa por Minuto</a> </li>
				<li><a href="<?php echo site_url('/reserva-tarifaHora/') ?>">Tarifa por Hora</a> </li>
				<li><a href="<?php echo site_url('/login/') ?>">Ejemplo Login</a> </li>
			</ul>
</div>
<?= $this->endSection() ?>