<script src="<?php base_url();?>/assets/frontend/vendor/purecounter/purecounter.js"></script>
<script src="<?php base_url();?>/assets/frontend/vendor/aos/aos.js"></script>  
<script src="<?php base_url();?>/assets/frontend/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php base_url();?>/assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php base_url();?>/assets/frontend/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php base_url();?>/assets/frontend/vendor/waypoints/noframework.waypoints.js"></script>
<script src="<?php base_url();?>/assets/frontend/vendor/php-email-form/validate.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?php base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script> -->

<script src="<?php base_url();?>/assets/frontend/js/main.js"></script>
<script src="<?php base_url();?>/assets/frontend/js/carousel.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#table_donatur').DataTable();
    } );
    const observer = lozad(); // lazy loads elements with default selector as '.lozad'
    observer.observe();
    function show(params) {
        $('#exampleModal').modal('show');
    }
</script>