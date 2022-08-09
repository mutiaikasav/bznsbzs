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
        
                        <div class="swiper-slide">
                            <a href="" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><img src="../../assets/img/DSC05210.JPG" alt="" class="lozad"></a>
                        </div>          
                        <div class="swiper-slide">
                            <a href="" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><img src="../../assets/img/DSC05194.JPG" alt="" class="lozad"></a>
                        </div>            
                        <div class="swiper-slide">
                            <a href="" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><img src="../../assets/img/DSC05241.JPG" alt="" class="lozad"></a>
                        </div>
        
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