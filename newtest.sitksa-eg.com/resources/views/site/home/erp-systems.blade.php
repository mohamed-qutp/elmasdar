@if(app()->getLocale() == 'ar')
    @include('site.layouts_ar.head')
    <body>
    <div class="wrapper">
    @include('site.layouts_ar.header')
    <main id="blur_body">
        <section class="section effect-section bg-cover bg-center bg-no-repeat page-heading" style="background-image: url(/assets/images/request-a-Demo.jpg);">
        <div class="bg-black opacity-6 mask"></div>
        <div class="container position-relative wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white h1 mb-4">أنظمة تخطيط موارد المؤسسات ERP</h2>
                    <ol class="breadcrumb breadcrumb-light justify-content-center">
                        <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
                        <li class="breadcrumb-item active">أنظمة تخطيط موارد المؤسسات ERP</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    
    <section  id="hero" class="hero d-flex align-items-center header-blur-light bg-gray-100">
    <div class="container">
    <div class="row  justify-content-center">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h5 data-aos="fade-up"  class="bg-primary-after after-50px pb-3 mb-3">{{ trans('services/erp_systems.servicetitle') }}</h5>                     
                      </div>
                    </div>
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">        
          <h2 data-aos="fade-up" data-aos-delay="400" class="text-jsutify"> {{ trans('services/erp_systems.servicedescription') }}</h2>
          <div data-aos="fade-up" data-aos-delay="600">
          </div>
        </div>
        <div class="col-lg-6 hero-img wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
          <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/Technological_solutions/Data_center/d1.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
   <section class="bg-gray-100">
        <div class="container">
          
        <div class="row gy-4">
        <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Financial management_.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erponetitle') }}</h6>
                <p class="m-0 card-content text-jsutify" style="-webkit-line-clamp: 4;padding-bottom: 5px;">{{strip_tags(Str::limit(trans('services/erp_systems.erponedescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Administration of future sales, cash and client accounts_.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erptwotitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erptwodescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Procurement management and supplier accounts.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpthreetitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erpthreedescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
       
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Cash management, storage, checks, and bank accounts copy 3.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpfourtitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erpfourdescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Controlling resources and data storage.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpfivetitle') }}</h6>
                <p class="m-0 card-content text-jsutify" style="-webkit-line-clamp: 4;padding-bottom: 0px;">{{strip_tags(Str::limit(trans('services/erp_systems.erpfivedescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
  
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Abstract management and project follow-up.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpseventitle') }}</h6>
                <p class="m-0 card-content text-jsutify" style="-webkit-line-clamp: 4;padding-bottom: 0px;">{{strip_tags(Str::limit(trans('services/erp_systems.erpsevendescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top" >
            <div class="card-body text-center py-6 px-xl-7" style="margin-bottom: -10px;">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Management of the movement of posts, accounts and commission.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpeighttitle') }}</h6>
                <p class="m-0 card-content text-jsutify" style="padding-bottom: -1px;">{{strip_tags(Str::limit(trans('services/erp_systems.erpeightdescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Personnel management system.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpninetitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erpninedescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
      <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Management of resources and data storage.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpsixtitle') }}</h6>
                <p class="m-0 card-content text-jsutify" style="padding-bottom: 3px;">{{strip_tags(Str::limit(trans('services/erp_systems.erpsixdescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7" style="margin-bottom: -15px;">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Management of prefabricated concrete plants.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erptentitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erptendescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7" style="margin-bottom: -15px;">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Plant management and industrial production.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpeleventitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erpelevendescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Export and import management.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erptwelvetitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erptwelvedescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7" style="margin-bottom: -16px;">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Management of maintenance workshops, spare parts, and installation.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpthirteentitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erpthirteendescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Shipping, transport, and delivery management.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpfourteentitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erpfourteendescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Administration of schools and educational centers.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpfifteentitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erpfifteendescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                   <img src="{{asset('assets/images/services/erp/icons/Management of water plants and plumbing.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpsixteentitle') }}</h6>
                <p class="m-0 card-content text-jsutify"style="padding-bottom: 20px;">{{strip_tags(Str::limit(trans('services/erp_systems.erpsixteendescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                   <img src="{{asset('assets/images/services/erp/icons/Department of hospitals, clinics, and medical centers.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpseventeentitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erpseventeendescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Management of farms and agricultural production.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpeighteentitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erpeighteendescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7" style="margin-bottom: -19px;">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                   <img src="{{asset('assets/images/services/erp/icons/Administration of real estate, leases, contracts, and maintenance.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpnineteenteentitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erpnineteendescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Rental of vehicles management.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erptwentytitle') }}</h6>
                <p class="m-0 card-content text-jsutify" style="padding-bottom: 19px;">{{strip_tags(Str::limit(trans('services/erp_systems.erptwentydescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7"style="margin-bottom: -20px;">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Equipment Management.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erptwentythreetitle') }}</h6>
                <p class="m-0 card-content text-jsutify" style="padding-bottom: 24px;">{{strip_tags(Str::limit(trans('services/erp_systems.erptwentythreedescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7"style="margin-bottom: -20px;">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Inspection and Quality Department.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erptwentyfourtitle') }}</h6>
                <p class="m-0 card-content text-jsutify" style="padding-bottom: 24px;">{{strip_tags(Str::limit(trans('services/erp_systems.erptwentyfourdescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">شاهد الخدمة</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</section>
@include('site.layouts_ar.ask-for-quotation')    
         
</main>
    
    @include('site.layouts_ar.footer')
    @include('site.layouts_ar.js')
    @else
        @include('site.layouts.head')
        <body>
        <div class="wrapper">
        @include('site.layouts.header')  
        <main id="blur_body">
        <section class="section effect-section bg-cover bg-center bg-no-repeat page-heading" style="background-image: url(/assets/images/request-a-Demo.jpg);">
        <div class="bg-black opacity-6 mask"></div>
        <div class="container position-relative wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white h1 mb-4">ERP Systems</h2>
                    <ol class="breadcrumb breadcrumb-light justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">ERP Systems</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>  
   
    <section  id="hero" class="hero d-flex align-items-center  bg-gray-100">
    <div class="container">
    <div class="row  justify-content-center">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h5 data-aos="fade-up"  class="bg-primary-after after-50px pb-3 mb-3">{{ trans('services/erp_systems.servicetitle') }}</h5>                     
                      </div>
                    </div>
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">        
          <h2 data-aos="fade-up" data-aos-delay="400" class="text-jsutify"> {{ trans('services/erp_systems.servicedescription') }}</h2>
          <div data-aos="fade-up" data-aos-delay="600">
          </div>
        </div>
        <div class="col-lg-6 hero-img wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
          <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/Technological_solutions/Data_center/d1.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
    <section class="bg-gray-100">
        <div class="container">
          
        <div class="row gy-4">
        <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Financial management_.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erponetitle') }}</h6>
                <p class="m-0 card-content text-jsutify" style="-webkit-line-clamp: 4;padding-bottom: 5px;">{{strip_tags(Str::limit(trans('services/erp_systems.erponedescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Administration of future sales, cash and client accounts_.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erptwotitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erptwodescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Procurement management and supplier accounts.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpthreetitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erpthreedescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
       
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Cash management, storage, checks, and bank accounts copy 3.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpfourtitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erpfourdescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Controlling resources and data storage.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpfivetitle') }}</h6>
                <p class="m-0 card-content text-jsutify" style="-webkit-line-clamp: 4;padding-bottom: 0px;">{{strip_tags(Str::limit(trans('services/erp_systems.erpfivedescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Management of resources and data storage.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpsixtitle') }}</h6>
                <p class="m-0 card-content text-jsutify" style="padding-bottom: 3px;">{{strip_tags(Str::limit(trans('services/erp_systems.erpsixdescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Abstract management and project follow-up.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpseventitle') }}</h6>
                <p class="m-0 card-content text-jsutify" style="-webkit-line-clamp: 4;padding-bottom: 0px;">{{strip_tags(Str::limit(trans('services/erp_systems.erpsevendescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top" >
            <div class="card-body text-center py-6 px-xl-7" style="margin-bottom: -10px;">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Management of the movement of posts, accounts and commission.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpeighttitle') }}</h6>
                <p class="m-0 card-content text-jsutify" style="padding-bottom: -1px;">{{strip_tags(Str::limit(trans('services/erp_systems.erpeightdescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Personnel management system.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpninetitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erpninedescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7" style="margin-bottom: -15px;">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Management of prefabricated concrete plants.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erptentitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erptendescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7" style="margin-bottom: -15px;">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Plant management and industrial production.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpeleventitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erpelevendescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Export and import management.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erptwelvetitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erptwelvedescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7" style="margin-bottom: -16px;">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Management of maintenance workshops, spare parts, and installation.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpthirteentitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erpthirteendescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Shipping, transport, and delivery management.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpfourteentitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erpfourteendescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Administration of schools and educational centers.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpfifteentitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erpfifteendescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                   <img src="{{asset('assets/images/services/erp/icons/Management of water plants and plumbing.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpsixteentitle') }}</h6>
                <p class="m-0 card-content text-jsutify"style="padding-bottom: 20px;">{{strip_tags(Str::limit(trans('services/erp_systems.erpsixteendescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                   <img src="{{asset('assets/images/services/erp/icons/Department of hospitals, clinics, and medical centers.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpseventeentitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erpseventeendescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Management of farms and agricultural production.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpeighteentitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erpeighteendescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7" style="margin-bottom: -19px;">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                   <img src="{{asset('assets/images/services/erp/icons/Administration of real estate, leases, contracts, and maintenance.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erpnineteenteentitle') }}</h6>
                <p class="m-0 card-content text-jsutify">{{strip_tags(Str::limit(trans('services/erp_systems.erpnineteendescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Rental of vehicles management.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erptwentytitle') }}</h6>
                <p class="m-0 card-content text-jsutify" style="padding-bottom: 19px;">{{strip_tags(Str::limit(trans('services/erp_systems.erptwentydescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7"style="margin-bottom: -20px;">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Equipment Management.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erptwentythreetitle') }}</h6>
                <p class="m-0 card-content text-jsutify" style="padding-bottom: 24px;">{{strip_tags(Str::limit(trans('services/erp_systems.erptwentythreedescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 my-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
        <div class="card border-0 shadow-hover hover-top">
            <div class="card-body text-center py-6 px-xl-7"style="margin-bottom: -20px;">
                <div class="ef-3 hr-rotate-after icon icon-xl rounded-circle text-primary mb-5">
                    <img src="{{asset('assets/images/services/erp/icons/Inspection and Quality Department.png')}}" class="zoom-thumbnail"/>
                </div>
                <h6 class="h6 mb-3">{{ trans('services/erp_systems.erptwentyfourtitle') }}</h6>
                <p class="m-0 card-content text-jsutify" style="padding-bottom: 24px;">{{strip_tags(Str::limit(trans('services/erp_systems.erptwentyfourdescription'),170))}}</p>
                <div class="nav pt-3 justify-content-center">
                   <a href="#" class="btn btn-back ms-2"  style="filter: blur(0px);">See service</a>
                    <!-- <a class="icon-sm border hover-top rounded-circle text-facebook me-2" href="#"><i class="lh-1 bi-facebook"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-twitter me-2" href="#"><i class="lh-1 bi-twitter"></i></a> 
                    <a class="icon-sm border hover-top rounded-circle text-linkedin" href="#"><i class="lh-1 bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</section>
@include('site.layouts.ask-for-quotation')
    
</main>
    
    @include('site.layouts.footer')
    @include('site.layouts.js')
@endif