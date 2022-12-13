
    <div class="sidenav-header ">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0 d-flex align-items-center justify-content-center" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <i class="fa fa-book" style="1.1vw" aria-hidden="true"></i>
        <span class="ms-2 font-weight-bold" style="font-size: 1.2vw">Bukorid</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse h-auto w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/dashboard') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ url('/guru') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <iconify-icon icon="mdi:teach" style="color: #fb6340;"></iconify-icon>
            </div>
            <span class="nav-link-text ms-1">Guru</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/murid') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <iconify-icon icon="ph:student-bold" style="color: #2dce89;"></iconify-icon>
            </div>
            <span class="nav-link-text ms-1">Murid</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ url('/kelas') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <iconify-icon icon="material-symbols:meeting-room-rounded" style="color: #11cdef;"></iconify-icon>
            </div>
            <span class="nav-link-text ms-1">Kelas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ url('/pelanggaran') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <iconify-icon icon="ep:warn-triangle-filled" style="color: red ;" width="15"></iconify-icon>
            </div>
            <span class="nav-link-text ms-1">Pelanggaran</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer mx-3">

      <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-danger btn-sm w-100 ">
        logout
      </a>
    </div>
