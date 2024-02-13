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
                    <h2 class="text-white h1 mb-4">{{ trans('about/about.abouttitle') }}</h2>
                    <ol class="breadcrumb breadcrumb-light justify-content-center">
                        <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
                        <li class="breadcrumb-item active">{{ trans('about/about.abouttitle') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>   
    <section class="section bg-gray-100">
    <div class="container">
    <div class="row  justify-content-center">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h5 data-aos="fade-up"  class="bg-primary-after after-50px pb-3 mb-3"> {{ trans('about/about.aboutdescriptiononetitle') }}</h5>
                     
                      </div>
                    </div>
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
        
          <h6 data-aos="fade-up" data-aos-delay="400" class="text-jsutify"> {{ trans('about/about.aboutdescriptionone') }}</h6>
          <div data-aos="fade-up" data-aos-delay="600">
          </div>
        </div>
       
      </div>
    </div>
  </section>
  <section class="section bg-gray-100">
    <div class="container">
    <div class="row  justify-content-center">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h5 data-aos="fade-up"  class="bg-primary-after after-50px pb-3 mb-3"> عنوان</h5>
                     
                      </div>
                    </div>
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
        
          <h6 data-aos="fade-up" data-aos-delay="400" class="text-center"> {{ trans('about/about.aboutdescriptiontwo') }}</h6>
          <h6 data-aos="fade-up" data-aos-delay="400" class="text-center"> {{ trans('about/about.aboutdescriptionthree') }}</h6>
          <div data-aos="fade-up" data-aos-delay="600">
          </div>
        </div>
       
      </div>
    </div>
  </section>
<!-- ======= Services Section ======= -->
<section id="services" class="section services bg-gray-100">
    <div class="container vimeo-wrapper" data-aos="fade-up">       
        <div class="row  justify-content-center section-heading">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h5 class="bg-primary-after after-50px pb-3 mb-3">{{ trans('about/about.aboutdescriptionfourtitle') }} </h5>                       
                      </div>
                    </div>
        <div class="row gy-5">
            <div id="solution" class="col-xl-3 col-md-6 wow fadeInRight" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInRight;">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/%D8%A7%D9%84%D8%B4%D8%A8%D9%83%D8%A7%D8%AA%20%D8%A7%D9%84%D9%84%D8%A7%D8%B3%D9%84%D9%83%D9%8A%D8%A9.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-bounding-box-circles"></i>
                        </div>
                        <a href=" " class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('about/about.aboutdescriptionfour1')}}</p></h3>
                        </a>
                        <a href=" " class="stretched-link"></a>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div id="solution" class="col-xl-3 col-md-6 wow fadeInRight" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInRight;">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/%D9%85%D8%B1%D9%83%D8%B2%20%D8%A7%D9%84%D8%A8%D9%8A%D8%A7%D9%86%D8%A7%D8%AA.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-broadcast"></i>
                        </div>
                        <a href=" " class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('about/about.aboutdescriptionfour2')}}</p></h3>
                        </a>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div id="solution" class="col-xl-3 col-md-6 wow fadeInRight" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInRight;">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/%D8%A7%D9%84%D8%A7%D9%84%D9%8A%D8%A7%D9%81%20%D8%A7%D9%84%D8%A8%D8%B5%D8%B1%D9%8A%D8%A9.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-easel"></i>
                        </div>
                        <a href=" " class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('about/about.aboutdescriptionfour3')}}</p></h3>
                        </a>

                    </div>
                </div>
            </div>
            <!-- End Service Item -->
            <div id="solution" class="col-xl-3 col-md-6 wow fadeInRight" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInRight;">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/%D8%A7%D9%84%D8%A8%D9%86%D9%8A%D8%A9%20%D8%A7%D9%84%D8%AA%D8%AD%D8%AA%D9%8A%D8%A9.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <a href=" " class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('about/about.aboutdescriptionfour4')}}</p></h3>
                        </a>
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
                    <h2 class="text-white h1 mb-4">{{ trans('about/about.abouttitle') }}</h2>
                    <ol class="breadcrumb breadcrumb-light justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">{{ trans('about/about.abouttitle') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>  
    <section class="section bg-gray-100">
    <div class="container">
    <div class="row  justify-content-center">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h5 data-aos="fade-up"  class="bg-primary-after after-50px pb-3 mb-3"> {{ trans('about/about.aboutdescriptiononetitle') }}</h5>
                     
                      </div>
                    </div>
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
        
          <h6 data-aos="fade-up" data-aos-delay="400" class="text-center"> {{ trans('about/about.aboutdescriptionone') }}</h6>
          <div data-aos="fade-up" data-aos-delay="600">
          </div>
        </div>
       
      </div>
    </div>
  </section>
  <section class="section bg-gray-100">
    <div class="container">
    <div class="row  justify-content-center">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h5 data-aos="fade-up"  class="bg-primary-after after-50px pb-3 mb-3"> Title</h5>
                     
                      </div>
                    </div>
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
        
          <h6 data-aos="fade-up" data-aos-delay="400" class="text-center"> {{ trans('about/about.aboutdescriptiontwo') }}</h6>
          <h6 data-aos="fade-up" data-aos-delay="400" class="text-center"> {{ trans('about/about.aboutdescriptionthree') }}</h6>
          <div data-aos="fade-up" data-aos-delay="600">
          </div>
        </div>
       
      </div>
    </div>
  </section>
   
<!-- ======= Services Section ======= -->
<section id="services" class="section services bg-gray-100">
    <div class="container vimeo-wrapper" data-aos="fade-up">       
        <div class="row  justify-content-center section-heading">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h5 class="bg-primary-after after-50px pb-3 mb-3">{{ trans('about/about.aboutdescriptionfourtitle') }}</h5>                       
                      </div>
                    </div>
        <div class="row gy-5">
            <div id="solution" class="col-xl-3 col-md-6 wow fadeInLeft" data-wow-duration="0.9s" data-wow-duration="0.9s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInLeft;">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/%D8%A7%D9%84%D8%B4%D8%A8%D9%83%D8%A7%D8%AA%20%D8%A7%D9%84%D9%84%D8%A7%D8%B3%D9%84%D9%83%D9%8A%D8%A9.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-bounding-box-circles"></i>
                        </div>
                        <a href=" " class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('about/about.aboutdescriptionfour1')}}</p></h3>
                        </a>
                        <a href=" " class="stretched-link"></a>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div id="solution" class="col-xl-3 col-md-6 wow fadeInLeft" data-wow-duration="0.9s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInLeft;">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/%D9%85%D8%B1%D9%83%D8%B2%20%D8%A7%D9%84%D8%A8%D9%8A%D8%A7%D9%86%D8%A7%D8%AA.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-broadcast"></i>
                        </div>
                        <a href=" " class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('about/about.aboutdescriptionfour2')}}</p></h3>
                        </a>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div id="solution" class="col-xl-3 col-md-6 wow fadeInLeft" data-wow-duration="0.9s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInLeft;">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/%D8%A7%D9%84%D8%A7%D9%84%D9%8A%D8%A7%D9%81%20%D8%A7%D9%84%D8%A8%D8%B5%D8%B1%D9%8A%D8%A9.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-easel"></i>
                        </div>
                        <a href=" " class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('about/about.aboutdescriptionfour3')}}</p></h3>
                        </a>

                    </div>
                </div>
            </div>
            <!-- End Service Item -->
            <div id="solution" class="col-xl-3 col-md-6 wow fadeInLeft" data-wow-duration="0.9s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInLeft;">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/%D8%A7%D9%84%D8%A8%D9%86%D9%8A%D8%A9%20%D8%A7%D9%84%D8%AA%D8%AD%D8%AA%D9%8A%D8%A9.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <a href=" " class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('about/about.aboutdescriptionfour4')}}</p></h3>
                        </a>
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