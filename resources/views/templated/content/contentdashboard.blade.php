<!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Bukorid</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
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
    <!-- End Navbar -->
    {{-- card --}}
    <div class="container-fluid py-4 ">
      <div class="row">
        <!-- kotak 1-->
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-4">
                <div class="row">
                  <!-- logo -->
                  <div class="col-4 text-end">
                    <div class="icon icon-shape shadow-primary text-center rounded-circle d-flex align-items-center justify-content-center" style="width: 5vw; height: 5vw; background-color: #fb6340">
                        <iconify-icon icon="mdi:teacher" style="color: white;" width="36"></iconify-icon>
                    </div>
                  </div>
                  <!-- content -->
                  <div class="col-8">
                    <div class="numbers mt-2">
                      <p class="text-lg mb-0 text-uppercase font-weight-bolder">Guru</p>
                      <h5 class="font-weight-bolder">
                        4
                      </h5>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>

        <!-- kotak 2-->
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-4">
              <div class="row">
                <!-- logo -->
                <div class="col-4 text-end">
                  <div class="icon icon-shape shadow-primary text-center rounded-circle d-flex align-items-center justify-content-center" style="width: 5vw; height: 5vw; background-color: #2DCE89">
                    <iconify-icon icon="ph:student-bold" style="color: white;" width="40"></iconify-icon>
                  </div>
                </div>
                <!-- content -->
                <div class="col-8">
                  <div class="numbers mt-2">
                    <p class="text-lg mb-0 text-uppercase font-weight-bolder">Murid</p>
                    <h5 class="font-weight-bolder">
                   
                          {{count($murid)}}
                    
                    </h5>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>

        <!-- kotak 3 -->
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-4">
              <div class="row">
                <!-- logo -->
                <div class="col-4 text-end">
                  <div class="icon icon-shape shadow-primary text-center rounded-circle d-flex align-items-center justify-content-center" style="width: 5vw; height: 5vw; background-color: #11CDEF;">
                    <iconify-icon icon="material-symbols:meeting-room-rounded" style="color: white;" width="40"></iconify-icon>
                  </div>
                </div>
                <!-- content -->
                <div class="col-8">
                  <div class="numbers mt-2">
                    <p class="text-lg mb-0 text-uppercase font-weight-bolder">Kelas</p>
                    <h5 class="font-weight-bolder">
                      24
                    </h5>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-4">
              <div class="row">
                <!-- logo -->
                <div class="col-4 text-end">
                  <div class="icon icon-shape shadow-primary text-center rounded-circle d-flex align-items-center justify-content-center" style="width: 5vw; height: 5vw; background-color: #F5385E">
                    <iconify-icon icon="ep:warn-triangle-filled" style="color: white ;" width="40"></iconify-icon>
                  </div>
                </div>
                <!-- content -->
                <div class="col-8">
                  <div class="numbers mt-2">
                    <p class="text-lg mb-0 text-uppercase font-weight-bolder">Pelanggaran</p>
                    <h5 class="font-weight-bolder">
                      24
                    </h5>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
    </div>


      {{-- table --}}
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4 p-4" >
              <h5 class="text-center">Data Kasus</h5>
             <div class="card-header d-flex align-items-center justify-content-center pb-3" style="display: flex">
                 <div class="input-group w-auto" style="margin-right: 54vw">
                   <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                   <input type="text" class="form-control h-2" placeholder="ketik disini...">
                 </div>
                 <button type="button" class="btn btn-primary text-white text-dark px-auto ml-5 text-xs" data-bs-toggle="modal" data-bs-target="#createdatakasus">
                  <i class="fa fa-plus me-2" aria-hidden="true"></i>Tambah
                </button>
             </div>
      
             
              
              <div class="card-body px-0 pt-0 pb-2">
                <form action="get" class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">No</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Nurid</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelas</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pelanggaran</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Point</th>
                        <th class="text-uppercase text-xxs text-center font-weight-bolder opacity-7">Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                          $no = 1;
                      @endphp     
                     @foreach ($kasus as $k)
                     @foreach ($k->kasusmurid as $m)
                     @foreach ($k->kasuspelanggaran as $p)
                      <tr>
                        <td class="">
                          <p class="align-middle text-center text-xs">{{ $no++ }}</p>
                        </td>
                        <td>
                         
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-xs">{{$m->nama_murid}}</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                         
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-xs">{{$m->RelasiToKelas->kelas}}</h6>
                            </div>
                          </div>
                        </td>
      
          
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">{{$p->pelanggaran}}</span>
                            
                        </td>
                        
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">{{$p->point}}</span>
                        </td>

                        <td class="align-middle text-center">
                          <button type="button" data-bs-toggle="modal" data-bs-target="#updatedatakasus" style="border: none; background-color: transparent;">
                            <a class="btn btn-link text-dark px-3 mb-0" ><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                          </button>
                          
                          <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{ url('/datakasus/delete',$k->id) }}"><i class="far fa-trash-alt me-2"></i>Delete</a>
                        </td>
                      </tr>
                      @endforeach    
                      @endforeach    
                      @endforeach
                    </tbody>
                  </table>
      
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- endtable --}}
    </div>