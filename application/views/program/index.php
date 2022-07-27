<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Data Program</h1>
        <a href="program-add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Program</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Logo</th>
                            <th>Nama Program</th>
                            <th>Deskripsi</th>
                            <th>Cover Image</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach ($data as $program) { ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $program->logo; ?></td>
                            <td><?= $program->program_name; ?></td>
                            <td><?= $program->description_program; ?></td>
                            <td><?= $program->cover_image_program; ?></td>
                            <td>
                                <a href="program-edit/<?= $program->id_program; ?>" class="btn btn-warning btn-circle btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="program-delete/<?= $program->id_program; ?>" class="btn btn-danger btn-circle btn-sm">
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