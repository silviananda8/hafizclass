
<section class="bg-light pt-5 pb-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card card-shadow mt-5 mb-5">
              <div class="card-body">
                <h6 class="text-center mb-5">Silahkan masukkan email dan kata sandi <br> yang sudah terdaftarkan</h6>
                <form action="<?php echo site_url('c_login/auth/'.$identify=1);?>" method='post'>
                  <div class="form-group">
                    <label for="email">Alamat email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="masukkan email" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" class="form-control mb-4" id="password" placeholder="Masukkan Kata sandi" name="password" required>
                  </div>
                  <!-- <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">lupa kata sandi</label>
                  </div> -->
                  <button type="submit" class="btn btn-info mb-4 btn-block mt-4">Submit</button>
                </form>
              </div>
            </div>  
        </div>
    </div>
</div>
</section>