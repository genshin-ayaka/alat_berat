<!DOCTYPE html>
<html>

<head>
    <title>Persewaan Alat Berat | Admin</title>
    <link rel="stylesheet" href="<?php echo base_url("public/assets/css/bootstrap.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("public/css/style.css"); ?>">
</head>

<body>
    <div class="content">
        <?php $this->load->view("menu/sidebar"); ?>
        <div class="add-button-container">
            <a href="<?php echo base_url('admin/create'); ?>" class="btn btn-success align-items-center p-1">
                <h6 class="m-1">Tambah Admin</h6>
            </a>
        </div>
        <div class="table-container">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($admins as $admin) { ?>
                        <tr class="text-center">
                            <td>
                                <?php echo $admin->id; ?>
                            </td>
                            <td>
                                <?php echo $admin->username; ?>
                            </td>
                            <td>
                                <a class="btn btn-primary"
                                    href="<?php echo base_url('admin/edit/' . $admin->id); ?>">Edit</a>
                                <button class="btn btn-danger" data-toggle="modal"
                                    data-target="#deleteModal<?php echo $admin->id; ?>">Delete</button>
                            </td>
                        </tr>
                        <div class="modal fade" id="deleteModal<?php echo $admin->id; ?>" tabindex="-1" role="dialog"
                            aria-labelledby="deleteModalLabel<?php echo $admin->id; ?>" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel<?php echo $admin->id; ?>">Delete Admin
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this admin?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <a class="btn btn-danger"
                                            href="<?php echo base_url('admin/delete/' . $admin->id); ?>">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>