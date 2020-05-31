
<section class="bg-light">
<div class="container">

    <!-- data profil santri -->

    <?php foreach($santri as $st):?>
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card card-shadow mt-4">
              <div class="card-body">
                 <h5 class="icon-green">Profil Santri</h5>
                 <div class="h-divider mb-4"></div>
                 <div class="row justify-content-center">
                  <div class="col-lg-2 mr-4">
                    <img src="<?= base_url('') ?>assets/uploads/avatar/<?= $st->FOTO_SANTRI;?>" class="rounded" alt="..." style="height: 150px; width: 150px;">
                  </div>

                
                  <div class="col-lg-7">
                      <div class="row">
                          <div class="col-lg-8 mt-2" > <h4> <?= $st->NAMA_SANTRI;?></h4></div>  
                      </div>
                      <div class="row">
                          <div class="col-lg-4">Jenis Kelamin</div>
                          <div class="col-lg-6"><span>:  </span>  <?= $st->JK_SANTRI;?></div>
                      </div>
                      <div class="row">
                          <div class="col-lg-4">Tingkat Pendidikan</div>
                          <div class="col-lg-6"><span>:  </span>  <?= $st->TINGKAT_PENDIDIKAN;?></div>
                      </div>
                      <div class="row">
                          <div class="col-lg-4">Alamat Rumah</div>
                          <div class="col-lg-6"><span>:  </span>  <?= $st->ALAMAT_SANTRI;?></div>
                      </div>
                      <div class="row">
                          <div class="col-lg-4">No. WA</div>
                          <div class="col-lg-6"><span>:  </span>  0<?= $st->TELEPON_SANTRI;?></div>
                      </div>
                  </div>
                

                  <div class="col-lg-2">
                      <a href="<?= site_url('santri/editDataSantri/'.$st->ID_SANTRI);?>" class="btn btn-light btn-block mb-5"><i class="fas fa-user-edit icon-green"></i> Edit Profil </a>
                      <small >Nama Penguji  </small>
                      <?php foreach($data as $dt):?>
                      <h5>Ust. <?= $dt->NAMA_PENGUJI;?> </h5>
                      <?php endforeach;?>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <?php endforeach;?>

    <!-- end data profil santri -->
