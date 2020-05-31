
    <!-- Target Santri -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card mt-5">
              <div class="card-body">
                 <h5 class="icon-green">Daftar Semua Santri</h5>
                 <div class="h-divider"></div>
                 <!-- list target -->
                 <div class="row mt-4 ">
                     <div class="col-lg-5 ">
                         <h6 class="ml-3">Nama Santri</h6>
                     </div>
                     <div class="col-lg-2">
                        <h6>Penguji</h6> 
                     </div>
                 </div>

                 <?php foreach($data as $dt):?> 
                 <div class="row mt-2">
                    <div class="col-lg-12">       
                     <div class="list-group shadow-sm mb-2">
                      
                      <a href="<?= site_url('penguji/profilSantri/'.$dt->ID_SANTRI);?>" class="list-group-item list-group-item-action">
                        <span class="row">
                            <div class="col-lg-5 text-left">
                                <div class="row">
                                  <div class="col-3">
                                     <img src="<?= base_url('') ?>assets/uploads/avatar/<?= $dt->FOTO_SANTRI;?>" alt="..." class="rounded-circle img-fluid mr-3 float-right tugas-image" >
                                  </div>
                                  <div class="col-lg posisi-image p-2" >
                                    <h6>
                                    <?= $dt->NAMA_SANTRI;?> <br>
                                    </h6>

                                  </div>
                                </div>
                             </div>
                             <div class="col-lg-4">
                                <p>Ust. <?= $dt->NAMA_PENGUJI;?></p> 
                             </div>
                        </span>
                      </a>
                      
                    </div>
                    </div>
                 </div>
                 <?php endforeach;?>

                 <!-- end list target -->
              </div>
            </div>
        </div>
    </div>
</div>

