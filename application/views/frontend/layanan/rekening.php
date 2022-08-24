<script>
    window.addEventListener('load', function () {
        var url = window.location.href;
        var split = url.split('/');
        var title = split[3];
        $.ajax({
            type:"GET",
            url: "<?php echo base_url(); ?>api/rekening_zakat",
            dataType: 'json',
            success: function(rows)
            { 
                var url_image = window.location.origin+'/assets/img/bank/';
                $.each(rows, function (i, item) {
                    var qris = '"'+url_image+item['qris']+'"';
                    document.querySelector("#data").innerHTML += "<tr>"+
                    "<td><img src='"+url_image+item['logo_bank']+"' alt='"+item['name_bank']+"' width='100'></td>"+
                    "<td>"+item['name_bank']+"</td>"+
                    "<td>"+item['account_name']+"</td>"+
                    "<td>"+item['account_number']+"<input type='hidden' id='"+item['id_bank_account']+"' value='"+item['account_number']+"'></td>"+
                    "<td><button onclick='copy("+item['id_bank_account']+")' class='btn btn-sm'><i class='bi bi-clipboard'></i></button></td>"+
                    "<td><button onclick='qris("+qris+")' class='btn btn-sm'><i class='bi bi-upc-scan'></i></button></td>"+
                    "</tr>";
                })
            },
            error:function()
            {
                alert("Error Connection");
            }
        });

        $.ajax({
            type:"GET",
            url: "<?php echo base_url(); ?>api/rekening_infak",
            dataType: 'json',
            success: function(rows)
            {
                var url_image = window.location.origin+'/assets/img/bank/';
                $.each(rows, function (i, item) {
                    var qris = '"'+url_image+item['qris']+'"';
                    document.querySelector("#data-infak").innerHTML += "<tr>"+
                    "<td><img src='"+url_image+item['logo_bank']+"' alt='"+item['name_bank']+"' width='100'></td>"+
                    "<td>"+item['name_bank']+"</td>"+
                    "<td>"+item['account_name']+"</td>"+
                    "<td>"+item['account_number']+"<input type='hidden' id='"+item['id_bank_account']+"' value='"+item['account_number']+"'></td>"+
                    "<td><button onclick='copy("+item['id_bank_account']+")' class='btn btn-sm'><i class='bi bi-clipboard'></i></button></td>"+
                    "<td><button onclick='qris("+qris+")' class='btn btn-sm'><i class='bi bi-upc-scan'></i></button></td>"+
                    "</tr>";
                })
            },
            error:function()
            {
                alert("Error Connection");
            }
        });
    });

    function copy(param) {
        var copyText = document.getElementById(param).value;
        document.addEventListener('copy', function(e) {
            e.clipboardData.setData('text/plain', copyText);
            e.preventDefault();
        }, true);

        document.execCommand('copy');
    }

    function qris(params) {
        $('#Qris').modal('show');
        $("#image-qris").attr("src", params);
    }
</script>
<div class="bg-nav"></div>
<!-- Start Content -->
<div class="content">
    <section class="intro-single">
        <div class="container">
            <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                <h1 class="title-single">Rekening </h1>
                <h5>Layanan Muzakki</h5>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="<?= base_url();?>">Beranda</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                    Rekening
                    </li>
                </ol>
                </nav>
            </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <h4>Rekening Zakat</h4>
                <br>
                <div class="col-lg-12">
                    <div class="konfirmasi">
                        <div class="row col-lg-12">
                            <input type="hidden" value="" id="empty">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col" colspan="2">Bank</th>
                                    <th scope="col">Rekening Atas Nama</th>
                                    <th scope="col">No Rekening</th>
                                    <th scope="col"></th>
                                    <th scope="col">QRIS</th>
                                    </tr>
                                </thead>
                                <tbody id="data">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
                <h4>Rekening Infak</h4>
                <br>
                <div class="col-lg-12">
                    <div class="konfirmasi">
                        <div class="row col-lg-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col" colspan="2">Bank</th>
                                    <th scope="col">Rekening Atas Nama</th>
                                    <th scope="col">No Rekening</th>
                                    <th scope="col"></th>
                                    <th scope="col">QRIS</th>
                                    </tr>
                                </thead>
                                <tbody id="data-infak">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End Content -->
<!-- Modal -->
<div class="modal fade" id="Qris" tabindex="-1">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="QrisLabel">Barcode QRIS</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <center>
                <img src="" alt="" width="300" id="image-qris">
            </center>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</div>