<script>
    window.addEventListener('load', function () {
        $.ajax({
            type:"GET",
            url: "<?php echo base_url(); ?>api/contact",
            dataType: 'json',
            success: function(rows)
            { 
                $.each(rows, function (i, item) {
                    document.querySelector('#bagian').innerHTML += '<option value="'+item['email']+'">'+item['name']+'</option>';
                });
            },
            error:function()
            {
                alert("Error Connection");
            }
        });
    });

    function send_message() {
        var name = document.querySelector('#name').value;
        var subject = document.querySelector('#subject').value;
        var bagian = document.querySelector('#bagian').value;
        var message = document.querySelector('#message').value;
        $.ajax({
            type:"POST",
            url: "<?php echo base_url(); ?>api/message",
            data: {name:name, subject:subject, bagian:bagian, message:message},
            success: function(rows)
            { 
                alert('Terima kasih sudah menghubungi kami. Pesan Anda sudah terkirim, silahkan tunggu balasan dari kami dan cek email Anda sekala berkala.');
                location.reload();
            },
            error:function()
            {
                alert("Error Connection");
            }
        });
    }
</script>
<div class="bg-nav"></div>
<div class="content">
    <section class="intro-single">
        <div class="container">
            <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                <h1 class="title-single">Hubungi Kami</h1>
                <h5>Tentang Kami</h5>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="<?= base_url()?>">Beranda</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                    Hubungi Kami
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
            <div class="map-section">
                <iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.944890310788!2d106.8128835!3d-6.1994025!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb28b025d1b7b4917!2sBAZNAS%20(BAZIS)%20Provinsi%20DKI%20Jakarta!5e0!3m2!1sid!2sid!4v1658420795188!5m2!1sid!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <section id="contact" class="contact">
                <div class="container">
                <div class="row justify-content-center" data-aos="fade-up">
                    <div class="col-lg-12">
                    <div class="info-wrap">
                        <div class="row">
                        <div class="col-lg-4 info">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Lokasi:</h4>
                            <p><b>GRAHA MENTAL SPIRITUAL LT. 5</b></p>
                            <p>KH Mas Mansyur / Awaludin 2</p>
                            <p>Tanah Abang, Jakarta Pusat</p>
                        </div>
                        <div class="col-lg-4 info mt-4 mt-lg-0">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@baznasbazisdki.id</p>
                        </div>
                        <div class="col-lg-4 info mt-4 mt-lg-0">
                            <i class="bi bi-phone"></i>
                            <h4>Telepon/Fax:</h4>
                            <p>Telp. 021-390 1367, 021-314 4579</p>
                            <p>Fax. 021-314 4023</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row mt-5 justify-content-center" data-aos="fade-up">
                    <div class="col-lg-10">
                        <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nama" value="<?= ($this->session->userdata('logged_in_user') == TRUE)?$this->session->userdata('name_user'):''?>" required>
                        </div>
                        <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required>
                        </div>
                        <div class="form-group mt-3">
                        <select class="form-select" name="bagian" id="bagian">
                            <option disabled>Kategori/Bagian yang dituju</option>
                        </select>
                        </div>
                        <div class="form-group mt-3">
                        <textarea class="form-control" name="message" id="message" rows="5" placeholder="Pesan" required></textarea>
                        </div>
                        <!-- <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div> -->
                        <div class="form-group mt-3 text-center"><button type="button" class="btn btn-primary" onclick="send_message()">Kirim</button></div>
                    </div>
                </div>
                </div>
            </section>
            <!-- End Contact Section -->
            </div>
        </div>
    </section>
</div>