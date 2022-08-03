<!-- Start Content -->
<div class="container content">
    <div class="pt-lg-7">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="login">
                    <div class="box-login">
                        <div class="text-center mb-3">Ubah Password</div>
                        <div class="box-login-content">
                            <form role="form">
                                <div class="form-group mb-3">
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative" id="show_hide_password">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="bi bi-eye-fill"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Masukkan Password Lama" type="password">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative" id="show_hide_password_new">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="bi bi-eye-fill"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Masukkan Password Baru" type="password">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative" id="show_hide_repassword">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="bi bi-eye-fill"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Ulangi Password Baru" type="password">
                                        </div>
                                    </div>
                                    <!-- <div class="input-group input-group-alternative" id="show_hide_password">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="bi bi-eye-fill" aria-hidden="true"></i></span>
                                        </div>                                            
                                        <input class="form-control" type="password" name="old_password" placeholder="Masukkan Password Lama">
                                        </div>
                                    </div> -->
                                    <!-- <div class="input-group input-group-alternative" id="show_hide_password-new">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="bi bi-eye-fill" aria-hidden="true"></i></span>
                                        </div>                                            
                                        <input class="form-control" type="password" name="new_password" placeholder="Masukkan Password Baru">
                                        </div>
                                    </div>
                                    <div class="input-group input-group-alternative" id="show_hide_repassword">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="bi bi-eye-fill" aria-hidden="true"></i></span>
                                        </div>                                            
                                        <input class="form-control" type="password" name="re_password" placeholder="Ulangi Password Baru">
                                        </div>
                                    </div> -->
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary my-4">Ubah Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <!-- <a href="register.html" class="text-light"><small>Buat Akun Baru</small></a> -->
                    </div>
                    <div class="col-6 text-right">
                        <a href="login.html" class="text-light"><small>Sudah Punya Akun</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->
<script>
    $(document).ready(function() {
        $("#show_hide_password span").on('click', function(event) {
            event.preventDefault();
            if($('#show_hide_password input').attr("type") == "text"){
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass( "bi-eye-slash-fill" );
                $('#show_hide_password i').removeClass( "bi-eye-fill" );
            }else if($('#show_hide_password input').attr("type") == "password"){
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass( "bi-eye-slash-fill" );
                $('#show_hide_password i').addClass( "bi-eye-fill" );
            }
        });
        $("#show_hide_password_new span").on('click', function(event) {
            event.preventDefault();
            if($('#show_hide_password_new input').attr("type") == "text"){
                $('#show_hide_password_new input').attr('type', 'password');
                $('#show_hide_password_new i').addClass( "bi-eye-slash-fill" );
                $('#show_hide_password_new i').removeClass( "bi-eye-fill" );
            }else if($('#show_hide_password_new input').attr("type") == "password"){
                $('#show_hide_password_new input').attr('type', 'text');
                $('#show_hide_password_new i').removeClass( "bi-eye-slash-fill" );
                $('#show_hide_password_new i').addClass( "bi-eye-fill" );
            }
        });
        $("#show_hide_repassword span").on('click', function(event) {
            event.preventDefault();
            if($('#show_hide_repassword input').attr("type") == "text"){
                $('#show_hide_repassword input').attr('type', 'password');
                $('#show_hide_repassword i').addClass( "bi-eye-slash-fill" );
                $('#show_hide_repassword i').removeClass( "bi-eye-fill" );
            }else if($('#show_hide_repassword input').attr("type") == "password"){
                $('#show_hide_repassword input').attr('type', 'text');
                $('#show_hide_repassword i').removeClass( "bi-eye-slash-fill" );
                $('#show_hide_repassword i').addClass( "bi-eye-fill" );
            }
        });
    });
</script>