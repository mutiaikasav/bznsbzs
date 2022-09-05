<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php base_url()?>">
        <div class="sidebar-brand-icon">
            <img src="<?php base_url();?>/assets/img/logo.png" alt="" width="60px" height="60px">
        </div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <br>
    <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." id="search_menu"
                aria-label="Search" aria-describedby="basic-addon2" onchange="searchMenu()">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" onclick="searchMenu()">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </div>
    <br>
    <hr class="sidebar-divider my-0">
    <?php $role = $this->session->userdata('role'); $access = explode(", ",$role); ?>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php echo ($this->uri->segment(1) == 'dashboard')?'active':''?>">
        <a class="nav-link" href="<?php base_url()?>/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <?php foreach ($access as $a) {
        if ($a == 'general') { ?>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        General
    </div>
    <li class="nav-item <?php echo ($this->uri->segment(1) == 'about')?'active':''?>" id="tentang-kami">
        <a class="nav-link" href="<?php base_url()?>/about">
            <i class="fas fa-fw fa-info"></i>
            <span>Tentang Kami</span>
        </a>
    </li>
    <li class="nav-item <?php echo ($this->uri->segment(1) == 'zakat')?'active':''?>" id="tentang-zakat">
        <a class="nav-link" href="<?php base_url()?>/zakat">
            <i class="fas fa-fw fa-info"></i>
            <span>Tentang Zakat</span>
        </a>
    </li>
    <li class="nav-item <?php echo ($this->uri->segment(1) == 'contact')?'active':''?>" id="hubungi-kami">
        <a class="nav-link" href="<?php base_url()?>/contact">
            <i class="fas fa-fw fa-phone"></i>
            <span>Hubungi Kami</span>
        </a>
    </li>
    <li class="nav-item <?php echo ($this->uri->segment(1) == 'banner')?'active':''?>" id="banner">
        <a class="nav-link" href="<?php base_url()?>/banner">
            <i class="fas fa-fw fa-image"></i>
            <span>Banner</span>
        </a>
    </li>
    <li class="nav-item <?php echo ($this->uri->segment(1) == 'headline')?'active':''?>" id="headline">
        <a class="nav-link" href="<?php base_url()?>/headline">
            <i class="fas fa-fw fa-heading"></i>
            <span>Headline</span>
        </a>
    </li>
    <li class="nav-item <?php echo ($this->uri->segment(1) == 'collaboration')?'active':''?>" id="mitra">
        <a class="nav-link" href="<?php base_url()?>/collaboration">
            <i class="fas fa-fw fa-handshake"></i>
            <span>Mitra</span>
        </a>
    </li>
    <?php
        } if ($a == 'muzakki') {
    ?>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Layanan Muzakki
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?php echo ($this->uri->segment(1) == 'division')?'active':''?>" id="division">
        <a class="nav-link" href="<?php base_url()?>/division">
            <i class="fas fa-solid fa-suitcase"></i>
            <span>Unit Kerja</span>
        </a>
    </li>
    <li class="nav-item <?php echo ($this->uri->segment(1) == 'transaction')?'active':''?>" id="transaction">
        <a class="nav-link" href="<?php base_url()?>/transaction">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Transaksi</span>
        </a>
    </li>
    <li class="nav-item <?php echo ($this->uri->segment(1) == 'donation')?'active':''?>" id="donation">
        <a class="nav-link" href="<?php base_url()?>/donation">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Donasi</span>
        </a>
    </li>
    <li class="nav-item <?php echo ($this->uri->segment(1) == 'bank')?'active':''?>" id="bank">
        <a class="nav-link" href="<?php base_url()?>/bank">
            <i class="fas fa-fw fa-money-check"></i>
            <span>Rekening</span>
        </a>
    </li>
    <li class="nav-item <?php echo ($this->uri->segment(1) == 'confirmation')?'active':''?>" id="konfirmasi">
        <a class="nav-link" href="<?php base_url()?>/confirmation">
            <i class="fas fa-fw fa-money-check"></i>
            <span>Konfirmasi Zakat</span>
        </a>
    </li>
    <?php
        } if ($a == 'artikel') {
    ?>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Article
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item  <?php echo ($this->uri->segment(1) == 'program')?'active':''?>" id="program-category">
        <a class="nav-link" href="<?php base_url()?>/program">
            <i class="fas fa-fw fa-object-group"></i>
            <span>Program</span>
        </a>
    </li>
    <li class="nav-item <?php echo ($this->uri->segment(1) == 'category')?'active':''?>" id="news-category">
        <a class="nav-link" href="<?php base_url()?>/category">
            <i class="fas fa-fw fa-layer-group"></i>
            <span>News Category</span>
        </a>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item <?php echo ($this->uri->segment(1) == 'article')?'active':''?>" id="article">
        <a class="nav-link collapsed" href="<?php base_url()?>/#" data-toggle="collapse" data-target="#collapseArticle"
            aria-expanded="true" aria-controls="collapseArticle">
            <i class="fas fa-fw fa-file"></i>
            <span>Articles</span>
        </a>
        <div id="collapseArticle" class="collapse" aria-labelledby="headingArticle"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php base_url()?>/article-add">Create New</a>
                <a class="collapse-item" href="<?php base_url()?>/article">Published</a>
                <a class="collapse-item" href="<?php base_url()?>/article-draft">Draft</a>
                <!-- <a class="collapse-item" href="<?php base_url()?>/article-schedule">Schedule</a> -->
                <a class="collapse-item" href="<?php base_url()?>/article-hide">Delete</a>
                <a class="collapse-item" href="<?php base_url()?>/comments">Comments</a>
            </div>
        </div>
    </li>
    <?php
        } if ($a == 'galeri') {
    ?>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Galeri
    </div>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item <?php echo ($this->uri->segment(1) == 'gallery')?'active':''?>" id="gallery">
        <a class="nav-link" href="<?php base_url()?>/gallery">
            <i class="fas fa-fw fa-images"></i>
            <span>Galeri</span>
        </a>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?php echo ($this->uri->segment(1) == 'publication')?'active':''?>" id="publikasi">
        <a class="nav-link collapsed" href="<?php base_url()?>/#" data-toggle="collapse" data-target="#collapsePublication"
            aria-expanded="true" aria-controls="collapsePublication">
            <i class="fas fa-fw fa-file"></i>
            <span>Publikasi</span>
        </a>
        <div id="collapsePublication" class="collapse" aria-labelledby="headingPublication"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php base_url()?>/publication-category">Kategori Publikasi</a>
                <a class="collapse-item" href="<?php base_url()?>/publication">Publikasi</a>
            </div>
        </div>
    </li>
    <li class="nav-item <?php echo ($this->uri->segment(1) == 'report')?'active':''?>" id="report">
        <a class="nav-link" href="<?php base_url()?>/report">
            <i class="fas fa-fw fa-file"></i>
            <span>Laporan</span>
        </a>
    </li>
    <?php
        } if ($a == 'credentials') {
    ?>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Credentials
    </div>
    <!-- Nav Item - Utilities Collapse Menu -->
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?php echo ($this->uri->segment(1) == 'user')?'active':''?>" id="mustahik">
        <a class="nav-link" href="<?php base_url()?>/user">
            <i class="fas fa-fw fa-users"></i>
            <span>Donatur</span>
        </a>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?php echo ($this->uri->segment(1) == 'role')?'active':''?>" id="role-menu">
        <a class="nav-link" href="<?php base_url()?>/role">
            <i class="fas fa-fw fa-user"></i>
            <span>Role</span>
        </a>
    </li>
    <li class="nav-item <?php echo ($this->uri->segment(1) == 'admin')?'active':''?>" id="admin">
        <a class="nav-link" href="<?php base_url()?>/admin">
            <i class="fas fa-fw fa-user"></i>
            <span>Admin</span>
        </a>
    </li>
    <?php } } ?>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->