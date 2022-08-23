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

                        <img src="<?= @$data[0]->image; ?>" alt="" id="img1" width="150">
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
                        
                        <img src="<?= @$data[1]->image; ?>" alt="" id="img2" width="150">
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
                        
                        <img src="<?= @$data[2]->image; ?>" alt="" id="img3" width="150">
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
                        
                        <img src="<?= @$data[3]->image; ?>" alt="" id="img4" width="150">
                        <p id="title4"><?= @$data[3]->title; ?></p>
                        <input type="hidden" id="idheadline4" name="idheadline4" value="<?= @$data[3]->id_headline; ?>">
                        <input type="hidden" id="id4" name="id4" value="<?= @$data[3]->id_content; ?>">
                        <input type="hidden" id="type4" name="type[]" value="<?= @$data[3]->type; ?>">
                        <input type="hidden" id="image4" name="image4" value="<?= @$data[3]->image; ?>">
                        <input type="hidden" id="title_input4" name="title_input4" value="<?= @$data[3]->title; ?>">

                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusHeadline('<?= base_url()?>/headline/delete/4')"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info btn-sm" onclick="cari(4)" data-toggle="modal" data-target="#headlineModal">Pilih</button>
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
        <h5 class="modal-title" id="headlineModalLabel">Pilih Artikel untuk ditampilkan di Headline</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="tab-content mt-3">
            <input type="hidden" id="order" name="order">
            <div>
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
                            <?php
                                $html = @$art->content;
                                $doc = new DOMDocument();
                                @$doc->loadHTML( @$html );

                                $images = $doc->getElementsByTagName("img");
                            ?>
                            <td>
                                <button type="button" onclick="pilih(<?= $art->id_article ?>, 'article','<?= ($images->item(0)!=null)? $images->item(0)->attributes->getNamedItem( 'src' )->nodeValue:'';?>','<?= $art->title ?>')" class="btn btn-sm btn-warning">Pilih</button>
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
        document.getElementById('img'+order).src = image;
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