<!-- Start Content -->
<div class="content ">
    <section id="profile">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="profile">
                        <div class="row col-lg-4">
                            <center>
                                <div class="col-lg-6 ">
                                    <p><b>0</b></p>
                                    <p>Total Transaksi</p>
                                </div>
                            </center>
                        </div>
                        <div class="row col-lg-5">
                            <center>
                                <img src="assets/img/user.png" alt="" class="rounded-circle lozad">
                            </center>
                        </div>
                        <div class="row col-lg-4">
                            <center>
                                <div class="col-lg-6">
                                    <p><b>0</b></p>
                                    <p>Total Donasi</p>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="profile-tab" id="profil" style="display: block;">
                        <div class="row">
                            <div class="col-md-1">
                                <ul class="nav nav-tabs left-tabs sideways-tabs">
                                <li class="nav-item">
                                    <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>                                    
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="v-pills-transaksi-tab" data-bs-toggle="pill" data-bs-target="#v-pills-transaksi" type="button" role="tab" aria-controls="v-pills-transaksi" aria-selected="false">Transaksi</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="v-pills-donasi-tab" data-bs-toggle="pill" data-bs-target="#v-pills-donasi" type="button" role="tab" aria-controls="v-pills-donasi" aria-selected="false">Donasi</button>
                                </li>
                                </ul>
                            </div>
                    
                            <div class="col-md-11">
                                <div class="container">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <div class="row col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label for="nama">Nama</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" name="nama" id="nama">
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-lg-4">
                                                    <label for="username">Username</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" name="username" id="username">
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-lg-4">
                                                    <label for="email">Email</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" name="email" id="email">
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-lg-4">
                                                    <label for="alamat">Alamat</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" name="alamat" id="alamat">
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-lg-4">
                                                    <label for="telepon">No.HP / Telepon</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" name="telepon" id="telepon">
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-lg-4">
                                                    <label for="panggilan">Panggilan</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" name="panggilan" id="panggilan">
                                                </div>
                                            </div>
                                            <div class="row pt-3 mx-2">
                                                <button class="btn btn-warning">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-transaksi" role="tabpanel" aria-labelledby="v-pills-transaksi-tab">
                                        <div class="row col-lg-12">
                                            <h4>Transaksi</h4>
                                            <br>
                                            <table id="table_id" class="display">
                                                <thead>
                                                    <tr>
                                                        <th>Column 1</th>
                                                        <th>Column 2</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Row 1 Data 1</td>
                                                        <td>Row 1 Data 2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Row 2 Data 1</td>
                                                        <td>Row 2 Data 2</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-donasi" role="tabpanel" aria-labelledby="v-pills-donasi-tab">
                                        <div class="row col-lg-12">
                                            <h4>Donasi</h4>
                                            <br>
                                            <table id="table_donation" class="display">
                                                <thead>
                                                    <tr>
                                                        <th>Column 1</th>
                                                        <th>Column 2</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Row 1 Data 1</td>
                                                        <td>Row 1 Data 2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Row 2 Data 1</td>
                                                        <td>Row 2 Data 2</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-tab" id="transaksi" style="display: none;">
                        <div class="row col-lg-12">
                            <h4>Transaksi</h4>
                            <br>
                            <table id="table_id" class="display">
                                <thead>
                                    <tr>
                                        <th>Column 1</th>
                                        <th>Column 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Row 1 Data 1</td>
                                        <td>Row 1 Data 2</td>
                                    </tr>
                                    <tr>
                                        <td>Row 2 Data 1</td>
                                        <td>Row 2 Data 2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="profile-tab" id="donasi" style="display: none;">
                        <div class="row col-lg-12">
                            <h4>Donasi</h4>
                            <br>
                            <table id="table_donation" class="display">
                                <thead>
                                    <tr>
                                        <th>Column 1</th>
                                        <th>Column 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Row 1 Data 1</td>
                                        <td>Row 1 Data 2</td>
                                    </tr>
                                    <tr>
                                        <td>Row 2 Data 1</td>
                                        <td>Row 2 Data 2</td>
                                    </tr>
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