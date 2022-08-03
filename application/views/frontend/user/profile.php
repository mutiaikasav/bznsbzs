<!-- Start Content -->
<div class="content ">
    <section id="profile">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="profile">
                        <div class="row col-lg-4">
                            <div class="col-lg-6 ">
                                <center>
                                    <p>0</p>
                                    <p>Total Transaksi</p>
                                </center>
                            </div>
                            <div class="col-lg-6">
                                <center>
                                    <p>0</p>
                                    <p>Total Donasi</p>
                                </center>
                            </div>
                        </div>
                        <div class="row col-lg-5">
                            <center>
                                <img src="assets/img/user.png" alt="" class="rounded-circle lozad">
                            </center>
                        </div>
                        <div class="row col-lg-4">
                            <div class="col-lg-4">
                                <center>
                                    <button class="btn btn-primary" onclick="klik('profil')">Profil</button>
                                </center>
                            </div>
                            <div class="col-lg-4">
                                <center>
                                    <button class="btn btn-primary" onclick="klik('transaksi')">Transaksi</button>
                                </center>
                            </div>
                            <div class="col-lg-4">
                                <center>
                                    <button class="btn btn-primary" onclick="klik('donasi')">Donasi</button>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="profile-tab" id="profil" style="display: block;">
                        <div class="row col-lg-12">
                            <div class="row pt-3">
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