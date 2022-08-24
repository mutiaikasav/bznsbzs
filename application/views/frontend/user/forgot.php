<!-- Start Content -->
<div class="bg-img">
    <div class="container content">
        <div class="pt-lg-7">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="login">
                        <div class="box-login">
                            <div class="text-center mb-3">Lupa Password</div>
                            <div class="box-login-content">
                                <form role="form">
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Masukkan username atau email" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <?= $script; ?>
                                        <?= $widget; ?>
                                    </div>
                                    <!-- <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                        <label class="custom-control-label" for=" customCheckLogin"><span>Ingat Saya</span></label>
                                    </div> -->
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary my-4">Reset Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <a href="<?= base_url('register')?>" class="text-light"><small>Buat Akun Baru</small></a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="<?= base_url('login')?>" class="text-light"><small>Sudah Punya Akun</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->