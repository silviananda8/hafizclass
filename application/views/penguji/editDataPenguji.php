
<section class="bg-light">
<div class="container">

    <!-- data profil santri -->
    <?php foreach($penguji as $st):?>
    <div class="row justify-content-center">
        <div class="col-lg-11 mb-5">
            <div class="card card-shadow mt-4 mb-5 pb-3">

            <?php echo form_open_multipart('penguji/prosesEditPenguji');?>
              <div class="card-body">
                 <h5>Profil Penguji</h5>
                 <div class="h-divider mb-4"></div>
                 <div class="row justify-content-center">
                  <div class="col-lg-3 mr-4">
                    <img src="<?= base_url('') ?>assets/uploads/avatar/<?= $st->FOTO_PENGUJI;?>" class="rounded" alt="..." style="height: 150px; width: 150px;">
                    
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Ubah Profil</label>
                        <input type="file" class="form-control" id="foto" name="foto" accept="image/png, image/jpeg">
                      </div>

                  </div>
                  <div class="col-lg-8">

                        <div class="form-group row">
                          <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" placeholder="Nama Lengkap" id="nama" name="nama" value="<?= $st->NAMA_PENGUJI;?>" maxlength="50">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                          <div class="col-sm-9">
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <?php if($st->JK_PENGUJI == 'Laki-laki'):?>
                              <option>Laki-laki</option>
                              <option>Perempuan</option>
                            <?php else:?>
                              <option>Perempuan</option>
                              <option>Laki-laki</option>
                            <?php endif;?>
                            </select>
                            </select>
                          </div>
                        </div>
                      <div class="form-group row">
                          <label for="tingkat_menguji" class="col-sm-3 col-form-label">Tingkatan Menguji</label>
                          <div class="col-sm-9">
                            <div class="form-group">
                              <textarea class="form-control" id="tingkat_menguji" name="tingkat_menguji" placeholder="Silakan tulis keterangan tingkatan santri yang anda uji" rows="3"><?= $st->TINGKAT_MENGUJI;?></textarea>
                            </div>
                          </div>
                        </div>
                      <div class="form-group row">
                          <label for="alamat" class="col-sm-3 col-form-label">Alamat Rumah</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Alamat Rumah" id="alamat" name="alamat" value="<?= $st->ALAMAT_PENGUJI;?>">
                          </div>
                        </div>
                          <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Nomor Whatsapp</label>
                          <div class="col-sm-9">
                          <input type="number" class="form-control" placeholder="08xxxxxxxxxxx" id="nomor_telepon" name="nomor_telepon" min="0000000001" max="999999999999" value="<?= $st->TELEPON_PENGUJI;?>">
                          </div>
                        </div>

                        <input type="text" class="form-control" id="id_penguji" name="id_penguji" value="<?= $st->ID_PENGUJI;?>" hidden>
                        <input type="text" class="form-control" id="foto_cadangan" name="foto_cadangan" value="<?= $st->FOTO_PENGUJI;?>" hidden>
                        <button type="submit" class="btn btn-primary text-right float-right">Simpan</button>
                    
                  </div> 
                </div>
              
              </div>
            <?php echo form_close();?>
            </div>
        </div>
    </div>

    <?php endforeach;?>
  </div>
</section>

    <!-- end data profil santri -->
