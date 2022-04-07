<?= $this->extend('formaStandar') ?>
<?= $this->section('contenido') ?>
<div>
			<h1> Ejemplos</h1>
			<ul>
				<li><a href="<?php echo site_url('/base-lista/') ?>" >Solo Navegacion</a> </li>
				<li><a href="<?php echo site_url('/concierto-lista/') ?>">CRUD conciertos</a> </li>
				<li><a href="<?php echo site_url('/login/') ?>">Ejemplo Login</a> </li>
			</ul>
</div>
<?= $this->endSection() ?>