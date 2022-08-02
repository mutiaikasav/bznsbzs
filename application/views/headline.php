<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Headline</h6>
        </div>
        <div class="card-body">
            <form action="<?php base_url();?>/headline/save" method="post" enctype="multipart/form-data">
                <div class="form-group d-flex">
                    <div class="col-lg-2">
                        <label for="photo">Headline 1</label>

                        <img src="" alt="" id="img1" width="150">
                        <p id="title1"></p>
                        <input type="hidden" id="id1" name="id1">
                        <input type="hidden" id="type1" name="type[]">

                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(1)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
                    </div>
                    <div class="col-lg-2">
                        <label for="photo">Headline 2</label>
                        
                        <img src="" alt="" id="img2" width="150">
                        <p id="title2"></p>
                        <input type="hidden" id="id2" name="id2">
                        <input type="hidden" id="type2" name="type[]">

                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(2)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
                    </div>
                    <div class="col-lg-2">
                        <label for="photo">Headline 3</label>
                        
                        <img src="" alt="" id="img3" width="150">
                        <p id="title3"></p>
                        <input type="hidden" id="id3" name="id3">
                        <input type="hidden" id="type3" name="type[]">

                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(3)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
                    </div>
                    <div class="col-lg-2">
                        <label for="photo">Headline 4</label>
                        
                        <img src="" alt="" id="img4" width="150">
                        <p id="title4"></p>
                        <input type="hidden" id="id4" name="id4">
                        <input type="hidden" id="type4" name="type[]">

                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(4)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
                    </div>
                    <div class="col-lg-2">
                        <label for="photo">Headline 5</label>
                        
                        <img src="" alt="" id="img5" width="150">
                        <p id="title5"></p>
                        <input type="hidden" id="id5" name="id5">
                        <input type="hidden" id="type5" name="type[]">

                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(5)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <div class="col-lg-2">
                        <label for="photo">Headline 6</label>
                        
                        <img src="" alt="" id="img6" width="150">
                        <p id="title6"></p>
                        <input type="hidden" id="id6" name="id6">
                        <input type="hidden" id="type6" name="type[]">

                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(6)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
                    </div>
                    <div class="col-lg-2">
                        <label for="photo">Headline 7</label>
                        
                        <img src="" alt="" id="img7" width="150">
                        <p id="title7"></p>
                        <input type="hidden" id="id7" name="id7">
                        <input type="hidden" id="type7" name="type[]">

                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(7)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
                    </div>
                    <div class="col-lg-2">
                        <label for="photo">Headline 8</label>
                        
                        <img src="" alt="" id="img8" width="150">
                        <p id="title8"></p>
                        <input type="hidden" id="id8" name="id8">
                        <input type="hidden" id="type8" name="type[]">

                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(8)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
                    </div>
                    <div class="col-lg-2">
                        <label for="photo">Headline 9</label>
                        
                        <img src="" alt="" id="img9" width="150">
                        <p id="title9"></p>
                        <input type="hidden" id="id9" name="id9">
                        <input type="hidden" id="type9" name="type[]">

                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(9)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
                    </div>
                    <div class="col-lg-2">
                        <label for="photo">Headline 10</label>

                        <img src="" alt="" id="img10" width="150">
                        <p id="title10"></p>
                        <input type="hidden" id="id10" name="id10">
                        <input type="hidden" id="type10" name="type[]">

                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(10)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
                    </div>
                </div>           
                <!-- <input type="hidden" id="id" name="id" class="form-control" value="<?= @$data[0]->id_headline; ?>"> -->

                <div class="form-group">
                    <button class="btn btn-success btn-icon-split" type="submit">
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
<!-- Modal -->
<div class="modal fade" id="headlineModal" tabindex="-1" role="dialog" aria-labelledby="headlineModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="headlineModalLabel">Headline</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
            <li class="nav-link active"><a data-toggle="tab" href="#banner">Banner</a></li>
            <li class="nav-link"><a data-toggle="tab" href="#artikel">Artikel</a></li>
        </ul>

        <div class="tab-content mt-3">
            <input type="hidden" id="order" name="order">
            <div id="banner" class="tab-pane active">
                <h3>Banner</h3>
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Link</th>
                            <th>Deskripsi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach ($banner as $ban) { ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><img src="<?php echo base_url('assets/img/banner/'.$ban->image.''); ?>" alt="<?= $ban->description_banner; ?>" width="100"></td>
                            <td><?= $ban->link; ?></td>
                            <td><?= $ban->description_banner; ?></td>
                            <td>
                                <button type="button" onclick="pilih(<?= $ban->id_banner ?>, 'banner', '<?= $ban->image ?>', '<?= $ban->description_banner ?>')" class="btn btn-sm btn-warning">Pilih</button>
                            </td>
                        </tr>
                        <?php $i++; } ?>
                    </tbody>
                </table>
            </div>
            <div id="artikel" class="tab-pane fade">
                <h3>Artikel</h3>
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach ($article as $art) { ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $art->title; ?></td>
                            <td><?= $art->show_at; ?></td>
                            <td><?= $art->published_at; ?></td>
                            <td>
                                <button type="button" onclick="pilih(<?= $art->id_article ?>, 'article', '', '<?= $art->title ?>')" class="btn btn-sm btn-warning">Pilih</button>
                            </td>
                        </tr>
                        <?php $i++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
    function cari(order) {
        document.getElementById('order').value = order;
    }
    function pilih(id, type, image, title) {
        const order = document.getElementById('order').value;
        document.getElementById('id'+order).value = id;
        document.getElementById('type'+order).value = type;
        document.getElementById('img'+order).src = <?php base_url()?>'assets/img/banner/'+image;
        document.getElementById("title"+order).innerHTML = "title";
        $("#headlineModal").modal("hide");
    }
</script>