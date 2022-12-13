<div class="modal fade " id="createGuru" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" id="createguru">
    <div class="modal-content"> 
      <div class="modal-header" style="display: flex; justify-content: center" >
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Guru</h1>
      </div>
      
      <div class="modal-body" style="padding: 2% 8% 0 8%;">
          <form action="{{ url('/guru/store') }}" method="POST" class="form-sample">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-10 col-form-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama_guru" name="nama_guru" placeholder="nama guru" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-10 col-form-label">Password</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="password" name="password" placeholder="password" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-10 col-form-label">Mata Pelajaran</label>
                  <div class="col-sm-9">
                    <select class="form-control" id="mata_pelajaran" name="mata_pelajaran" placeholder="pilih matpel">
                      <option>PAI</option>
                      <option>PPKN</option>
                      <option>Bahasa Indonesia</option>
                      <option>IPA</option>
                      <option>IPS</option>
                      <option>Bahasa Inggris</option>
                      <option>Seni Budaya</option>
                      <option>Prakarya</option>
                      <option>Penjas</option>
                      <option>Animasi</option>
                      <option>Broadcasting</option>
                      <option>PPLG</option>
                      <option>TEI</option>
                      <option>TKJ</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-10 col-form-label">nip</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="nip" name="nip" placeholder="nip"/>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-10 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com"/>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
              
            </div>
            <div class="row">
              <div class="" style="width: 23.8vw">
                <div class="form-group row">
                  <div class="form-group">
                    <label for="exampleTextarea1">Alamat</label>
                    <textarea
                      class="form-control"
                      id="exampleTextarea1"
                      rows="3"
                      id="alamat" 
                      name="alamat" 
                      placeholder="tuliskan alamatmu"
                    ></textarea>
                  </div>
              </div>
            </div>
      
          </div>
      
      <div class="modal-footer" style="display: flex; ">
        <a href="{{ url('/guru') }}">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </a>
        <a href="{{ url('/guru/store') }}" style="margin-left: 80%">
          <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        </a>
      </div>
    </form>
    </div>
  
  </div>
  </div>
</div>
