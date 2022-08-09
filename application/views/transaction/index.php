<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Data Transaksi</h1>
        <a href="transaction-add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Transaksi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Invoice</th>
                            <th>Jenis</th>
                            <th>Donatur</th>
                            <th>Pembayaran</th>
                            <th>Wilayah</th>
                            <th>Status</th>
                            <th>Bukti</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach ($data as $trans) { ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $trans->invoice; ?></td>
                            <td><?= $trans->jenis; ?></td>
                            <td><?= $trans->donatur; ?></td>
                            <td><?= $trans->pembayaran; ?></td>
                            <td><?= $trans->wilayah; ?></td>
                            <td>
                                <?php 
                                if ($trans->status == 0) {
                                    echo "Menunggu Pembayaran";
                                } else if($trans->status == 1){
                                    echo "Menunggu Konfirmasi";
                                } else if($trans->status == 2){
                                    echo "Pembayaran Diterima";
                                }?>
                            </td>
                            <td>
                                <a href="" type="button" data-toggle="modal" data-target="#viewBukti" onclick="showModal(<?= $trans->id_transaction; ?>,'<?= base_url()?>/assets/img/transaksi/<?= $trans->bukti_pembayaran; ?>')">
                                    <img src="<?= base_url()?>/assets/img/transaksi/<?= $trans->bukti_pembayaran; ?>" alt="" width="100"></td>
                                </a>
                            <td>
                                <?php if ($trans->status!=2) { ?>
                                    <a href="transaction-edit/<?= $trans->id_transaction; ?>" class="btn btn-warning btn-circle btn-sm">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                <?php } ?>
                                <a type="button" onclick="hapus('<?= base_url()?>/transaction-delete/<?= $trans->id_transaction; ?>')" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php $i++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<!-- Modal -->
<div class="modal fade" id="viewBukti" tabindex="-1" role="dialog" aria-labelledby="viewBuktiLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="<?php base_url();?>/transaction/konfirmasi" method="post" >
            <div class="modal-header">
              <h5 class="modal-title" id="viewBuktiLabel">Bukti Pembayaran</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id_trans" id="id_trans">
                <center><img src="" alt="" id="buktimax" width="300"></center>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Konfirmasi</button>
            </div>
        </form>
    </div>
  </div>
</div>
<script>
    function showModal(id,src) {
        $("#viewBukti").show();
        document.getElementById("id_trans").value = id;
        document.getElementById("buktimax").src = src;
    }
</script>