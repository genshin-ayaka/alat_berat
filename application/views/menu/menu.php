<head>
  <link rel="stylesheet" href="<?php echo base_url('public/assets/css/bootstrap.css'); ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo base_url('public/css/style.css'); ?>">
  <script src="<?php echo base_url('public/assets/js/bootstrap.js'); ?>"></script>
</head>

<nav class="top-menu">
  <ul>
    <li><button type="button" class="btn">Home</button></li>
    <li><button type="button" class="btn">Tentang Kami</button></li>
    <li><button type="button" class="btn">Hubungi Kami</button></li>
  </ul>
  <div class="login-container">
    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#loginModal">Masuk</button>
  </div>
</nav>

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="loginModalLabel">Masuk</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <?php echo form_open('home/login'); ?>
      <div class="modal-body">
        <div class="input-group mb-3">
          <span class="input-group-text" id="username"><i class="bi bi-person"></i></span>
          <input type="text" class="form-control" placeholder="Nama Pengguna" aria-label="Username"
            aria-describedby="username" name="username">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="password"><i class="bi bi-lock"></i></span>
          <input type="password" class="form-control" placeholder="Kata Sandi" aria-label="Password"
            aria-describedby="password" name="password">
        </div>
      </div>
      <div class="modal-footer d-grid gap-2 d-md-block">
        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
        <?php if ($this->session->flashdata('error')) { ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php } ?>
        <div class="d-grid w-100">
          <button class="btn btn-outline-primary" type="submit">Masuk</button>
        </div>
      </div>

    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var loginModal = document.getElementById('loginModal');
    var loginButton = document.querySelector('.login-container button');

    loginButton.addEventListener('click', function () {
      var modal = new bootstrap.Modal(loginModal);
      modal.show();
    });

    // Tambahkan kode berikut
    <?php if ($this->session->flashdata('error')) { ?>
      var modal = new bootstrap.Modal(loginModal);
      modal.show();
    <?php } ?>
  });
</script>