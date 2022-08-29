<script>
    var url = window.location.href;
    var split = url.split('/');
    var id = split[4];
    $.ajax({
        type:"POST",
        url: "<?php echo base_url(); ?>api/artikel_detail",
        data: {id: id},
        dataType: 'json',
        success: function(rows)
        {
            document.querySelector(".entry-title-article").innerHTML = rows[0]['title'];
            document.querySelector(".date-article").innerHTML = rows[0]['published_at'];
            document.querySelector(".entry-content").innerHTML = rows[0]['content'];
            
            // related
            var related = rows[0]['related_articles'];
            var related_split = related.split(', ');
            $.each(related_split, function (i, item) {
                $.ajax({
                    type:"POST",
                    url: "<?php echo base_url(); ?>api/artikel_detail",
                    data: {id: item},
                    dataType: 'json',
                    success: function(article)
                    { 
                        document.querySelector(".related").innerHTML = '<li><a href="<?= base_url()?>artikel/'+article[0]['id_article']+'/'+article[0]['slug']+'">'+article[0]['title']+'</a></li>';
                    }
                });
                
            });

            // others
            var others = rows[0]['others_articles'];
            var others_split = others.split(', ');
            $.each(others_split, function (i, item) {
                $.ajax({
                    type:"POST",
                    url: "<?php echo base_url(); ?>api/artikel_detail",
                    data: {id: item},
                    dataType: 'json',
                    success: function(article)
                    { 
                        document.querySelector(".others").innerHTML = '<li><a href="<?= base_url()?>artikel/'+article[0]['id_article']+'/'+article[0]['slug']+'">'+article[0]['title']+'</a></li>';
                    }
                });
                
            });
        },
        error:function()
        {
            alert("Error Connection");
        }
    });
</script>
<div class="content">
    <section class="breadcrumbs-article">

    </section>
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">      
            <div class="row">
                <article class="entry entry-single">
                <!-- <p class="entry-breadcrumbs">Beranda / Kabar Zakat</p> -->
                <h1 class="entry-title-article">
                    
                </h1>
                <div class="entry-meta-article">
                    <ul>
                    <li class="d-flex align-items-center date-article"><i class="bi bi-clock"></i> </li>                        
                    </ul>
                </div>
                <!-- <div class="entry-img-article">
                    <img src="assets/img/DSC05194.JPG" alt="" class="img-fluid lozad">
                </div> -->
                
                <div class="entry-content">
                    
    
                </div>      
                </article>
                <!-- End blog entry -->
                <?php $this->load->view('frontend/article/comment'); ?>
           
                <!-- End blog entries list -->

                <div class="blog-related">
                <p class="blog-related-title">Artikel Terkait</p>
                <ul class="related">
                </ul>
                </div>
                <!-- Artikel Terkait -->

                <div class="blog-related">
                <p class="blog-related-title">Artikel Lainnya</p>
                <ul class="others">
                </ul>
                </div>
                <!-- Artikel Terkait -->
                
            </div>
    
        </div>
    </section><!-- End Blog Single Section -->      
</div>