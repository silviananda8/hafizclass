
    <!-- Target Santri -->


    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card card-shadow mt-4">
              <div class="card-body">
                <div class="row">
                    <div class="col-10">
                        <h5>Daftar Target</h5>
                    </div>

                    <div class="col-2">
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                          Tambah Target
                        </button>
                    </div>
                </div>
                 <div class="h-divider"></div>
                 <!-- list target -->
                 <div class="row mt-4 ">

                    <!-- alert tambah target berhasil -->
                    <?php if($this->session->flashdata()== true):?>
                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('msg'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <?php else:?>
                    <?php endif;?>
                    <!-- end alert tambah target -->

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

                 <?php foreach($target as $dt):?>
                 <div class="row mt-2">
                    <div class="col-lg-12">       
                     <div class="list-group shadow-sm">
                        <a href="<?= site_url('penguji/subtarget/'.$dt->ID_TARGET);?>" class="list-group-item list-group-item-action">
                            <span class="row">
                                <div class="col-lg-5 text-left">
                                    <h6><?= $dt->JUDUL_TARGET;?></h6>
                                </div>
                                <div class="col-lg-3">
                                    <p>Ust. <?= $dt->NAMA_PENGUJI;?></p> 
                                </div>
                                <div class="col-lg-2">
                                    <p><?= $dt->BTS_UPLOAD;?></p> 
                                </div>
                            
                        <!-- maaf sil ini selection box nya aku pindah kebawah tag a biar bisa ganti opsinya -->
                        <div class="col-lg-2 text-center">
                            <div class="form-group">
                            <select class="form-control" id="status_target" onchange="status_target(<?= $dt->ID_TARGET;?>,this)">
                                <?php if($dt->STATUS_TARGET == 'Belum Tuntas'):?>
                                    <option value="Belum Tuntas">Belum Tuntas</option>
                                    <option value="Sudah Tuntas">Sudah Tuntas</option>
                                <?php else:?>
                                    <option value="Sudah Tuntas">Sudah Tuntas</option>
                                    <option value="Belum Tuntas">Belum Tuntas</option>
                                <?php endif;?>
                                </select>
                            </div>
                        </div>
                        <!-- end pindah -->
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



<!-- Modal tambah target-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Target</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('penguji/tambahTargetSantri');?>" method="post">
            <div class="form-group">
                <label for="judul_target">Judul Target</label>
                <input type="text" class="form-control" id="judul_target" name="judul_target" placeholder="Judul Target" required>
            </div>
            <div class="form-group">
                <label for="deskripsi_target">Deskripsi Target</label>
                <textarea class="form-control" id="deskripsi_target" name="deskripsi_target" placeholder="Silahkan tulis deskripsi target" rows="3"></textarea>
            </div>
            <div class="row">
                <div class="col-lg">
                    <label for="exampleInputPassword1">Batas Waktu</label>
                    <input type="text" class="form-control" id="batas_waktu" name="batas_waktu" required>
                </div>
                <div class="col-lg">
                    <div class="form-group">
                        <label for="id_penguji">Daftar Ustadz</label>
                        <select class="form-control" id="id_penguji" name="id_penguji">
                        <?php foreach($penguji as $pj):?>
                            <option value="<?= $pj->ID_PENGUJI;?>">Ust. <?= $pj->NAMA_PENGUJI;?></option>
                        <?php endforeach;?>
                        </select>
                    </div>
                </div>
            </div>

            <input type="text" class="form-control" id="tanggal_upload" name="tanggal_upload" hidden>

            <?php foreach($data as $dt):?>
            <input type="text" name="id_santri" class="form-control" id="id_santri" value="<?= $dt->ID_SANTRI;?>" hidden>
            <?php endforeach;?>
                
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
      </div>

      </form>
    </div>
  </div>
</div>


