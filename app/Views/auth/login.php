<?= $this->extend('auth/templates/index') ?>
<?= $this->section('content') ?>

<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h1><b>Masuk</b></h1>
    </div>
    <div class="card-body">
    <?php 
    $errors = session()->getFlashdata('errors');
    if (! empty($errors)): ?>
    <div class="alert alert-danger" role="alert">
        <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach ?>
        </ul>
    </div>
    <?php endif ?>
    <?php if(session()->getFlashdata('pesan')){
      echo '<div class="alert alert-danger" role="alert">';
      echo session()->getFlashdata('pesan');
      echo '</div>';
    } ?>
      <form action="/auth/cekLogin">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
        <div class="social-auth-links text-center mt-2 mb-3">
          <a href="#" class="btn btn-block btn-success">
            Belum Punya Akun ?
        </a>
      </div>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<?= $this->endSection('content') ?>
