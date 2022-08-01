<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?php base_url();?>/user" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-chevron-left fa-sm text-white-50"></i> Kembali</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= @$title;?> Pengguna</h6>
        </div>
        <div class="card-body">
            <form action="<?php base_url();?>/user/save" method="post" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" class="form-control" value="<?= @$data[0]->id_user; ?>">
                <div class="form-group">
                    <label for="name_user">Nama Lengkap</label>
                    <input type="text" id="name_user" name="name_user" class="form-control" value="<?= @$data[0]->name_user; ?>">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control" value="<?= @$data[0]->username; ?>">
                </div>
                <?php if(@$data[0]->password==null){ ?>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" value="<?= @$data[0]->password; ?>">
                    </div>
                <?php } ?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="<?= @$data[0]->email; ?>">
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" id="address" name="address" class="form-control" value="<?= @$data[0]->address; ?>">
                </div>
                <div class="form-group">
                    <label for="panggilan">Panggilan</label>
                    <input type="text" id="panggilan" name="panggilan" class="form-control" value="<?= @$data[0]->panggilan; ?>">
                </div>
                <div class="form-group">
                    <label for="phone">Telepon</label>
                    <input type="number" id="phone" name="phone" class="form-control" value="<?= @$data[0]->phone; ?>">
                </div>
                <div class="form-group">
                    <input type="hidden" id="old_photo" name="old_photo" value="<?= @$data[0]->photo; ?>" class="form-control">
                    <img src="<?= base_url()?>/assets/img/user/<?= @$data[0]->photo; ?>" alt="" width="100">
                </div>
                <div class="form-group">
                    <label for="photo">Foto</label>
                    <input type="file" id="photo" name="photo" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-icon-split form-control" type="submit">
                        <span class="icon text-white-50">
                            <i class="fas fa-save"></i>
                        </span>
                        <span class="text">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->