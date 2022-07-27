<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?php base_url();?>/category" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-chevron-left fa-sm text-white-50"></i> Kembali</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= @$title;?> Kategori Berita</h6>
        </div>
        <div class="card-body">
            <form action="<?php base_url();?>/category/save" method="post" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" class="form-control" value="<?= @$data[0]->id_category; ?>">
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="file" id="logo" name="logo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category_name">Nama Kategori</label>
                    <input type="text" id="category_name" name="category_name" class="form-control" value="<?= @$data[0]->category_name; ?>">
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <input type="text" id="description" name="description" class="form-control" value="<?= @$data[0]->description; ?>">
                </div>
                <div class="form-group">
                    <label for="cover_image">Cover Image</label>
                    <input type="file" id="cover_image" name="cover_image" class="form-control">
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