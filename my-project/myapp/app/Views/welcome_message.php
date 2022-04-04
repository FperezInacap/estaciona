<?= $this->extend('formaStandar') ?>
<?= $this->section('contenido') ?>
<div>
						<ul>
				<li><a href="<?php echo site_url('/base-lista/') ?>" >Solo Navegacion</a> </li>
				<li><a href="<?php echo site_url('/concierto-lista/') ?>">CRUD conciertos</a> </li>
			</ul>
</div>
<?= $this->endSection() ?>