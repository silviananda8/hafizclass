
<section class="bg-light">
<div class="container">

    <!-- data profil santri -->
    <?php foreach($data as $dt):?>
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card card-shadow mt-4">
              <div class="card-body">
                 <h5>Profil Santri</h5>
                 <div class="h-divider mb-4"></div>
                 <div class="row justify-content-center">
                  <div class="col-lg-2 mr-4">
                    <img src="<?= base_url('') ?>assets/uploads/santri/avatar/<?= $dt->FOTO_SANTRI;?>" class="rounded" alt="..." style="height: 150px; width: 150px;">
                  </div>
                  <div class="col-lg-7">
                      <div class="row">
                          <div class="col-lg-8 mt-2"><h4><?= $dt->NAMA_SANTRI;?></h4></div>
                      </div>
                      <div class="row">
                          <div class="col-lg-4">Jenis Kelamin</div>
                          <div class="col-lg-6"><span>:  </span>  <?= $dt->JK_SANTRI;?></div>
                      </div>
                      <div class="row">
                          <div class="col-lg-4">Tingkat Pendidikan</div>
                          <div class="col-lg-6"><span>:  </span>  <?= $dt->TINGKAT_PENDIDIKAN;?></div>
                      </div>
                      <div class="row">
                          <div class="col-lg-4">Alamat Rumah</div>
                          <div class="col-lg-6"><span>:  </span>  <?= $dt->ALAMAT_SANTRI;?></div>
                      </div>
                      <div class="row">
                          <div class="col-lg-4">No. WA</div>
                          <div class="col-lg-6"><span>:  </span>  0<?= $dt->TELEPON_SANTRI;?></div>
                      </div>
                  </div>
                  <div class="col-lg-2">
                      <form action="">
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Nama Penguji</label>
                          <select class="form-control" id="exampleFormControlSelect1">
                            <option> <?= $dt->NAMA_PENGUJI;?></option>
                            <?php foreach($list as $lt):?>
                              <option> <?= $lt->NAMA_PENGUJI?></option>
                            <?php endforeach;?>
                          </select>
                        </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <?php endforeach;?>

    <!-- end data profil santri -->
