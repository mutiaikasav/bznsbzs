<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?php base_url();?>/gallery" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-chevron-left fa-sm text-white-50"></i> Kembali</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= @$title;?> Galeri</h6>
        </div>
        <div class="card-body">
            <form action="<?php base_url();?>/gallery/save" method="post" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" class="form-control" value="<?= @$data[0]->id_gallery; ?>">
                <div class="form-group">
                    <label for="title_gallery">Judul</label>
                    <input type="text" id="title_gallery" name="title_gallery" class="form-control" value="<?= @$data[0]->title_gallery; ?>">
                </div>
                <?php $foto = @$data[0]->content_gallery; $foto_array = explode(',', $foto); $count_foto = count($foto_array);?>
                <div class="form-group">
                    <label for="sum">Jumlah Foto</label>
                    <small>*Upload ulang semua foto jika ingin edit salah satu foto</small>
                    <input type="text" id="jum_foto" name="jum_foto" class="form-control" value="<?= (@$data[0]->id_gallery==null)?'':$count_foto; ?>">
                    <button type="button" class="btn btn-success btn-sm" onclick="jumfoto()">Tambah Foto</button>
                </div>
                <div class="d-flex">
                    <div class="foto">
                        <?php if (@$foto != null || @$foto != '') {
                            foreach ($foto_array as $key => $value) {?>
                                <div class="form-group">
                                    <input type="hidden" id="old_content_gallery" name="old_content_gallery[]" value="<?= $value?>" class="form-control">
                                    <img src="<?= base_url('assets/img/galeri/'.$value)?>" alt="" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="content_gallery">Foto</label><small>* Ukuran foto maks. 2MB</small>
                                    <input type="file" id="content_gallery" name="content_gallery[]" class="form-control">
                                </div>
                        <?php } }?>
                    </div>
                </div>
                <div class="video">
                    <div class="form-group">
                        <label for="video">Video</label>
                        <input type="text" id="video" name="video" class="form-control" value="<?= @$data[0]->video; ?>" placeholder="Contoh : https://www.youtube.com/watch?v=9s6tlh97iaU">
                    </div>
                </div>
                <!-- <div class="form-group">
                    <button class="btn btn-warning btn-sm" type="button" onclick="addvideo();">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Video</span>
                    </button>
                </div> -->
                <div class="form-group">
                    <label for="description_gallery">Deskripsi</label>
                    <textarea name="description_gallery" id="description_gallery" cols="30" rows="10" class="form-control"><?= @$data[0]->description_gallery; ?></textarea>
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