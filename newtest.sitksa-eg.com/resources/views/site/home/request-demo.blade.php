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
                    <h2 class="text-white h1 mb-4">احصل على عرض سعر</h2>
                    <ol class="breadcrumb breadcrumb-light justify-content-center">
                        <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
                        <li class="breadcrumb-item active">احصل على عرض سعر</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>  

      
       
        <section class="section bg-gray-100 border-top">
        <div class="container">
             <div class="row justify-content-center">  
             <div class="col-lg-12 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInRight;">
                <div class="card p-4 " style="background: rgb(222 226 230 / 8%);border:0 !important;">
                    <div class="card-body p-lg-4">
                    <h5 data-aos="fade-up"  class="bg-primary-after pb-3 mb-3 text-center" style="color: rgb(95 125 161 / 18%);
    text-shadow: 1px 1px 0px rgb(215 212 212 / 35%);
    font-size: 1.2em;">احصل على عرض سعر</h5>    
                        <div class="pb-6">
                       
                        <!-- <h5 class="m-0">You Can Mail Us</h5> -->
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
                                        <input id="fname" type="text" name="fname" placeholder="Rachel Roth" class="form-control">
                                        <!-- <span class="invalid-feedback"></span> -->
                                         <label class="form-label rd-input-label" for="contact-name">الاسم الأول</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input id="lname" type="text" name="lname" placeholder="Rachel Roth" class="form-control">
                                        <!-- <span class="invalid-feedback"></span> -->
                                         <label class="form-label rd-input-label" for="contact-name">الاسم الأخير</label>
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
                                             <input type="tel" id="phone" name="phone" class="form-control" placeholder="+01 888 888 6666" id="phone">
                                             <label class="form-label rd-input-label" for="contact-phone">رقم الموبايل</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                             <input type="tel" id="role" name="role" class="form-control" placeholder="+01 888 888 6666" id="phone">
                                             <label class="form-label rd-input-label" for="contact-phone">الوظيفة</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                             <input type="tel" id="company" name="company" class="form-control" placeholder="+01 888 888 6666" id="phone">
                                             <label class="form-label rd-input-label" for="contact-phone">الشركة</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div>                                           
                                            <select class="form-control">
                                                <option>اختر الدولة</option>
                                                <option></option>
                                                </select>
                                        </div>
                                    </div> 
                                    <div class="col-sm-6">
                                    <label class="form-label rd-input-label">مهتم ب ؟</label>
                                        <div>
                                        <input type="checkbox" id="financials" name="financials" value="Financials">
                                             <label class="form-label rd-input-label" for="financials">الحسابات العامة</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <input type="checkbox" id="inventory" name="inventory" value="Inventory">
                                             <label class="form-label rd-input-label" for="inventory">إدارة المخزون</label><br/>
                                             <input type="checkbox" id="procurement" name="procurement" value="Procurement">
                                             <label class="form-label rd-input-label" for="procurement">فواتير شراء</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             
                                             <input type="checkbox" id="crm" name="crm" value="CRM">
                                             <label class="form-label rd-input-label" for="crm">أنظمة CRM</label><br/>
                                             <input type="checkbox" id="manufacturing" name="manufacturing" value="Manufacturing">
                                             <label class="form-label rd-input-label" for="manufacturing">مجال الإنتاج الصناعي</label>&nbsp;&nbsp;
                                             <input type="checkbox" id="projects" name="projects" value="Projects">
                                             <label class="form-label rd-input-label" for="projects">إدارة المشاريع</label><br/>
                                             <input type="checkbox" id="hr" name="hr" value="HR,Payroll">
                                             <label class="form-label rd-input-label" for="HR,Payroll">إدارة الموارد البشرية</label>
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
                </div>    
             <!-- <div class="col-lg-1"></div> -->
             <!-- <div class="col-lg-1"></div> -->
          
           
                 
                 
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
        <section class="section effect-section bg-cover bg-center bg-no-repeat page-heading" style="background-image: url(/assets/images/request-a-Demo.jpg);">
        <div class="bg-black opacity-6 mask"></div>
        <div class="container position-relative wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white h1 mb-4">Ask for a Quotation</h2>
                    <ol class="breadcrumb breadcrumb-light justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Ask for a Quotation</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>  

      
       
        <section class="section bg-gray-100 border-top">
        <div class="container">
             <div class="row justify-content-center">  
             <div class="col-lg-12 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInLeft;">
                <div class="card border-0 p-4" style="background: rgb(222 226 230 / 8%);border:0 !important;">
                    <div class="card-body p-lg-4">
                    <h5 data-aos="fade-up"  class="bg-primary-after pb-3 mb-3 text-center" style="color: rgb(95 125 161 / 18%);
    text-shadow: 1px 1px 0px rgb(215 212 212 / 35%);
    font-size: 1.2em;">Ask for a Quotation</h5> 
                        <div class="pb-6">
                        <!-- <h5 class="m-0">You Can Mail Us</h5> -->
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
                                        <input id="fname" type="text" name="fname" placeholder="Rachel Roth" class="form-control">
                                        <!-- <span class="invalid-feedback"></span> -->
                                         <label class="form-label rd-input-label" for="contact-name">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input id="lname" type="text" name="lname" placeholder="Rachel Roth" class="form-control">
                                        <!-- <span class="invalid-feedback"></span> -->
                                         <label class="form-label rd-input-label" for="contact-name">Last Name</label>
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
                                             <input type="tel" id="phone" name="phone" class="form-control" placeholder="+01 888 888 6666" id="phone">
                                             <label class="form-label rd-input-label" for="contact-phone">Phone Number</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                             <input type="tel" id="role" name="role" class="form-control" placeholder="+01 888 888 6666" id="phone">
                                             <label class="form-label rd-input-label" for="contact-phone">Your Role</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                             <input type="tel" id="company" name="company" class="form-control" placeholder="+01 888 888 6666" id="phone">
                                             <label class="form-label rd-input-label" for="contact-phone">Your Company</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div>                                           
                                            <select class="form-control">
                                                <option>Select a country</option>
                                                <option></option>
                                                </select>
                                        </div>
                                    </div>      
                                    <div class="col-sm-6">
                                    <label class="form-label rd-input-label">Interested In?</label>
                                        <div>
                                        <input type="checkbox" id="financials" name="financials" value="Financials">
                                             <label class="form-label rd-input-label" for="financials">Financials</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <input type="checkbox" id="inventory" name="inventory" value="Inventory">
                                             <label class="form-label rd-input-label" for="inventory">Inventory</label><br/>
                                             <input type="checkbox" id="procurement" name="procurement" value="Procurement">
                                             <label class="form-label rd-input-label" for="procurement">Procurement</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <input type="checkbox" id="crm" name="crm" value="CRM">
                                             <label class="form-label rd-input-label" for="crm">CRM</label><br/>
                                             <input type="checkbox" id="manufacturing" name="manufacturing" value="Manufacturing">
                                             <label class="form-label rd-input-label" for="manufacturing">Manufacturing</label>&nbsp;&nbsp;&nbsp;
                                             <input type="checkbox" id="projects" name="projects" value="Projects">
                                             <label class="form-label rd-input-label" for="projects">Projects</label><br/>
                                             <input type="checkbox" id="hr" name="hr" value="HR,Payroll">
                                             <label class="form-label rd-input-label" for="HR,Payroll">HR & Payroll</label>
                                        </div>
                                    </div>           
                                   
                                    <div class="col-12">
                                    <div class="d-flex">
                                <button type="submit" class="btn me-3 submit-btn">Submit</button> 
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
      
             
           
                 
                 
         </div>
                                        </div>
                                    </section>
</main>
    
    @include('site.layouts.footer')
    @include('site.layouts.js')
@endif