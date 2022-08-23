<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?php base_url();?>/division" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-chevron-left fa-sm text-white-50"></i> Kembali</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= @$title;?> Unit Kerja</h6>
        </div>
        <div class="card-body">
            <form action="<?php base_url();?>/division/save" method="post" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" class="form-control" value="<?= @$data[0]->id; ?>">
                <div class="form-group">
                    <label for="province">Provinsi</label>
                    <select name="province" id="province" class="custom-select">
                        <option value="Semua Wilayah" <?= (@$data[0]->province=='Semua Wilayah')?'selected':'';?>>Semua Wilayah</option>
                        <option value="Jakarta Pusat" <?= (@$data[0]->province=='Jakarta Pusat')?'selected':'';?>>Jakarta Pusat</option>
                        <option value="Jakarta Utara" <?= (@$data[0]->province=='Jakarta Utara')?'selected':'';?>>Jakarta Utara</option>
                        <option value="Jakarta Barat" <?= (@$data[0]->province=='Jakarta Barat')?'selected':'';?>>Jakarta Barat</option>
                        <option value="Jakarta Selatan" <?= (@$data[0]->province=='Jakarta Selatan')?'selected':'';?>>Jakarta Selatan</option>
                        <option value="Jakarta Timur" <?= (@$data[0]->province=='Jakarta Timur')?'selected':'';?>>Jakarta Timur</option>
                        <option value="Kepulauan Seribu" <?= (@$data[0]->province=='Kepulauan Seribu')?'selected':'';?>>Kepulauan Seribu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Nama Unit Kerja</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?= @$data[0]->name; ?>">
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