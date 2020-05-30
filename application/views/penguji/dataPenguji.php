
<section class="bg-light">
<div class="container">

    <!-- data profil santri -->
    
    <?php foreach($penguji as $st):?>
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card card-shadow mt-4">
              <div class="card-body">
                 <h5>Profil Penguji</h5>
                 <div class="h-divider mb-4"></div>
                 <div class="row justify-content-center">
                  <div class="col-lg-2 mr-4">
                    <img src="<?= base_url('') ?>assets/uploads/avatar/<?= $st->FOTO_PENGUJI;?>" class="rounded" alt="..." style="height: 150px; width: 150px;">
                  </div>
                  <div class="col-lg-7">
                      <div class="row">
                          <div class="col-lg-8 mt-2" ><h4>Nama Penguji <span style="padding-left: 41px;">:   Ust. <?= $st->NAMA_PENGUJI;?></span></h4></div>   
                      </div>
                      <div class="row">
                          <div class="col-lg-4">Jenis Kelamin</div>
                          <div class="col-lg-6"><span>:  </span>  <?= $st->JK_PENGUJI;?></div>
                      </div>
                      <div class="row">
                          <div class="col-lg-4">Tingkatan Menguji</div>
                          <div class="col-lg-6"><span>:  </span>  <?= $st->TINGKAT_MENGUJI;?></div>
                      </div>
                      <div class="row">
                          <div class="col-lg-4">Alamat Rumah</div>
                          <div class="col-lg-6"><span>:  </span>  <?= $st->ALAMAT_PENGUJI;?></div>
                      </div>
                      <div class="row">
                          <div class="col-lg-4">No. WA</div>
                          <div class="col-lg-6"><span>:  </span>  <?= $st->TELEPON_PENGUJI;?></div>
                      </div>
                  </div>
                  <div class="col-lg-2">
                  
                      <a href="<?= site_url('penguji/editDataPenguji/'.$st->ID_PENGUJI);?>" class="btn btn-light btn-block mb-5"> Edit Profil </a>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <?php endforeach;?>

    <!-- end data profil santri -->
