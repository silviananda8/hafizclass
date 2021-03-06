      <!-- alert tidak ada progress -->
      <?php if($this->session->flashdata('tidak ada progress')== true):?>
        <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
          <?= $this->session->flashdata('tidak ada progress'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php else:?>
      <!-- end alert tidak ada progress -->
    <?php foreach($progress as $pg):?>
      
        <div class="card card-shadow mb-3 mt-4">
          <div class="card-body">

            <div class="row mb-3">
              <div class="col-9">
                <div class="row">
                  <div class="col-2">
                     <img src="<?= base_url() ?>assets/uploads/avatar/<?= $pg->FOTO_SANTRI;?>" alt="..." class="rounded-circle img-fluid mr-3 float-right tugas-image" >
                  </div>
                  <div class="col-lg posisi-image" >
                    <h6>
                      <?= $pg->NAMA_SANTRI;?> <br>
                      <small> <?= $pg->TANGGAL_HARIAN;?></small>
                    </h6>
                  </div>
                </div>
                
              </div>

              <!-- Penilaian Progress -->
              <div class="col-3 ">
                <div class="form-group ">
                    <select class="form-control" id="status_progress" onchange="id_progress(<?= $pg->ID_PROGRESS;?>,this)">
                      <?php if($pg->STATUS_PROGRESS == 'Belum Dinilai'):?>
                      <option value="Belum Dinilai">Belum Dinilai</option>
                      <?php elseif($pg->STATUS_PROGRESS == 'Remidi'):?>
                        <option value="Remidi">Remidi</option>
                        <option value="Belum Dinilai">Belum Dinilai</option>
                      <?php elseif($pg->STATUS_PROGRESS == 'Lancar'):?>
                        <option value="Lancar">Lancar</option>
                        <option value="Belum Dinilai">Belum Dinilai</option>
                      <?php else: // jika kurang lancar?> 
                        <option value="Kurang Lancar">Kurang Lancar</option>
                        <option value="Belum Dinilai">Belum Dinilai</option>
                      <?php endif;?>
                    </select>
                  </div>
              </div>
              <!-- Penilaian Progress -->

            </div>

            <h5><?= $pg->JUDUL_PROGRESS;?></h5>
            <div class="h-divider"></div>
            
            <p><?= $pg->DESKRIPSI_PROGRESS;?></p>
              <audio class="form-control card-shadow" controls src="<?= base_url() ?>assets/uploads/audio/<?= $pg->AUDIO;?>"></audio>
            <div class="h-divider mt-4 mb-1 "></div>
            <p class="text-center"><i class="fas fa-tag icon-green"></i>
  <?= $pg->JENIS_PROGRESS;?></p>
            <div class="h-divider mt-2"></div>
            
          </div>

      <!-- komentar -->
        <?php foreach($komen as $km):?>
        <?php if($km->ID_PROGRESS == $pg->ID_PROGRESS):?>
        <div class="row mb-3">
            <div class="col-2">
               <img src="<?= base_url() ?>assets/uploads/avatar/<?= $km->AVATAR_PENGIRIM;?>" alt="..." class="rounded-circle img-fluid mr-3 float-right komen-image" >
            </div>
            <div class="col-lg posisi-image" >
              <h6>
              <?= $km->NAMA_PENGIRIM;?><br> <small> <?= $km->TANGGAL_KOMEN;?></small>

              </h6>
              <p><?= $km->ISI_KOMEN;?></p>
            </div>
        </div>
          <?php endif;?>
        <?php endforeach;?>
        <hr>

        <!-- Kirim Komentar -->
          <div class="row">
            <div class="col-2">
               <img src="<?= base_url() ?>assets/uploads/avatar/<?= $this->session->userdata('foto_santri');?>" alt="..." class="rounded-circle img-fluid mr-3 float-right tugas-image" >
            </div>
            <div class="col-lg posisi-image" >
                  <div class="form-group pr-2">
                    <form action="<?php echo site_url('c_komen/kirimKomen/'.$kode="santri");?>" method="post">
                      <div class="row">
                      <div class="col-10">
                        <input type="text" class="form-control" id="isi_komen" name="isi_komen" placeholder="Tulis Komentar">
                      <input type="text" id="id_progress" name="id_progress" value="<?= $pg->ID_PROGRESS;?>" hidden>
                      <?php foreach($target as $dt):?>
                        <input type="text" id="id_target" name="id_target" value="<?= $dt->ID_TARGET;?>" hidden>
                      <?php endforeach;?>
                      </div>
                      <div class="col-2">
                        <button class="btn btn-success" type="submit">Kirim</button>
                      </div> </div>                     
                    </form>
                  </div>
            </div>
          </div>
        <!-- END Kirim Komentar -->
        
      <!-- end komentar -->
        </div>
        <?php endforeach;?>
        <?php endif;?>


        </div>
    

        

    </div>
    

    


</div>