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
                <h6><?= $tg->NAMA_PENGUJI;?></h6>
                <small>Batas Waktu</small>
                <h6><?= $tg->BTS_UPLOAD;?></h6>
                <small>Status</small>
                 <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1">
                    <?php if($tg->STATUS_TARGET == "Belum Tuntas"):?>
                      <option>Belum Tuntas</option>
                      <option>Sudah Tuntas</option>
                    <?php else:?>
                      <option>Sudah Tuntas</option>
                      <option>Belum Tuntas</option>
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

      