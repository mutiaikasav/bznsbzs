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

    var prov = 'Semua Wilayah';
    $.ajax({
        type:"POST",
        url: "<?php echo base_url(); ?>api/division",
        data: {province : prov},
        dataType: 'json',
        success: function(rows)
        {
            $.each(rows, function (i, item) {
                document.querySelector('.division-modal').innerHTML += '<option value="'+item['id']+'">'+item['name']+'</option>';
            });
        },
        error:function()
        {
            alert("Error Connection Get Unit Kerja");
        }
    });
</script>