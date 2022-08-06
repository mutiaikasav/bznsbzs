<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Data Artikel <?= @$title;?></h1>
        <a href="article-add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Artikel <?= @$title;?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Tanggal Dibuat</th>
                            <th>Tanggal Publish</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach ($data as $article) { ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $article->title; ?></td>
                            <td><?= $article->show_at; ?></td>
                            <td><?= $article->created_at; ?></td>
                            <td><?= $article->published_at; ?></td>
                            <td>
                                <?php if(@$title!='Publish'){?>
                                    <a href="article-publishing/<?= $article->id_article; ?>" class="btn btn-info btn-circle btn-sm">
                                    <i class="fas fa-paper-plane"></i>
                                </a>    
                                <?php } ?>
                                <a href="article-edit/<?= $article->id_article; ?>" class="btn btn-warning btn-circle btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="article-delete/<?= $article->id_article; ?>" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php $i++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->