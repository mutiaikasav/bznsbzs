<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Data Kerjasama</h1>
        <a href="collaboration-add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kerjasama</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Logo</th>
                            <th>Nama</th>
                            <th>Link</th>
                            <th>Deskripsi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach ($data as $collaboration) { ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><img src="<?= base_url('assets/img/collab/'.$collaboration->logo_collab.'')?>" alt="" width="100"></td>
                            <td><?= $collaboration->name_collab; ?></td>
                            <td><?= $collaboration->link; ?></td>
                            <td><?= $collaboration->description_collab; ?></td>
                            <td>
                                <a href="collaboration-edit/<?= $collaboration->id_collaboration; ?>" class="btn btn-warning btn-circle btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a type="button" onclick="hapus('<?php base_url()?>/collaboration-delete/<?= $collaboration->id_collaboration; ?>')" class="btn btn-danger btn-circle btn-sm">
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