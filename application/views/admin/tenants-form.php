<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persewaan Alat Berat |
        <?php echo isset($is_edit) && $is_edit === true ? "Edit" : "Tambah" ?> Penyewa
    </title>
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
                        <p>Data Penyewa</p>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?php echo isset($is_edit) && $is_edit === true ? "<p>Edit Penyewa</p>" : "<p>Tambah Penyewa</p>" ?>
                </li>
            </ol>
        </nav>
        <div class="row justify-content-center form-container">
            <div class="col-lg-6">
                <?php echo isset($is_edit) && $is_edit === true ? form_open("tenants/update/" . $tenant->id) : form_open("tenants/store"); ?>
                <div class="mb-3">
                    <label for="nama_penyewa" class="form-label">Nama Penyewa</label>
                    <input type="text" class="form-control" id="nama_penyewa" name="nama_penyewa"
                        value="<?php echo isset($tenant) ? $tenant->nama_penyewa : ''; ?>">
                </div>
                <div class="mb-3">
                    <label for="usia" class="form-label">Usia</label>
                    <input type="number" class="form-control" id="usia" name="usia"
                        value="<?php echo isset($tenant) ? $tenant->usia : ''; ?>">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin"
                        value="<?php echo isset($tenant) ? $tenant->jenis_kelamin : ''; ?>">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat"
                        value="<?php echo isset($tenant) ? $tenant->alamat : ''; ?>">
                </div>
                <div class="mb-3">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                        value="<?php echo isset($tenant) ? $tenant->pekerjaan : ''; ?>">
                </div>
                <div class="mb-3">
                    <label for="cperson" class="form-label">CPerson</label>
                    <input type="text" class="form-control" id="cperson" name="cperson"
                        value="<?php echo isset($tenant) ? $tenant->cperson : ''; ?>">
                </div>
                <div class="mb-3">
                    <label for="perusahaan" class="form-label">Perusahaan</label>
                    <input type="text" class="form-control" id="perusahaan" name="perusahaan"
                        value="<?php echo isset($tenant) ? $tenant->perusahaan : ''; ?>">
                </div>
                <button type="submit" class="btn btn-primary">
                    <?php echo isset($is_edit) && $is_edit === true ? "Simpan" : "Tambah" ?>
                </button>
                <a href="<?php echo base_url('/tenants'); ?>">
                    <button class="btn btn-danger" type="button">Batal</button>
                </a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>