<!DOCTYPE html>
<?php
require_once('application/helpers/url_helper.php');

?>
<html>

<head>
    <title>Persewaan Alat Berat | Alat</title>
    <link rel="stylesheet" href="<?php echo base_url(
        "public/assets/css/bootstrap.css"
    ); ?>">
    <link rel="stylesheet" href="<?php echo base_url(
        "public/css/style.css"
    ); ?>">
</head>

<body>
    <div class="content">
        <?php $this->load->view("menu/sidebar"); ?>
        <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <p>Data Alat</p>
                </li>
            </ol>
        </nav>
        <div class="add-button-container">
            <a href="<?php echo base_url('/equipments/add/') ?>" class="btn btn-success align-items-center p-1">
                <h6 class="m-1">Tambah Alat</h6>
            </a>
        </div>
        <div class="table-container">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No.</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($equipments as $equipment) { ?>
                        <tr class="text-center">
                            <td>
                                <?= $equipment->ID ?>
                            </td>
                            <td>
                                <?= $equipment->Merk ?>
                            </td>
                            <td>
                                <?= $equipment->Jenis ?>
                            </td>
                            <td>
                                <?= $equipment->Harga ?>
                            </td>
                            <td>
                                <?= $equipment->Jumlah ?>
                            </td>
                            <td>
                                <a class="btn btn-primary"
                                    href="<?php echo base_url('/equipments/edit/' . $equipment->ID) ?>">
                                    <i class="bi bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <button class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal<?= $equipment->ID ?>">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <div class="modal fade" id="deleteModal<?= $equipment->ID ?>" tabindex="-1"
                            aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Anda yakin ingin menghapus item ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                        <a href="<?php echo base_url('/equipments/delete/' . $equipment->ID) ?>"
                                            class="btn btn-danger">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var deleteModals = document.querySelectorAll('.modal');
            deleteModals.forEach(function (modal) {
                modal.addEventListener('show.bs.modal', function () {
                    var backdrop = document.createElement('div');
                    backdrop.classList.add('modal-backdrop', 'fade');
                    document.body.appendChild(backdrop);
                });

                modal.addEventListener('hidden.bs.modal', function () {
                    var backdrop = document.querySelector('.modal-backdrop');
                    document.body.removeChild(backdrop);
                });
            });
        });
    </script>
</body>

</html>