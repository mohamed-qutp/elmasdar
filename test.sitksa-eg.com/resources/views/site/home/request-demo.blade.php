@if(app()->getLocale() == 'ar')
    @include('site.layouts_ar.head')
    <body>
    <div class="wrapper">
    @include('site.layouts_ar.header')
    
    
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
                    <h2 class="text-white h1 mb-4">Demo Request</h2>
                    <ol class="breadcrumb breadcrumb-light justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Demo Request</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>  

      
       
        <section class="section bg-gray-100">
        <div class="container">
             <div class="row justify-content-center">  
             <div class="col-lg-6 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInLeft;">
                <div class="card shadow p-4 border rounded-3">
                    <div class="card-body bg-body p-lg-4">
                        <div class="pb-6">
                        <h5 class="m-0">You Can Mail Us</h5>
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
                                    
                                    <div class="col-sm-3">
                                    <div>                                           
                                            <select class="form-select">
                                                <!-- <option>Your country</option> -->
                                                <option></option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-floating">
                                             <input type="tel" name="phone" class="form-control" placeholder="+01 888 888 6666" id="phone">
                                             <label class="form-label rd-input-label" for="contact-phone">Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div>                                           
                                            <select class="form-select" id="service" name="service" onchange="showHide(this.value)">
                                                <option>Our Services</option>
                                                <option value="ERP System">ERP System</option>
                                                <option value="POS System">POS System</option>
                                                <option value="Web Development">Web Development</option>
                                                <option value="Mobile Application">Mobile Application</option>
                                                <option value="Web Application">Web Application</option>
                                                <option value="Cyber Security">Cyber Security</option>
                                                <option value="Digital Marketing">Digital Marketing</option>
                                                <option value="Customer Support">Customer Support</option>                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div>                                            
                                            <select class="form-select" id="state" name="state">
                                                <option>Your State</option>
                                                <option>United Kingdom</option>
                                                <option>United States</option>
                                                <option>Canada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" name="city" class="form-control" placeholder="pxdraft" id="city"> 
                                            <label class="form-label rd-input-label" for="contact-company">City</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" name="zip" class="form-control" placeholder="pxdraft" id="zip"> 
                                            <label class="form-label rd-input-label" for="contact-company">ZIP</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating has-error">
                                            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Hi there, I would like to ..." style="height: 150px;display:none"></textarea>
                                            <!-- <span class="invalid-feedback">This field is required.</span>  -->
                                            <label class="form-label rd-input-label" for="contact-message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                    <div class="card-footer d-flex">
                                <button type="submit" class="btn bttn me-3">Send</button> 
                                <!-- <button class="btn btn-primary-light">Cancel</button> -->
                            </div>
                                        <div class="snackbars" id="form-output-global">

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>    
             <!-- <div class="col-lg-1"></div> -->
             <!-- <div class="col-lg-1"></div> -->
          <div class="col-lg-6 wow fadeInRight" data-wow-duration=".4s" data-wow-delay="0.05s" style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.05s; animation-name: fadeInRight;">
              <div class="hover-top bg-cover bg-centerp-2 shadow rounded-3 ms-xl-12 overflow-hidden position-relative" style="background-image: url({{asset('assets/images/ai-1.svg')}});">
              <div class="mask opacity-8 bg-dark"></div>
              <div class="position-relative p-4 pt-8" style="height:315px;">
                 <!-- <p class="mb-2 text-white">02 Mar 2019</p> -->
                 <h5 class="text-white pt-10" style="text-align:center;"><a href="#" class="text-white stretched-link" >Call To Action</a></h5>
                <!-- <p class="text-white text-opacity-65 m-0"></p> -->
                <div class="media border-style top light pt-3 mt-4">
                    <!-- <div class="avatar-sm">
                        <img class="avatar-img rounded-circle" src="../../assets/img/avatar/avatar-1.jpg" title="" alt="">
                    </div> -->
                    <!-- <div class="media-body ps-3 align-self-center"><span class="text-white">Rachel Roth</span></div> -->
                </div>
              </div>
             </div>
         </div>
             
           
                 
                 
         </div>
                                        </div>
                                    </section>
</main>
    
    @include('site.layouts.footer')
    @include('site.layouts.js')
@endif