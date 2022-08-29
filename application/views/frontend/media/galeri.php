<script>
    $.ajax({
        type:"GET",
        url: "<?php echo base_url(); ?>api/galeri",
        dataType: 'json',
        success: function(rows)
        {
            $.each(rows, function (i, item) {
                var image = item['content_gallery'];
                if (image!==null) {
                    var image_split = image.split(',');
                    var image_first = image_split[0];
                    console.log(item['id_gallery'])
                    document.querySelector(".portfolio-container").innerHTML += '<div class="col-lg-4 col-md-6 portfolio-item filter-photo">'+
                    '<a href="<?= base_url(); ?>galeri/'+item['id_gallery']+'/'+item['slug']+'">'+
                    '<img src="<?= base_url(); ?>assets/img/galeri/thumb_'+image_first+'" class="img-fluid" alt="">'+
                    '<div class="portfolio-info">'+
                    '<h4>'+item['title_gallery']+'</h4>'+
                    '<p>'+item['created_at']+'</p>'+
                    '</div>'+
                    '</a>'+
                    '</div>';
                }
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
                <h2>Galeri</h2>
            </center>
        </div>
    </section>
    <!-- End Breadcrumbs -->
    <!-- Start Portfolio Section -->
    <section id="portfolio" class="portfolio">
    <div class="container">

        <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Semua</li>
            <li data-filter=".filter-photo">Foto</li>
            <li data-filter=".filter-video">Video</li>
            </ul>
        </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">
        </div>
        <!-- End blog entries list -->
    </div>
    </section>
    <!-- End Portfolio Section -->
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