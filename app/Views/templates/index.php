<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MTsN 4 Tanah Laut</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url(); ?>/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>/AdminLTE/dist/css/adminlte.min.css">
  <style>
    .alert-danger ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .alert-danger li {
        margin-left: 1.25em;
    }
</style>
</head>

<?= $this->renderSection('content') ?>

<!-- jQuery -->
<script src="<?= base_url(); ?>/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- Menghapus notifikasi setelah beberapa detik -->
<script>
  window.setTimeout(function(){
    $(".alert").fadeTo(500,0).slideUp(500, function(){
      $(this).remove();
    })
  }, 3000);
</script>
</body>
</html>
