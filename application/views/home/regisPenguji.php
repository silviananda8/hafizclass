
<section class="bg-light pb-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card card-shadow mt-5 mb-5">
              <div class="card-body">
                <h6 class="text-center mb-4">Silahkan Mendaftar Sebagai Penguji<br><small>Lengkapi Biodata Setelah terdaftar sebagai penguji</small></h6>

                <!-- alert registrasi berhasil -->
                <?php if($this->session->flashdata()== true):?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('msg'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <?php else:?>
                  <?php endif;?>
                  <!-- end alert register -->


                <form action="<?php echo site_url('penguji/regisPenguji');?>" method='post'>
                  <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Nama Lengkap" maxlength="50" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Alamat email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="nama@gmail.com" maxlength="50" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" class="form-control mb-4" id="password" name="password" maxlength="25" required>
                  </div>
                  <button type="submit" class="btn btn-info mb-4 btn-block mt-4">Submit</button>
                </form>
              </div>
            </div>  
        </div>
    </div>
</div>
</section>