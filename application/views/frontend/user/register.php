<!-- Start Content -->
<div class="bg-img">
    <div class="container content">
        <div class="pt-lg-7">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="login">
                        <div class="box-login">
                            <div class="text-center mb-3">Daftar Akun Baru</div>
                            <?php echo $this->session->flashdata('pesan')?>
                            <div class="box-login-content">
                                <form method="post" action="<?php base_url()?>/register-user">
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Nama" type="text" name="name_user">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Email" type="email" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Username" type="text" name="username">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Password" type="password" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Ulangi Password" type="password" name="repassword">
                                        </div>
                                    </div>
                                    <!-- <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                        <label class="custom-control-label" for=" customCheckLogin"><span>Ingat Saya</span></label>
                                    </div> -->
                                    <div class="text-center">
                                        <button type="subnit" class="btn btn-primary my-4">Daftar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                        </div>
                        <div class="col-6 text-right">
                            <a href="<?= base_url('login');?>" class="text-light"><small>Sudah Punya Akun</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->