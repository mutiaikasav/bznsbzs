<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?php base_url();?>/bank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-chevron-left fa-sm text-white-50"></i> Kembali</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= @$title;?> Rekening Bank</h6>
        </div>
        <div class="card-body">
            <form action="<?php base_url();?>/bank/save" method="post" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" class="form-control" value="<?= @$data[0]->id_bank_account; ?>">
                <div class="form-group">
                    <input type="hidden" id="old_logo" name="old_logo" value="<?= @$data[0]->logo_bank; ?>" class="form-control">
                    <img src="<?= base_url().'assets/img/bank/'.@$data[0]->logo_bank; ?>" alt="" width="100">
                </div>
                <div class="form-group">
                    <label for="logo">Logo</label><small>* Ukuran foto maks. 2MB</small>
                    <input type="file" id="logo" name="logo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name_bank">Nama Bank</label>
                    <input type="text" id="name_bank" name="name_bank" class="form-control" value="<?= @$data[0]->name_bank; ?>">
                </div>
                <div class="form-group">
                    <label for="account_number">Nomor Rekening</label>
                    <input type="number" id="account_number" name="account_number" class="form-control" value="<?= @$data[0]->account_number; ?>">
                </div>
                <div class="form-group">
                    <label for="account_number">Rekening Atas Nama</label>
                    <input type="text" id="account_name" name="account_name" class="form-control" value="<?= @$data[0]->account_name; ?>">
                </div>
                <div class="form-group">
                    <label for="category">Kategori</label>
                    <select name="category" id="category" class="form-control">
                        <option value="Rekening Zakat">Rekening Zakat</option>
                        <option value="Rekening Infak">Rekening Infak</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="hidden" id="old_qris" name="old_qris" value="<?= @$data[0]->qris; ?>" class="form-control">
                    <img src="<?= base_url().'assets/img/bank/'.@$data[0]->qris; ?>" alt="" width="100">
                </div>
                <div class="form-group">
                    <label for="qris">QRIS</label><small>* Ukuran foto maks. 2MB</small>
                    <input type="file" id="qris" name="qris" class="form-control">
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