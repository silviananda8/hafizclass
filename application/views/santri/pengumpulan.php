<!-- pengumpulan harian absen -->
        <div class="card card-shadow mt-4">
          <div class="card-body">

          <!-- alert data berhasil ditambahkan -->
          <?php if($this->session->flashdata()== true):?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('msg'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php else:?>
          <?php endif;?>
          <!-- end alert data berhasil ditambahkan -->
  
             <?php echo form_open_multipart('santri/pengumpulanTugas');?>
             <h5 class="icon-green">Pengumpulan Progress</h5>
              <div class="row mt-3">
                <div class="col-3">
                  <div class="form-group">
                  <select class="form-control" id="jenis_progress" name="jenis_progress">
                    <option>Membaca</option>
                    <option>Menghafal</option>
                    <option>Muroja'ah</option>
                  </select>
                  </div>
                </div>
                <div class="col-9">
                  <div class="form-group">
                    <input type="text" class="form-control" id="judul_progress" name="judul_progress" placeholder="Judul Tugas" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                   <div class="form-group">
                      <textarea class="form-control" id="deskripsi_progress" name="deskripsi_progress" rows="3" placeholder="Deskripsi Tugas"></textarea>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-10">
                    <div class="form-group">
                      <label for="exampleFormControlFile1" class="icon-green ">Pilih Audio</label>
                      <input type="file" class="form-control" id="audio" name="audio" accept="audio/*">
                    </div>
                </div>

                <?php foreach($data as $dt):?>
                <input type="text" class="form-control" id="id_target" name="id_target" value="<?= $dt->ID_TARGET;?>" hidden>
                <?php endforeach;?>

                <input type="text" class="form-control"  name="tanggal_harian" id="tanggal_upload" hidden>

                <div class="col-2">
                  <button class="btn btn-success float-right btn-block mt-4">Kirim</button>
                </div>
              </div>
              
               
              <?php echo form_close();?>
          </div>
        </div>
          <!-- end pengumpulan tugas harian -->