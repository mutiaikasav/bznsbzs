<script>
    function klik(params) {
        if (params == 'tabungan') {
            document.getElementById('penghasilan').style.display= "none"
            document.getElementById('tabungan').style.display = "block"
            document.getElementById('emas').style.display = "none"
            document.getElementById('perdagangan').style.display = "none"
            document.getElementById('pertanian').style.display = "none"
            document.getElementById('harta').style.display = "none"
            document.getElementById('fitrah').style.display = "none"
        } else if(params == 'emas') {
            document.getElementById('penghasilan').style.display= "none"
            document.getElementById('tabungan').style.display = "none"
            document.getElementById('emas').style.display = "block"
            document.getElementById('perdagangan').style.display = "none"
            document.getElementById('pertanian').style.display = "none"
            document.getElementById('harta').style.display = "none"
            document.getElementById('fitrah').style.display = "none"
        } else if(params == 'perdagangan') {
            document.getElementById('penghasilan').style.display= "none"
            document.getElementById('tabungan').style.display = "none"
            document.getElementById('emas').style.display = "none"
            document.getElementById('perdagangan').style.display = "block"
            document.getElementById('pertanian').style.display = "none"
            document.getElementById('harta').style.display = "none"
            document.getElementById('fitrah').style.display = "none"
        } else if(params == 'pertanian') {
            document.getElementById('penghasilan').style.display= "none"
            document.getElementById('tabungan').style.display = "none"
            document.getElementById('emas').style.display = "none"
            document.getElementById('perdagangan').style.display = "none"
            document.getElementById('pertanian').style.display = "block"
            document.getElementById('harta').style.display = "none"
            document.getElementById('fitrah').style.display = "none"
        } else if(params == 'harta') {
            document.getElementById('penghasilan').style.display= "none"
            document.getElementById('tabungan').style.display = "none"
            document.getElementById('emas').style.display = "none"
            document.getElementById('perdagangan').style.display = "none"
            document.getElementById('pertanian').style.display = "none"
            document.getElementById('harta').style.display = "block"
            document.getElementById('fitrah').style.display = "none"
        } else if(params == 'fitrah') {
            document.getElementById('penghasilan').style.display= "none"
            document.getElementById('tabungan').style.display = "none"
            document.getElementById('emas').style.display = "none"
            document.getElementById('perdagangan').style.display = "none"
            document.getElementById('pertanian').style.display = "none"
            document.getElementById('harta').style.display = "none"
            document.getElementById('fitrah').style.display = "block"
        } else {
            document.getElementById('penghasilan').style.display= "block"
            document.getElementById('tabungan').style.display = "none"
            document.getElementById('emas').style.display = "none"
            document.getElementById('perdagangan').style.display = "none"
            document.getElementById('pertanian').style.display = "none"
            document.getElementById('harta').style.display = "none"
            document.getElementById('fitrah').style.display = "none"
        }
    }

    function hitung(params) {
        if (params == 'tabungan') {
            var saldo = parseInt(document.querySelector('#tabungansaldo').value);
            var bagi = parseInt(document.querySelector('#tabunganbagi').value);
            var totalTabungan = saldo + bagi;

            var emas = parseInt(document.querySelector('#tabunganemas').value);
            var totalNishab = parseInt((emas * 85));

            if (totalTabungan >= totalNishab) {
                var totalZakat = parseInt(totalTabungan * 0.025);
                $('#modal-zakat').modal('show');
                document.querySelector('#total_zakat').innerHTML = 'Rp '+totalZakat;
            } else {
                $('#modal-donasi').modal('show');
            }
        } else if(params == 'emas') {
            var jumlah = parseInt(document.querySelector('#emasjumlah').value);
            var harga = parseInt(document.querySelector('#emasharga').value);
            var totalEmas = jumlah * harga;

            var emas = parseInt(document.querySelector('#emasharga').value);
            var totalNishab = parseInt((emas * 85));

            if (totalEmas >= totalNishab) {
                var totalZakat = parseInt(totalEmas * 0.025);
                $('#modal-zakat').modal('show');
                document.querySelector('#total_zakat').innerHTML = 'Rp '+totalZakat;
            } else {
                $('#modal-donasi').modal('show');
            }
        } else if(params == 'perdagangan') {
            var modal = parseInt(document.querySelector('#perdaganganmodal').value);
            var untung = parseInt(document.querySelector('#perdaganganuntung').value);
            var piutang = parseInt(document.querySelector('#perdaganganpiutang').value);
            var hutang = parseInt(document.querySelector('#perdaganganhutang').value);
            var rugi = parseInt(document.querySelector('#perdaganganrugi').value);
            var totalPerdagangan = modal + untung + piutang - hutang - rugi;
            
            var emas = parseInt(document.querySelector('#perdaganganemas').value);
            var totalNishab = parseInt((emas * 85));

            if (totalPerdagangan >= totalNishab) {
                var totalZakat = parseInt(totalPerdagangan * 0.025);
                $('#modal-zakat').modal('show');
                document.querySelector('#total_zakat').innerHTML = 'Rp '+totalZakat;
            } else {
                $('#modal-donasi').modal('show');
            }
        } else if(params == 'pertanian') {
            var hasil = parseInt(document.querySelector('#pertanianhasil').value);
            var jenis = (document.querySelector('#pertanianjenis').value==="0")?0.05:0.10;
            
            var harga = parseInt(document.querySelector('#pertanianharga').value);
            var totalNishab = parseInt((harga * 750));

            var totalPertanian = hasil * harga;

            if (totalPertanian >= totalNishab) {
                var totalZakat = parseInt(totalPertanian * jenis);
                $('#modal-zakat').modal('show');
                document.querySelector('#total_zakat').innerHTML = 'Rp '+totalZakat;
            } else {
                $('#modal-donasi').modal('show');
            }
        } else if(params == 'harta') {
            var permata = parseInt(document.querySelector('#hartapermata').value);
            var uang = parseInt(document.querySelector('#hartauang').value);
            var kendaraan = parseInt(document.querySelector('#hartakendaraan').value);
            var hutang = parseInt(document.querySelector('#hartahutang').value);
            var totalHarta = permata + uang + kendaraan - hutang;

            var emas = parseInt(document.querySelector('#hartaemas').value);
            var totalNishab = parseInt((emas * 85) / 12);

            if (totalHarta >= totalNishab) {
                var totalZakat = parseInt(totalHarta * 0.025);
                $('#modal-zakat').modal('show');
                document.querySelector('#total_zakat').innerHTML = 'Rp '+totalZakat;
            } else {
                $('#modal-donasi').modal('show');
            }
        } else if(params == 'fitrah') {
            var orang = parseInt(document.querySelector('#fitrahorang').value);
            var beras = parseInt(document.querySelector('#fitrahberas').value);
            var totalBeras = parseInt(beras * 3.5);
            var totalZakat = parseInt(orang * totalBeras);
            if (totalZakat > 0) {
                $('#modal-zakat').modal('show');
                document.querySelector('#total_zakat').innerHTML = 'Rp '+totalZakat;
            }

        } else {
            var penghasilan = parseInt(document.querySelector('#penghasilanperbulan').value);
            var bonus = parseInt(document.querySelector('#penghasilanbonus').value);
            var kebutuhan = parseInt(document.querySelector('#penghasilankebutuhan').value);
            var totalPenghasilan = penghasilan + bonus - kebutuhan;

            var emas = parseInt(document.querySelector('#penghasilanemas').value);
            var totalNishab = (emas * 85) / 12;

            if (totalPenghasilan >= totalNishab) {
                var totalZakat = parseInt(totalPenghasilan * 0.025);
                $('#modal-zakat').modal('show');
                document.querySelector('#total_zakat').innerHTML = 'Rp '+totalZakat;
            } else {
                $('#modal-donasi').modal('show');
            }
        }
    }

    function hitungNishab(params) {
        var emas = 0;
        var totalNishab = 0;
        if (params == 'tabungan') {
            emas = parseInt(document.querySelector('#tabunganemas').value);
            totalNishab = parseInt((emas * 85));
            document.querySelector('#tabungannishab').value = totalNishab;
        } else if(params == 'emas') {
            emas = parseInt(document.querySelector('#emasharga').value);
            totalNishab = parseInt((emas * 85));
            document.querySelector('#emasnishab').value = totalNishab;
        } else if(params == 'perdagangan') {
            emas = parseInt(document.querySelector('#perdaganganemas').value);
            totalNishab = parseInt((emas * 85));
            document.querySelector('#perdagangannishab').value = totalNishab;
        } else if(params == 'pertanian') {
            var harga = parseInt(document.querySelector('#pertanianharga').value);
            totalNishab = parseInt((harga * 750));
            document.querySelector('#pertaniannishab').value = totalNishab;
        } else if(params == 'harta') {
            emas = parseInt(document.querySelector('#hartaemas').value);
            totalNishab = parseInt((emas * 85) / 12);
            document.querySelector('#hartanishab').value = totalNishab;
        } else if(params == 'fitrah') {
            
        } else {
            emas = parseInt(document.querySelector('#penghasilanemas').value);
            totalNishab = parseInt((emas * 85) / 12);
            document.querySelector('#penghasilannishab').value = totalNishab;
        }
    }
</script>
<!-- Start Content -->
<div class="bg-nav"></div>
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
                        <button class="btn-color-white" onclick="klik('fitrah')">Zakat Fitrah</button>
                    </center>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="kalkulator">
                        <div class="form-group" id="penghasilan" style="display: block;">
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanperbulan">Penghasilan per Bulan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="penghasilanperbulan" placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanbonus">Bonus dan Pendapatan Lain-lain per Bulan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="penghasilanbonus" placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilankebutuhan">Pengeluaran Kebutuhan Pokok per Bulan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="penghasilankebutuhan" placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilanemas">Harga 1 Gram Emas Saat Ini (Sumber Antam)</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="penghasilanemas" placeholder="0" onchange="hitungNishab('penghasilan')" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="penghasilannishab">Nishab Zakat (85 Gram Emas) per Bulan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="penghasilannishab" disabled placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <button type="button" class="btn btn-warning" onclick="hitung('penghasilan')">Hitung</button>
                            </div>
                        </div>
                        <div class="form-group" id="tabungan" style="display: none;">
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="tabungansaldo">Saldo Tabungan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="tabungansaldo" placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="tabunganbagi">Bagi Hasil</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="tabunganbagi" placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="tabunganemas">Harga 1 gram Emas Saat Ini (Sumber Antam)</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="tabunganemas" placeholder="0" onchange="hitungNishab('tabungan')" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="tabungannishab">Nishab Zakat (85 Gram Emas) per Bulan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="tabungannishab" disabled placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <button type="button" class="btn btn-warning" onclick="hitung('tabungan')">Hitung</button>
                            </div>
                        </div>
                        <div class="form-group" id="emas" style="display: none;">
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="emasjumlah">Jumlah Emas</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="emasjumlah" placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="emasharga">Harga 1 gram Emas Saat Ini (Sumber Antam)</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="emasharga" placeholder="0" onchange="hitungNishab('emas')" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="emasnishab">Nishab Zakat (85 Gram Emas) per Bulan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="emasnishab" disabled placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <button type="button" class="btn btn-warning" onclick="hitung('emas')">Hitung</button>
                            </div>
                        </div>
                        <div class="form-group" id="perdagangan" style="display: none;">
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="perdaganganmodal">Modal yang Diputar selama 1 tahun</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="perdaganganmodal" placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="perdaganganuntung">Keuntungan selama 1 tahun</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="perdaganganuntung" placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="perdaganganpiutang">Piutang Dagang</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="perdaganganpiutang" placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="perdaganganhutang">Hutang Jatuh Tempo</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="perdaganganhutang" placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="perdaganganrugi">Kerugian selama 1 Tahun</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="perdaganganrugi" placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="perdaganganemas">Harga 1 gram Emas Saat Ini (Sumber Antam)</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="perdaganganemas" placeholder="0" onchange="hitungNishab('perdagangan')" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="perdagangannishab">Nishab Zakat (85 Gram Emas) per Bulan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="perdagangannishab" disabled placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <button type="button" class="btn btn-warning" onclick="hitung('perdagangan')">Hitung</button>
                            </div>
                        </div>
                        <div class="form-group" id="pertanian" style="display: none;">
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="pertanianhasil">Hasil Panen (kg)</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="pertanianhasil" placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="pertanianjenis">Jenis Pengairan</label>
                                </div>
                                <div class="col-lg-6">
                                    <select name="pertanianjenis" id="pertanianjenis" class="form-select">
                                        <option value="0">Dengan Biaya</option>
                                        <option value="1">Tanpa Biaya (Hujan/Sungai)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="pertanianharga">Harga 1 kg Hasil Panen</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="pertanianharga" placeholder="0" onchange="hitungNishab('pertanian')" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="pertaniannishab">Nishab 750 kg Hasil Panen</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="pertaniannishab" disabled placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <button type="button" class="btn btn-warning" onclick="hitung('pertanian')">Hitung</button>
                            </div>
                        </div>
                        <div class="form-group" id="harta" style="display: none;">
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="hartapermata">Nilai emas, perak, dan/atau permata</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="hartapermata" placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="hartauang">Uang Tunai, Tabungan, Deposito</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="hartauang" placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="hartakendaraan">Kendaraan, Rumah, Aset Lain</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="hartakendaraan" placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="hartahutang">Jumlah Hutang / Cicilan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="hartahutang" placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="hartaemas">Harga 1 gram Emas Saat Ini (Sumber Antam)</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="hartaemas" placeholder="0" class="form-control" onchange="hitungNishab('harta')">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="hartanishab">Nishab Zakat (85 Gram Emas) per Bulan</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="hartanishab" disabled placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <button type="button" class="btn btn-warning" onclick="hitung('harta')">Hitung</button>
                            </div>
                        </div>
                        <div class="form-group" id="fitrah" style="display: none;">
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="fitrahorang">Jumlah Orang</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="fitrahorang" placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-lg-6">
                                    <label for="fitrahberas">Harga Beras Saat Ini (1 Liter)</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="fitrahberas" placeholder="0" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <button type="button" class="btn btn-warning" onclick="hitung('fitrah')">Hitung</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End Content -->
<!-- Modal -->
<div class="modal fade" id="modal-zakat" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Zakat yang harus Anda keluarkan adalah sebesar: </p>
                <center>
                    <h1 id="total_zakat" style="color: #ef6c0b;"></h1>
                    <br>
                    <p style="color: #034e2f;"><b>Niat Mengeluarkan Zakat</b></p>
                    <p><b>نَوَيْتُ أَنْ أُخْرِجَ زَكَاةَ مَالِى فَرْضًا لِلَّهِ تَعَالَى</b></p>
                    <p>Nawaitu an Ukhrija Zakaata Maali Fardhon Lillaahi Ta’aala</p>
                    <p>“Saya berniat sengaja mengeluarkan zakat fardhu karena Allah Ta’ala”</p>
                </center>
                <div class="form-group">
                    <a href="https://simpulkebaikan.id/donasi-cepat/" target="_blank" type="button" class="btn btn-success form-control">Bayar Zakat Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-donasi" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 style="color: #034e2f;">Saat ini kamu tidak memenuhi syarat nishab untuk berzakat.</h5>
                <p>Bila ingin bersedekah, silahkan klik tombol Donasi Sekarang di bawah ini</p>
                <div class="form-group">
                    <a href="https://simpulkebaikan.id/" target="_blank" type="button" class="btn btn-warning form-control">Donasi Sekarang</a>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>