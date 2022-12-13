<div class="modal fade " id="updatepelanggaran" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content"> 
      <div class="modal-header" style="display: flex; justify-content: center" >
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Pelanggaran</h1>
      </div>
      
      <div class="modal-body" style="padding: 2% 8% 0 8%;">
          <form action="{{ url('/pelanggaran/update') }}" method="post" class="form-sample">
            {{ csrf_field() }}
            <div class="row">
              
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-10 col-form-label">Pelanggaran</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="pelanggaran" name="pelanggaran" placeholder="pelanggaran"  />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-10 col-form-label">Jumlah Point</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="point" name="point" placeholder="point yang di dapat" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-10 col-form-label">sanksi</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="sanksi" name="sanksi" placeholder="sanksi murid" />
                    <input style="display: none" type="text" class="form-control" id="id" name="id" placeholder="sanksi murid" />

                  </div>
                </div>
              </div>
            </div>

      
          </div>
      
      <div class="modal-footer" style="display: flex; ">
        <a href="{{ url('/pelanggaran') }}">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </a>
        <a href="{{ url('/pelanggaran/update') }}" style="margin-left: 80%">
          <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        </a>
      </div>
    </div>
  
  </div>
  </div>
</div>

@section('js')
<script>
  $('#updatepelanggaran').on('show.bs.modal', function(event) {
          var button = $(event.relatedTarget);
          var pelanggaran = button.data('pelanggaran');
          var point = button.data('point');
          var sanksi = button.data('sanksi');
          var id = button.data('id');
      
          var modalEditPelanggaran = $(this)
          modalEditPelanggaran.find('.modal-body #pelanggaran').val(pelanggaran);
          modalEditPelanggaran.find('.modal-body #point').val(point);
          modalEditPelanggaran.find('.modal-body #sanksi').val(sanksi);
          modalEditPelanggaran.find('.modal-body #id').val(id);
      
        })
</script>
@endsection