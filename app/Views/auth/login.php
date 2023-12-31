<?= $this->extend('templates/index') ?>
<?= $this->section('content') ?>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <h1><b>Masuk</b></h1>
      </div>
      <div class="card-body">
        <?php
        $errors = session()->getFlashdata('errors');
        if (!empty($errors)) : ?>
          <div class="alert alert-danger" role="alert">
            <ul>
              <?php foreach ($errors as $error) : ?>
                <li><?= esc($error) ?></li>
              <?php endforeach ?>
            </ul>
          </div>
        <?php endif ?>
        <?php
        if (session()->getFlashdata('pesan')) {
          echo '<div class="alert alert-success" role="alert">';
          echo session()->getFlashdata('pesan');
          echo '</div>';
        } ?>
        <form action="/checkLogin" method="post">
          <?= csrf_field(); ?>
          <div class="input-group mb-3">
            <input type="text" name="username-email" class="form-control" placeholder="Username atau Email">
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
        <div class="social-auth-links text-center mt-2">
          <a href="<?= base_url('register') ?>" class="btn btn-block btn-success">
            Belum Punya Akun ?
          </a>
        </div>
        <hr class="m-0 p-0">
        <div class="social-auth-links text-center ">
          <a href="<?= base_url('') ?>" class="btn btn-block btn-info">
            Beranda
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