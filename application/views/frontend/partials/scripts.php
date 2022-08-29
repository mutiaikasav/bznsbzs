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

    function dateIndo(params) {
        var split = params.split(" ");
        var date = split[0];
        var date_split = date.split("-");
        var tahun = date_split[0];
        var bulan = date_split[1];
        var tanggal = date_split[2];
        var time = split[1];
        var time_split = time.split(":");
        var jam = time_split[0];
        var menit = time_split[1];
        switch(bulan) {
            case '01': bulan = "Januari"; break;
            case '02': bulan = "Februari"; break;
            case '03': bulan = "Maret"; break;
            case '04': bulan = "April"; break;
            case '05': bulan = "Mei"; break;
            case '06': bulan = "Juni"; break;
            case '07': bulan = "Juli"; break;
            case '08': bulan = "Agustus"; break;
            case '09': bulan = "September"; break;
            case '10': bulan = "Oktober"; break;
            case '11': bulan = "November"; break;
            case '12': bulan = "Desember"; break;
        }
        var tampilTanggal = tanggal + " " + bulan + " " + tahun + " " + jam + ":" + menit;
        return tampilTanggal;
    }
</script>