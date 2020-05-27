
<section class="bg-light pb-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card card-shadow mt-5 mb-5">
              <div class="card-body">
                <h5 class="text-center mb-3">Masukkan Data Santri Baru</h5>

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

                <form action="<?php echo site_url('penguji/regisSantri');?>" method='post'>
                  <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Nama Lengkap" maxlength="50" required>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin"  required>
                      <option>Laki-laki</option>
                      <option>Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="tingkat_pendidikan">Tingkat Pendidikan</label>
                    <select class="form-control" id="tingkat_pendidikan" name="tingkat_pendidikan"  required>
                      <option>SD</option>
                      <option>SMP</option>
                    </select>
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