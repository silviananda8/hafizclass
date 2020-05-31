
    <!-- Target Santri -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card mt-5">
              <div class="card-body">
                 <h5 class="icon-green">Daftar Semua Penguji</h5>
                 <div class="h-divider"></div>
                 <!-- list target -->
                 <div class="row mt-4 ">
                     <div class="col-lg-5 ">
                         <h6 class="ml-3">Nama Penguji</h6>
                     </div>
                     <div class="col-lg-7">
                        <h6>Keterangan menguji</h6> 
                     </div>
                 </div>
                 
                 <?php foreach($penguji as $pj):?>
                 <div class="row mt-2">
                    <div class="col-lg-12 mb-2">       
                     <div class="list-group shadow-sm">
                      <div class="list-group-item list-group-item-action">
                        <span class="row">
                            <div class="col-lg-5 text-left">
                                <div class="row">
                                  <div class="col-3">
                                     <img src="<?= base_url() ?>assets/uploads/avatar/<?= $pj->FOTO_PENGUJI;?>" alt="..." class="rounded-circle img-fluid mr-3 float-right tugas-image" >
                                  </div>
                                  <div class="col-lg posisi-image p-2" >
                                    <h6>
                                      <?= $pj->NAMA_PENGUJI;?><br>
                                    </h6>

                                  </div>
                                </div>
                             </div>
                             <div class="col-lg-7">
                                <p><?= $pj->TINGKAT_MENGUJI;?></p> 
                             </div>
                        </span>
                    </div>
                      
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

