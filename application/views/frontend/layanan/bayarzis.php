<script>
var province = 'Semua Wilayah';
$.ajax({
    type:"POST",
    url: "<?php echo base_url(); ?>api/division",
    data: {province : province},
    dataType: 'json',
    success: function(rows)
    {
        $.each(rows, function (i, item) {
            document.querySelector('.unit-kerja').innerHTML += '<option value="'+['id']+'">'+item['name']+'</option>';
        });
    },
    error:function()
    {
        alert("Error Connection Get Unit Kerja");
    }
});
</script>
<!-- Start Content -->
<div class="bg-img">
  <div class="content">
      <section id="bayarzis">
        <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="bayarzis">
                    <div class="col-lg-6">
                      <p>ZIS Online terkumpul <b>Rp 1.891.758.025</b></p>
                      <p>dengan Jumlah Donatur <b>1.071</b></p>
                      <table class="table table-hover table-bordered">
                          <thead class="table-head">
                          <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                          </tr>
                          <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                          </tr>
                          <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                          </tr>
                          </tbody>
                      </table>
                      <a href="<?= base_url()?>daftar-donatur">Lihat Selengkapnya</a>
                    </div>
                    <div class="col-lg-6 next">
                        <h5>Bayar ZIS</h5>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#umum">Umum</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#asn">Pejabat / ASN DKI</a>
                          </li>
                        </ul>
    
                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div id="umum" class="container tab-pane active"><br>
                            <form action="">
                              <div class="form-group mt-3">
                                <b>Mulai Bayar Zakat/ZIS</b>
                              </div>
                              <div class="form-group mt-3">
                                <select name="" id="" class="form-select">
                                  <option >Jenis Zakat/ZIS</option>
                                  <option value="Zakat Penghasilan">Zakat Penghasilan</option>
                                  <option value="Zakat Maal">Zakat Maal</option>
                                  <option value="Infaq">Infaq</option>
                                  <option value="Sedekah Baznas Bazis DKI">Sedekah Baznas Bazis DKI</option>
                                </select>
                              </div>
                              <div class="form-group mt-3">
                                <input type="text" placeholder="Masukkan nominal min Rp 10.000" class="form-control">
                              </div>
                              <div class="form-group mt-3">
                                <select name="" id="" class="form-select">
                                  <option>Pilih Metode Pembayaran</option>
                                  <option value="Gopay">Gopay</option>
                                  <option value="Ovo">Ovo</option>
                                </select>
                              </div>
                              <div class="form-check mt-3">
                                  <input class="form-check-input" type="checkbox" value="anonim" id="anonim">
                                  <label class="form-check-label" for="anonim">Jadikan Anonim (Hamba Allah)</label><br>
                              </div>
                              <div class="form-group mt-3">
                                <center>
                                  <p><b>Niat Mengeluarkan Zakat</b></p>
                                  <p><b>نَوَيْتُ أَنْ أُخْرِجَ زَكَاةَ مَالِى فَرْضًا لِلَّهِ تَعَالَى</b></p>
                                  <p>Nawaitu an Ukhrija Zakaata Maali Fardhon Lillaahi Ta’aala</p>
                                  <p>“Saya berniat sengaja mengeluarkan zakat fardhu karena Allah Ta’ala”</p>
                                </center>
                              </div>
                              <div class="form-group">
                                  <?= $script; ?>
                                  <?= $widget; ?>
                              </div>
                              <div class="form-group mt-3">
                                <button class="btn btn-warning form-control">Lanjutkan Pembayaran</button>
                              </div>
                              <div class="form-group mt-3">
                                <p>* Saya menyatakan bahwa dana yang saya bayarkan melalui BAZNAS BAZIS DKI bukan bersumber dari hasil tindak pidana korupsi dan pencucian uang.</p>
                                <p>** Zakat dan donasi Anda akan disalurkan untuk mustahik di wilayah DKI Jakarta dan sekitarnya serta tidak akan disalurkan untuk tujuan terorisme dan kejahatan lainnya.</p>
                                  
                              </div>
                            </form>
                          </div>
                          <div id="asn" class="container tab-pane fade"><br>
                            <form action="">
                              <div class="form-group mt-3">
                                <b>Mulai Bayar Zakat/ZIS</b>
                              </div>
                              <div class="form-group mt-3">
                                <select name="" id="" class="form-select">
                                  <option >Jenis Zakat/ZIS</option>
                                  <option value="Zakat Penghasilan">Zakat Penghasilan</option>
                                  <option value="Zakat Maal">Zakat Maal</option>
                                  <option value="Infaq">Infaq</option>
                                  <option value="Sedekah Baznas Bazis DKI">Sedekah Baznas Bazis DKI</option>
                                </select>
                              </div>
                              <div class="form-group mt-3">
                                <input type="text" placeholder="Masukkan nominal min Rp 10.000" class="form-control">
                              </div>
                              <div class="form-group mt-3">
                                <select name="" id="" class="form-select">
                                  <option>Pilih Metode Pembayaran</option>
                                  <option value="Gopay">Gopay</option>
                                  <option value="Ovo">Ovo</option>
                                </select>
                              </div>
                              <div class="form-group mt-3">
                                    <select name="division" id="division" class="form-select unit-kerja">
                                        <option>Pilih Unit Kerja</option>
                                    </select>
                                </div>
                              <div class="form-check mt-3">
                                  <input class="form-check-input" type="checkbox" value="anonim" id="anonim">
                                  <label class="form-check-label" for="anonim">Jadikan Anonim (Hamba Allah)</label><br>
                              </div>
                              <div class="form-group mt-3">
                                <center>
                                  <p><b>Niat Mengeluarkan Zakat</b></p>
                                  <p><b>نَوَيْتُ أَنْ أُخْرِجَ زَكَاةَ مَالِى فَرْضًا لِلَّهِ تَعَالَى</b></p>
                                  <p>Nawaitu an Ukhrija Zakaata Maali Fardhon Lillaahi Ta’aala</p>
                                  <p>“Saya berniat sengaja mengeluarkan zakat fardhu karena Allah Ta’ala”</p>
                                </center>
                              </div>
                              <div class="form-group">
                                  <?= $script; ?>
                                  <?= $widget; ?>
                              </div>
                              <div class="form-group mt-3">
                                <button class="btn btn-warning form-control">Lanjutkan Pembayaran</button>
                              </div>
                              <div class="form-group mt-3">
                                <p>* Saya menyatakan bahwa dana yang saya bayarkan melalui BAZNAS BAZIS DKI bukan bersumber dari hasil tindak pidana korupsi dan pencucian uang.</p>
                                <p>** Zakat dan donasi Anda akan disalurkan untuk mustahik di wilayah DKI Jakarta dan sekitarnya serta tidak akan disalurkan untuk tujuan terorisme dan kejahatan lainnya.</p>
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </section>
  </div>
</div>
<!-- End Content -->