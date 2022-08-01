<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?php base_url();?>/program" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-chevron-left fa-sm text-white-50"></i> Kembali</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= @$title;?> Program</h6>
        </div>
        <div class="card-body">
            <form action="<?php base_url();?>/program/save" method="post" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" class="form-control" value="<?= @$data[0]->id_program; ?>">
                <div class="form-group">
                    <input type="hidden" id="old_logo" name="old_logo" class="form-control" value="<?= @$data[0]->logo;?>">
                    <img src="<?= base_url().'assets/img/program/'.@$data[0]->logo;?>" alt="" width="100">
                </div>
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="file" id="logo" name="logo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="program_name">Nama Program</label>
                    <input type="text" id="program_name" name="program_name" class="form-control" value="<?= @$data[0]->program_name; ?>">
                </div>
                <div class="form-group">
                    <label for="description_program">Deskripsi</label>
                    <input type="text" id="description_program" name="description_program" class="form-control" value="<?= @$data[0]->description_program; ?>">
                </div>
                <div class="form-group">
                    <input type="hidden" id="old_cover" name="old_cover" class="form-control" value="<?= @$data[0]->cover_image_program;?>">
                    <img src="<?= base_url().'assets/img/program/'.@$data[0]->cover_image_program;?>" alt="" width="100">
                </div>
                <div class="form-group">
                    <label for="cover_image_program">Cover Image</label>
                    <input type="file" id="cover_image_program" name="cover_image_program" class="form-control">
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