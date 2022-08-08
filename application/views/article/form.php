<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="javascript:window.history.go(-1);" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
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
                    <label for="content">Konten Berita</label>
                    <small>*Ukuran File Gambar < 2Mb</small>
                    <textarea name="content" id="content" class="tinymce"><?= @$data[0]->content;?></textarea>
                </div>
                <!-- show at -->
                <?php $show_at = @$data[0]->show_at; $show = explode(',', $show_at); ?>
                <div class="form-group">
                    <label for="category">Kategori Berita</label>
                    <?php foreach ($category as $key => $cate) { ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="category|<?= $cate->id_category?>" id="category" name="category[]" <?= (in_array('category|'.$cate->id_category,$show)) || (in_array(' category|'.$cate->id_category,$show))?'checked':''; ?>>
                            <label class="form-check-label" for="category"><?= $cate->category_name?></label>
                        </div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label for="category">Program</label>
                    <?php foreach ($program as $k => $pr) { ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="program|<?= $pr->id_program?>" id="program" name="category[]" <?= (in_array('program|'.$pr->id_program,$show)) || (in_array(' program|'.$pr->id_program,$show))?'checked':''; ?>>
                            <label class="form-check-label" for="program"><?= $pr->program_name?></label>
                        </div>
                    <?php } ?>
                </div>
                <!-- Related Articles -->
                <?php $related_articles = @$data[0]->related_articles; $rel_art = explode(',', $related_articles); ?>
                <div class="form-group">
                    <label for="related_articles">Artikel Terkait</label>
                    <select class="article form-control" name="related_articles[]" multiple="multiple">
                        <?php foreach ($article as $ar) { ?>
                            <option value="<?= $ar->id_article;?>" <?= (in_array($ar->id_article, $rel_art))?'selected':'';?>><?= $ar->title;?></option>
                        <?php } ?>
                    </select>
                </div>
                <!-- Other Articles -->
                <?php $other_articles = @$data[0]->others_articles; $other = explode(',', $other_articles);?>
                <div class="form-group">
                    <label for="others_articles">Artikel Lainnya</label>
                    <select class="article form-control" name="others_articles[]" multiple="multiple">
                        <?php foreach ($article as $ar) { ?>
                            <option value="<?= $ar->id_article;?>" <?= (in_array($ar->id_article, $other))?'selected':'';?>><?= $ar->title;?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group d-flex justify-content-right">
                    <button class="btn btn-success form-control m-3" type="button" onclick="publish()">
                        <span class="icon text-white-50">
                            <i class="fas fa-paper-plane"></i>
                        </span>
                        <span class="text"> Publish</span>
                    </button>
                    <!-- <button class="btn btn-warning form-control m-3" type="button" data-toggle="modal" data-target="#exampleModal">
                        <span class="icon text-white-50">
                            <i class="fas fa-clock"></i>
                        </span>
                        <span class="text"> Schedule</span>
                    </button> -->
                    <?php if(@$data[0]->status == 0 || @$data[0]->status == 1 ){?>
                    <button class="btn btn-danger form-control m-3" type="button" onclick="hapus_artikel(<?= $data[0]->id_article; ?>)">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text"> Delete</span>
                    </button>
                    <?php } else if(@$data[0]->status != 1){?>
                    <button class="btn btn-info form-control m-3" type="submit">
                        <span class="icon text-white-50">
                            <i class="fas fa-save"></i>
                        </span>
                        <span class="text"> Simpan</span>
                    </button>
                    <?php } ?>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('article/modal_schedule'); ?>
<!-- /.container-fluid -->
<script>
    function publish() {
        // alert($('#content').val());
        console.log(document.querySelector("#content").value);
        

        // $.ajax({
        //     type:"POST",
        //     url: "<?php echo base_url(); ?>article/publish",
        //     data: {
        //         id: document.getElementById('id').value,
        //         title: document.getElementById('title').value,
        //         // content: document.getElementById('content').value,
        //         // category: document.getElementsByName('category').value,
        //         // related_articles : document.getElementsByName('related_articles').value,
        //         // others_articles: document.getElementsByName('others_articles').value
        //     },
        //     dataType: 'json',
        //     success: function(rows)
        //     { 
        //         swal("Sukses!", "Artikel berhasil di publish", "success");
        //         window.location.href = "<?= base_url()?>article";
        //     },

        //     error:function()
        //     {
        //         alert("Error Connection");
        //     }
        // });
    }

    function hapus_artikel(id) {
        $.ajax({
            type:"POST",
            url: "<?php echo base_url(); ?>article-delete/"+id,
            success: function(rows)
            { 
                location.replace("<?= base_url()?>article-hide");
            }
        });
    }
</script>