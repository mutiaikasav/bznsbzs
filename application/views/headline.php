<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Headline</h6>
        </div>
        <div class="card-body">
            <?php if ($data==null || $data == '') { ?>
                <form action="<?php base_url();?>/headline/save" method="post" enctype="multipart/form-data">
            <?php } else { ?>
                <form action="<?php base_url();?>/headline/edit" method="post" enctype="multipart/form-data">
            <?php } ?>
                <div class="form-group d-flex">
                    <div class="col-lg-2">
                        <label for="photo">Headline 1</label>

                        <img src="<?= base_url().'assets/img/banner/'.@$data[0]->image; ?>" alt="" id="img1" width="150">
                        <p id="title1"><?= @$data[0]->title; ?></p>
                        <input type="hidden" id="idheadline1" name="idheadline1" value="<?= @$data[0]->id_headline; ?>">
                        <input type="hidden" id="id1" name="id1" value="<?= @$data[0]->id_content; ?>">
                        <input type="hidden" id="type1" name="type[]" value="<?= @$data[0]->type; ?>">
                        <input type="hidden" id="image1" name="image1" value="<?= @$data[0]->image; ?>">
                        <input type="hidden" id="title_input1" name="title_input1" value="<?= @$data[0]->title; ?>">

                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusHeadline('<?= base_url()?>/headline/delete/1')"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(1)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
                    </div>
                    <div class="col-lg-2">
                        <label for="photo">Headline 2</label>
                        
                        <img src="<?= base_url().'assets/img/banner/'.@$data[1]->image; ?>" alt="" id="img2" width="150">
                        <p id="title2"><?= @$data[1]->title; ?></p>
                        <input type="hidden" id="idheadline2" name="idheadline2" value="<?= @$data[1]->id_headline; ?>">
                        <input type="hidden" id="id2" name="id2" value="<?= @$data[1]->id_content; ?>">
                        <input type="hidden" id="type2" name="type[]" value="<?= @$data[1]->type; ?>">
                        <input type="hidden" id="image2" name="image2" value="<?= @$data[1]->image; ?>">
                        <input type="hidden" id="title_input2" name="title_input2" value="<?= @$data[1]->title; ?>">

                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusHeadline('<?= base_url()?>/headline/delete/2')"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(2)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
                    </div>
                    <div class="col-lg-2">
                        <label for="photo">Headline 3</label>
                        
                        <img src="<?= base_url().'assets/img/banner/'.@$data[2]->image; ?>" alt="" id="img3" width="150">
                        <p id="title3"><?= @$data[2]->title; ?></p>
                        <input type="hidden" id="idheadline3" name="idheadline3" value="<?= @$data[2]->id_headline; ?>">
                        <input type="hidden" id="id3" name="id3" value="<?= @$data[2]->id_content; ?>">
                        <input type="hidden" id="type3" name="type[]" value="<?= @$data[2]->type; ?>">
                        <input type="hidden" id="image3" name="image3" value="<?= @$data[2]->image; ?>">
                        <input type="hidden" id="title_input3" name="title_input3" value="<?= @$data[2]->title; ?>">

                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusHeadline('<?= base_url()?>/headline/delete/3')"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(3)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
                    </div>
                    <div class="col-lg-2">
                        <label for="photo">Headline 4</label>
                        
                        <img src="<?= base_url().'assets/img/banner/'.@$data[3]->image; ?>" alt="" id="img4" width="150">
                        <p id="title4"><?= @$data[3]->title; ?></p>
                        <input type="hidden" id="idheadline4" name="idheadline4" value="<?= @$data[3]->id_headline; ?>">
                        <input type="hidden" id="id4" name="id4" value="<?= @$data[3]->id_content; ?>">
                        <input type="hidden" id="type4" name="type[]" value="<?= @$data[3]->type; ?>">
                        <input type="hidden" id="image4" name="image4" value="<?= @$data[3]->image; ?>">
                        <input type="hidden" id="title_input4" name="title_input4" value="<?= @$data[3]->title; ?>">

                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusHeadline('<?= base_url()?>/headline/delete/4')"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(4)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
                    </div>
                    <div class="col-lg-2">
                        <label for="photo">Headline 5</label>
                        
                        <img src="<?= base_url().'assets/img/banner/'.@$data[4]->image; ?>" alt="" id="img5" width="150">
                        <p id="title5"><?= @$data[4]->title; ?></p>
                        <input type="hidden" id="idheadline5" name="idheadline5" value="<?= @$data[4]->id_headline; ?>">
                        <input type="hidden" id="id5" name="id5" value="<?= @$data[4]->id_content; ?>">
                        <input type="hidden" id="type5" name="type[]" value="<?= @$data[4]->type; ?>">
                        <input type="hidden" id="image5" name="image5" value="<?= @$data[4]->image; ?>">
                        <input type="hidden" id="title_input5" name="title_input5" value="<?= @$data[4]->title; ?>">

                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusHeadline('<?= base_url()?>/headline/delete/5')"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(5)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <div class="col-lg-2">
                        <label for="photo">Headline 6</label>
                        
                        <img src="<?= base_url().'assets/img/banner/'.@$data[5]->image; ?>" alt="" id="img6" width="150">
                        <p id="title6"><?= @$data[5]->title; ?></p>
                        <input type="hidden" id="idheadline6" name="idheadline6" value="<?= @$data[5]->id_headline; ?>">
                        <input type="hidden" id="id6" name="id6" value="<?= @$data[5]->id_content; ?>">
                        <input type="hidden" id="type6" name="type[]" value="<?= @$data[5]->type; ?>">
                        <input type="hidden" id="image6" name="image6" value="<?= @$data[5]->image; ?>">
                        <input type="hidden" id="title_input6" name="title_input6" value="<?= @$data[5]->title; ?>">

                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusHeadline('<?= base_url()?>/headline/delete/6')"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(6)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
                    </div>
                    <div class="col-lg-2">
                        <label for="photo">Headline 7</label>
                        
                        <img src="<?= base_url().'assets/img/banner/'.@$data[6]->image; ?>" alt="" id="img7" width="150">
                        <p id="title7"><?= @$data[6]->title; ?></p>
                        <input type="hidden" id="idheadline7" name="idheadline7" value="<?= @$data[6]->id_headline; ?>">
                        <input type="hidden" id="id7" name="id7" value="<?= @$data[6]->id_content; ?>">
                        <input type="hidden" id="type7" name="type[]" value="<?= @$data[6]->type; ?>">
                        <input type="hidden" id="image7" name="image7" value="<?= @$data[6]->image; ?>">
                        <input type="hidden" id="title_input7" name="title_input7" value="<?= @$data[6]->title; ?>">

                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusHeadline('<?= base_url()?>/headline/delete/7')"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(7)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
                    </div>
                    <div class="col-lg-2">
                        <label for="photo">Headline 8</label>
                        
                        <img src="<?= base_url().'assets/img/banner/'.@$data[7]->image; ?>" alt="" id="img8" width="150">
                        <p id="title8"><?= @$data[7]->title; ?></p>
                        <input type="hidden" id="idheadline8" name="idheadline8" value="<?= @$data[7]->id_headline; ?>">
                        <input type="hidden" id="id8" name="id8" value="<?= @$data[7]->id_content; ?>">
                        <input type="hidden" id="type8" name="type[]" value="<?= @$data[7]->type; ?>">
                        <input type="hidden" id="image8" name="image8" value="<?= @$data[7]->image; ?>">
                        <input type="hidden" id="title_input8" name="title_input8" value="<?= @$data[7]->title; ?>">

                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusHeadline('<?= base_url()?>/headline/delete/8')"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(8)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
                    </div>
                    <div class="col-lg-2">
                        <label for="photo">Headline 9</label>
                        
                        <img src="<?= base_url().'assets/img/banner/'.@$data[8]->image; ?>" alt="" id="img9" width="150">
                        <p id="title9"><?= @$data[8]->title; ?></p>
                        <input type="hidden" id="idheadline9" name="idheadline9" value="<?= @$data[8]->id_headline; ?>">
                        <input type="hidden" id="id9" name="id9" value="<?= @$data[8]->id_content; ?>">
                        <input type="hidden" id="type9" name="type[]" value="<?= @$data[8]->type; ?>">
                        <input type="hidden" id="image9" name="image9" value="<?= @$data[8]->image; ?>">
                        <input type="hidden" id="title_input9" name="title_input9" value="<?= @$data[8]->title; ?>">

                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusHeadline('<?= base_url()?>/headline/delete/9')"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(9)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
                    </div>
                    <div class="col-lg-2">
                        <label for="photo">Headline 10</label>

                        <img src="<?= base_url().'assets/img/banner/'.@$data[9]->image; ?>" alt="" id="img10" width="150">
                        <p id="title10"><?= @$data[9]->title; ?></p>
                        <input type="hidden" id="idheadline10" name="idheadline10" value="<?= @$data[9]->id_headline; ?>">
                        <input type="hidden" id="id10" name="id10" value="<?= @$data[9]->id_content; ?>">
                        <input type="hidden" id="type10" name="type[]" value="<?= @$data[9]->type; ?>">
                        <input type="hidden" id="image10" name="image10" value="<?= @$data[9]->image; ?>">
                        <input type="hidden" id="title_input10" name="title_input10" value="<?= @$data[9]->title; ?>">

                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusHeadline('<?= base_url()?>/headline/delete/10')"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(10)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
                    </div>
                </div>           
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
        document.getElementById('image'+order).value = image;
        document.getElementById('title_input'+order).value = title;
        document.getElementById('img'+order).src = <?php base_url()?>'assets/img/banner/'+image;
        document.getElementById("title"+order).innerHTML = title;
        $("#headlineModal").modal("hide");
    }
    function hapusHeadline(url){
        swal({
            title: "Anda yakin menghapus data ini?",
            text: "Data akan terhapus dari database",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                location = url;
            }
        });
    }
</script>