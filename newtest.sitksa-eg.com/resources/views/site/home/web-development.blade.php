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
                    <h2 class="text-white h1 mb-4">{{ trans('services/web_development.servicetitle') }}</h2>
                    <ol class="breadcrumb breadcrumb-light justify-content-center">
                        <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
                        <li class="breadcrumb-item active">{{ trans('services/web_development.servicetitle') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
   
    <section  id="hero" class="section hero d-flex align-items-center  bg-gray-100">
    <div class="container">
    <div class="row  justify-content-center">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h5 data-aos="fade-up"  class="bg-primary-after after-50px pb-3 mb-3"> {{ trans('services/web_development.servicetitle') }} </h5>                     
                      </div>
                    </div>
      <div class="row">      
        <div class="col-lg-6 d-flex flex-column justify-content-center fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">        
          <h6 data-aos="fade-up" data-aos-delay="400" class="text-jsutify"> {{ trans('services/web_development.servicedescription') }}</h6>
          <div data-aos="fade-up" data-aos-delay="600">
          </div>
        </div>
        <div class="col-lg-6 hero-img fadeInUp" data-aos="zoom-out" data-aos-delay="200" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
          <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/Technological_solutions/Data_center/d1.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>    
<section class="bg-gray-100" id="two">
                    <div class="container pb-10">
                      <div class="row justify-content-center section-heading">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h5 class="bg-primary-after after-50px pb-3 mb-3" style="font-size: 18px;">{{ trans('services/web_development.findoutaboutourservicestitle') }}</h5>
                        <!-- <h6 class="text-primary mb-3">What We provide</h6> -->
                        <!-- <h3 class="h2 mb-0">See everything what we can do!</h3> -->
                      </div>
                    </div>
                    <div class="row gy-4">
                      <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.05s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.05s; animation-name: fadeInUp;">
                      
                      <div class="card shadow-lg hover-top">
                      <a href="#two" class="open-button" id="1">
                        <div class="card-body text-center py-6">       

                          <div class="icon-xl text-white rounded-circle mb-5">
                           <img src="{{asset('assets/images/services/wep Development/icons/Design-codes-using-different-programming-languages.png')}}" class="zoom-thumbnail"/> 
                          </div>
                          <h6 class="h6 mb-3">{{ trans('services/web_development.findoutaboutourservices1') }}</h6>
                           <!-- <span class="link-effect">Read More</span>  -->
                            
                          </div>
                          </a>
                        </div>
                      </div>
                      
                      <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.05s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.05s; animation-name: fadeInUp;">
                      <div class="card shadow-lg hover-top">
                      <a href="#two" class="open-button" id="2">
                        <div class="card-body text-center py-5">
                          <div class="icon-xl text-white rounded-circle mb-5">
                          <img src="{{asset('assets/images/services/wep Development/icons/Modernization-and-development-of-the-websites-of-companies-or-enterprises_.png')}}" class="zoom-thumbnail"/>
                          </div>
                          <h6 class="h6 mb-3">{{ trans('services/web_development.findoutaboutourservices2') }}</h6>
                          <!-- <span class="link-effect">Read More</span> -->
                        </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.05s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.05s; animation-name: fadeInUp;">
                    <div class="card shadow-lg hover-top">
                    <a href="#two" class="open-button" id="3">
                      <div class="card-body text-center py-5">
                        <div class="icon-xl text-white rounded-circle mb-5">
                        <img src="{{asset('assets/images/services/wep Development/icons/Designing the form of the outside site, including colors, images, sections, etc. copy.png')}}" class="zoom-thumbnail"/> 
                        </div>
                        <h6 class="h6 mb-3">{{ trans('services/web_development.findoutaboutourservices3') }}</h6>
                        <!-- <span class="link-effect">Read More</span> -->
                      </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.05s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.05s; animation-name: fadeInUp;">
                  <div class="card shadow-lg hover-top">
                  <a href="#two" class="open-button" id="4">
                    <div class="card-body text-center py-6">
                      <div class="icon-xl text-white rounded-circle mb-5">
                     <img src="{{asset('assets/images/services/wep Development/icons/Discovering and resolving the problems facing the sites_.png')}}" class="zoom-thumbnail"/>
                      </div>
                      <h6 class="h6 mb-3">{{ trans('services/web_development.findoutaboutourservices4') }}</h6>
                      <!-- <span class="link-effect">Read More</span> -->
                    </div>
                    </a>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="card shadow-lg hover-top">
                <a href="#two" class="open-button" id="5">
                  <div class="card-body text-center py-5">
                    <div class="icon-xl text-white rounded-circle mb-5">
                    <img src="{{asset('assets/images/services/wep Development/icons/Fixing the technical malfunctions and finding out why they have occurred in order to avoid them in the future_.png')}}" class="zoom-thumbnail"/>
                    </div>
                    <h6 class="h6 mb-3">{{ trans('services/web_development.findoutaboutourservices5') }}</h6>
                    <!-- <span class="link-effect">Read More</span> -->
                  </div>
                  </a>
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
                    <h2 class="text-white h1 mb-4">{{ trans('services/web_development.servicetitle') }}</h2>
                    <ol class="breadcrumb breadcrumb-light justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">{{ trans('services/web_development.servicetitle') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>  
   
    <section  id="hero" class="section hero d-flex align-items-center  bg-gray-100" >
    <div class="container">
    <div class="row  justify-content-center">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h5 data-aos="fade-up"  class="bg-primary-after after-50px pb-3 mb-3"> {{ trans('services/web_development.servicetitle') }} </h5>                     
                      </div>
                    </div>
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">         
          <h6 data-aos="fade-up" data-aos-delay="400" class="text-jsutify"> {{ trans('services/web_development.servicedescription') }}</h6>
          <div data-aos="fade-up" data-aos-delay="600">
          </div>
        </div>
        <div class="col-lg-6 hero-img fadeInUp" data-aos="zoom-out" data-aos-delay="200" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
          <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/Technological_solutions/Data_center/d1.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray-100" id="two">
                    <div class="container pb-10">
                      <div class="row justify-content-center section-heading">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h5 class="bg-primary-after after-50px pb-3 mb-3" style="font-size: 18px;">{{ trans('services/web_development.findoutaboutourservicestitle') }}</h5>
                        <!-- <h6 class="text-primary mb-3">What We provide</h6> -->
                        <!-- <h3 class="h2 mb-0">See everything what we can do!</h3> -->
                      </div>
                    </div>
                    <div class="row gy-4">
                      <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.05s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.05s; animation-name: fadeInUp;">
                      
                      <div class="card shadow-lg hover-top">
                      <a href="#two" class="open-button" id="1">
                        <div class="card-body text-center py-6">       

                          <div class="icon-xl text-white rounded-circle mb-5">
                            <img src="{{asset('assets/images/services/wep Development/icons/Design-codes-using-different-programming-languages.png')}}" class="zoom-thumbnail"/> 
                          </div>
                          <h6 class="h6 mb-3">{{ trans('services/web_development.findoutaboutourservices1') }}</h6>
                           <!-- <span class="link-effect">Read More</span>  -->
                            
                          </div>
                          </a>
                        </div>
                      </div>
                      
                      <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.05s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.05s; animation-name: fadeInUp;">
                      <div class="card shadow-lg hover-top">
                      <a href="#two" class="open-button" id="2">
                        <div class="card-body text-center py-5">
                          <div class="icon-xl text-white rounded-circle mb-5">
                         <img src="{{asset('assets/images/services/wep Development/icons/Modernization-and-development-of-the-websites-of-companies-or-enterprises_.png')}}" class="zoom-thumbnail"/> 
                          </div>
                          <h6 class="h6 mb-3">{{ trans('services/web_development.findoutaboutourservices2') }}</h6>
                          <!-- <span class="link-effect">Read More</span> -->
                        </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.05s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.05s; animation-name: fadeInUp;">
                    <div class="card shadow-lg hover-top">
                    <a href="#two" class="open-button" id="3">
                      <div class="card-body text-center py-5">
                        <div class="icon-xl text-white rounded-circle mb-5">
                        <img src="{{asset('assets/images/services/wep Development/icons/Designing the form of the outside site, including colors, images, sections, etc. copy.png')}}" class="zoom-thumbnail"/> 
                        </div>
                        <h6 class="h6 mb-3">{{ trans('services/web_development.findoutaboutourservices3') }}</h6>
                        <!-- <span class="link-effect">Read More</span> -->
                      </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.05s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.05s; animation-name: fadeInUp;">
                  <div class="card shadow-lg hover-top">
                  <a href="#two" class="open-button" id="4">
                    <div class="card-body text-center py-5">
                      <div class="icon-xl text-white rounded-circle mb-5">
                      <img src="{{asset('assets/images/services/wep Development/icons/Discovering and resolving the problems facing the sites_.png')}}" class="zoom-thumbnail"/>
                      </div>
                      <h6 class="h6 mb-3">{{ trans('services/web_development.findoutaboutourservices4') }}</h6>
                      <!-- <span class="link-effect">Read More</span> -->
                    </div>
                    </a>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="card shadow-lg hover-top">
                <a href="#two" class="open-button" id="5">
                  <div class="card-body text-center py-4">
                    <div class="icon-xl text-white rounded-circle mb-5">
                    <img src="{{asset('assets/images/services/wep Development/icons/Fixing the technical malfunctions and finding out why they have occurred in order to avoid them in the future_.png')}}" class="zoom-thumbnail"/>
                    </div>
                    <h6 class="h6 mb-3">{{ trans('services/web_development.findoutaboutourservices5') }}</h6>
                    <!-- <span class="link-effect">Read More</span> -->
                  </div>
                  </a>
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