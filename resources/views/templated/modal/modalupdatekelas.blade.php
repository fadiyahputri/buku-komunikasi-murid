<div class="modal fade " id="updatekelas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
      <div class="modal-content"> 
        <div class="modal-header" style="display: flex; justify-content: center" >
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Kelas</h1>
        </div>
        
        <div class="modal-body" style="padding: 2% 8% 0 8%;">
            <form action="{{ route('updatekelas') }}" method="POST" class="form-sample">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-10 col-form-label">Kelas</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="kelas" name="kelas" placeholder="example : X PPLG 1" />
                      <input  style="display: none" type="text" name="id" id="id">

                    </div>
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-10 col-form-label">Kelas</label>
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
          <a href="{{ url('/kelas/update') }}" style="margin-left: 80%">
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
          </a>
        </div>
      </div>
    
    </div>
    </div>
  </div>

  @section('js')
<script>
  $('#updatekelas').on('show.bs.modal', function(event) {
          var button = $(event.relatedTarget);
          var kelas = button.data('kelas');
          var nama_guru = button.data('nama_guru');
          var id = button.data('id');
      
          var modalEditkelas = $(this)
          modalEditkelas.find('.modal-body #kelas').val(kelas);
          modalEditkelas.find('.modal-body #nama_guru').val(nama_guru);
          modalEditkelas.find('.modal-body #id').val(id);
      
        })
</script>
@endsection
  