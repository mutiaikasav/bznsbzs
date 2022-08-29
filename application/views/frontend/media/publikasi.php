<script>
    $.ajax({
        type:"GET",
        url: "<?php echo base_url(); ?>api/publikasi",
        dataType: 'json',
        success: function(rows)
        {             
            $.each(rows, function (i, item) {
                document.querySelector(".publication-container").innerHTML += '<div class="col-lg-3 col-md-6 publication-item filter-category1">'+
              '<a href="<?= base_url(); ?>assets/upload/'+item['content_publication']+'" target="_blank">'+
              '<iframe src="<?= base_url(); ?>assets/upload/'+item['content_publication']+'" width="100%" height="200px"></iframe>'+
                '<center>'+
                  '<h4>'+item['title_publication']+'</h4>'+
                  '<button class="btn btn-warning">Download</button>'+
                '</center>'+
              '</a>'+
            '</div>';
            });
        },
        error:function()
        {
            alert("Error Connection");
        }
    });
</script>
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