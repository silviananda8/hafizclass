
    <!-- Target Santri -->


    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card card-shadow mt-4">
              <div class="card-body">
                <div class="row">
                    <div class="col-10">
                        <h5>Daftar Target</h5>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                          Tambah Target
                        </button>
                    </div>
                </div>
                 <div class="h-divider"></div>
                 <!-- list target -->
                 <div class="row mt-4 ">
                     <div class="col-lg-5 ">
                         <h6 class="ml-3">Judul Target</h6>
                     </div>
                     <div class="col-lg-3">
                         <h6>Nama Penguji</h6>
                     </div>
                     <div class="col-lg-2">
                        <h6>Batas Waktu</h6> 
                     </div>
                     <div class="col-lg-2 ">
                         <h6>Status </h6>
                     </div>
                 </div>
                 <div class="row mt-2">
                    <div class="col-lg-12">       
                     <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action">
                        <span class="row">
                            <div class="col-lg-5 text-left">
                                <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
                             </div>
                             <div class="col-lg-3">
                                <p>Ust. Hanifah</p> 
                             </div>
                             <div class="col-lg-2">
                                <p>15 Mei 2020</p> 
                             </div>
                             <div class="col-lg-2 text-center">
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Belum Tuntas</option>
                                        <option>Sudah Tuntas</option>
                                    </select>
                                </div>
                             </div>
                        </span>
                    </a>
                      
                    </div>
                    </div>
                 </div>

                 <!-- end list target -->
              </div>
            </div>
        </div>
    </div>



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
        <form action="">
            <div class="form-group">
                <label for="exampleFormControlInput1">Judul Target</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Deskripsi Target</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Silahkan tulis deskripsi target" rows="3"></textarea>
            </div>
            <div class="row">
                <div class="col-lg">
                    <label for="exampleInputPassword1">Batas Waktu</label>
                    <input type="text" name="batas_waktu" class="form-control" id="batas_waktu">
                </div>
                <div class="col-lg">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option><span>Ust. </span> Halifah</option>
                            <option><span>Ust. </span> Faris</option>
                            <option><span>Ust. </span> Aisyah</option>
                            <option><span>Ust. </span> Zubet</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Tambahkan</button>
      </div>
    </div>
  </div>
</div>


