<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Tentang Kami</h1>
    </div>
    <form action="about/save" method="post">
        <!-- Legalitas Form -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Legalitas</h6>
            </div>
            <div class="card-body">
                <textarea class="tinymce" id="legalitas" name="legalitas"><?= $data[0]->legalitas?></textarea>
            </div>
        </div>
        <!-- Visi Misi Form -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Visi Misi</h6>
            </div>
            <div class="card-body">
                <textarea class="tinymce" id="visimisi" name="visimisi"><?= $data[0]->visimisi?></textarea>
            </div>
        </div>
        <!-- Struktur Form -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Struktur Organisasi</h6>
            </div>
            <div class="card-body">
                <textarea class="tinymce" id="struktur" name="struktur"><?= $data[0]->struktur?></textarea>
            </div>
        </div>
        <!-- Organisasi Form -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Organisasi</h6>
            </div>
            <div class="card-body">
                <textarea class="tinymce" id="organisasi" name="organisasi"><?= $data[0]->organisasi?></textarea>
            </div>
        </div>
        <!-- Sejarah Form -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Sejarah</h6>
            </div>
            <div class="card-body">
                <textarea class="tinymce" id="sejarah" name="sejarah"><?= $data[0]->sejarah?></textarea>
            </div>
        </div>
        <!-- Kebijakan Form -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Kebijakan Privasi</h6>
            </div>
            <div class="card-body">
                <textarea class="tinymce" id="kebijakan" name="kebijakan"><?= $data[0]->kebijakan?></textarea>
            </div>
        </div>
        <button class="btn btn-success btn-icon-split" type="submit">
            <span class="icon text-white-50">
                <i class="fas fa-save"></i>
            </span>
            <span class="text">Simpan</span>
        </button>
    </form>
</div>
<!-- /.container-fluid -->