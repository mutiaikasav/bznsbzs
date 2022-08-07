<script>
    window.addEventListener('load', function () {
        var url = window.location.href;
        var split = url.split('/');
        var title = split[3];
        $.ajax({
            type:"GET",
            url: "<?php echo base_url(); ?>api/about",
            // data: {id: value},
            dataType: 'json',
            success: function(rows)
            { 
                var content = rows[0][title];
                document.querySelector(".data").innerHTML = content;
            },

            error:function()
            {
                alert("Error Connection");
            }
        });
    });
</script>
<div class="bg-nav"></div>
<div class="content">
    <section class="intro-single">
        <div class="container">
            <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                <h1 class="title-single"><?= @$title; ?></h1>
                <h5>Tentang Kami</h5>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="index.html">Beranda</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                    <?= @$title; ?>
                    </li>
                </ol>
                </nav>
            </div>
            </div>
        </div>
    </section>
    <!-- End Intro Single-->
    <!-- ======= About Section ======= -->
    <section class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 position-relative">
                </div>
                <div class="col-md-12 section-t8 position-relative">
                <div class="row">
                    <div class="section-md-t3 data">
                        
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
</div>