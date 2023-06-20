<!DOCTYPE html>
<?php
require_once('application/helpers/url_helper.php');
?>
<html>

<head>
    <title>Admin Form</title>
    <link rel="stylesheet" href="<?php echo base_url("public/assets/css/bootstrap.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("public/css/style.css"); ?>">
</head>

<body>
    <div class="content">
        <?php $this->load->view("menu/sidebar"); ?>
        <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">
                    <a href="<?php echo base_url("/tenants") ?>">
                        <p>Data Admin</p>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?php echo isset($is_edit) && $is_edit === true ? "<p>Edit Penyewa</p>" : "<p>Tambah Penyewa</p>" ?>
                </li>
            </ol>
        </nav>
        <div class="row justify-content-center form-container">
            <div class="col-lg-6">
                <?php echo form_open(isset($admin) ? 'admin/update/' . $admin->id : 'admin/store'); ?>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username"
                        value="<?php echo isset($admin) ? $admin->username : ''; ?>">
                    <?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        value="<?php echo isset($admin) ? $admin->password : ''; ?>">
                    <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
                </div>
                <button type="submit" class="btn btn-primary">
                    <?php echo isset($admin) ? 'Update' : 'Submit'; ?>
                </button>
                <a href="<?php echo base_url('admin'); ?>" class="btn btn-danger">Cancel</a>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</body>

</html>