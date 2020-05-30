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
                <h6>Ust. <?= $tg->NAMA_PENGUJI;?></h6>
                <small>Batas Waktu</small>
                <h6><?= $tg->BTS_UPLOAD;?></h6>
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
                <span class="badge  badge-primary mt-3 mr-1 pr-2 pl-2">Edit</span>
                <span class="badge  badge-danger mt-3">Hapus</span>
              </div>
            </div>
      </div>
      <?php endforeach;?>
      <!-- end detail Target -->

      <div class="col-8">

      