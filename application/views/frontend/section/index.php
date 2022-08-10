<script>
    var url = window.location.href;
    var split = url.split('/');
    var category = split[3];
    var title = split[4];
    $.ajax({
        type:"POST",
        url: "<?php echo base_url(); ?>api/section",
        data: {category: category, title: title},
        dataType: 'json',
        success: function(rows)
        { 
            if (category == 'program') {
                document.querySelector("#title").innerHTML = rows[0]['program_name'];
                document.querySelector("#desc").innerHTML = rows[0]['description_program'];
            } else if (category == 'kategori') {
                document.querySelector("#title").innerHTML = rows[0]['category_name'];
            }

        },
        error:function()
        {
            alert("Error Connection");
        }
    });

    $.ajax({
        type:"GET",
        url: "<?php echo base_url(); ?>api/artikel",
        dataType: 'json',
        success: function(rows)
        {             
            $.each(rows, function (i, item) {
                var image = '';
                // get first image
                let image1 = item['content'].split('src="');
                if (image1.length>1) {
                    let image2 = image1[1].split('" alt=');
                    image = image2[0];
                }
                // kategori filter
                document.querySelector("#section-content").innerHTML += '<div class="col-lg-4">'+
                    '<article class="entry">'+
                        '<div class="entry-img">'+
                            '<img src='+image+' alt="" class="img-fluid lozad">'+
                        '</div>'+
                        '<h2 class="entry-title">'+
                            '<a href="<?= base_url()?>artikel/'+item['id_article']+'/'+item['slug']+'">'+item['title']+'</a>'+
                        '</h2>'+
                        '<div class="entry-meta">'+
                        '<ul><li><i class="bi bi-person"></i>Baznas Bazis DKI Jakarta</li></ul>'+
                        '<ul><li><i class="bi bi-clock"></i><time datetime="2020-01-01">'+item['published_at']+'</time></li></ul>'+
                        '</div>'+
                        '<div class="entry-content">'+
                            '<p></p>'+
                            '<div class="read-more">'+
                            '<a href="<?= base_url()?>artikel/'+item['id_article']+'/'+item['slug']+'">Baca Selengkapnya</a>'+
                            '</div>'+
                        '</div>'+
                    '</article>'+
                '</div>';
            })
        },
        error:function()
        {
            alert("Error Connection");
        }
    });
</script>
<div class="content">
    <div class="break-img">
    <img src="<?= base_url(); ?>assets/frontend/img/DSC05194.JPG" alt="" class="lozad">
    </div>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <center>
                <h2 id="title"></h2><br>
                <p id="desc"></p>
            </center>
        </div>
    </section>
    <!-- End Breadcrumbs -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">      
            <div class="row" id="section-content" >                
                <div class="d-flex col-lg-12"></div>
                <!-- End blog entry -->
            </div>
            <div class="blog-pagination">
                <ul class="justify-content-center">
                    <li><a href="#"><</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">></a></li>
                </ul>
            </div>  
            <!-- End blog entries list -->
        </div>
        </section>
        <!-- End Blog Section -->
</div>