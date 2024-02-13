<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse print-container" data-simplebar>
  <div class="sidebar-inner px-4 pt-3">
    <ul class="nav flex-column pt-3 pt-md-0">
      {{-- sit logo --}}
      <li class="nav-item">
        <a href="{{ route('index') }}" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon">
            <img src="{{ asset('assets/img/favicon/logo-2.png')}}" height="20" width="20" alt="Volt Logo">
          </span>
          <span class="mt-1 ms-1 sidebar-text">SIT المصدر</span>
        </a>
      </li>

      {{-- dashboard --}}
      <li class="nav-item active">
        <a href="{{ route('index') }}" class="nav-link">
          <span class="sidebar-icon">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
          </span> 
          <span class="sidebar-text">الرئيسية</span>
        </a>
      </li>

      <!-- @if (!Auth::guest() && (Auth::user()->auth != "regular"))
      {{-- users --}}
      <li class="nav-item">
        <span
          class="nav-link  collapsed  d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#user-components">
          <span>
            <span class="sidebar-icon">
              <i class="fa fa-users"></i>
            </span> 
            
            <span class="sidebar-text " >الموظفين</span>
          </span>
          <span class="link-arrow">
            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          </span>
        </span>
        <div class="multi-level collapse " role="list"
          id="user-components" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item ">
              <a class="nav-link" href="{{ route('users.create') }}">
                <span class="sidebar-text">اضافة موظف</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ route('users.index') }}">
                <span class="sidebar-text">قائمة الموظفين</span>
              </a>
            </li>
          </ul>
        </div>
      </li> -->
 

      <!-- {{-- clients --}}
      <li class="nav-item">
        <span
          class="nav-link  collapsed  d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#client-components">
          <span>
            <span class="sidebar-icon">
              <i class="fa fa-users"></i>
            </span> 
            <span class="sidebar-text">العملاء</span>
          </span>
          <span class="link-arrow">
            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          </span>
        </span>
        <div class="multi-level collapse " role="list"
          id="client-components" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item ">
              <a class="nav-link" href="{{ route('clients.create') }}">
                <span class="sidebar-text">اضافة عميل</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ route('clients.index') }}">
                <span class="sidebar-text">قائمة العملاء</span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      {{-- projects --}}
      <li class="nav-item">
        <span
          class="nav-link  collapsed  d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#projects-components">
          <span>
            <span class="sidebar-icon">
              <i class="fa fa-list"></i>
            </span> 
            <span class="sidebar-text">المشاريع</span>
          </span>
          <span class="link-arrow">
            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          </span>
        </span>
        <div class="multi-level collapse " role="list"
          id="projects-components" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item ">
              <a class="nav-link" href="{{ route('projects.create') }}">
                <span class="sidebar-text">اضافة مشروع</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ route('projects.index') }}">
                <span class="sidebar-text">قائمة المشاريع</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      @endif -->

     

      @if (!Auth::guest() && (Auth::user()->auth != "regular"))

          {{-- permissions --}}
          <li class="nav-item">
            <span
              class="nav-link  collapsed  d-flex justify-content-between align-items-center"
              data-bs-toggle="collapse" data-bs-target="#permissions-components">
              <span>
                <span class="sidebar-icon">
                  <i class="fa fa-columns"></i>
                </span> 
                <span class="sidebar-text">الاذونات</span>
                @if ($new_requests > 0)
                  <span style="float: unset" class="badge bg-success">{{ $new_requests }}</span>
                @endif
              </span>
              <span class="link-arrow">
                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
              </span>
            </span>
            <div class="multi-level collapse " role="list"
              id="permissions-components" aria-expanded="false">
              <ul class="flex-column nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('prequest.index2') }}">
                    <span class="sidebar-text">الطلبات الحالية</span>
                    @if ($new_requests > 0)
                      <span style="float: right" class="badge bg-success">{{ $new_requests }}</span>
                    @endif
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('prequest.index3') }}">
                    <span class="sidebar-text">طلبات سابقة</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('prequest.index') }}">
                    <span class="sidebar-text">الاذونات الشخصية</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          {{-- vacations --}}
          <li class="nav-item">
            <span
              class="nav-link  collapsed  d-flex justify-content-between align-items-center"
              data-bs-toggle="collapse" data-bs-target="#vacations-components">
              <span>
                <span class="sidebar-icon">
                  <i class="fa fa-calendar"></i>
                </span> 
                <span class="sidebar-text">الاجازات</span>
                @if ($vacation_requests > 0)
                  <span style="float: unset" class="badge bg-success">{{ $vacation_requests }}</span>
                @endif
              </span>
              <span class="link-arrow">
                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
              </span>
            </span>
            <div class="multi-level collapse " role="list"
              id="vacations-components" aria-expanded="false">
              <ul class="flex-column nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('vrequest.index2') }}">
                    <span class="sidebar-text">الطلبات الحالية</span>
                    @if ($vacation_requests > 0)
                      <span style="float: right" class="badge bg-success">{{ $vacation_requests }}</span>
                    @endif
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('vrequest.index3') }}">
                    <span class="sidebar-text">طلبات سابقة</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('vrequest.index') }}">
                    <span class="sidebar-text">الاجازات الشخصية</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          {{-- departments --}}
          <li class="nav-item">
            <span
              class="nav-link  collapsed  d-flex justify-content-between align-items-center"
              data-bs-toggle="collapse" data-bs-target="#departments-components">
              <span>
                <span class="sidebar-icon">
                  <i class="fa fa-calendar"></i>
                </span> 
                <span class="sidebar-text">الأقسام</span>
                <!-- @if ($vacation_requests > 0)
                  <span style="float: unset" class="badge bg-success">{{ $vacation_requests }}</span>
                @endif -->
              </span>
              <span class="link-arrow">
                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
              </span>
            </span>
            <div class="multi-level collapse " role="list"
              id="departments-components" aria-expanded="false">
              <ul class="flex-column nav">                
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('departments.create') }}">
                    <span class="sidebar-text">اضافة قسم</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('departments.index') }}">
                    <span class="sidebar-text">قائمة الأقسام</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

        
        @else

<!-- <li class="nav-item">
            <a href="{{ route('departments.index') }}" class="nav-link">
              <span class="sidebar-icon">
                <i class="fa fa-columns"></i>
              </span> 
              <span class="sidebar-text">الأقسام</span>
            </a>
          </li> -->
          {{-- permissions --}}
          <li class="nav-item">
            <a href="{{ route('prequest.index') }}" class="nav-link">
              <span class="sidebar-icon">
                <i class="fa fa-columns"></i>
              </span> 
              <span class="sidebar-text">الاذونات</span>
            </a>
          </li>

          {{-- vacations --}}
          <!-- <li class="nav-item">
            <a href="{{ route('vrequest.index') }}" class="nav-link">
              <span class="sidebar-icon">
                <i class="fa fa-calendar"></i>
              </span> 
              <span class="sidebar-text">الاجازات</span>
            </a>
          </li> -->
          <li class="nav-item">
            <span
              class="nav-link  collapsed  d-flex justify-content-between align-items-center"
              data-bs-toggle="collapse" data-bs-target="#departments-components">
              <span>
                <span class="sidebar-icon">
                  <i class="fa fa-calendar"></i>
                </span> 
                <span class="sidebar-text">الاجازات</span>
                @if ($vacation_substitute_employee_requests > 0)
                  <span style="float: unset" class="badge bg-success">{{ $vacation_substitute_employee_requests }}</span>
                @endif
              </span>
              <span class="link-arrow">
                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
              </span>
            </span>
            <div class="multi-level collapse " role="list"
              id="departments-components" aria-expanded="false">
              <ul class="flex-column nav">                
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('vrequest.index') }}">
                    <span class="sidebar-text">الاجازات</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('vrequest.substitute_index') }}">
                    <span class="sidebar-text">اجازات البديل</span>
                    @if ($vacation_substitute_employee_requests > 0)
                      <span style="float: right" class="badge bg-success">{{ $vacation_substitute_employee_requests }}</span>
                    @endif
                  </a>
                </li>
              </ul>
            </div>
          </li>

         
      @endif

      @if (!Auth::guest() && (Auth::user()->auth != "regular"))
      {{-- contracts --}}
      <li class="nav-item">
        <span
          class="nav-link  collapsed  d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#contract-components">
          <span>
            <span class="sidebar-icon">
              <i class="fa fa-clone"></i>
            </span> 
            <span class="sidebar-text">العقود</span>
          </span>
          <span class="link-arrow">
            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          </span>
        </span>
        <div class="multi-level collapse " role="list"
          id="contract-components" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item ">
              <a class="nav-link" href="{{ route('contract.create') }}">
                <span class="sidebar-text">اضافة عقد جديد</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ route('contract.index') }}">
                <span class="sidebar-text">قائمة العقود</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      @endif
    </ul>
  </div>
</nav>