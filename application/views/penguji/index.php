
    <!-- Target Santri -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card mt-5">
              <div class="card-body">
                 <a href="<?= site_url('penguji/index/'.$kd=1);?>" class="btn btn-outline-info">Pengumpulan Saya</a>
                 <a href="<?= site_url('penguji/index/'.$kd=2);?>" class="btn btn-outline-success">Semua Pengumpulan</a>
                 <div class="h-divider"></div>
                 <!-- list target -->
                 <div class="row mt-4 ">
                     <div class="col-lg-4 ">
                         <h6 class="ml-3">Nama Santri</h6>
                     </div>
                     <div class="col-lg-4">
                         <h6>Judul </h6>
                     </div>
                     <div class="col-lg-2">
                        <h6>Penguji</h6> 
                     </div>
                     <div class="col-lg-2 ">
                         <h6>Status </h6>
                     </div>
                 </div>

                <?php if($kode==1):
                foreach($p_saya as $ps):?>
                 <div class="row mt-2">
                    <div class="col-lg-12">       
                        <div class="list-group shadow-sm mb-3">
                            <a href="<?= site_url('Penguji/subtargetTunggal/'.$ps->ID_PROGRESS); ?>" class="list-group-item list-group-item-action">
                                <span class="row">
                                    <div class="col-lg-4 text-left">
                                        <div class="row">
                                        <div class="col-3">
                                            <img src="<?= base_url() ?>assets/uploads/avatar/<?= $ps->FOTO_SANTRI;?>" alt="..." class="rounded-circle img-fluid mr-3 float-right tugas-image" >
                                        </div>
                                        <div class="col-lg posisi-image p-2" >
                                            <h6>
                                            <?= $ps->NAMA_SANTRI;?> <br>
                                            </h6>

                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <h6><?= $ps->JUDUL_PROGRESS;?></h6> 
                                    </div>
                                    <div class="col-lg-2">
                                        <p>Ust. <?= $ps->NAMA_PENGUJI;?></p> 
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <p> <?= $ps->STATUS_PROGRESS;?></p>
                                    </div>
                                </span>
                            </a>
                        </div>
                    </div>
                 </div>
                <?php endforeach;
                else:
                foreach($p_semua as $ps):?>
                 <div class="row mt-2">
                    <div class="col-lg-12">       
                        <div class="list-group shadow-sm mb-3">
                            <a href="<?= site_url('Penguji/subtargetTunggal/'.$ps->ID_PROGRESS); ?>" class="list-group-item list-group-item-action">
                                <span class="row">
                                    <div class="col-lg-4 text-left">
                                        <div class="row">
                                        <div class="col-3">
                                            <img src="<?= base_url() ?>assets/uploads/avatar/<?= $ps->FOTO_SANTRI;?>" alt="..." class="rounded-circle img-fluid mr-3 float-right tugas-image" >
                                        </div>
                                        <div class="col-lg posisi-image p-2" >
                                            <h6>
                                            <?= $ps->NAMA_SANTRI;?> <br>
                                            </h6>

                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <h6><?= $ps->JUDUL_PROGRESS;?></h6> 
                                    </div>
                                    <div class="col-lg-2">
                                        <p>Ust. <?= $ps->NAMA_PENGUJI;?></p> 
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <p> <?= $ps->STATUS_PROGRESS;?></p>
                                    </div>
                                </span>
                            </a>
                        </div>
                    </div>
                 </div>
                <?php endforeach;
                endif;?>

                 <!-- end list target -->
              </div>
            </div>
        </div>
    </div>
</div>

