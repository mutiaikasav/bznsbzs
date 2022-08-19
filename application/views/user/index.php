<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Data Mustahik/Muzakki/Donatur</h1>
        <!-- <a href="user-add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah</a> -->
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Mustahik/Muzakki/Donatur</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Panggilan</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>No telepon</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach ($data as $user) { ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><img src="<?= base_url()?>/assets/img/user/<?= $user->photo?>" alt="" width="100"></td>
                            <td><?= $user->name_user; ?></td>
                            <td><?= $user->panggilan; ?></td>
                            <td><?= $user->username; ?></td>
                            <td><?= $user->email; ?></td>
                            <td><?= $user->phone; ?></td>
                            <td>
                                <a href="user-edit/<?= $user->id_user; ?>" class="btn btn-warning btn-circle btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a type="button" onclick="hapus('<?php base_url()?>/user-delete/<?= $user->id_user; ?>')" class="btn btn-danger btn-circle btn-sm">
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