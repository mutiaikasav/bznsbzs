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
            console.log(rows);
            document.querySelector(".entry-title-article").innerHTML = rows[0]['title'];
            document.querySelector(".date-article").innerHTML = rows[0]['published_at'];
            document.querySelector(".entry-content").innerHTML = rows[0]['content'];
            //  = '<li><a href="artikel.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ipsam reprehenderit natus dolorum voluptatem animi doloremque itaque, autem ducimus eaque earum, molestiae magni repudiandae et eveniet vero aspernatur illum velit!</a></li>'
            // related
            // others
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
                <p class="entry-breadcrumbs">Beranda / Kabar Zakat</p>
                <h1 class="entry-title-article">
                    
                </h1>
                <div class="entry-meta-article">
                    <ul>
                    <li class="d-flex align-items-center date-article"><i class="bi bi-clock"></i> </li>                        
                    </ul>
                </div>
                <div class="entry-img-article">
                    <img src="assets/img/DSC05194.JPG" alt="" class="img-fluid lozad">
                </div>
                
                <div class="entry-content">
                    
    
                </div>      
                </article>
                <!-- End blog entry -->
                <?php //$this->load->view('frontend/article/comment'); ?>
           
                <!-- End blog entries list -->

                <div class="blog-related">
                <p class="blog-related-title">Artikel Terkait</p>
                <ul class="related">
                    <li><a href="artikel.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ipsam reprehenderit natus dolorum voluptatem animi doloremque itaque, autem ducimus eaque earum, molestiae magni repudiandae et eveniet vero aspernatur illum velit!</a></li>
                    <li><a href="artikel.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ipsam reprehenderit natus dolorum voluptatem animi doloremque itaque, autem ducimus eaque earum, molestiae magni repudiandae et eveniet vero aspernatur illum velit!</a></li>
                    <li><a href="artikel.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ipsam reprehenderit natus dolorum voluptatem animi doloremque itaque, autem ducimus eaque earum, molestiae magni repudiandae et eveniet vero aspernatur illum velit!</a></li>
                    <li><a href="artikel.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ipsam reprehenderit natus dolorum voluptatem animi doloremque itaque, autem ducimus eaque earum, molestiae magni repudiandae et eveniet vero aspernatur illum velit!</a></li>
                    <li><a href="artikel.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ipsam reprehenderit natus dolorum voluptatem animi doloremque itaque, autem ducimus eaque earum, molestiae magni repudiandae et eveniet vero aspernatur illum velit!</a></li>
                </ul>
                </div>
                <!-- Artikel Terkait -->

                <div class="blog-related">
                <p class="blog-related-title">Artikel Lainnya</p>
                <ul class="others">
                    <li><a href="artikel.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ipsam reprehenderit natus dolorum voluptatem animi doloremque itaque, autem ducimus eaque earum, molestiae magni repudiandae et eveniet vero aspernatur illum velit!</a></li>
                    <li><a href="artikel.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ipsam reprehenderit natus dolorum voluptatem animi doloremque itaque, autem ducimus eaque earum, molestiae magni repudiandae et eveniet vero aspernatur illum velit!</a></li>
                    <li><a href="artikel.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ipsam reprehenderit natus dolorum voluptatem animi doloremque itaque, autem ducimus eaque earum, molestiae magni repudiandae et eveniet vero aspernatur illum velit!</a></li>                      
                </ul>
                </div>
                <!-- Artikel Terkait -->
                
            </div>
    
        </div>
    </section><!-- End Blog Single Section -->      
</div>