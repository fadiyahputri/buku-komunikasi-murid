<div class="modal fade " id="createKelas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" id="createguru">
      <div class="modal-content"> 
        <div class="modal-header" style="display: flex; justify-content: center" >
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Kelas</h1>
        </div>
        
        <div class="modal-body" style="padding: 2% 8% 0 8%;">
            <form action="{{ url('/kelas/store') }}" method="POST" class="form-sample">
              {{ csrf_field() }}
              <div class="row">
                
              </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-10 col-form-label">Kelas</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="kelas" name="kelas" placeholder="example : X PPLG 1" />
                      </div>
                    </div>
                  </div>
                
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-10 col-form-label">Wali Kelas</label>
                    <div class="col-sm-9">
                      <select name="guru_id" id="guru_id">
                        @foreach ($wali_kelas as $wk)
                          <option value="{{ $wk->id }}">{{ $wk-> nama_guru }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                
        
            </div>
        
        <div class="modal-footer" style="display: flex; ">
          <a href="{{ url('/kelas') }}">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          </a>
          <a href="{{ url('/kelas/store') }}" style="margin-left: 80%">
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
          </a>
        </div>
       </form>
      </div>
    
    </div>
    </div>
  </div>
  