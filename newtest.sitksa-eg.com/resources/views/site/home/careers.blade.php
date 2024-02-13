@if(app()->getLocale() == 'ar')
    @include('site.layouts_ar.head')
    <body>
    <div class="wrapper">
    @include('site.layouts_ar.header')
    <main id="blur_body">         
    <section  id="hero" class="section d-flex align-items-center  bg-gray-100">
    <div class="container">
    <div class="row  justify-content-center">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <br/>
                        <h5 data-aos="fade-up"  class="bg-primary-after after-50px pb-3 mb-3">الوظائف</h5>    <br/>                 
                      </div>
                    </div>
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">                 
                <div class="card p-4 " style="border:0 !important;">
                    <div class="card-body p-lg-4">
                        <div class="pb-6">
                        <h5 class="m-0" style="color:#d8dde3;font-family: 'Cairo'">انضم لنا</h5>
                        </div>
                        <form action="#" method="post">
                        @csrf
                        @method('post')
                        @if(session()->has('Add'))
                        <div class="alert alert-success  text-center alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('Add') }}</strong>

                        </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                            <div class="row gy-4">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input id="name" type="text" name="name" placeholder="Rachel Roth" class="form-control">
                                        <!-- <span class="invalid-feedback"></span> -->
                                         <label class="form-label rd-input-label" for="contact-name">الاسم</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input id="email" type="email" name="email" placeholder="name@example.com" class="form-control">
                                            <!-- <span class="invalid-feedback"></span>  -->
                                            <label class="form-label rd-input-label" for="contact-email">البريد الالكترونى</label>
                                        </div>
                                    </div>                                    
                                    
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                             <input type="tel" name="phone" class="form-control" placeholder="+01 888 888 6666" id="phone">
                                             <label class="form-label rd-input-label" for="contact-phone">رقم الجوال</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                        <input type="text" name="positionname" class="form-control" placeholder="Position Name" required="">
                                            <!-- <span class="invalid-feedback"></span>  -->
                                            <label class="form-label rd-input-label" for="contact-email">اسم الوظيفة</label>
                                        </div>
                                    </div>  
                                    <div class="col-sm-6">
                                        <div>      
                                        <label class="form-label rd-input-label" for="contact-email">السيرة الذاتية</label>                                     
                                        <input type="file" name="cv" placeholder="Your CV" class="form-control" required="">
                                        </div>
                                    </div>
                                    
                                   
                                   
                                    <div class="col-12">
                                    <div class="d-flex">
                                <button type="submit" class="btn submit-btn me-3">ارسال</button> 
                                <!-- <button class="btn btn-primary-light">Cancel</button> -->
                            </div>
                                        <div class="snackbars" id="form-output-global">

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>               
          <div data-aos="fade-up" data-aos-delay="600">
          </div>
        </div>
        <div class="col-lg-6 hero-img wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
          <img src="/assets/images/careers3.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
            
</main>
    
    @include('site.layouts_ar.footer')
    @include('site.layouts_ar.js')
    @else
        @include('site.layouts.head')
        <body>
        <div class="wrapper">
        @include('site.layouts.header')  
        <main id="blur_body">
        <section  id="hero" class="section d-flex align-items-center  bg-gray-100">
    <div class="container">
    <div class="row  justify-content-center">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                       <br/><h5 data-aos="fade-up"  class="bg-primary-after after-50px pb-3 mb-3">CAREERS</h5> <br/>                    
                      </div>
                    </div>
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">                 
                <div class="card p-4 " style="border:0 !important;">
                    <div class="card-body p-lg-4">
                        <div class="pb-6">
                        <h5 class="m-0" style="color:#d8dde3;font-family: 'Cairo'">Join Us</h5>
                        </div>
                        <form action="{{route('sendEmail')}}" method="post">
                        @csrf
                        @method('post')
                        @if(session()->has('Add'))
                        <div class="alert alert-success  text-center alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('Add') }}</strong>

                        </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                            <div class="row gy-4">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input id="name" type="text" name="name" placeholder="Rachel Roth" class="form-control">
                                        <!-- <span class="invalid-feedback"></span> -->
                                         <label class="form-label rd-input-label" for="contact-name">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input id="email" type="email" name="email" placeholder="name@example.com" class="form-control">
                                            <!-- <span class="invalid-feedback"></span>  -->
                                            <label class="form-label rd-input-label" for="contact-email">Email Address</label>
                                        </div>
                                    </div>                                    
                                    
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                             <input type="tel" name="phone" class="form-control" placeholder="+01 888 888 6666" id="phone">
                                             <label class="form-label rd-input-label" for="contact-phone">Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                        <input type="text" name="positionname" class="form-control" placeholder="Position Name" required="">
                                            <!-- <span class="invalid-feedback"></span>  -->
                                            <label class="form-label rd-input-label" for="contact-email">Position Name</label>
                                        </div>
                                    </div>  
                                    <div class="col-sm-6">
                                        <div>      
                                        <label class="form-label rd-input-label" for="contact-email">Your CV</label>                                     
                                        <input type="file" name="cv" placeholder="Your CV" class="form-control" required="">
                                        </div>
                                    </div>
                                    
                                   
                                   
                                    <div class="col-12">
                                    <div class="d-flex">
                                <button type="submit" class="btn submit-btn me-3">Submit</button> 
                                <!-- <button class="btn btn-primary-light">Cancel</button> -->
                            </div>
                                        <div class="snackbars" id="form-output-global">

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>               
          <div data-aos="fade-up" data-aos-delay="600">
          </div>
        </div>
        <div class="col-lg-6 hero-img wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;
    padding: 1em;">
          <img src="/assets/images/careers3.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
            
       
</main> 
    
    @include('site.layouts.footer')
    @include('site.layouts.js')
@endif