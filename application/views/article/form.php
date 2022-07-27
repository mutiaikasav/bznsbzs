<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?php base_url();?>/article" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-chevron-left fa-sm text-white-50"></i> Kembali</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= @$title;?> Artikel</h6>
        </div>
        <div class="card-body">
            <form action="<?php base_url();?>/article/save" method="post" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" class="form-control" value="<?= @$data[0]->id_article; ?>">
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" id="title" name="title" class="form-control" value="<?= @$data[0]->title; ?>">
                </div>
                <div class="form-group">
                   <textarea name="content" id="content" class="tinymce"><?= @$data[0]->content;?></textarea>
                </div>
                <div class="form-group">
                    <label for="category">Kategori</label>
                    <select class="js-example-basic-multiple" name="category[]" multiple="multiple">
                        <option value="AL">Alabama</option>
                            ...
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="related_articles">Artikel Terkait</label>
                    <select class="js-example-basic-multiple" name="related_articles[]" multiple="multiple">
                        <option value="AL">Alabama</option>
                            ...
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="others_articles">Artikel Lainnya</label>
                    <select class="js-example-basic-multiple" name="others_articles[]" multiple="multiple">
                        <option value="AL">Alabama</option>
                            ...
                        <option value="WY">Wyoming</option>
                    </select>
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