<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Bukorid</a></li>
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">Pelanggaran</li>
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

    <div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4 p-4" >
        <h5 class="text-center">Tabel Pelanggaran</h5>
       <div class="card-header d-flex align-items-center justify-content-center pb-3" style="display: flex">
           <div class="input-group w-auto" style="margin-right: 54vw">
             <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
             <input type="text" class="form-control h-2" placeholder="ketik disini...">
           </div>
           <button type="button" class="btn btn-primary text-white text-dark px-auto ml-5 text-xs" data-bs-toggle="modal" data-bs-target="#createpelanggaran">
            <i class="fa fa-plus me-2" aria-hidden="true"></i>Tambah
          </button>
       </div>
        
        <div class="card-body px-0 pt-0 pb-2">
          <form action="get" class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">No</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pelanggaran</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Point</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sanksi</th>
                  <th class="text-uppercase text-xxs text-center font-weight-bolder opacity-7">Opsi</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($pelanggaran as $p)
                <tr>
                  <td class="">
                    <p class="align-middle text-center text-xs">{{ $no++ }}</p>
                  </td>
                  <td>
                    <div class="d-flex px-1 py-1">
                      <div>
                        <!-- <img src="assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1"> -->
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-xs">{{ $p -> pelanggaran }}</h6>
                      </div>
                    </div>
                  </td>

                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $p -> point }}</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{ $p -> sanksi }}</p>
                  </td>
                  <td class="align-middle text-center">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#updatepelanggaran" data-pelanggaran="{{ $p->pelanggaran }}" data-point="{{ $p->point }}" data-sanksi="{{ $p->sanksi }}" data-id="{{ $p->id }}" style="border: none; background-color: transparent;">
                      <a class="btn btn-link text-dark px-3 mb-0" ><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                    </button>
                    
                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{ url('/pelanggaran/delete', $p->id) }}"><i class="far fa-trash-alt me-2"></i>Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>






