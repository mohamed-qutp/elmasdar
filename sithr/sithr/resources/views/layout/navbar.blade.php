{{-- logo --}}
<!-- <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="{{ route('index') }}">
        <img class="navbar-brand-dark" src="{{ asset('assets/img/favicon/logo-2.png') }}" alt="Volt logo" /> <img class="navbar-brand-light" src="{{ asset('assets/img/favicon/logo-2.png') }}" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav> -->



{{-- top search and notifications --}}
<main class="content">
  <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0 print-container">
    <div class="container-fluid px-0">
      <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
          <div class="d-flex align-items-center">
              <!--  <a href="javascript:location.reload(true)"><i class="fa fa-refresh"></i></a> 
              Search form 
              <form class="navbar-search form-inline" id="navbar-search-main">
                <div class="input-group input-group-merge search-bar">
                    <span class="input-group-text" id="topbar-addon">
                      <svg class="icon icon-xs" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                      </svg>
                    </span>
                    <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
                </div>
              </form> 
              / Search form  -->
          </div>
        <!-- Navbar links -->
        <ul class="navbar-nav align-items-center">
          <li class="nav-item dropdown">
            <a class="nav-link text-dark notification-bell unread dropdown-toggle" data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
              <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
              </svg>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
              <div class="list-group list-group-flush">
                <p class="text-center text-primary fw-bold border-bottom border-light py-3">الاشعارات</p>
                <div class="col ps-0 ms-2">
                  <p class="font-small mt-1 mb-0">لا يوجد اشعارات جديدة</p>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown ms-lg-3">
            <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="media d-flex align-items-center">
                @if (Auth::user()->gender == "male")
                <img class="avatar rounded-circle" alt="Image placeholder" src="{{ asset('assets/img/team/male.png')}}">
                @else
                <img class="avatar rounded-circle" alt="Image placeholder" src="{{ asset('assets/img/team/female.png')}}">
                @endif
                <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                  <span class="mb-0 font-small fw-bold text-gray-900">{{ Auth::user()->name}}</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
              <a class="dropdown-item d-flex align-items-center" href="{{ route('users.show',Auth::user()->id) }}">
                <!-- <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                </svg> -->
                <i class="fa-solid fa-user me-2"></i>
                الحساب الشخصي
              </a>
               @if (Auth::user()->auth == 'admin')
              <a class="dropdown-item d-flex align-items-center" href="{{ route('users.index')}}">
              <i class="fa-solid fa-users me-2"></i>
              الموظفين
              </a>
              @endif
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <div role="separator" class="dropdown-divider my-1"></div>
                <button class="dropdown-item d-flex align-items-center" type="submit">
                  <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                  </svg>
                  تسجيل الخروج
                </button>
            </div>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>