<!-- Start Content -->
<div class="container content">
    <section class="intro-single">
        <div class="container">
            <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                <h1 class="title-single">Hitung Zakat </h1>
                <h5>Layanan Muzakki</h5>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="index.html">Beranda</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                    Hitung Zakat
                    </li>
                </ol>
                </nav>
            </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="justify-content-center">
                <div class="kalkulator-nav">
                    <center>
                        <button class="btn-color-white" onclick="klik('penghasilan')">Zakat Penghasilan</button>
                        <button class="btn-color-white" onclick="klik('tabungan')">Zakat Tabungan</button>
                        <button class="btn-color-white" onclick="klik('emas')">Zakat Emas</button>
                        <button class="btn-color-white" onclick="klik('perdagangan')">Zakat Perdagangan</button>
                        <button class="btn-color-white" onclick="klik('pertanian')">Zakat Pertanian</button>
                        <button class="btn-color-white" onclick="klik('harta')">Zakat Harta</button>
                        <button class="btn-color-white" onclick="klik('fitah')">Zakat Fitrah</button>
                    </center>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="kalkulator">
                        <form action="" class="form-group" id="penghasilan" style="display: block;">
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Penghasilan per Bulan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Bonus dan Pendapatan Lain-lain per Bulan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Pengeluaran Kebutuhan Pokok per Bulan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Harga 1 Gram Emas Saat Ini (Sumber Antam)</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Nishab Zakat (85 Gram Emas) per Bulan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" disabled placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <button class="btn btn-warning">Hitung</button>
                            </div>
                        </form>

                        <form action="" class="form-group" id="tabungan" style="display: none;">
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Saldo Tabungan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Bagi Hasil</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Harga 1 gram Emas Saat Ini (Sumber Antam)</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Nishab Zakat (85 Gram Emas) per Bulan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" disabled placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <button class="btn btn-warning">Hitung</button>
                            </div>
                        </form>

                        <form action="" class="form-group" id="emas" style="display: none;">
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Jumlah Emas</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Harga 1 gram Emas Saat Ini (Sumber Antam)</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Nishab Zakat (85 Gram Emas) per Bulan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" disabled placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <button class="btn btn-warning">Hitung</button>
                            </div>
                        </form>

                        <form action="" class="form-group" id="perdagangan" style="display: none;">
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Modal yang Diputar selama 1 tahun</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Keuntungan selama 1 tahun</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Piutang Dagang</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Hutang Jatuh Tempo</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Harga 1 gram Emas Saat Ini (Sumber Antam)</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Nishab Zakat (85 Gram Emas) per Bulan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" disabled placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <button class="btn btn-warning">Hitung</button>
                            </div>
                        </form>

                        <form action="" class="form-group" id="pertanian" style="display: none;">
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Hasil Panen (kg)</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Jenis Pengairan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Harga 1 kg Hasil Panen</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Nishab 750 kg Hasil Panen</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" disabled placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <button class="btn btn-warning">Hitung</button>
                            </div>
                        </form>

                        <form action="" class="form-group" id="harta" style="display: none;">
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Nilai emas, perak, dan/atau permata</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Uang Tunai, Tabungan, Deposito</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Kendaraan, Rumah, Aset Lain</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Jumlah Hutang / Cicilan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Harga 1 gram Emas Saat Ini (Sumber Antam)</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Nishab Zakat (85 Gram Emas) per Bulan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" disabled placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <button class="btn btn-warning">Hitung</button>
                            </div>
                        </form>

                        <form action="" class="form-group" id="pertanian" style="display: none;">
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Jumlah Orang</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Harga Beras Saat Ini (1 Liter)</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="penghasilanperbulan" placeholder="0">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <button class="btn btn-warning">Hitung</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End Content -->