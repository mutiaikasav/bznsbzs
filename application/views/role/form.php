<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?php base_url();?>/role" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-chevron-left fa-sm text-white-50"></i> Kembali</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= @$title;?> Hak Akses</h6>
        </div>
        <div class="card-body">
            <form action="<?php base_url();?>/role/save" method="post" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" class="form-control" value="<?= @$data[0]->id_role; ?>">
                <div class="form-group">
                    <label for="role_name">Nama Peran</label>
                    <input type="text" id="role_name" name="role_name" class="form-control" value="<?= @$data[0]->role_name; ?>">
                </div>
                <div class="form-group">
                    <label for="access">Akses</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="general" id="general" name="access[]">
                        <label class="form-check-label" for="general">General</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="muzakki" id="muzakki" name="access[]">
                        <label class="form-check-label" for="muzakki">Layanan Muzakki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="artikel" id="artikel" name="access[]">
                        <label class="form-check-label" for="artikel">Artikel</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="galeri" id="galeri" name="access[]">
                        <label class="form-check-label" for="galeri">Galeri</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="credentials" id="credentials" name="access[]">
                        <label class="form-check-label" for="credentials">Credentials</label>
                    </div>
                    <!-- <input type="text" id="access" name="access" class="form-control" value="<?= @$data[0]->access; ?>"> -->
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-icon-split form-control" type="submit">
                        <span class="icon text-white-50">
                            <i class="fas fa-save"></i>
                        </span>
                        <span class="text">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->