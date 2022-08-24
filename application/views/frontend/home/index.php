<script>
    $.ajax({
        type:"POST",
        url: "<?php echo base_url(); ?>api/index",
        dataType: 'json',
        success: function(rows)
        { 
            // headline
            var headline = rows['headline'];

            $.each(headline, function (i, item) {
                if (i !== 0) {
                    document.querySelector('.carousel-indicators').innerHTML +='<button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="'+i+'" aria-label="Slide '+i+'"></button>';
                    document.querySelector('.carousel-inner').innerHTML += '<div class="carousel-item">'+
                    '<div class="layer"><img src="<?= base_url();?>assets/img/banner/'+item['image']+'" class="d-block w-100 layer" alt="...">'+
                    '</div>';
                }
            });

            // program
            var program = rows['program'];
            $.each(program, function (i, item) {
                document.querySelector('#program').innerHTML = '<div class="card-grid-space">'+
                '<a href="program.html" class="card rounded-circle " style="--bg-img:url(<?php base_url();?>/assets/frontend/img/Jak-B-Bertaqwa-keagamaan-360x325.png)">'+
                '<div><h3 class="color-yellow">Jak B Bertaqwa</h3></div></a></div>';
            });

            // total
            // galeri
            // report

            // collab
            var collab = rows['collab'];
            $.each(collab, function (i, item) {
                document.querySelector('.kerjasama').innerHTML += '<a href="'+item['link']+'" target="_blank"><img src="<?= base_url();?>/assets/img/collab/'+item['logo_collab']+'" alt=""></a>';
            });
        },
        error:function()
        {
            alert("Error Connection");
        }
    });
    
    var province = 'Jakarta Pusat';
    $.ajax({
        type:"POST",
        url: "<?php echo base_url(); ?>api/division",
        data: {province : province},
        dataType: 'json',
        success: function(rows)
        {
            $.each(rows, function (i, item) {
                document.querySelector('.unit-kerja').innerHTML += '<option value="'+['id']+'">'+item['name']+'</option>';
            });
        },
        error:function()
        {
            alert("Error Connection Get Unit Kerja");
        }
    });
</script>
<!-- Hero -->
<section id="hero">
    <!-- Carousel -->
    <div id="carouselExampleFade" data-bs-interval="3000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        </div>
        <div class="carousel-inner" >
            <div class="carousel-item active">
                <div class="layer">
                    <img src="" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#umum">Umum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#asn">Pejabat / ASN DKI</a>
                            </li>
                        </ul>
                        <div class="tab-content tab-content-header">
                            <div id="umum" class="container tab-pane active"><br>
                                <form action="">
                                <div class="form-group mt-3">
                                    <p><b>Mulai Bayar Zakat/ZIS</b></p>
                                </div>
                                <div class="form-group mt-3">
                                    <select name="" id="" class="form-select">
                                    <option >Jenis Zakat/ZIS</option>
                                    <option value="Zakat Penghasilan">Zakat Penghasilan</option>
                                    <option value="Zakat Maal">Zakat Maal</option>
                                    <option value="Infaq">Infaq</option>
                                    <option value="Sedekah Baznas Bazis DKI">Sedekah Baznas Bazis DKI</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" placeholder="Masukkan nominal min Rp 10.000" class="form-control">
                                </div>
                                <div class="form-group mt-3">
                                    <select name="" id="" class="form-select">
                                    <option>Pilih Metode Pembayaran</option>
                                    <option value="Gopay">Gopay</option>
                                    <option value="Ovo">Ovo</option>
                                    </select>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="anonim" id="anonim">
                                    <label class="form-check-label" for="anonim">Jadikan Anonim (Hamba Allah)</label><br>
                                </div>
                                </form></br>
                            </div>
                            <div id="asn" class="container tab-pane fade"><br>
                                <form action="">
                                <div class="form-group mt-3">
                                    <b>Mulai Bayar Zakat/ZIS Pejabat/ASN DKI</b>
                                </div>
                                <div class="form-group mt-3">
                                    <select name="" id="" class="form-select">
                                    <option >Jenis Zakat/ZIS</option>
                                    <option value="Zakat Penghasilan">Zakat Penghasilan</option>
                                    <option value="Zakat Maal">Zakat Maal</option>
                                    <option value="Infaq">Infaq</option>
                                    <option value="Sedekah Baznas Bazis DKI">Sedekah Baznas Bazis DKI</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" placeholder="Masukkan nominal min Rp 10.000" class="form-control">
                                </div>
                                <div class="form-group mt-3">
                                    <select name="" id="" class="form-select">
                                    <option>Pilih Metode Pembayaran</option>
                                    <option value="Gopay">Gopay</option>
                                    <option value="Ovo">Ovo</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <select name="division" id="division" class="form-select unit-kerja">
                                        <option>Pilih Unit Kerja</option>
                                    </select>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="anonim" id="anonim">
                                    <label class="form-check-label" for="anonim">Jadikan Anonim (Hamba Allah)</label><br>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="text-center"><a href="<?= base_url()?>bayarzis" class="btn-get-started">Donasi Sekarang</a></div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<!-- End Hero -->
<div class="bg-img-bw">
    <div class="widget container" style="margin-top:-20px;">
        <br><br>
        <center>
            <h2 class="widget-kabar">Kabar Baznas Bazis</h2>
        </center>
        <section class="section-property">
            <div class="container">
                <div class="row">
                    <div class="title-wrap text-right">
                    <div class="title-link m-3">
                        <a href="<?= base_url('kategori/kabar-zakat')?>">Lihat lainnya
                        <span class="bi bi-chevron-right"></span>
                        </a>
                    </div>
                    </div>
                    <section class="cards"> 
                        <article class="card-headline card--1">
                            <div class="card__info-hover"></div>
                            <div class="card__img"></div>
                            <a href="#" class="card_link">
                                <div class="card__img--hover"></div>
                            </a>
                            <div class="card__info">
                                <span class="card__category"> Kabar Baznas Bazis</span>
                                <h3 class="card__title">Judul artikel</h3>
                                <button class="btn btn-sm btn-warning">Baca Selengkapnya</button>
                            </div>
                        </article>
                        <article class="card-headline card--1">
                            <div class="card__info-hover"></div>
                            <div class="card__img"></div>
                            <a href="" class="card_link">
                                <div class="card__img--hover"></div>
                            </a>
                            <div class="card__info">
                                <span class="card__category"> Kabar Baznas Bazis </span>
                                <h3 class="card__title">Judul Artikel 2</h3>
                                <button class="btn btn-sm btn-warning">Baca Selengkapnya</button>
                            </div>
                        </article>
                        <article class="card-headline card--1">
                            <div class="card__info-hover"></div>
                            <div class="card__img"></div>
                            <a href="" class="card_link">
                                <div class="card__img--hover"></div>
                            </a>
                            <div class="card__info">
                                <span class="card__category"> Kabar Baznas Bazis </span>
                                <h3 class="card__title">Judul Artikel 2</h3>
                                <button class="btn btn-sm btn-warning">Baca Selengkapnya</button>
                            </div>
                        </article>
                        <article class="card-headline card--1">
                            <div class="card__info-hover"></div>
                            <div class="card__img"></div>
                            <a href="" class="card_link">
                                <div class="card__img--hover"></div>
                            </a>
                            <div class="card__info">
                                <span class="card__category"> Kabar Baznas Bazis </span>
                                <h3 class="card__title">Judul Artikel 2</h3>
                                <button class="btn btn-sm btn-warning">Baca Selengkapnya</button>
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </section>
    </div>
</div>
<div>
    <div class="widget">
    <h2 class="widget-title container">Program</h2>
    <section class="cards-wrapper" id="program">
    </section>
    </div>
    <!-- <h2>Galang Dana Terbaru</h2> -->
    <div class="widget">
    <section id="counts" class="counts section-bg">
        <div class="container">
        <div class="row counters">
            <div class="col-lg-6 col-6 text-center">
                <a onclick="show('mustahik')">
                <img src="<?php base_url();?>/assets/frontend/img/penerima-zakat.png" alt="">
                <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Mustahik</p>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModal">Lihat Detail</button>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-center">
            <a onclick="show('muzakki')">
                <img src="<?php base_url();?>/assets/frontend/img/donatur.png" alt="">
                <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
                <p>Muzakki</p>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModal">Lihat Detail</button>
            </a>
            </div>
        </div>
        </div>
    </section>
    </div>
</div>
<div class="content">
    <div class="col-lg-12 widget-galeri-publikasi">
        <div class="col-lg-8">
            <div class="widget container bg-img-rad pt-3">
                <h2 class="widget-title" style="color: white;">Galeri</h2>
                <section id="portfolio" class="portfolio">
                    <div class="container">
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg- d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter=".filter-photo" class="filter-active">Foto</li>
                            <li data-filter=".filter-video" style="color: white;">Video</li>
                        </ul>
                        <a class="color-white" href="galeri.html">Lihat Semua > </a>
                        </div>
                    </div>
        
                    <div class="row portfolio-container" data-aos="fade-up">
                        <div class="col-lg-4 col-md-6 portfolio-item filter-photo">
                            <a href="galeri-detail.html" style="text-decoration:none;">
                            <img src="<?php base_url();?>/assets/frontend/img/DSC05194.JPG" class="img-fluid lozad" alt="">
                        </a>
                        </div>
        
                        <div class="col-lg-4 col-md-6 portfolio-item filter-video">
                            <a href="galeri-detail.html" style="text-decoration:none;">
                            <img src="<?php base_url();?>/assets/frontend/img/DSC05194.JPG" class="img-fluid lozad" alt="">
                        </a>
                        </div>
        
                        <div class="col-lg-4 col-md-6 portfolio-item filter-photo">
                        <a href="galeri-detail.html" style="text-decoration:none;">
                            <img src="<?php base_url();?>/assets/frontend/img/DSC05194.JPG" class="img-fluid lozad" alt="">
                        </a>
                        </div>
                    </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="widget container pt-3">
                <h2 class="widget-title">Publikasi</h2>
                <section id="publication" class="portfolio">
                    <div class="container">
                        <div class="row publication-container" data-aos="fade-up">
                            <div class="publication-item filter-category1">
                                <img src="<?= base_url(); ?>assets/frontend/img/DSC05210.JPG" class="img-fluid" alt="">
                                <center>
                                  <h4>Judul Publikasi</h4>
                                  <a href="<?= base_url(); ?>assets/upload/CamScanner-01-07-2022-10_22.pdf" target="_blank" type="button" class="btn btn-warning">Lihat</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="widget bg-img-bw py-5">
    <center>
        <h2 class="container" style="color: yellow;font-weight: bold;">Laporan Pengumpulan ZIS</h2>
    </center>
    <section id="laporan">
        <div class="laporan container">
        <p class="pt-3">Periode 03 Januari 2022 - 04 Juli 2022</p>
        <table class="table table-hover">
            <tr>
                <th>Zakat</th>
                <td class="color-green"><a href="<?= base_url('laporan')?>" style="color:white"> Rp 61.013.418.918</a></td>
            </tr>
            <tr>
                <th>Infak</th>
                <td class="color-green"><a href="<?= base_url('laporan')?>"> Rp 32.993.551.086</a></td>
            </tr>
            <tr>
                <th>Total</th>
                <td class="color-green"><a href="<?= base_url('laporan')?>"> Rp 94.006.970.004</a></td>
            </tr>
        </table>
        <p>Pembagian Zakat per Wilayah</p>
        <table class="table table-hover">
            <thead class="table-head">
            <tr>
                <th scope="col"><b>Wilayah</b></th>
                <th scope="col"><b>Zakat</b></th>
                <th scope="col"><b>Infak</b></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">BAZINAS (BAZIS) Provinsi</a></th>
                <td class="color-green"><a href="<?= base_url('laporan')?>">Rp 15.631.381.425</a></td>
                <td class="color-yellow"><a href="<?= base_url('laporan')?>">Rp  2.958.845.691</a></td>
            </tr>
            <tr>
                <th scope="row">BAZNAS (BAZIS) Jakarta Pusat</a></th>
                <td class="color-green"><a href="<?= base_url('laporan')?>">Rp  5.603.885.948</a></td>
                <td class="color-yellow"><a href="<?= base_url('laporan')?>">Rp  3.520.785.405</a></td>
            </tr>
            <tr>
                <th scope="row">BAZINAS (BAZIS) Jakarta Utara</a></th>
                <td class="color-green"><a href="<?= base_url('laporan')?>">Rp  4.318.168.863</a></td>
                <td class="color-yellow"><a href="<?= base_url('laporan')?>">Rp  3.643.880.132</a></td>
            </tr>
            <tr>
                <th scope="row">BAZINAS (BAZIS) Jakarta Barat</a></th>
                <td class="color-green"><a href="<?= base_url('laporan')?>">Rp  8.477.226.601</a></td>
                <td class="color-yellow"><a href="<?= base_url('laporan')?>">Rp  5.080.903.720</a></td>
            </tr>
            <tr>
                <th scope="row">BAZINAS (BAZIS) Jakarta Selatan</a></th>
                <td class="color-green"><a href="<?= base_url('laporan')?>">Rp 12.434.109.961</a></td>
                <td class="color-yellow"><a href="<?= base_url('laporan')?>">Rp  7.859.509.784</a></td>
            </tr>
            <tr>
                <th scope="row">BAZINAS (BAZIS) Jakarta Timur</a></th>
                <td class="color-green"><a href="<?= base_url('laporan')?>">Rp 13.773.962.961</a></td>
                <td class="color-yellow"><a href="<?= base_url('laporan')?>">Rp  8.176.940.338</a></td>
            </tr>
            <tr>
                <th scope="row">BAZINAS (BAZIS) Adm. Kep. Seribu</a></th>
                <td class="color-green"><a href="<?= base_url('laporan')?>">Rp    771.683.159</a></td>
                <td class="color-yellow"><a href="<?= base_url('laporan')?>">Rp    302.666.016</a></td>
            </tr>
            </tbody>
        </table>
        </div>
    </section>
    </div>
    <div class="widget">
    <!-- <h2 class="widget-title">Kerjasama</h2> -->
    <section id="kerjasama">
        <center>
            <div class="kerjasama"></div>
        </center>
    </section>
    </div>
    <div class="widget container">
    <h2 class="widget-title">Zakat Online</h2>
    <section id="zakat-online" class="d-flex justify-content-center">
        <div class="zakat">
        <div class="row">
            <div class="form-group mt-3">
                <label>Zakat Anda akan disalurkan untuk program-program yang telah disiapkan oleh Baznas Bazis DKI Jakarta</label>                  
            </div>
            <div class="input-group mt-3">
            <input type="text" class="form-control" >
            <div class="input-group-append">
                <button class="btn btn-warning" type="button">Zakat</button>
            </div>
            </div>
        </div>
        </div>
    </section>
    </div>
</div>

<?php $this->load->view('frontend/home/modal_muzakki'); ?>