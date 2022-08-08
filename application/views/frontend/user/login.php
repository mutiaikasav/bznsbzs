<!-- Start Content -->
<div class="bg-img">
    <div class="container content">
        <div class="pt-lg-7">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="login">
                        <div class="box-login">
                            <div class="text-center mb-3"><small>Masuk dengan</small></div>
                            <div class="btn-wrapper text-center">
                                <a href="#" class="btn btn-neutral btn-icon">
                                    <span class="btn-inner--icon"><i class="bx bxl-google"></i></span>
                                    <span class="btn-inner--text">Google</span>
                                </a>
                            </div>
                            <div class="box-login-content">
                                <div class="text-center mb-4">
                                    <small>atau Masuk dengan akun Anda</small>
                                </div>
                                <?php echo $this->session->flashdata('pesan')?>
                                <form method="post" action="<?php base_url()?>/login-user">
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Username" type="text" name="username">
                                        </div>
                                    </div>
                                    <div class="form-group focused">
                                        <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Password" type="password" name="password">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                        <label class="custom-control-label" for=" customCheckLogin"><span>Ingat Saya</span></label>
                                    </div> -->
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary my-4">Masuk</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <a href="<?= base_url('forgot-password');?>" class="text-light"><small>Lupa Password?</small></a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="<?= base_url('register');?>" class="text-light"><small>Buat Akun Baru</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->