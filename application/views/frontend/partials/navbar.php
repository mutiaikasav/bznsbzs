<div class="bg-nav-white"></div>
<!-- Start Navbar -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top" id="myNav">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
        </button>
        <a class="navbar-brand text-brand" href="<?= base_url(); ?>"><img src="<?php base_url();?>/assets/frontend/img/Logo Baznas Bazis_2019_v2.png" alt="Logo Baznas Bazis DKI Jakarta"></a>

        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">

            <li class="nav-item">
            <a href="<?= base_url(); ?>" class="nav-link active">Beranda</a>
            </li>

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tentang</a>
            <div class="dropdown-menu">
                <a href="<?= base_url('legalitas'); ?>" class="dropdown-item">Legalitas</a>
                <a href="<?= base_url('visimisi'); ?>" class="dropdown-item">Visi Misi</a>
                <a href="<?= base_url('struktur'); ?>" class="dropdown-item">Struktur Organisasi</a>
                <a href="<?= base_url('organisasi'); ?>" class="dropdown-item">Organisasi</a>
                <a href="<?= base_url('sejarah'); ?>" class="dropdown-item">Sejarah</a>
                <a href="<?= base_url('hubungi-kami'); ?>" class="dropdown-item">Hubungi Kami</a>
                <a href="<?= base_url('kebijakan'); ?>" class="dropdown-item">Kebijakan Privasi</a>
            </div>
            </li>

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Program</a>
            <div class="dropdown-menu">
                <a href="<?= base_url('program/jak-b-bertaqwa')?>" class="dropdown-item">Jak B Bertaqwa</a>
                <a href="<?= base_url('program/jak-b-cerdas')?>" class="dropdown-item">Jak B Cerdas</a>
                <a href="<?= base_url('program/jak-b-sehat')?>" class="dropdown-item">Jak B Sehat</a>
                <a href="<?= base_url('program/jak-b-green')?>" class="dropdown-item">Jak B Green</a>
                <a href="<?= base_url('program/jak-b-berdaya')?>" class="dropdown-item">Jak B Berdaya</a>
            </div>
            </li>

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Layanan Muzakki</a>
            <div class="dropdown-menu">
                <a href="<?= base_url('kalkulator')?>" class="dropdown-item">Kalkulator Zakat</a>
                <a href="<?= base_url('rekening')?>" class="dropdown-item">Rekening Zakat</a>
                <a href="<?= base_url('konfirmasi')?>" class="dropdown-item">Konfirmasi Zakat</a>
                <a class="dropdown-item dropdown-toggle" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bayar Zakat Wilayah</a>
                <ul>
                    <li><a href="<?= base_url('bayarzis')?>" class="sub-dropdown-item">Jakarta Pusat</a></li>
                    <li><a href="<?= base_url('bayarzis')?>" class="sub-dropdown-item">Jakarta Utara</a></li>
                    <li><a href="<?= base_url('bayarzis')?>" class="sub-dropdown-item">Jakarta Barat</a></li>
                    <li><a href="<?= base_url('bayarzis')?>" class="sub-dropdown-item">Jakarta Selatan</a></li>
                    <li><a href="<?= base_url('bayarzis')?>" class="sub-dropdown-item">Jakarta Timur</li>
                    <li><a href="<?= base_url('bayarzis')?>" class="sub-dropdown-item">Kepulauan Seribu</a></li>
                </ul>
            </div>
            </li>

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Berita</a>
            <div class="dropdown-menu">
                <a href="<?= base_url('kategori/kabar-zakat'); ?>" class="dropdown-item">Kabar Zakat</a>
                <a href="<?= base_url('kategori/inspirasi'); ?>" class="dropdown-item">Inspirasi</a>
                <a href="<?= base_url('kategori/lainnya'); ?>" class="dropdown-item">Lainnya</a>
            </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media</a>
            <div class="dropdown-menu">
                <a href="<?= base_url('galeri'); ?>" class="dropdown-item">Galeri</a>
                <a href="<?= base_url('publikasi'); ?>" class="dropdown-item">Publikasi</a>
            </div>
            </li>
            <li class="nav-item">
            <a href="<?= base_url('login'); ?>" class="nav-link">Login</a>
            </li>
        </ul>
        </div>

        <div class="navbar-toggle-box navbar-toggle-box-collapse">
        </div>
    </div>
</nav>
<!-- End Header/Navbar -->