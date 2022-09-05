<link href="<?= base_url()?>assets/frontend/vendor/aos/aos.css" rel="stylesheet">
<link href="<?= base_url()?>assets/frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="<?= base_url()?>assets/frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<script src="<?= base_url()?>assets/frontend/vendor/aos/aos.js"></script>
<script src="<?= base_url()?>assets/frontend/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url()?>assets/frontend/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url()?>assets/frontend/js/gallery.js"></script>

<script>
    var url = window.location.href;
    var split = url.split('/');
    var id = split[4];
    $.ajax({
        type:"POST",
        url: "<?php echo base_url(); ?>api/galeri_detail",
        data: {id: id},
        dataType: 'json',
        success: function(rows)
        { 
            console.log(rows);
            document.querySelector(".title-gallery").innerHTML = rows[0]['title_gallery'];
            document.querySelector(".description-gallery").innerHTML = rows[0]['description_gallery'];
            var content = rows[0]['content_gallery'];
            var image = content.split(',');
            $.each(image, function (i, item) {
                document.querySelector(".swiper-wrapper").innerHTML += '<div class="swiper-slide">'+
                    '<a href="/assets/img/galeri/'+item+'" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><img src="<?= base_url()?>assets/img/galeri/'+item+'" alt="" class="lozad"></a>'+
                    '</div>';
            });
            var video = rows[0]['video'];
            document.querySelector(".swiper-wrapper").innerHTML += '<div class="swiper-slide"><center>'+video+'</center></div>';
        },
        error:function()
        {
            alert("Error Connection");
        }
    });
</script>
<!-- Start Content -->
<div class="content">
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">    
            <div class="row gy-4">    
                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-description">
                        <h2 class="title-gallery"></h2>
                        <div class="description-gallery"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Details Section -->
</div>
<!-- End Content -->