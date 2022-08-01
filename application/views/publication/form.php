<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?php base_url();?>/publication" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-chevron-left fa-sm text-white-50"></i> Kembali</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= @$title;?> Publikasi</h6>
        </div>
        <div class="card-body">
            <form action="<?php base_url();?>/publication/save" method="post" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" class="form-control" value="<?= @$data[0]->id_publication; ?>">
                <div class="form-group">
                    <label for="title_publication">Judul</label>
                    <input type="text" id="title_publication" name="title_publication" class="form-control" value="<?= @$data[0]->title_publication; ?>">
                </div>
                <div class="form-group">
                    <a href="<?= base_url('assets/upload/').@$data[0]->content_publication?>" target="_blank"><?= @$data[0]->content_publication; ?></a>
                    <input type="hidden" id="old_content_publication" name="old_content_publication" class="form-control" value="<?= @$data[0]->content_publication; ?>">
                </div>
                <div class="form-group">
                    <label for="content_publication">Konten</label>
                    <input type="file" id="content_publication" name="content_publication" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description_publication">Deskripsi</label>
                    <input type="text" id="description_publication" name="description_publication" class="form-control" value="<?= @$data[0]->description_publication; ?>">
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