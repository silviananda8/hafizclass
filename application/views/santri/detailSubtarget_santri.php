<div class="container">

    <div class="row justify-content-center">
      <!-- detail target -->
      <?php if($data != null):?>
      <?php foreach($data as $dt):?>
      <div class="col-3">
            <div class="card card-shadow mt-4">
              <div class="card-body ">
                <small>Judul Target</small>
                 <h5><?= $dt->JUDUL_TARGET;?></h5>
                 <small>Deskripsi Target :</small>
                 <p><?= $dt->DESKRIPSI_TARGET;?></p>

                <small> Nama Penguji</small>
                <h6><i class="fas fa-chalkboard-teacher icon-green"></i> 
Ust. <?= $dt->NAMA_PENGUJI;?></h6>
                <small>Batas Waktu</small>
                <h6><i class="far fa-calendar-alt icon-green"></i> 
<?= $dt->BTS_UPLOAD;?></h6>
                <small>Status</small>
                <h6><i class="fas fa-graduation-cap icon-green"></i>
  <?= $dt->STATUS_TARGET;?></h6>
              </div>
            </div>
      </div>
      <?php endforeach;?>

      <?php else:?>
        <div class="col-3">
            <div class="card card-shadow mt-4">
              <div class="card-body">
                Tdak Ada Target Untuk Dikerjakan
              </div>
            </div>
      </div>
      <?php endif;?>
      <!-- end detail Target -->

      <div class="col-8">
