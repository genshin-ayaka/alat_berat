<head>
  <link rel="stylesheet" href="<?php echo base_url('public/assets/css/bootstrap.css'); ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo base_url('public/css/style.css'); ?>">
  <script src="<?php echo base_url('public/assets/js/bootstrap.js'); ?>"></script>
</head>

<?php
$current_url = uri_string();

echo '<script>';
echo 'console.log(" Halaman ' . $current_url . '");';
echo '</script>';

if (strpos($current_url, 'dashboard') !== false) {
  $active_menu = 'dashboard';
} elseif (strpos($current_url, 'equipments') !== false) {
  $active_menu = 'equipments';
} elseif (strpos($current_url, 'tenants') !== false) {
  $active_menu = 'tenants';
} elseif (strpos($current_url, 'transaction') !== false) {
  $active_menu = 'transaction';
} elseif (strpos($current_url, 'reports') !== false) {
  $active_menu = 'reports';
} else {
  $active_menu = '';
}
?>

<nav class="top-menu">
  <ul>
    <li>
      <a href="<?php echo base_url('/dashboard'); ?>" <?php echo ($active_menu === 'dashboard' ? 'class="btn btn-active"' : 'class="btn"') ?>>Dashboard</a>
    </li>
    <li>
      <a href="<?php echo base_url('/equipments'); ?>" <?php echo ($active_menu === 'equipments' ? 'class="btn btn-active"' : 'class="btn"') ?>>Data Alat</a>
    </li>
    <li>
      <a href="<?php echo base_url('/tenants'); ?>" <?php echo ($active_menu === 'tenants' ? 'class="btn btn-active"' : 'class="btn"') ?>>Data Penyewa</a>
    </li>
    <li>
      <a href="<?php echo base_url('/transaction'); ?>" <?php echo ($active_menu === 'transaction' ? 'class="btn btn-active"' : 'class="btn"') ?>>Transaksi</a>
    </li>
    <li>
      <a href="<?php echo base_url('/reports'); ?>" <?php echo ($active_menu === 'reports' ? 'class="btn btn-active"' : 'class="btn"') ?>>Laporan</a>
    </li>
  </ul>
  <div class="login-container">
    <li>
      <a href="<?php echo base_url('/admin'); ?>" <?php echo ($active_menu === 'admin' ? 'class="btn btn-active"' : 'class="btn"') ?>>Kelola Admin</a>
    </li>
    <button type="button" class="btn sign-out btn">Keluar</button>
  </div>
</nav>

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="loginModalLabel">Konfirmasi Keluar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda Yakin Ingin Keluar?</p>
      </div>
      <div class="modal-footer d-grid gap-2 d-md-block">
        <div class="d-grid w-100">
          <a href="<?php echo base_url('/'); ?>">
            <button class="btn btn-outline-primary" type="button">Keluar</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var loginModal = document.getElementById('loginModal');
    var loginButton = document.querySelector('.login-container .sign-out');

    loginButton.addEventListener('click', function () {
      var modal = new bootstrap.Modal(loginModal);
      modal.show();
    });
  });
</script>