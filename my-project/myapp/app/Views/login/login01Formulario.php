<?= $this->extend('/login/formausuario') ?>
<?= $this->section('contenido') ?>

<div class="mt-3">
 
  <div class="container mt-4" align="center" style="width:28%">
 <form class="form-signin" method="post" id="add_create" name="add_create" action="<?= site_url('login-login01Validar/') ?>">
      <img class="mb-4" src="img.jpg" alt="" width="72" height="72">
      <h5 class="h5 mb-5 font-weight-normal">Favor ingresa tus datos</h5>
      <label for="inputEmail" class="sr-only">Correo Electrónico</label>
      <input type="email" name="el_correo" id="el_correo" class="form-control" placeholder="Email address" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password" name ="la_clave" id="la_clave" class="form-control" placeholder="Password" required="">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesion</button>
      <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
    </form>
  </div>

 

  <?= $this->endSection() ?>