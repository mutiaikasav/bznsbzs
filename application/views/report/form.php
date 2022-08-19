<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?php base_url();?>/report" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-chevron-left fa-sm text-white-50"></i> Kembali</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= @$title;?> Laporan</h6>
        </div>
        <div class="card-body">
            <form action="<?php base_url();?>/report/save" method="post" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" class="form-control" value="<?= @$data[0]->id; ?>">
                <div class="form-group">
                    <label for="periode">Periode</label>
                    <input type="text" id="periode" name="periode" class="form-control" value="<?= @$data[0]->periode; ?>">
                </div>
                <div class="form-group">
                    <label for="zakat">Zakat</label>
                    <input type="text" id="sum_zakat" name="sum_zakat" class="form-control" value="<?= @$data[0]->sum_zakat; ?>">
                </div>
                <div class="form-group">
                    <label for="infak">Infak</label>
                    <input type="text" id="sum_infak" name="sum_infak" class="form-control" value="<?= @$data[0]->sum_infak; ?>">
                </div>
                <div class="form-group">
                    <label for="total">Total</label>
                    <input type="text" id="total" name="total" class="form-control" value="<?= @$data[0]->total; ?>">
                </div>
                <div class="form-group">
                    <label for="zakat_prov">Zakat Provinsi</label>
                    <input type="text" id="zakat_prov" name="zakat_prov" class="form-control" value="<?= @$data[0]->zakat_prov; ?>">
                </div>
                <div class="form-group">
                    <label for="zakat_jakpus">Zakat Jakarta Pusat</label>
                    <input type="text" id="zakat_jakpus" name="zakat_jakpus" class="form-control" value="<?= @$data[0]->zakat_jakpus; ?>">
                </div>
                <div class="form-group">
                    <label for="zakat_jakut">Zakat Jakarta Utara</label>
                    <input type="text" id="zakat_jakut" name="zakat_jakut" class="form-control" value="<?= @$data[0]->zakat_jakut; ?>">
                </div>
                <div class="form-group">
                    <label for="zakat_jakbar">Zakat Jakarta Barat</label>
                    <input type="text" id="zakat_jakbar" name="zakat_jakbar" class="form-control" value="<?= @$data[0]->zakat_jakbar; ?>">
                </div>
                <div class="form-group">
                    <label for="zakat_jaksel">Zakat Jakarta Selatan</label>
                    <input type="text" id="zakat_jaksel" name="zakat_jaksel" class="form-control" value="<?= @$data[0]->zakat_jaksel; ?>">
                </div>
                <div class="form-group">
                    <label for="zakat_jaktim">Zakat Jakarta Timur</label>
                    <input type="text" id="zakat_jaktim" name="zakat_jaktim" class="form-control" value="<?= @$data[0]->zakat_jaktim; ?>">
                </div>
                <div class="form-group">
                    <label for="zakat_pulauseribu">Zakat Kepulauan Seribu</label>
                    <input type="text" id="zakat_pulauseribu" name="zakat_pulauseribu" class="form-control" value="<?= @$data[0]->zakat_pulauseribu; ?>">
                </div>
                <div class="form-group">
                    <label for="infak_prov">Infak Provinsi</label>
                    <input type="text" id="infak_prov" name="infak_prov" class="form-control" value="<?= @$data[0]->infak_prov; ?>">
                </div>
                <div class="form-group">
                    <label for="infak_jakpus">Infak Jakarta Pusat</label>
                    <input type="text" id="infak_jakpus" name="infak_jakpus" class="form-control" value="<?= @$data[0]->infak_jakpus; ?>">
                </div>
                <div class="form-group">
                    <label for="infak_jakut">Infak Jakarta Utara</label>
                    <input type="text" id="infak_jakut" name="infak_jakut" class="form-control" value="<?= @$data[0]->infak_jakut; ?>">
                </div>
                <div class="form-group">
                    <label for="infak_jakbar">Infak Jakarta Barat</label>
                    <input type="text" id="infak_jakbar" name="infak_jakbar" class="form-control" value="<?= @$data[0]->infak_jakbar; ?>">
                </div>
                <div class="form-group">
                    <label for="infak_jaksel">Infak Jakarta Selatan</label>
                    <input type="text" id="infak_jaksel" name="infak_jaksel" class="form-control" value="<?= @$data[0]->infak_jaksel; ?>">
                </div>
                <div class="form-group">
                    <label for="infak_jaktim">Infak Jakarta Timur</label>
                    <input type="text" id="infak_jaktim" name="infak_jaktim" class="form-control" value="<?= @$data[0]->infak_jaktim; ?>">
                </div>
                <div class="form-group">
                    <label for="infak_pulauseribu">Infak Kepulauan Seribu</label>
                    <input type="text" id="infak_pulauseribu" name="infak_pulauseribu" class="form-control" value="<?= @$data[0]->infak_pulauseribu; ?>">
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