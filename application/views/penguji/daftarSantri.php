
    <!-- Target Santri -->


    <div class="row justify-content-center pb-5">
        <div class="col-lg-11">
            <div class="card card-shadow mt-4 mb-5 ">
              <div class="card-body">
                 <h5 class="icon-green">Daftar Santri yang Diuji</h5>
                 <div class="h-divider"></div>
                 <!-- list target -->
                 <div class="row mt-4 ">
                     <div class="col-lg-7 ">
                         <h6 class="ml-3">Nama Santri</h6>
                     </div>
                     <div class="col-lg-3">
                         <h6>Nama Penguji</h6>
                     </div>
                 </div>

                <?php foreach($santri as $st):?>
                 <div class="row mt-2">
                    <div class="col-lg-12">       
                     <div class="list-group">
                      <div class="list-group-item list-group-item-action shadow-sm">
                        <span class="row">
                            <div class="col-lg-7 text-left">
                                <div class="row">
                                  <div class="col-2">
                                     <img src="<?= base_url() ?>assets/uploads/avatar/<?= $st->FOTO_SANTRI;?>" alt="..." class="rounded-circle img-fluid mr-3 float-right tugas-image" >
                                  </div>
                                  <div class="col-10 posisi-image pt-2" >
                                    <h6>
                                      <?= $st->NAMA_SANTRI;?>
                                    </h6>
                                  </div>
                                </div>
                             </div>
                             <div class="col-lg-3">
                                <p>Ust. <?= $st->NAMA_PENGUJI;?></p> 
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


