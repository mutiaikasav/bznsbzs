<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?php base_url();?>/collaboration" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-chevron-left fa-sm text-white-50"></i> Kembali</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= @$title;?> Kerjasama</h6>
        </div>
        <div class="card-body">
            <form action="<?php base_url();?>/collaboration/save" method="post" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" class="form-control" value="<?= @$data[0]->id_collaboration; ?>">
                <div class="form-group">
                    <label for="image">Logo</label>
                    <input type="file" id="logo_collab" name="logo_collab" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name_collab">Nama</label>
                    <input type="text" id="name_collab" name="name_collab" class="form-control" value="<?= @$data[0]->name_collab; ?>">
                </div>
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" id="link" name="link" class="form-control" value="<?= @$data[0]->link; ?>">
                </div>
                <div class="form-group">
                    <label for="description_collab">Deskripsi</label>
                    <input type="text" id="description_collab" name="description_collab" class="form-control" value="<?= @$data[0]->description_collab; ?>">
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