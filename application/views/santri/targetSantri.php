
    <!-- Target Santri -->


    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card card-shadow mt-4">
              <div class="card-body">
                 <h5 class="icon-green">Daftar Target</h5>
                 <div class="h-divider"></div>
                 <!-- list target -->
                 <div class="row mt-4 ">
                     <div class="col-lg-5 ">
                         <h6 class="ml-3">Judul Target</h6>
                     </div>
                     <div class="col-lg-3">
                         <h6>Nama Penguji</h6>
                     </div>
                     <div class="col-lg-2">
                        <h6>Batas Waktu</h6> 
                     </div>
                     <div class="col-lg-2 ">
                         <h6>Status </h6>
                     </div>
                 </div>
                 <?php foreach($list as $dt):?>
                 <div class="row mt-2">
                    <div class="col-lg-12">       
                     <div class="list-group">
                      <a href="<?= site_url('santri/subtarget/'.$dt->ID_TARGET);?>" class="list-group-item list-group-item-action">
                     
                        <span class="row">
                            <div class="col-lg-5 text-left">
                                <h6><?= $dt->JUDUL_TARGET;?></h6>
                             </div>
                             <div class="col-lg-3">
                                <p><?= $dt->NAMA_PENGUJI;?></p> 
                             </div>
                             <div class="col-lg-2">
                                <p><?= $dt->BTS_UPLOAD;?></p> 
                             </div>
                             <div class="col-lg-2 text-center">
                                <p><?= $dt->STATUS_TARGET;?></p>
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


