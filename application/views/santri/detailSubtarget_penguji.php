<div class="container">

    <div class="row justify-content-center">
      <!-- detail target -->
      <?php foreach($target as $tg):?>
      <div class="col-3">
            <div class="card card-shadow mt-4">
              <div class="card-body">
                <small>Judul Target</small>
                 <h5><?= $tg->JUDUL_TARGET;?></h5>
                 <small>Deskripsi Target :</small>
                 <p><?= $tg->DESKRIPSI_TARGET;?></p>
                <small>Nama Penguji</small>
                <h6><i class="fas fa-chalkboard-teacher icon-green"></i>  Ust. <?= $tg->NAMA_PENGUJI;?></h6>
                <small>Batas Waktu</small>
                <h6><i class="far fa-calendar-alt icon-green"></i>  <?= $tg->BTS_UPLOAD;?></h6>
                <small>Status</small>
                 <div class="form-group">
                  <select class="form-control" id="status_target" onchange="status_target(<?= $tg->ID_TARGET;?>,this)">
                    <?php if($tg->STATUS_TARGET == "Belum Tuntas"):?>
                      <option value="Belum Tuntas">Belum Tuntas</option>
                      <option value="SudahTuntas">Sudah Tuntas</option>
                    <?php else:?>
                      <option value="SudahTuntas">Sudah Tuntas</option>
                      <option value="Belum Tuntas">Belum Tuntas</option>
                    <?php endif;?>
                  </select>
                 </div>
                 <button type="button" class="btn  badge-primary mt-5 mr-1 pt-1 pb-1 pr-3 pl-3" data-toggle="modal" data-target="#exampleModal">
                          Edit
                        </button>
                <button type="button" class="btn  badge-danger mt-5 mr-1 pt-1 pb-1 pr-2 pl-2">
                          Hapus
                        </button>
              </div>
            </div>
      </div>
      <?php endforeach;?>
      <!-- end detail Target -->

      <div class="col-8">

      
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
        <form action="" method="post">
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
                        
                        </select>
                    </div>
                </div>
            </div>

            <input type="text" class="form-control" id="tanggal_upload" name="tanggal_upload" hidden>

            
                
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
      </div>

      </form>
    </div>
  </div>
</div>
