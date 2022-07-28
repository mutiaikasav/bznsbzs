<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Data Hak Akses</h1>
        <a href="role-add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Hak Akses</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Akses</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach ($data as $role) { ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $role->role_name; ?></td>
                            <td><?= $role->access; ?></td>
                            <td>
                                <a href="role-edit/<?= $role->id_role; ?>" class="btn btn-warning btn-circle btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="role-delete/<?= $role->id_role; ?>" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php $i++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->