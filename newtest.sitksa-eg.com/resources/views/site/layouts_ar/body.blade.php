<main id="blur_body"> 
<!--<section id="hero1" class="section hero1 bg-gray-100">-->
<!--    <div class="container position-relative">-->
<!--      <div class="row gy-5 aos-init aos-animate" data-aos="fade-in">-->
<!--        <div class="col-lg-5 order-lg-1 order-2 d-flex flex-column align-items-start justify-content-center text-left caption mobile-pt">-->
<!--          <img src="/assets/images/hero-img.png" class="img-fluid rounded-4 mb-4" alt="">-->
<!--        </div>-->
<!--        <div class="col-lg-7 order-lg-2 order-1 d-flex flex-column align-items-start justify-content-center text-left caption">-->
<!--          <h2 data-aos="fade-out" data-aos-delay="100" class="aos-init aos-animate">Information Technology<br> &amp; <span class="circle">It Solutions.</span></h2>-->
<!--          <h3 data-aos="fade-out" data-aos-delay="500" class="aos-init aos-animate">Our business is helping you grow your business</h3>-->
<!--          <div class="d-flex aos-init aos-animate" data-aos-delay="1000" data-aos="zoom-out">-->
            <!-- <a href="#about" class="btn-get-started">Ask For a Quotation</a> -->
<!--            <a href="https://www.youtube.com/watch?v=5KygwcZ545U&amp;ab_channel=JonathanMickelson" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle" style="direction:rtl;"></i><span>Watch-->
<!--                Video</span></a>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </section>    -->
<section class="main-hero">
    <div id="wrap">
   <video id="back" src=" {{asset('assets/home.mp4')}}" loop autoplay muted playsinline style="width:-moz-available;"></video>
   <span class="main-text-1">
        <a href="https://www.linkedin.com/company/sitksasoftware/" target="_blank" class="btn"></a>
   </span>
   <span class="main-text-2">
       <a href="https://www.instagram.com/sitksa.software/" class="btn" target="_blank"></a>
   </span>
   <span class="main-text-3">
       <a href="https://twitter.com/sitksasoftware" class="btn" target="_blank"></a>
   </span>
   <span class="main-text-4">
        <a href="https://www.facebook.com/sitksasoftware" class="btn" target="_blank"></a>
   </span>
   <span class="main-text-5">
       <a href="#" class="btn"></a>
   </span>
   <span class="main-text-6">
       <a href="https://www.tiktok.com/@sit.ksa" class="btn" target="_blank"></a>
   </span>
   <span class="main-text-7">
       <a href="https://www.youtube.com/@sitksa.software" class="btn" target="_blank"></a>
   </span>
   </div>
</section>
                 
  <section class="section bg-gray-100 border-top" id="two" style="background-image: url('/assets/images/background1.jpg')">
                    <div class="container pb-10">
                      <div class="row justify-content-center section-heading">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h6 class="bg-primary-after after-50px pb-3 mb-3" style="font-size: 18px;">{{ trans('home.ourservices') }}</h6>
                        <!-- <h6 class="text-primary mb-3">What We provide</h6> -->
                        <!-- <h3 class="h2 mb-0">See everything what we can do!</h3> -->
                      </div>
                    </div>
                    <div class="row gy-4">
                      <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.05s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.05s; animation-name: fadeInUp;">
                      
                      <div class="card shadow-lg hover-top">
                      <a href="#two" class="open-button" id="1">
                        <div class="card-body text-center py-0">       

                          <!--<div class="icon-xl text-white rounded-circle mb-5">-->
                           <img src="{{asset('assets/images/home-icons/ERP.png')}}" class="zoom-thumbnail"/> 
                          <!--</div>-->
                          
                           <!-- <span class="link-effect">Read More</span>  -->
                            
                          </div>
                          </a>
                        </div>
                        <div class="mt-3 py-3 text-center">
                            <h5 class="h6 mb-0">{{ trans('home.erpsystem') }}</h5>
                        </div>
                      </div>
                      
                      <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.05s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.05s; animation-name: fadeInUp;">
                      <div class="card shadow-lg hover-top">
                      <a href="#two" class="open-button" id="2">
                        <div class="card-body text-center py-0">
                          <!--<div class="icon-xl text-white rounded-circle mb-5">-->
                          <img src="{{asset('assets/images/home-icons/pos.png')}}" class="zoom-thumbnail"/>
                          <!--</div>-->
                          <!-- <span class="link-effect">Read More</span> -->
                        </div>
                        </a>
                      </div>
                      <div class="mt-3 py-3 text-center">
                       <h5 class="h6 mb-0">{{ trans('home.possystem') }}</h5>
                       </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.05s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.05s; animation-name: fadeInUp;">
                    <div class="card shadow-lg hover-top">
                    <a href="#two" class="open-button" id="3">
                      <div class="card-body text-center py-0">
                        <!--<div class="icon-xl text-white rounded-circle mb-5">-->
                        <img src="{{asset('assets/images/home-icons/wep development.png')}}" class="zoom-thumbnail"/>
                        <!--</div>-->
                        
                        <!-- <span class="link-effect">Read More</span> -->
                      </div>
                      </a>
                    </div>
                    <div class="mt-3 py-3 text-center">
                    <h5 class="h6 mb-0">{{ trans('home.webdevelopment') }}</h5>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.05s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.05s; animation-name: fadeInUp;">
                  <div class="card shadow-lg hover-top">
                  <a href="#two" class="open-button" id="4">
                    <div class="card-body text-center py-0">
                      <!--<div class="icon-xl text-white rounded-circle mb-5">-->
                      <img src="{{asset('assets/images/home-icons/Mobile App.png')}}" class="zoom-thumbnail"/>
                      <!--</div>-->
                      <!-- <span class="link-effect">Read More</span> -->
                    </div>
                    </a>
                  </div>
                  <div class="mt-3 py-3 text-center">
                   <h5 class="h6 mb-0">{{ trans('home.mobileapplication') }}</h5>
                   </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="card shadow-lg hover-top">
                <a href="#two" class="open-button" id="5">
                  <div class="card-body text-center py-0">
                    <!--<div class="icon-xl text-white rounded-circle mb-5">-->
                    <img src="{{asset('assets/images/home-icons/WEP APPLICATION.png')}}" class="zoom-thumbnail"/>
                    <!--</div>-->
                    <!-- <span class="link-effect">Read More</span> -->
                  </div>
                  </a>
                </div>
                <div class="mt-3 py-3 text-center">
                <h5 class="h6 mb-3">{{ trans('home.webapplication') }}</h5>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="card shadow-lg hover-top">
              <a href="#two" class="open-button" id="6">
                <div class="card-body text-center py-0">
                  <!--<div class="icon-xl text-white rounded-circle mb-5">-->
                  <img src="{{asset('assets/images/home-icons/cyber secu.png')}}" class="zoom-thumbnail"/>
                  <!--</div>-->
                  <!-- <span class="link-effect">Read More</span> -->
                </div>
                </a>
              </div>
              <div class="mt-3 py-3 text-center">
              <h5 class="h6 mb-3">{{ trans('home.cybersecurity') }}</h5>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="card shadow-lg hover-top">
            <a href="#two" class="open-button" id="7">
              <div class="card-body text-center py-0">
                <!--<div class="icon-xl text-white rounded-circle mb-5">-->
                <img src="{{asset('assets/images/home-icons/Digital mar.png')}}" class="zoom-thumbnail"/>
                <!--</div>-->
                <!-- <span class="link-effect">Read More</span> -->
              </div>
              </a>
            </div>
            <div class="mt-3 py-3 text-center">
             <h5 class="h6 mb-3">{{ trans('home.digitalmarketing') }}</h5>
             </div>
          </div>
          <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
          <div class="card shadow-lg hover-top">
          <a href="#two" class="open-button" id="8">
            <div class="card-body text-center py-0">
              <!--<div class="icon-xl text-white rounded-circle mb-5">-->
              <img src="{{asset('assets/images/home-icons/Technical support.png')}}" class="zoom-thumbnail"/>
              <!--</div>-->
              <!-- <span class="link-effect">Read More</span> -->
            </div>
            </a>
          </div>
          <div class="mt-3 py-3 text-center">
          <h5 class="h6 mb-3">{{ trans('home.customersupport') }}</h5>
          </div>
          </div></div>
       

                                
        </div>
</section>
 <section class="section" style="padding-top: 0.125rem;padding-bottom: 0.125rem;">
     <!--<div class="container">-->
         <!--<div class="row">-->
             <!--<div class="col-sm-12 col-lg-12">-->
                 <img src="/assets/images/shape-1.png"  alt=""/>
             <!--</div>-->
         <!--</div>-->
     <!--</div>-->
 </section>
<section class="section" id="three" style="background-image: url('/assets/images/background1.jpg')">
  <div class="container wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
  <div class="row section-heading justify-content-center text-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;"><div class="col-lg-8 col-xl-6"><h6 class="bg-primary-after after-50px pb-3 mb-3" style="font-size: 18px;">{{ trans('home.ourclients') }}</h6></div></div>
  <!-- <h6 class="text-center mb-4">Trusted by content creators across the world</h6> -->
  <div class="swiper swiper-container swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden" data-swiper-options="{
                                  &quot;slidesPerView&quot;: 3,
                                  &quot;spaceBetween&quot;: 24,
                                  &quot;autoplay&quot;: true,  
                                  &quot;autoplaySpeed&quot;: 1500,                                                            
                                  &quot;breakpoints&quot;: {
                                    &quot;650&quot;: {
                                      &quot;slidesPerView&quot;: 4
                                    },
                                    &quot;991&quot;: {
                                      &quot;slidesPerView&quot;: 4
                                    },
                                    &quot;1024&quot;: {
                                      &quot;slidesPerView&quot;: 6
                                    }
                                  }
                                }">
                                <div class="swiper-wrapper" id="swiper-wrapper-5b5b2770389dc9ca" aria-live="polite" style="transform: translate3d(-200px, 0px, 0px); transition-duration: 0ms;">
                                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 8" style="width: 176px; margin-right: 24px;">
                                <div class="card card-body">
                                  <a href="#"><img src="/assets/images/clients/1640774095.edu.png" title="" alt=""></a>
                                </div>
                              </div>
                              <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 8" style="width: 176px; margin-right: 24px;">
                              <div class="card card-body">
                                <a href="#"><img src="/assets/images/clients/1639565076.amana.png" title="" alt=""></a>
                              </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 8" style="width: 176px; margin-right: 24px;"><div class="card card-body">
                              <a href="#"><img src="/assets/images/clients/1640779174.islamic-uni.png" title="" alt=""></a>
                            </div>
                          </div>
                          <div class="swiper-slide" role="group" aria-label="4 / 8" style="width: 176px; margin-right: 24px;">
                          <div class="card card-body">
                            <a href="#"><img src="/assets/images/clients/1640774133.gaca.png" title="" alt=""></a>
                          </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="5 / 8" style="width: 176px; margin-right: 24px;">
                        <div class="card card-body">
                          <a href="#"><img src="/assets/images/clients/1640779270.Taiba-uni.png" title="" alt=""></a>
                        </div>
                      </div>
                      <div class="swiper-slide" role="group" aria-label="6 / 8" style="width: 176px; margin-right: 24px;">
                      <div class="card card-body">
                        <a href="#"><img src="/assets/images/clients/train.png" title="" alt=""></a>
                      </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="7 / 8" style="width: 176px; margin-right: 24px;">
                    <div class="card card-body">
                      <a href="#"><img src="/assets/images/clients/1640779290.tibah.png" title="" alt=""></a>
                    </div>
                  </div>
                  <div class="swiper-slide" role="group" aria-label="8 / 8" style="width: 176px; margin-right: 24px;">
                  <div class="card card-body">
                        <a href="#"><img src="/assets/images/clients/Jooten-01.png" title="" alt=""></a> 
                      </div>
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span> 
              </div></div> 
                              
                              </section>
                               <section class="section" style="background-image: url('/assets/images/map-with-patern.png');padding-top: 3.25rem;background-size:100% 100%;">
                                     <div class="container">
                                         <div class="row">
                                             <div class="col-sm-5 col-lg-5">
                                                 
                                             </div>
                                             <div class="col-sm-7 col-lg-7">
                                                <div class="row section-heading justify-content-center text-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;"><div class="col-lg-8 col-xl-6"><h6 class="bg-primary-after after-50px pb-3 mb-3" style="font-size: 18px;">{{ trans('home.ourlocations') }}</h6></div></div>
                                                 <form>
                                                     
                                                         <div class="form-group row">
                                                             <label for="inputEmail3" class="col-sm-2 col-form-label label-txt">المدينة</label>
                                                             <div class="col-sm-10">
                                                              <input type="text" class="form-control input-form-txt">
                                                              </div>
                                                          </div>
                                                      <div class="form-group row">
                                                             <label for="inputEmail3" class="col-sm-2 col-form-label label-txt">الرياض</label>
                                                             <div class="col-sm-10">
                                                              <input type="text" class="form-control input-form-txt">
                                                              </div>
                                                          </div>
                                                          <div class="form-group row">
                                                             <label for="inputEmail3" class="col-sm-2 col-form-label label-txt">الدمام</label>
                                                             <div class="col-sm-10">
                                                              <input type="text" class="form-control input-form-txt">
                                                              </div>
                                                          </div>
                                                          <div class="form-group row">
                                                             <label for="inputEmail3" class="col-sm-2 col-form-label label-txt">جدة</label>
                                                             <div class="col-sm-10">
                                                              <input type="text" class="form-control input-form-txt">
                                                              </div>
                                                          </div>
                                                      
                                                        
                                                 </form>
                                             </div>
                                         </div>
                                        
                                     </div>
     
                               </section>
                                <!-- <div class="justify-content-center">
                      
                        <h6 class="text-primary mb-3">Our <b>Clients</b></h6>
                         <h4 class="textt mb-3">Our Clients</h4> -->
                      <!-- </div>
                   
                               
   <hr>
                              
   <section class="logos-slider slider">
   
      <div class="slide"><img src="/assets/images/airbnb.svg" title="" alt=""></div>
      <div class="slide"><img src="/assets/images/spotify.svg" title="" alt=""></div>
      <div class="slide"><img src="/assets/images/paypal.svg" title="" alt=""></div>
      <div class="slide"><img src="/assets/images/slack.svg" title="" alt=""></div>
      <div class="slide"><img src="/assets/images/spotify.svg" title="" alt=""></div>
      <div class="slide"><img src="/assets/images/airbnb.svg" title="" alt=""></div>
      <div class="slide"><img src="/assets/images/amazon.svg" title="" alt=""></div>
       <div class="slide"><img src="https://logopond.com/logos/dc5cc8314658dcbce4536affc4772f78.png"></div> -->
   <!-- </section>
  <hr> -->
                              </main>
                              <div class="modal header-blur-light" id="modal" style="background-color:rgb(244 244 244 / 64%) !important;">          
          <div class="modal-header">                                                
                                     <h2 id="model_title"></h2>  
           <a href="#" class="bt-close close-button" aria-hidden="true">&times;</a>
          </div>
    <div class="modal-body">
                                                                                       
                                  <p id="modal_content"></p>                                                                   
</div>
                                  
                                </div>