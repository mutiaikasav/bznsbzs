<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?php base_url();?>/transaction" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-chevron-left fa-sm text-white-50"></i> Kembali</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= @$title;?> Transaksi</h6>
        </div>
        <div class="card-body">
            <form action="<?php base_url();?>/transaction/save" method="post" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" class="form-control" value="<?= @$data[0]->id_transaction; ?>">
                <div class="form-group">
                    <label for="invoice">Invoice</label>
                    <input type="text" id="invoice" name="invoice" class="form-control" value="<?= @$data[0]->invoice; ?>">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategori" id="umum" value="umum" <?php echo (@$data[0]->kategori=='umum')?'checked':'';?>>
                        <label class="form-check-label" for="umum">Umum</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategori" id="asn" value="asn" <?php echo (@$data[0]->kategori=='asn')?'checked':'';?>>
                        <label class="form-check-label" for="asn">ASN</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <select name="jenis" id="jenis" class="custom-select">
                        <option value="infaq" <?php echo (@$data[0]->jenis=='infaq')?'selected':'';?>>infaq</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="donatur">Nama Donatur</label>
                    <input type="text" id="donatur" name="donatur" class="form-control" value="<?= @$data[0]->donatur; ?>">
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" id="jumlah" name="jumlah" class="form-control" value="<?= @$data[0]->jumlah; ?>">
                </div>
                <div class="form-group">
                    <label for="pembayaran">Pembayaran</label>
                    <select name="pembayaran" id="pembayaran" class="custom-select">
                            <option value="BCA VA">BCA VA</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="anonym" id="anonym" value="1" <?php echo (@$data[0]->anonym=='1')?'checked':'';?>>
                        <label class="form-check-label" for="anonym">Hamba Allah</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="unit_kerja">Unit Kerja</label>
                    <select name="unit_kerja" id="unit_kerja" class="custom-select">
                        <option value="gubernur" <?php echo (@$data[0]->unit_kerja=='gubernur')?'selected':'';?>>Gubernur</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="wilayah">Wilayah</label>
                    <select name="wilayah" id="wilayah" class="custom-select">
                        <option value="Semua Wilayah" <?php echo (@$data[0]->wilayah=='Semua Wilayah')?'selected':'';?>>Semua Wilayah</option>
                        <option value="Jakarta Pusat" <?php echo (@$data[0]->wilayah=='Jakarta Pusat')?'selected':'';?>>Jakarta Pusat</option>
                        <option value="Jakarta Utara" <?php echo (@$data[0]->wilayah=='Jakarta Utara')?'selected':'';?>>Jakarta Utara</option>
                        <option value="Jakarta Barat" <?php echo (@$data[0]->wilayah=='Jakarta Barat')?'selected':'';?>>Jakarta Barat</option>
                        <option value="Jakarta Selatan" <?php echo (@$data[0]->wilayah=='Jakarta Selatan')?'selected':'';?>>Jakarta Selatan</option>
                        <option value="Jakarta Timur" <?php echo (@$data[0]->wilayah=='Jakarta Timur')?'selected':'';?>>Jakarta Timur</option>
                        <option value="Kep. Seribu" <?php echo (@$data[0]->wilayah=='Kep. Seribu')?'selected':'';?>>Kep. Seribu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bukti">Bukti Pembayaran</label>
                    <input type="text" id="old_bukti" name="old_bukti" class="form-control" value="<?= @$data[0]->bukti_pembayaran; ?>">
                    <input type="file" id="bukti" name="bukti" class="form-control">
                    <img src="<?= base_url()?>/assets/img/transaksi/<?= @$data[0]->bukti_pembayaran; ?>" alt="" width="100">
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