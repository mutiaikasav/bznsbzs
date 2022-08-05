<!-- Start Content -->
<div class="content">
    <div class="break-img">
    <img src="<?= base_url(); ?>assets/frontend/img/DSC05210.JPG" alt="" class="lozad">
    </div>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <center>
                <h2>Publikasi</h2>
            </center>
        </div>
    </section>
    <!-- End Breadcrumbs -->
    <!-- Start publication Section -->
    <section id="publication" class="publication">
    <div class="container">
        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="publication-flters">
                <li data-filter="*" class="filter-active">Semua</li>
                <li data-filter=".filter-category1">Kategori 1</li>
                <li data-filter=".filter-category2">Kategori 2</li>
                <li data-filter=".filter-category3">Kategori 2</li>
                </ul>
            </div>
        </div>
        <div class="row publication-container" data-aos="fade-up">
            <div class="col-lg-3 col-md-6 publication-item filter-category1">
              <a href="<?= @$link?>">
                <img src="<?= base_url(); ?>assets/frontend/img/DSC05210.JPG" class="img-fluid" alt="">
                <center>
                  <h4><?= @$title?></h4>
                  <button class="btn btn-warning">Download</button>
                </center>
              </a>
            </div>
        </div>
    </div>
    </section>
    <!-- End publication Section -->
    <section class="blog">
    <div class="blog-pagination">
        <ul class="justify-content-center">
        <li><a href="#"><</a></li>
        <li><a href="#">1</a></li>
        <li class="active"><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">></a></li>
        </ul>
    </div>  
    </section>
</div>
<!-- End Content -->