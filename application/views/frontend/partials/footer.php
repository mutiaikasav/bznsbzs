<script>
    $.ajax({
        type:"GET",
        url: "<?php echo base_url(); ?>api/menu",
        dataType: 'json',
        success: function(rows)
        { 
            var program = rows['program'];
            var kategori = rows['category'];
            $.each(program, function (i, p) {
                document.querySelector(".footer-program").innerHTML += '<li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('program')?>/'+p['slug']+'">'+p['program_name']+'</a></li>';
            });
            $.each(kategori, function (j, k) {
                document.querySelector(".footer-kategori").innerHTML += '<li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('kategori')?>/'+k['slug']+'">'+k['category_name']+'</a></li>';
            });
        },
        error:function()
        {
            alert("Error Connection");
        }
    });
</script>
<!-- Start Footer -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
                <h3>Hubungi Kami</h3>
                <p>
                GRAHA MENTAL SPIRITUAL LT. 5 <br>
                Jl. KH Mas Mansyur / Awaludin ii <br>
                Tanah Abang, Jakarta Pusat <br><br>

                <strong>Telp:</strong> 021-390 1367, 021-314 4579 <br>
                <strong>Fax:</strong> 021-314 4023 <br>
                <strong>Email:</strong> info@baznasbazisdki.id
                </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Berita dan Artikel</h4>
                <ul class="footer-kategori">
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Program Kami</h4>
                <ul class="footer-program">
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Kebijakan Privasi</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="kebijakan.html">Kebijakan Privasi</a></li>
                </ul>
            </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4 mb-4">
        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
            &copy; Copyright <strong><span>Baznas Bazis DKI Jakarta</span> 2022</strong>. All Rights Reserved
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="https://www.instagram.com/baznasbazisdkijakarta/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
            <a href="https://www.facebook.com/baznasbazis/" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.twitter.com/baznasbazis" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
            <a href="https://www.youtube.com/baznasbazistv" class="youtube" target="_blank"><i class="bx bxl-youtube"></i></a>
        </div>
    </div>
</footer>
<!-- End Footer -->
<div class="service-button d-flex align-items-center justify-content-center">
    <span><i class="bi bi-gift"></i></span>
    <!-- <a type="button" data-toggle="modal" data-target="#bayarzis" onclick="bayar()">Bayar ZIS</a> -->
    <a href="https://simpulkebaikan.id/donasi-cepat/" target="_blank">Bayar ZIS</a>
    <a href="https://simpulkebaikan.id/" target="_blank">Donasi</a>
</div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center active"><i class="bi bi-arrow-up-short"></i></a>
<div class="mobileShow mobile-zis">
    <a href="https://simpulkebaikan.id/donasi-cepat/" target="_blank" class="">Bayar ZIS</a>
</div>
<div class="mobileShow mobile-donasi">
    <a href="https://simpulkebaikan.id/" target="_blank" class="mobile-donasi">Donasi</a>
</div>