
      <!-- pengumpulan harian absen -->
      <?php foreach($target as $tg):?>
      <div class="col-12">
        <div class="card card-shadow mt-4">
          <div class="card-body p-3">
             <div class="row">
               <div class="col-lg ">
                 <p><i class="fas fa-user-graduate icon-green"></i>
Santri : <span class="teks-subtunggal"><?= $tg->NAMA_SANTRI;?></span></p>
               </div>
               <div class="col-lg">
                 <p><i class="fas fa-chalkboard-teacher icon-green"></i>
Penguji  : Ust.<span class="teks-subtunggal"> <?= $tg->NAMA_PENGUJI;?></span></p>
               </div>
             </div>
          </div>
        </div>
      
          <!-- end pengumpulan tugas harian -->

        <div class="card card-shadow mt-4">
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-9">
                <div class="row">
                  <div class="col-2">
                     <img src="<?= base_url() ?>assets/uploads/avatar/<?= $tg->FOTO_SANTRI;?>" alt="..." class="rounded-circle img-fluid mr-3 float-right tugas-image" >
                  </div>
                  <div class="col-lg posisi-image" >
                    <h6>
                    <?= $tg->NAMA_SANTRI;?> <br>
                      <small> <?= $tg->TANGGAL_HARIAN;?></small>
                    </h6>

                  </div>
                </div>
                
              </div>
              <div class="col-3">
                <div class="form-group ">
                  <select class="form-control" id="status_progress" onchange="id_progress(<?= $tg->ID_PROGRESS;?>,this)">
                  <?php if($tg->STATUS_PROGRESS == 'Belum Dinilai'):?>
                  <option value="Belum Dinilai">Belum Dinilai</option>
                  <option value="Remidi">Remidi</option>
                  <option value="Lancar">Lancar</option>
                  <option value="Kurang Lancar">Kurang Lancar</option>
                  <?php elseif($tg->STATUS_PROGRESS == 'Remidi'):?>
                    <option value="Remidi">Remidi</option>
                    <option value="Belum Dinilai">Belum Dinilai</option>
                    <option value="Lancar">Lancar</option>
                    <option value="Kurang Lancar">Kurang Lancar</option>
                  <?php elseif($tg->STATUS_PROGRESS == 'Lancar'):?>
                    <option value="Lancar">Lancar</option>
                    <option value="Belum Dinilai">Belum Dinilai</option>
                    <option value="Remidi">Remidi</option>
                    <option value="Kurang Lancar">Kurang Lancar</option>
                  <?php else:?>
                    <option value="Kurang Lancar">Kurang Lancar</option>
                    <option value="Belum Dinilai">Belum Dinilai</option>
                    <option value="Remidi">Remidi</option>
                    <option value="Lancar">Lancar</option>
                  <?php endif;?>
                  </select>
                  </div>
              </div>
            </div>

            <h5> <?= $tg->JUDUL_PROGRESS;?></h5>
            <div class="h-divider"></div>
            <p><?= $tg->DESKRIPSI_PROGRESS;?></p>
            <audio class="form-control shadow-sm" controls src="<?= base_url() ?>assets/uploads/audio/<?= $tg->AUDIO;?>"></audio>
            <div class="h-divider mt-4 mb-1 "></div>
            <p class="text-center"><i class="fas fa-tag icon-green"> </i> <?= $tg->JENIS_PROGRESS;?></p>
            <div class="h-divider mt-2"></div>
          </div>

          <!-- komentar -->
          <?php foreach($komen as $km):?>
          <div class="row mb-3">
            <div class="col-2">
               <img src="<?= base_url() ?>assets/uploads/avatar/<?= $km->AVATAR_PENGIRIM;?>" alt="..." class="rounded-circle img-fluid mr-3 float-right komen-image" >
            </div>
            <div class="col-lg posisi-image" >
              <h6>
              <?= $km->NAMA_PENGIRIM;?>   <br> <small> <?= $km->TANGGAL_KOMEN;?></small>

              </h6>
              <p><?= $km->ISI_KOMEN;?></p>
            </div>
          </div>
          <?php endforeach;?>
          <hr>

          <div class="row">
            <div class="col-2">
               <img src="<?= base_url() ?>assets/uploads/avatar/<?= $this->session->userdata('foto_penguji');?>" alt="..." class="rounded-circle img-fluid mr-3 float-right tugas-image" >
            </div>
            <div class="col-lg posisi-image" >
                  <div class="form-group">
                  <form action="<?php echo site_url('c_komen/kirimKomen/'.$kode="penguji");?>" method="post">
                    <div class="row">
                      <div class="col-10">
                      <input type="text" class="form-control" id="isi_komen" name="isi_komen" placeholder="Tulis Komentar">
                      <input type="text" id="id_progress" name="id_progress" value="<?= $tg->ID_PROGRESS;?>" hidden>
                    </div>
                    <div class="col-2">
                      <button class="btn btn-success " type="submit">Kirim</button>
                    </div>
                    </div>
                    
                      
                      
                    </form>
                  </div>
            </div>
          </div>
        
         <!-- end komentar -->



        </div>
        <?php endforeach;?>

        
    


