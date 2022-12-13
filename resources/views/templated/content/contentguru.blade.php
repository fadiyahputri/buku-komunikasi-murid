{{-- navbar --}}
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Halaman</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Guru</li>
          </ol>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Admin</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
{{-- endnavbar --}}
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4 p-4" >
       <h5 class="text-center">Tabel Guru</h5>
      <div class="card-header d-flex align-items-center justify-content-center pb-3">
          <div class="input-group w-auto" style="margin-right: 56vw">
            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
            <input type="text" class="form-control h-2" placeholder="ketik disini...">
          </div>
          
          <button type="button" class="btn btn-primary text-white text-dark px-auto py-auto ml-5 text-xs" data-bs-toggle="modal" data-bs-target="#createGuru" style="">
            <i class="fa fa-plus me-2" aria-hidden="true"></i>Tambah
          </button>

      </div>
        <div class="card-body px-0 pt-0 pb-2">
          <form action="get" class="table-responsive p-0">
          
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">No</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Guru</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mata Pelajaran</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Wali Kelas Dari</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Email</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Password</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIP</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                  <th class="text-uppercase text-xxs text-center font-weight-bolder opacity-7">Opsi</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($guru as $g)
                <tr>
                  <td class="">
                    <p class="align-middle text-center text-xs"> {{$no++ }} </p>
                  </td>
                  <td>
                    <div class="d-flex px-3 py-3">
                      <div>
                        <img src="assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-xs"> {{ $g -> nama_guru }} </h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0 px-3 py-3"> {{ $g -> mata_pelajaran }} </p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0 px-3 py-3">@foreach ($g -> kelas as $items){{ $items->kelas }}
                        
                    @endforeach </p>
                  </td>
                  <td class="align-middle text-sm px-4 py-4">
                    <p class="text-xs font-weight-bold mb-0"> {{ $g -> email }} </p>
                  </td>
                  <td class="align-middle text-sm px-4 py-4">
                    <p class="text-xs font-weight-bold mb-0"> {{ $g -> password }} </p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold"> {{ $g -> nip }} </span>
                  </td>
                  <td class="align-middle text-sm px-4 py-4">
                    <p class="text-xs font-weight-bold mb-0"> {{ $g -> alamat }} </p>
                  </td>
                  <td class="align-middle text-center">

                    <button type="button" data-bs-toggle="modal" data-bs-target="#updateguru" data-nama_guru="{{ $g->nama_guru }}" data-mata_pelajaran="{{ $g -> mata_pelajaran }}" data-wali_kelas="@foreach ($g -> kelas as $items){{ $items->kelas }}
                        
                      @endforeach " data-kelas="{{ $g -> kelas }}" data-email="{{ $g -> email }}" data-password="{{ $g -> password }}" data-nip="{{ $g -> nip }}" data-alamat="{{ $g -> alamat }}" data-id="{{ $g->id }}" style="border: none; background-color: transparent;">
                      <a class="btn btn-link text-dark px-3 mb-0" ><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                    </button>
                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{ url('/guru/delete', $g->id) }}"><i class="far fa-trash-alt me-2"></i>Hapus</a>
                  </td>
                </tr>
            @endforeach

          </form>
        </div>
      </div>
    </div>
  </div>

</div>
{{-- table --}}
