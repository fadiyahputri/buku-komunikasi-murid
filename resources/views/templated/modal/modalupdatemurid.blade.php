<div class="modal fade " id="updatemurid" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
      <div class="modal-content"> 
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Murid</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="padding: 4%">
            <form action="{{ url('/murid/update') }}" method="POST" class="form-sample">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-10 col-form-label">Nama</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="nama_guru" name="nama_guru" placeholder="nama" />
                      <input  style="display: none" type="text" name="id" id="id">
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
                    <label class="col-sm-10 col-form-label">Wali Kelas</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="wali_kelas" name="wali_kelas" placeholder="example : X PPLG 1"/>
                    </div>
                  </div>
                </div>
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
              
              <div class="row">
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
        </div>
        <div class="modal-footer">
          <a href="{{ url('/murid') }}">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          </a>
          <a href="{{ url('/murid/update') }}">
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
          </a>
        </div>
      </div>
    </div>
    </div>
  </div>

  @section('js')
<script>
  $('#updatemurid').on('show.bs.modal', function(event) {
          var button = $(event.relatedTarget);
          var nama_murid = button.data('nama_murid');
          var kelas = button.data('kelas');
          var nisn = button.data('nisn');
          var jenis_kelamin = button.data('jenis_kelamin');
          var alamat = button.data('alamat');
          var no_telp = button.data('no_telp');
          var email = button.data('email');
          var password = button.data('password');
          var guru_id = button.data('guru_id');
          var id = button.data('id');
      
          var modalEditMurid = $(this)
          modalEditMurid.find('.modal-body #nama_murid').val(nama_murid);
          modalEditMurid.find('.modal-body #kelas').val(kelas);
          modalEditMurid.find('.modal-body #nisn').val(nisn);
          modalEditMurid.find('.modal-body #jenis_kelamin').val(jenis_kelamin);
          modalEditMurid.find('.modal-body #alamat').val(alamat);
          modalEditMurid.find('.modal-body #no_telp').val(no_telp);
          modalEditMurid.find('.modal-body #email').val(email);
          modalEditMurid.find('.modal-body #password').val(password);
          modalEditMurid.find('.modal-body #guru_id').val(guru_id);
          modalEditMurid.find('.modal-body #id').val(id);
      
        })
</script>
@endsection
  