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
            var image_headline = '';
            // get first image
            let image_headline1 = rows[0]['content'].split('src="');
            if (image_headline1.length>1) {
                let image_headline2 = image_headline1[1].split('" alt=');
                image_headline = image_headline2[0];
            }
            document.querySelector("#section-content").innerHTML = '<div class="headline__wrap clearfix">'+
                    '<div class="headline__item">'+
                        '<div class="headline--big tab-content">'+
                            '<div class="headline__slider fade active in" id="headline1" role="tabpanel" aria-labelledby="home-tab">'+
                                '<div class="headline__img">'+
                                    '<a href="<?= base_url()?>artikel/'+rows[0]['id_article']+'/'+rows[0]['slug']+'">'+
                                        '<img class="lozad" data-src="'+image_headline+'" src="'+image_headline+'" alt="'+rows[0]['title']+'">'+
                                    '</a>'+
                                '</div>'+
                                '<div class="headline__box">'+
                                    '<div class="headline__channel">'+
                                        '<span>Kabar Baznas Bazis</span>'+
                                    '</div>'+
                                    '<div class="headline__title">'+
                                        '<h1>'+
                                            '<a href="<?= base_url()?>artikel/'+rows[0]['id_article']+'/'+rows[0]['slug']+'">'+rows[0]['title']+'</a>'+
                                        '</h1>'+
                                    '</div>'+
                                    '<div class="headline__date">'+rows[0]['published_date']+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>';
            $.each(rows, function (i, item) {
                var image = '';
                let image1 = item['content'].split('src="');
                if (image1.length>1) {
                    let image2 = image1[1].split('" alt=');
                    image = image2[0];
                }
                if (i!==0) {
                    document.querySelector("#section-content").innerHTML += '<div class="latest__item">'+
                        '<div class="latest__img col-125">'+
                            '<a href="<?= base_url()?>artikel/'+item['id_article']+'/'+item['slug']+'">'+
                                '<img class="lozad" data-src="'+image+'" src="'+image+'" alt="'+item['title']+'">'+
                            '</a>'+
                        '</div>'+
                        '<div class="latest__box col-80percent">'+
                            '<div class="latest__channel">'+
                                '<span> '+title+'</span>'+
                            '</div>'+
                            '<div class="latest__title">'+
                                '<h2><a href="<?= base_url()?>artikel/'+item['id_article']+'/'+item['slug']+'"> '+item['title']+'</a></h2>'+
                            '</div>'+
                            '<div class="latest__date">'+item['published_at']+
                            '</div>'+
                        '</div>'+
                    '</div>';
                }
            })
        },
        error:function()
        {
            alert("Error Connection");
        }
    });
</script>
<div class="content">
    <!-- <div class="break-img">
    <img src="<?= base_url(); ?>assets/frontend/img/DSC05194.JPG" alt="" class="lozad">
    </div> -->
    <div class="bg-nav"></div>
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
            
            <!-- latest item -->
            <div class="row col-lg-8" id="section-content" >
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