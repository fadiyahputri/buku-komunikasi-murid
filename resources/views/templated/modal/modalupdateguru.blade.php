<div class="modal fade " id="updateguru" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" id="updateGuru">
    <div class="modal-content"> 
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Guru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="{{ url('/guru/update') }}" method="POST" class="form-sample">
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
              <div class="col-md-6">
                <div class="form-group row">
                  <div class="form-group">
                    <label for="exampleTextarea1">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="example@gmail.com"/>
                  </div>
              </div>

            </div>
            
            <div class="row">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com"/>
                  </div>
                </div>
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <a href="{{ url('/guru') }}">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </a>
        <a href="{{ url('/guru/update') }}">
          <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        </a>
      </div>
    </div>
  </div>
</div>
</div>

@section('js')
<script>
  $('#updateguru').on('show.bs.modal', function(event) {
          var button = $(event.relatedTarget);
          var nama_guru = button.data('nama_guru');
          var mata_pelajaran = button.data('mata_pelajaran');
          var wali_kelas = button.data('wali_kelas');
          var kelas = button.data('kelas');
          var email = button.data('email');
          var password = button.data('password');
          var nip = button.data('nip');
          var alamat = button.data('alamat');
          var id = button.data('id');
      
          var modalEditGuru = $(this)
          modalEditGuru.find('.modal-body #nama_guru').val(nama_guru);
          modalEditGuru.find('.modal-body #mata_pelajaran').val(mata_pelajaran);
          modalEditGuru.find('.modal-body #wali_kelas').val(wali_kelas);
          modalEditGuru.find('.modal-body #kelas').val(kelas);
          modalEditGuru.find('.modal-body #email').val(email);
          modalEditGuru.find('.modal-body #password').val(password);
          modalEditGuru.find('.modal-body #nip').val(nip);
          modalEditGuru.find('.modal-body #alamat').val(alamat);
          modalEditGuru.find('.modal-body #id').val(id);
      
        })
</script>
@endsection