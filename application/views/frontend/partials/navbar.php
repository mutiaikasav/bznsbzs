<script>
    $.ajax({
        type:"GET",
        url: "<?php echo base_url(); ?>api/menu",
        dataType: 'json',
        success: function(rows)
        { 
            var program = rows['program'];
            var kategori = rows['category'];
            $.each(program, function (i, p) {
                document.querySelector(".menu-program").innerHTML += "<a href='<?= base_url('program')?>/"+p['slug']+"'"+
                " class='dropdown-item'>"+p['program_name']+"</a>";
            });
            $.each(kategori, function (j, k) {
                document.querySelector(".menu-kategori").innerHTML += "<a href='<?= base_url('kategori')?>/"+k['slug']+"'"+
                " class='dropdown-item'>"+k['category_name']+"</a>";
            });
        },
        error:function()
        {
            alert("Error Connection");
        }
    });
</script>
<!-- Start Navbar -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top" id="myNav">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
        </button>
        <a class="navbar-brand logo-white text-brand" href="<?= base_url(); ?>"><img src="<?php base_url();?>/assets/img/logo.png" alt="Logo Baznas Bazis DKI Jakarta"></a>
        <a class="navbar-brand logo-green text-brand" href="<?= base_url(); ?>"><img src="<?php base_url();?>/assets/img/logo-dark-min.png" alt="Logo Baznas Bazis DKI Jakarta"></a>

        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php echo ($this->uri->segment(1) == 'legalitas' || $this->uri->segment(1) == 'visimisi' || $this->uri->segment(1) == 'struktur' || $this->uri->segment(1) == 'organisasi' || $this->uri->segment(1) == 'sejarah' || $this->uri->segment(1) == 'hubungi-kami' || $this->uri->segment(1) == 'kebijakan')?'active':''?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tentang Kami</a>
            <div class="dropdown-menu">
                <a href="<?= base_url('legalitas'); ?>" class="dropdown-item <?php echo ($this->uri->segment(1) == 'legalitas')?'active':''?>">Legalitas</a>
                <a href="<?= base_url('visimisi'); ?>" class="dropdown-item <?php echo ($this->uri->segment(1) == 'visimisi')?'active':''?>">Visi Misi</a>
                <a href="<?= base_url('struktur'); ?>" class="dropdown-item <?php echo ($this->uri->segment(1) == 'struktur')?'active':''?>">Struktur Organisasi</a>
                <a href="<?= base_url('organisasi'); ?>" class="dropdown-item <?php echo ($this->uri->segment(1) == 'organisasi')?'active':''?>">Organisasi</a>
                <a href="<?= base_url('sejarah'); ?>" class="dropdown-item <?php echo ($this->uri->segment(1) == 'sejarah')?'active':''?>">Sejarah</a>
                <a href="<?= base_url('hubungi-kami'); ?>" class="dropdown-item <?php echo ($this->uri->segment(1) == 'hubungi-kami')?'active':''?>">Hubungi Kami</a>
                <a href="<?= base_url('kebijakan'); ?>" class="dropdown-item <?php echo ($this->uri->segment(1) == 'kebijakan')?'active':''?>">Kebijakan Privasi</a>
            </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php echo ($this->uri->segment(1) == 'program')?'active':''?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Program</a>
                <div class="dropdown-menu menu-program">
                </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php echo ($this->uri->segment(1) == 'zakat-fitrah')?'active':''?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tentang Zakat</a>
            <div class="dropdown-menu">
                <a href="<?= base_url('zakat-fitrah'); ?>" class="dropdown-item <?php echo ($this->uri->segment(1) == 'zakat-fitrah')?'active':''?>">Zakat Fitrah</a>
            </div>
            </li>
                
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php echo ($this->uri->segment(1) == 'kalkulator' || $this->uri->segment(1) == 'rekening' || $this->uri->segment(1) == 'konfirmasi' || $this->uri->segment(1) == 'bayarzis' || $this->uri->segment(1) == 'daftar-donatur')?'active':''?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Layanan</a>
            <div class="dropdown-menu">
                <a href="<?= base_url('kalkulator')?>" class="dropdown-item <?php echo ($this->uri->segment(1) == 'kalkulator')?'active':''?>">Kalkulator Zakat</a>
                <a href="<?= base_url('rekening')?>" class="dropdown-item <?php echo ($this->uri->segment(1) == 'rekening')?'active':''?>">Rekening Zakat</a>
                <a href="<?= base_url('konfirmasi')?>" class="dropdown-item <?php echo ($this->uri->segment(1) == 'konfirmasi')?'active':''?>">Konfirmasi Zakat</a>
                <a class="dropdown-item dropdown-toggle <?php echo ($this->uri->segment(1) == 'bayarzis')?'active':''?>" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bayar Zakat Wilayah</a>
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
            <a class="nav-link dropdown-toggle <?php echo ($this->uri->segment(1) == 'kategori')?'active':''?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Berita</a>
            <div class="dropdown-menu menu-kategori">
            </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php echo ($this->uri->segment(1) == 'galeri' || $this->uri->segment(1) == 'publikasi')?'active':''?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media</a>
            <div class="dropdown-menu">
                <a href="<?= base_url('galeri'); ?>" class="dropdown-item <?php echo ($this->uri->segment(1) == 'galeri')?'active':''?>">Galeri</a>
                <a href="<?= base_url('publikasi'); ?>" class="dropdown-item <?php echo ($this->uri->segment(1) == 'publikasi')?'active':''?>">Publikasi</a>
            </div>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('hubungi-kami'); ?>" class="nav-link">Hubungi Kami</a>
            </li>
            <li class="nav-item <?php ($this->session->userdata('logged_in_user') == TRUE)?'dropdown':''?>">
                <?php if ($this->session->userdata('logged_in_user') == TRUE) { ?>
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('name_user'); ?></a>
                    <div class="dropdown-menu">
                        <a href="<?= base_url('profile'); ?>" class="dropdown-item">Profil</a>
                        <a href="<?= base_url('logout'); ?>" class="dropdown-item">Keluar</a>
                    </div>
                <?php } ?>
            </li>
        </ul>
        </div>

        <div class="navbar-toggle-box navbar-toggle-box-collapse">
        </div>
    </div>
</nav>
<!-- End Header/Navbar -->