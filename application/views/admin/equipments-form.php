<!DOCTYPE html>
<?php
require_once('application/helpers/url_helper.php');
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persewaan Alat Berat |
        <?php echo isset($is_edit) && $is_edit === true ? "Edit" : "Tambah" ?> Alat
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
                    <a href="<?php echo base_url("/equipments") ?>">
                        <p>Data Alat</p>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?php echo isset($is_edit) && $is_edit === true ? "<p>Edit Alat</p>" : "<p>Tambah Alat</p>" ?>
                </li>
            </ol>
        </nav>
        <div class=" row justify-content-center">
            <div class="col-lg-6">
                <?php echo isset($is_edit) && $is_edit === true ? form_open('equipments/update/' . $equipment->ID) : form_open('equipments/store'); ?>
                <div class="mb-3">
                    <label for="Merk" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="Merk" name="Merk"
                        value="<?php echo isset($equipment) ? $equipment->Merk : ''; ?>">
                </div>
                <div class="mb-3">
                    <label for="Jenis" class="form-label">Jenis</label>
                    <input type="text" class="form-control" id="Jenis" name="Jenis"
                        value="<?php echo isset($equipment) ? $equipment->Jenis : ''; ?>">
                </div>
                <div class="mb-3">
                    <label for="Harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="Harga" name="Harga"
                        value="<?php echo isset($equipment) ? $equipment->Harga : ''; ?>">
                </div>
                <div class="mb-3">
                    <label for="Jumlah" class="form-label">Jumlah</label>
                    <input type="number" class="form-control" id="Jumlah" name="Jumlah"
                        value="<?php echo isset($equipment) ? $equipment->Jumlah : ''; ?>">
                </div>
                <button type="submit" class="btn btn-primary">
                    <?php echo isset($is_edit) && $is_edit === true ? "Simpan" : "Tambah" ?>
                </button>
                <a href="<?php echo base_url('/equipments'); ?>">
                    <button class="btn btn-danger" type="button">Batal</button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>