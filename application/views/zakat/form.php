<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?= base_url()?>zakat" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-chevron-left fa-sm text-white-50"></i> Kembali</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= @$title;?> Tentang Zakat</h6>
        </div>
        <div class="card-body">
            <form action="<?php base_url();?>/zakat/save" method="post" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" class="form-control" value="<?= @$data[0]->id; ?>">
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" id="title" name="title" class="form-control" value="<?= @$data[0]->title; ?>">
                </div>
                <div class="form-group">
                    <label for="content">Konten Berita</label>
                    <small>*Ukuran File Gambar < 2Mb, format .JPG,.PNG</small>
                    <textarea name="content" id="content" class="tinymce"><?= @$data[0]->content;?></textarea>
                </div>
                <!-- Related Articles -->
                <?php $related_articles = @$data[0]->related_articles; $rel_art = explode(',', $related_articles); ?>
                <div class="form-group">
                    <label for="related_articles">Artikel Terkait</label>
                    <select class="article form-control" id="related_articles" name="related_articles[]" multiple="multiple">
                        <?php foreach ($article as $ar) { ?>
                            <option value="<?= $ar->id;?>" <?= (in_array($ar->id, $rel_art))?'selected':'';?>><?= $ar->title;?></option>
                        <?php } ?>
                    </select>
                </div>
                <!-- Other Articles -->
                <?php $other_articles = @$data[0]->others_articles; $other = explode(',', $other_articles);?>
                <div class="form-group">
                    <label for="others_articles">Artikel Lainnya</label>
                    <select class="article form-control" id="others_articles" name="others_articles[]" multiple="multiple">
                        <?php foreach ($article as $ar) { ?>
                            <option value="<?= $ar->id;?>" <?= (in_array($ar->id, $other))?'selected':'';?>><?= $ar->title;?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group d-flex justify-content-right">
                    <button class="btn btn-info form-control m-3" type="submit">
                        <span class="icon text-white-50">
                            <i class="fas fa-save"></i>
                        </span>
                        <span class="text"> Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->