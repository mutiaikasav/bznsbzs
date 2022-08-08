<script src="<?php base_url();?>/assets/frontend/vendor/purecounter/purecounter.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?php base_url();?>/assets/frontend/js/main.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
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
</script>