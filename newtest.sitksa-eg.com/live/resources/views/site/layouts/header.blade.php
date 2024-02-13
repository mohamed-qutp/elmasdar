<header class="main-header main-header-01 headroom navbar-light fixed-top navbar-transparent headroom--not-bottom headroom--not-top headroom--pinned" id="h_blur0">
  <nav role="navigation" class="navbar navbar-expand-lg">
  <div class="container">
<!-- Logo -->
 <a class="navbar-brand header-navbar-brand nav-mob" href="#">
 <img class="logo-dark logo-img" src="{{asset('assets/images/logo-2.png')}}" title="" alt=""> 
 <img class="logo-light logo-img" src="{{asset('assets/images/logo-2.png')}}" title="" alt="">
  </a>
  <a href="javascript:void(0);" class="ic menu" tabindex="1">
      <span class="line"></span>
      <span class="line"></span>
      <span class="line"></span>
    </a>
    <a href="javascript:void(0);" class="ic close"></a> 
     <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
    <ul class="main-nav">
      <!-- <li class="top-level-link">
        <a><span>Home</span></a>      
      </li>  -->
      
      <li class="top-level-link">
        <a class="mega-menu" id="services"><span>{{ trans('header.services') }}</span></a>
        <label class="px-dropdown-toggle mob-menu bi bi-chevron-down"></label>
        <div class="sub-menu-block px-mega-menu start-0" id="services_sub">
          <div class="row text-center" id="sub"> 
            <div class="col-sm-6 col-lg-3 my-3" id="sub1">
              <!-- <h2 class="sub-menu-head">Clothing</h2>    -->
              <ul class="sub-menu-lists sub-first-pad">
                <li><a class="dropdown-item" href="{{route('erp-systems')}}" id="home_link1">{{ trans('header.erpsystem') }}</a></li>
                <li><a class="dropdown-item" href="{{route('pos')}}" id="home_link2">{{ trans('header.possystem') }}</a></li>
                <li><a class="dropdown-item" href="{{route('web-development')}}">{{ trans('header.webdevelopment') }}</a></li>
                <li><a class="dropdown-item" href="{{route('mobile-applications')}}">{{ trans('header.mobileapplication') }}</a></li>               
              </ul>           
            </div>
            <div class="col-sm-6 col-lg-3 my-3" id="sub2">
              <!-- <h2 class="sub-menu-head">Handbags</h2>  -->
              <ul class="sub-menu-lists sub-second-pad">
              <li><a class="dropdown-item" href="{{route('web-applications')}}">{{ trans('header.webapplication') }}</a></li>
                <li><a class="dropdown-item" href="{{route('cyber-security')}}">{{ trans('header.cybersecurity') }}</a></li>
                <li><a class="dropdown-item" href="{{route('digital-marketing')}}">{{ trans('header.digitalmarketing') }}</a></li>
                <li><a class="dropdown-item" href="{{route('technical-support')}}">{{ trans('header.customersupport') }}</a></li>
                
              </ul>
            </div>
            <div class="col-sm-6 col-lg-6 my-3" id="sub3">
            <img src="{{asset('assets/images/dummy.png')}}" id="home_img"/>
            </div>
          </div>        
        </div>
      </li>
      
      <li class="top-level-link">
        <a class="mega-menu" id="solutions"><span>{{ trans('header.solutions') }}</span></a>
        <div class="sub-menu-block px-mega-menu start-0" id="solutions_sub">
          <div class="row text-center" id="s_sub">
            <div class="col-sm-6 col-lg-3 my-3" id="s_sub1">
              <h2 class="sub-menu-head" style="padding-left: 320px;">{{ trans('header.byindustry') }}</h2>
              <ul class="sub-menu-lists sub-first-pad">
                <li><a class="dropdown-item" href="{{route('real-estate')}}" id="page_link1">{{ trans('header.realestate') }}</a></li>
                <li><a class="dropdown-item" href="{{route('construction-and-Contracting')}}" id="page_link2">{{ trans('header.constructionsandcontracting') }}</a></li>
                <li><a class="dropdown-item" href="{{route('manufacturing-and-industrial-production')}}">{{ trans('header.manufacturingandindustrialproduction') }}</a></li>
                <li><a class="dropdown-item" href="{{route('educational-institutions')}}">{{ trans('header.education') }}</a></li>
                <li><a class="dropdown-item" href="{{route('rental-of-vehicles')}}">{{ trans('header.rentalofvehicles') }}</a></li>
                <li><a class="dropdown-item" href="{{route('restaurants-and-catering')}}">{{ trans('header.restaurantsandcaterings') }}</a></li>
              </ul>           
            </div> 
            <div class="col-sm-6 col-lg-3 my-3" id="s_sub2">
              <h2 class="sub-menu-head">{{ trans('header.bydepartment') }}</h2>
              <ul class="sub-menu-lists sub-second-pad">
                <li><a class="dropdown-item" href="{{route('financial-management')}}">{{ trans('header.accounting') }}</a></li>
                <li><a class="dropdown-item" href="{{route('human-resources-management')}}">{{ trans('header.humancapitalmanagement') }}</a></li>
                <li><a class="dropdown-item" href="{{route('supply-chain-management')}}">{{ trans('header.supplychainmanagement') }}</a></li>
                <li><a class="dropdown-item" href="{{route('inventory-management')}}">{{ trans('header.inventory') }}</a></li>
                <li><a class="dropdown-item" href="{{route('project-management-and-workflow')}}">{{ trans('header.projectmanagementandworkflow') }}</a></li>
                <li><a class="dropdown-item" href="{{route('tasks-management')}}">{{ trans('header.taskmanagementsystem') }}</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-lg-6 my-3" id="s_sub3">
            <img src="{{asset('assets/images/dummy.png')}}" id="solution_img"/>
            </div>
          </div>
          
        </div>
      </li>
      <li class="top-level-link">
        <a class="mega-menu" id="clients">{{ trans('header.clients') }}</a>
<!--        
        <div class="sub-menu-block px-mega-menu start-0" id="clients_sub"> 
          <div class="row text-center" id="c_sub">
            <div class="col-sm-6 col-lg-3 my-3" id="c_sub1">
              <h2 class="sub-menu-head">Clothing</h2>
              <ul class="sub-menu-lists">
                <li><a class="dropdown-item" href="#" id="blog_link1">Mens</a></li>
                <li><a class="dropdown-item" href="#" id="blog_link2">Womens</a></li>
                <li><a class="dropdown-item" href="#">Kids</a></li>
                <li><a class="dropdown-item" href="#">New Born</a></li>
                <li><a class="dropdown-item" href="#">View All</a></li>
              </ul>           
            </div>
            <div class="col-sm-6 col-lg-3 my-3" id="c_sub2">
              <h2 class="sub-menu-head">Handbags</h2>
              <ul class="sub-menu-lists">
                <li><a class="dropdown-item" href="#">Wallets</a></li>
                <li><a class="dropdown-item" href="#">Athletic bag</a></li>
                <li><a class="dropdown-item" href="#">Backpack</a></li>
                <li><a class="dropdown-item" href="#">Bucket Bag</a></li>
                <li><a class="dropdown-item" href="#">View All</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-lg-6 my-3" id="c_sub3">
            <img src="{{asset('assets/images/dummy.png')}}" id="blog_img"/>   
            </div>
          </div>     
        </div> -->
      </li>
    </ul> 
    <!-- </div> -->
    <!-- End Menu -->
    <div class="nav align-items-center elem-mr">
    <div class="nav-item dropdown me-3">
    <button class="dropdown-toggle btn theme-switch-01" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static"><span class="bi theme-icon-active icon-back"><i class="bi-sun-fill"></i></span></button>
    <ul class="dropdown-menu dropdown-menu-end shadow header-blur-light" aria-labelledby="bd-theme" style="--bs-dropdown-min-width: 8rem;" id="dropdown_mode"><li><button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light"><span class="bi me-2 opacity-50 theme-icon"><i class="bi-sun-fill"></i> </span>Light <span class="bi ms-auto d-none"><i class="bi-check2"></i></span></button></li><li><button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"><span class="bi me-2 opacity-50 theme-icon"><i class="bi-moon-stars-fill"></i> </span>Dark <span class="bi ms-auto d-none"><i class="bi-check2"></i></span></button></li></ul>
    
            
    </div>
    <ul class="search-cart-area justify-content-center me-3">
                        <li class="search-icon" id="search_icon"><a href="#"><span class="fa fa-search" id="se_icon"></span></a></li>
                       
                    </ul>
    <a href="{{ route('demo-request') }}" class="btn btn-outline-white ms-2" id="dm">{{ trans('header.buynow') }}</a><br/><br/><br/>  
  
    </div>   
</div> 
 </nav>
</header>

<div class="search-popup">
  <form class="search-form" method="get" action="#" target="_blank">
    @csrf
    <div class="form-element"><input type="text" placeholder="    Type You Want  To Search   " name="code"></div>
  </form>
  <div class="search-popup-overlay" id="searchOverlay"></div>
  <button class="search-close-btn" id="searchCloseBtn"><i class="fas fa-times"></i></button>
</div>