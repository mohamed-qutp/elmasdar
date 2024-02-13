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
                    <h2 class="text-white h1 mb-4">أنظمة نقاط البيع</h2>
                    <ol class="breadcrumb breadcrumb-light justify-content-center">
                        <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
                        <li class="breadcrumb-item active">أنظمة نقاط البيع</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>  
    <section class="basic-2 align-items-center bg-gray-200 header-blur-light"> 
<div id="video">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=fLCjQJCekTs" data-effect="fadeIn">
                                <!-- <img class="img-fluid" src="/assets/images/video-image.png" alt="alternative"> -->
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->                   
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
</section>
    <section  id="hero" class="hero d-flex align-items-center  bg-gray-100 header-blur-light">
    <div class="container">
    <div class="row  justify-content-center section-heading">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h3 class="bg-primary-after after-50px pb-3 mb-3">{{ trans('services/point_of_sale_system.servicetitle') }} </h3>
                        <!-- <h6 class="text-primary mb-3">What We provide</h6> -->
                        <!-- <h3 class="h2 mb-0">See everything what we can do!</h3> -->
                      </div>
                    </div>
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
          <!-- <h3 data-aos="fade-up" class="text-jsutify mb-3">  {{ trans('services/point_of_sale_system.servicetitle') }} </h3> -->
          <h2 data-aos="fade-up" data-aos-delay="400" class="text-jsutify"> {{ trans('services/point_of_sale_system.servicedescription') }}</h2>
          <div data-aos="fade-up" data-aos-delay="600">
          </div>
        </div>
        <div class="col-lg-6 hero-img fadeInUp" data-aos="zoom-out" data-aos-delay="200" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
          <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/Technological_solutions/Data_center/d1.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
   
<!-- ======= Services Section ======= -->
<section id="services" class="services bg-gray-100">
    <div class="container vimeo-wrapper" data-aos="fade-up">       
        <div class="row  justify-content-center section-heading">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h3 class="bg-primary-after after-50px pb-3 mb-3">{{ trans('services/point_of_sale_system.serviceadvantagestitle') }} </h3>                       
                      </div>
                    </div>
        <div class="row gy-5">
            <div id="solution" class="col-xl-3 col-md-6 reveal1" data-aos="zoom-in" data-aos-delay="500">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/%D8%A7%D9%84%D8%B4%D8%A8%D9%83%D8%A7%D8%AA%20%D8%A7%D9%84%D9%84%D8%A7%D8%B3%D9%84%D9%83%D9%8A%D8%A9.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-bounding-box-circles"></i>
                        </div>
                        <a href=" " class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('services/point_of_sale_system.serviceadvantage1')}}</p></h3>
                        </a>
                        <a href=" " class="stretched-link"></a>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div id="solution" class="col-xl-3 col-md-6 reveal1" data-aos="zoom-in" data-aos-delay="300">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/%D9%85%D8%B1%D9%83%D8%B2%20%D8%A7%D9%84%D8%A8%D9%8A%D8%A7%D9%86%D8%A7%D8%AA.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-broadcast"></i>
                        </div>
                        <a href=" " class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('services/point_of_sale_system.serviceadvantage2')}}</p></h3>
                        </a>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div id="solution" class="col-xl-3 col-md-6 reveal" data-aos="zoom-in" data-aos-delay="400">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/%D8%A7%D9%84%D8%A7%D9%84%D9%8A%D8%A7%D9%81%20%D8%A7%D9%84%D8%A8%D8%B5%D8%B1%D9%8A%D8%A9.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-easel"></i>
                        </div>
                        <a href=" " class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('services/point_of_sale_system.serviceadvantage3')}}</p></h3>
                        </a>

                    </div>
                </div>
            </div>
            <!-- End Service Item -->
            <div id="solution" class="col-xl-3 col-md-6 reveal1" data-aos="zoom-in" data-aos-delay="200">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/%D8%A7%D9%84%D8%A8%D9%86%D9%8A%D8%A9%20%D8%A7%D9%84%D8%AA%D8%AD%D8%AA%D9%8A%D8%A9.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <a href=" " class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('services/point_of_sale_system.serviceadvantage4')}}</p></h3>
                        </a>
                    </div>
                </div>
            </div>

            <div id="solution" class="col-xl-3 col-md-6 reveal" data-aos="zoom-in" data-aos-delay="600">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/Customer%20service.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week"></i>
                        </div>
                        <a href="" class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('services/point_of_sale_system.serviceadvantage5')}}</p></h3>
                        </a>
                        <a href="" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <div id="solution" class="col-xl-3 col-md-6 reveal" data-aos="zoom-in" data-aos-delay="600">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/cyber.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week"></i>
                        </div>
                        <a href=" " class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('services/point_of_sale_system.serviceadvantage6')}}</p></h3>
                        </a>
                        <a href=" " class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div id="solution" class="col-xl-3 col-md-6 reveal" data-aos="zoom-in" data-aos-delay="600">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/Customer%20service.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week"></i>
                        </div>
                        <a href="" class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('services/point_of_sale_system.serviceadvantage7')}}</p></h3>
                        </a>
                        <a href="" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div id="solution" class="col-xl-3 col-md-6 reveal" data-aos="zoom-in" data-aos-delay="600">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/Customer%20service.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week"></i>
                        </div>
                        <a href="" class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('services/point_of_sale_system.serviceadvantage8')}}</p></h3>
                        </a>
                        <a href="" class="stretched-link"></a>
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
                    <h2 class="text-white h1 mb-4">Point Of Sale System</h2>
                    <ol class="breadcrumb breadcrumb-light justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Point Of Sale System</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>  
    <section class="basic-2 align-items-center bg-gray-200 header-blur-light"> 
<div id="video">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=fLCjQJCekTs" data-effect="fadeIn">
                                <!-- <img class="img-fluid" src="/assets/images/video-image.png" alt="alternative"> -->
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->                   
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
</section>
    <section  id="hero" class="hero d-flex align-items-center  bg-gray-100 header-blur-light">
    <div class="container">
    <div class="row  justify-content-center section-heading">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h3 class="bg-primary-after after-50px pb-3 mb-3">{{ trans('services/point_of_sale_system.servicetitle') }} </h3>                       
                      </div>
                    </div>
 
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">       
          <h2 data-aos="fade-up" data-aos-delay="400" class="text-jsutify"> {{ trans('services/point_of_sale_system.servicedescription') }}</h2>
          <div data-aos="fade-up" data-aos-delay="600">
          </div>
        </div>
        <div class="col-lg-6 hero-img fadeInUp" data-aos="zoom-out" data-aos-delay="200" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
          <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/Technological_solutions/Data_center/d1.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>

<!-- ======= Services Section ======= -->
<section id="services" class="services bg-gray-100">
    <div class="container vimeo-wrapper" data-aos="fade-up">       
        <div class="row  justify-content-center section-heading">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h3 class="bg-primary-after after-50px pb-3 mb-3">{{ trans('services/point_of_sale_system.serviceadvantagestitle') }} </h3>                       
                      </div>
                    </div>
        <div class="row gy-5">
            <div id="solution" class="col-xl-3 col-md-6 reveal1" data-aos="zoom-in" data-aos-delay="500">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/%D8%A7%D9%84%D8%B4%D8%A8%D9%83%D8%A7%D8%AA%20%D8%A7%D9%84%D9%84%D8%A7%D8%B3%D9%84%D9%83%D9%8A%D8%A9.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-bounding-box-circles"></i>
                        </div>
                        <a href=" " class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('services/point_of_sale_system.serviceadvantage1')}}</p></h3>
                        </a>
                        <a href=" " class="stretched-link"></a>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div id="solution" class="col-xl-3 col-md-6 reveal1" data-aos="zoom-in" data-aos-delay="300">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/%D9%85%D8%B1%D9%83%D8%B2%20%D8%A7%D9%84%D8%A8%D9%8A%D8%A7%D9%86%D8%A7%D8%AA.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-broadcast"></i>
                        </div>
                        <a href=" " class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('services/point_of_sale_system.serviceadvantage2')}}</p></h3>
                        </a>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div id="solution" class="col-xl-3 col-md-6 reveal" data-aos="zoom-in" data-aos-delay="400">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/%D8%A7%D9%84%D8%A7%D9%84%D9%8A%D8%A7%D9%81%20%D8%A7%D9%84%D8%A8%D8%B5%D8%B1%D9%8A%D8%A9.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-easel"></i>
                        </div>
                        <a href=" " class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('services/point_of_sale_system.serviceadvantage3')}}</p></h3>
                        </a>

                    </div>
                </div>
            </div>
            <!-- End Service Item -->
            <div id="solution" class="col-xl-3 col-md-6 reveal1" data-aos="zoom-in" data-aos-delay="200">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/%D8%A7%D9%84%D8%A8%D9%86%D9%8A%D8%A9%20%D8%A7%D9%84%D8%AA%D8%AD%D8%AA%D9%8A%D8%A9.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <a href=" " class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('services/point_of_sale_system.serviceadvantage4')}}</p></h3>
                        </a>
                    </div>
                </div>
            </div>

            <div id="solution" class="col-xl-3 col-md-6 reveal" data-aos="zoom-in" data-aos-delay="600">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/Customer%20service.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week"></i>
                        </div>
                        <a href="" class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('services/point_of_sale_system.serviceadvantage5')}}</p></h3>
                        </a>
                        <a href="" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <div id="solution" class="col-xl-3 col-md-6 reveal" data-aos="zoom-in" data-aos-delay="600">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/cyber.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week"></i>
                        </div>
                        <a href=" " class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('services/point_of_sale_system.serviceadvantage6')}}</p></h3>
                        </a>
                        <a href=" " class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div id="solution" class="col-xl-3 col-md-6 reveal" data-aos="zoom-in" data-aos-delay="600">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/Customer%20service.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week"></i>
                        </div>
                        <a href="" class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('services/point_of_sale_system.serviceadvantage7')}}</p></h3>
                        </a>
                        <a href="" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div id="solution" class="col-xl-3 col-md-6 reveal" data-aos="zoom-in" data-aos-delay="600">
                <div class="service-item">
                    <div class="img">
                        <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/solutions/Customer%20service.png" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week"></i>
                        </div>
                        <a href="" class="stretched-link">
                            <h3><p  class="lead m-0">{{trans('services/point_of_sale_system.serviceadvantage8')}}</p></h3>
                        </a>
                        <a href="" class="stretched-link"></a>
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