<div class="modal fade " id="createMurid" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" id="createMurid">
      <div class="modal-content"> 
        <div class="modal-header" style="display: flex; justify-content: center" >
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Murid</h1>
        </div>
        
        <div class="modal-body" style="padding: 2% 8% 0 8%;">
            <form action="{{ url('/murid/store') }}" method="POST" class="form-sample">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-10 col-form-label">Nama</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="nama_murid" name="nama_murid" placeholder="nama" />
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-10 col-form-label">No.Telp</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="+62 " />
                      </div>
                    </div>
                  </div>



              </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-10 col-form-label">Kelas</label>
                      <div class="col-sm-9">
                        <select name="kelas_id" id="kelas_id">
                          @foreach ($kelasmurid as $k)
                              <option value="{{ $k->id }}">{{ $k->kelas }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
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
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-10 col-form-label">nisn</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="nisn" name="nisn" placeholder="nisn"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-10 col-form-label">Password</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" placeholder="****"/>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="row">
              </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-10 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm-4">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" checked /> Laki-laki </label>
                        </div>
                      </div>
                      <div class="col-sm-5">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" /> Perempuan </label>
                        </div>
                      </div>
                    </div>
                  </div>

                
              
        
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
        
        <div class="modal-footer" style="display: flex; ">
          <a href="{{ url('/murid') }}">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          </a>
          <a href="{{ url('/murid/store') }}" style="margin-left: 80%">
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
          </a>
        </div>
            </div>
            </form>
      </div>
    
    </div>
    </div>
  </div>
  