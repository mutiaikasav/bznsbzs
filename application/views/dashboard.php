<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Subjek</th>
                            <th>Email ke Bagian</th>
                            <th>Pesan</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach ($message as $msg) { ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $msg->name; ?></td>
                                <td><?= $msg->subject; ?></td>
                                <td><?= $msg->bagian; ?></td>
                                <td><?= $msg->message; ?></td>
                                <td><?= $msg->created_at; ?></td>
                            </tr>
                        <?php $i++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Content Row -->
</div>
<!-- /.container-fluid -->