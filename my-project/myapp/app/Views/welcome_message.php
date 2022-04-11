<?= $this->extend('formaStandar') ?>
<?= $this->section('contenido') ?>
<div>
				<ul>
				<li><a href="<?php echo site_url('/reserva-lista/') ?>" >Reserva</a> </li>
				<li><a href="<?php echo site_url('/login/') ?>">Ejemplo Login</a> </li>
			</ul>
</div>
<?= $this->endSection() ?>