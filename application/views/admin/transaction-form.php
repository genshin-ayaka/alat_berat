<!DOCTYPE html>
<html>

<head>
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
        <?php echo isset($is_edit) && $is_edit === true ? form_open("transaction/update/" . $tenant->id) : form_open("transaction/store"); ?>
        <div class="row justify-content-center form-container">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="idpenyewa" class="form-label">Penyewa</label>
                    <select class="form-control" id="idpenyewa" name="idpenyewa">
                        <?php foreach ($penyewa as $data) { ?>
                            <option value="<?php echo $data->id; ?>" <?php if ($data->id == isset($transaction) ? $transaction->id : '')
                                   echo "selected"; ?>>
                                <?php echo $data->nama_penyewa; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="idalat" class="form-label">Alat</label>
                    <select class="form-control" id="idalat" name="idalat">
                        <?php foreach ($alat as $data) { ?>
                            <option value="<?php echo $data->ID; ?>" <?php if ($data->ID == isset($transaction) ? $transaction->ID : '')
                                   echo "selected"; ?>>
                                <?php echo $data->Merk; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tgltransaksi" class="form-label">Tanggal Transaksi</label>
                    <input type="date" class="form-control" id="tgltransaksi" name="tgltransaksi"
                        value="<?php echo isset($transaction) ? $transaction->tgltransaksi : ''; ?>">
                </div>
                <div class="mb-3">
                    <label for="lamasewa" class="form-label">Lama Sewa</label>
                    <input type="text" class="form-control" id="lamasewa" name="lamasewa"
                        value="<?php echo isset($transaction) ? $transaction->lamasewa : ''; ?>">
                </div>
                <div class="mb-3">
                    <label for="tglbatassewa" class="form-label">Tanggal Batas Sewa</label>
                    <input type="date" class="form-control" id="tglbatassewa" name="tglbatassewa"
                        value="<?php echo isset($transaction) ? $transaction->tglbatassewa : ''; ?>">
                </div>
                <div class="mb-3">
                    <label for="jmlsewa" class="form-label">Jumlah Sewa</label>
                    <input type="text" class="form-control" id="jmlsewa" name="jmlsewa"
                        value="<?php echo isset($transaction) ? $transaction->jmlsewa : ''; ?>">
                </div>
                <div class="mb-3">
                    <label for="totalbiayasewa" class="form-label">Total Biaya Sewa</label>
                    <input type="text" class="form-control" id="totalbiayasewa" name="totalbiayasewa"
                        value="<?php echo isset($transaction) ? $transaction->totalbiayasewa : ''; ?>">
                </div>
                <div class="mb-3">
                    <label for="keterlambatan" class="form-label">Keterlambatan</label>
                    <input type="text" class="form-control" id="keterlambatan" name="keterlambatan"
                        value="<?php echo isset($transaction) ? $transaction->keterlambatan : ''; ?>">
                </div>
                <div class="mb-3">
                    <label for="denda" class="form-label">Denda</label>
                    <input type="text" class="form-control" id="denda" name="denda"
                        value="<?php echo isset($transaction) ? $transaction->denda : ''; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?php echo base_url('transactions'); ?>" class="btn btn-danger">Cancel</a>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>