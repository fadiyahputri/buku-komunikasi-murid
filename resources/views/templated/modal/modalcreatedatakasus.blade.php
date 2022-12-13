<div class="modal fade " id="createdatakasus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" >
      <div class="modal-content"> 
        <div class="modal-header" style="display: flex; justify-content: center" >
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah data kasus</h1>
        </div>
        
        <div class="modal-body" style="padding: 2% 8% 0 8%;">
            <form action="{{ url('/datakasus/store') }}" method="POST" class="form-sample">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-10 col-form-label">Nama Murid</label>
                    <div class="col-sm-9">
                      <select name="nama_murid" id="nama_murid">
                        @foreach ($murid as $m)
                          <option value="{{ $m->id }}">{{ $m-> nama_murid }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-10 col-form-label">Pelanggaran</label>
                    <div class="col-sm-9">
                      <select name="pelanggaran" id="pelanggaran">
                        @foreach ($pelanggaran as $p)
                          <option value="{{ $p->id }}">{{ $p-> pelanggaran }}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                
                
                
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-10 col-form-label">Point</label>
                    <div class="col-sm-9">
                      <select name="point" id="point">
                        @foreach ($pelanggaran as $p)
                          <option value="{{ $p->id }}">{{ $p-> point }}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                
                
              </div>
              {{-- <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-10 col-form-label">Point</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="point" name="point" placeholder="" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-10 col-form-label">Sanksi</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="sanksi" name="sanksi" placeholder="sanksi yang di dapatkan"/>
                    </div>
                  </div>
                </div>
                
        
            </div> --}}
        
        <div class="modal-footer" style="display: flex; ">
          <a href="">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          </a>
          <a href="{{ url('/datakasus/store') }}" style="margin-left: 80%">
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
          </a>
        </div>
      </div>
    
    </div>
    </div>
  </div>
  