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
                    <h2 class="text-white h1 mb-4">تطبيقات الجوال</h2>
                    <ol class="breadcrumb breadcrumb-light justify-content-center">
                        <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
                        <li class="breadcrumb-item active">تطبيقات الجوال</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>  
    <section class="basic-2 align-items-center"> 
    <div id="video">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=fLCjQJCekTs" data-effect="fadeIn">                                
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
    <section  id="hero" class="section hero d-flex align-items-center  bg-gray-100">
    <div class="container">
    <div class="row  justify-content-center">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h3 data-aos="fade-up"  class="bg-primary-after after-50px pb-3 mb-3"> {{ trans('services/mobile_applications.servicetitle') }} </h3>                     
                      </div>
                    </div>
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">         
          <h2 data-aos="fade-up" data-aos-delay="400" class="text-jsutify"> {{ trans('services/mobile_applications.servicedescription') }}</h2>
          <div data-aos="fade-up" data-aos-delay="600">
          </div>
        </div>
        <div class="col-lg-6 hero-img fadeInUp" data-aos="zoom-out" data-aos-delay="200" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
          <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/Technological_solutions/Data_center/d1.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
  <section id="clients" class="section clients bg-gray-100 header-blur-light">
      <div class="container fadeInUp" data-aos="fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
      <div class="row  justify-content-center">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h3 data-aos="fade-up"  class="bg-primary-after after-50px pb-3 mb-3"> {{ trans('services/mobile_applications.logostitle') }}</h3>                     
                      </div>
                    </div>
        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/26.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/27.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/28.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/29.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/30.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/25.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/1.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/2.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/3.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/4.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/6.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/7.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/8.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/9.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/10.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/11.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/12.jpg" class="img-fluid" alt="">
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
                    <h2 class="text-white h1 mb-4">Mobile Applications</h2>
                    <ol class="breadcrumb breadcrumb-light justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Mobile Applications</li>
                    </ol>
                </div>
            </div>
        </div>
    </section> 
    <section class="basic-2 align-items-center"> 
    <div id="video" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=fLCjQJCekTs" data-effect="fadeIn">                                
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
    <section  id="hero" class="section hero d-flex align-items-center  bg-gray-100">
    <div class="container">
    <div class="row  justify-content-center">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h3 data-aos="fade-up"  class="bg-primary-after after-50px pb-3 mb-3"> {{ trans('services/mobile_applications.servicetitle') }} </h3>                     
                      </div>
                    </div>
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">          
          <h2 data-aos="fade-up" data-aos-delay="400" class="text-jsutify"> {{ trans('services/mobile_applications.servicedescription') }}</h2>
          <div data-aos="fade-up" data-aos-delay="600">
          </div>
        </div>
        <div class="col-lg-6 hero-img fadeInUp" data-aos="zoom-out" data-aos-delay="200" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;"> 
          <img src="https://alsaifco-ksa.com/Dashboard/assets/Front/assets/img/Technological_solutions/Data_center/d1.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
  <section id="clients" class="section clients bg-gray-100 header-blur-light">
      <div class="container fadeInUp" data-aos="fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
      <div class="row  justify-content-center">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h3 data-aos="fade-up"  class="bg-primary-after after-50px pb-3 mb-3"> {{ trans('services/mobile_applications.logostitle') }}</h3>                     
                      </div>
                    </div>
        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/26.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/27.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/28.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/29.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/30.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/25.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/1.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/2.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/3.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/4.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/6.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/7.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/8.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/9.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/10.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/11.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://bareeqksa.com/assets/img/logo/12.jpg" class="img-fluid" alt="">
          </div>        

        </div>
        

      </div>
    </section>
   
@include('site.layouts.ask-for-quotation')
    
</main>
    
    @include('site.layouts.footer')
    @include('site.layouts.js')
@endif