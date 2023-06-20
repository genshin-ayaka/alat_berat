<!DOCTYPE html>
<?php require_once "application/helpers/url_helper.php"; ?>
<html>

<head>
    <title>Persewaan Alat Berat | Dashboard</title>
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
        <!-- <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <h6>Dashboard</h6>
                </li>
            </ol>
        </nav> -->

        <div class="dashboard-container">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Total Alat</h4>

                </div>
                <div class="card-footer">
                    <p>100</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Alat Yang Sedang Disewakan</h4>

                </div>
                <div class="card-footer">
                    <p>100</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Alat Yang Tersedia</h4>

                </div>
                <div class="card-footer">
                    <p>100</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Alat yang Dalam Perbaikan</h4>

                </div>
                <div class="card-footer">
                    <p>100</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Penyewa Aktif</h4>

                </div>
                <div class="card-footer">
                    <p>100</p>
                </div>
            </div>
        </div>

    </div>
</body>

</html>