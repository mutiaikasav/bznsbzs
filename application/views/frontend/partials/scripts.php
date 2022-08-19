<script src="<?php base_url();?>/assets/frontend/vendor/purecounter/purecounter.js"></script>
<script src="<?php base_url();?>/assets/frontend/js/bootstrap.bundle.min.js"></script>
<script src="<?php base_url();?>/assets/frontend/js/main.js"></script>

<script type="text/javascript" src="<?php base_url();?>/assets/frontend/js/lozad.min.js"></script>
<script type="text/javascript" src="<?php base_url();?>/assets/frontend/js/datatables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#table_donatur').DataTable();
        $('#table_transaction').DataTable();
        $('#table_donation').DataTable();
    } );
    const observer = lozad(); // lazy loads elements with default selector as '.lozad'
    observer.observe();
    function show(params) {
        $('#exampleModal').modal('show');
    }
    function bayar() {
        $('#bayarzis').modal('show');
    }
</script>