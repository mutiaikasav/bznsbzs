<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?php base_url();?>/admin" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-chevron-left fa-sm text-white-50"></i> Kembali</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= @$title;?> Admin</h6>
        </div>
        <div class="card-body">
            <form action="<?php base_url();?>/admin/save" method="post" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" class="form-control" value="<?= @$data[0]->id_admin; ?>">
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" id="nik" name="nik" class="form-control" value="<?= @$data[0]->nik; ?>">
                </div>
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?= @$data[0]->name; ?>">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <!-- <input type="hidden" id="gender" name="gender" class="form-control" value="<?= @$data[0]->gender; ?>"> -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="pria" value="Pria" <?php echo (@$data[0]->gender=='Pria')?'checked':'';?>>
                        <label class="form-check-label" for="pria">Pria</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="wanita" value="Wanita" <?php echo (@$data[0]->gender=='Wanita')?'checked':'';?>>
                        <label class="form-check-label" for="wanita">Wanita</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" id="address" name="address" class="form-control" value="<?= @$data[0]->address; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="<?= @$data[0]->email; ?>">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control" value="<?= @$data[0]->username; ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="hidden" id="old_password" name="old_password" class="form-control" value="<?= @$data[0]->password; ?>">
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Telepon</label>
                    <input type="number" id="phone" name="phone" class="form-control" value="<?= @$data[0]->phone; ?>">
                </div>
                <div class="form-group">
                    <label for="role">Peran</label>
                    <select name="role" id="role" class="custom-select">
                        <?php foreach ($role as $r) { ?>
                            <option value="<?= $r->id_role; ?>"><?= $r->role_name; ?></option>
                        <?php } ?>
                    </select>
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