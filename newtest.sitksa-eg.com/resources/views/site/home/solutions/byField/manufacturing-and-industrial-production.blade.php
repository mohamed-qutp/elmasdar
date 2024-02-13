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
                    <h2 class="text-white h1 mb-4">{{ trans('solutions/byField/manufacturing_and_industrial_production.solutiontitle') }}</h2>
                    <ol class="breadcrumb breadcrumb-light justify-content-center">
                        <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
                        <li class="breadcrumb-item active">{{ trans('solutions/byField/manufacturing_and_industrial_production.solutiontitle') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>  
    
  
<section class="section bg-gray-100">
    <div class="container-fluid">
        <div class="row section-heading justify-content-center text-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="col-lg-8 col-xl-6">
            <h5 class="bg-primary-after after-50px pb-3 mb-3">{{ trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationbasetitle') }}</h5>
            <!-- <div class="lead">Mombo is a HTML5 template based on Sass and Bootstrap 5 with modern and creative multipurpose design you can use it as a startups.</div> -->
        </div>
    </div>
    <div class="tab-style-4 mt-3">
        <ul class="nav nav-fill nav-tabs wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" role="tablist" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
        <li class="nav-item" role="presentation">
            <a href="#tab3_sec1_03" data-bs-toggle="tab" class="active" aria-selected="false" role="tab" tabindex="-1"><div class="tb-icon"><i class="bi bi-chat"></i></div><span>{{ trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationone') }}</span></a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#tab3_sec2_03" data-bs-toggle="tab" aria-selected="false" role="tab" class="" tabindex="-1"><div class="tb-icon"><i class="bi bi-tools"></i></div><span>{{ trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationtwo') }}</span></a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#tab3_sec3_03" data-bs-toggle="tab" aria-selected="true" role="tab" class=""><div class="tb-icon"><i class="bi bi-megaphone"></i></div><span>{{ trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationthree') }}</span></a>
        </li>
    </ul>
    <div class="tab-content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
    <!-- start tab content -->
    <div id="tab3_sec1_03" class="tab-size tab-pane fade in active show" role="tabpanel">
    <div class="container-sty">
        <div class="row align-items-center gy-4 pt-5">
            <div class="col-lg-5 pe-xl-8">
                <div class="h2 mb-3" style="margin-left: 80px;">Make smarter business decisions with data analysis</div>
                <p class="lead mb-5" style="margin-left: 80px;"><?php $str = htmlspecialchars_decode(trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationonefeatures'));
                                          echo $str; ?></p>
               
                
            </div>
            <div class="col-lg-7 text-center">
                <img src="/assets/images/solutions/financial-management.png" class="tab-img" title="" alt="">
            </div>
        </div></div></div><!-- end tab content --><!-- start tab content -->
        <div id="tab3_sec2_03" class="tab-size tab-pane fade in" role="tabpanel">
        <div class="container-sty">
            <div class="row align-items-center gy-4 pt-5 flex-row-reverse">
                <div class="col-lg-5 ps-xl-8">
                    <div class="h2 mb-3" style="margin-left: 80px;">Make smarter business decisions with data analysis</div>
                    <p class="lead mb-5" style="margin-left: 80px;"><?php $str = htmlspecialchars_decode(trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationtwofeatures'));
                                          echo $str; ?></p>
                    
                   
                </div>
                <div class="col-lg-7 text-center">
                    <img src="/assets/images/solutions/financial-management.png" class="tab-img" title="" alt="">
                </div></div></div></div><!-- end tab content -->
                <!-- start tab content -->
                <div id="tab3_sec3_03" class="tab-size tab-pane fade in" role="tabpanel">
                <div class="container-sty">
                    <div class="row align-items-center gy-4 pt-5">
                        <div class="col-lg-5 pe-xl-8">
                            <div class="h2 mb-3" style="margin-left: 80px;">Make smarter business decisions with data analysis</div>
                        <p class="lead mb-5" style="margin-left: 80px;"><?php $str = htmlspecialchars_decode(trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationthreefeatures'));
                                          echo $str; ?></p>
                        
                       </div>
                        <div class="col-lg-7 text-center">
                            <img src="/assets/images/solutions/financial-management.png" class="tab-img" title="" alt="">
                        </div>
                    </div></div></div><!-- end tab content -->
                    </div></div></div>
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
                    <h2 class="text-white h1 mb-4"> {{ trans('solutions/byField/manufacturing_and_industrial_production.solutiontitle') }} </h2>
                    <ol class="breadcrumb breadcrumb-light justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active"> {{ trans('solutions/byField/manufacturing_and_industrial_production.solutiontitle') }} </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>  
    
    <section class="section bg-gray-100">
    <div class="container-fluid">
        <div class="row section-heading justify-content-center text-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="col-lg-8 col-xl-6">
            <h5 class="bg-primary-after after-50px pb-3 mb-3">{{ trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationbasetitle') }}</h5>
            <!-- <div class="lead">Mombo is a HTML5 template based on Sass and Bootstrap 5 with modern and creative multipurpose design you can use it as a startups.</div> -->
        </div>
    </div>
    <div class="tab-style-4 mt-3">
        <ul class="nav nav-fill nav-tabs wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" role="tablist" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
        <li class="nav-item" role="presentation">
            <a href="#tab3_sec1_03" data-bs-toggle="tab" class="active" aria-selected="false" role="tab" tabindex="-1"><div class="tb-icon"><i class="bi bi-chat"></i></div><span>{{ trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationone') }}</span></a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#tab3_sec2_03" data-bs-toggle="tab" aria-selected="false" role="tab" class="" tabindex="-1"><div class="tb-icon"><i class="bi bi-tools"></i></div><span>{{ trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationtwo') }}</span></a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#tab3_sec3_03" data-bs-toggle="tab" aria-selected="true" role="tab" class=""><div class="tb-icon"><i class="bi bi-megaphone"></i></div><span>{{ trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationthree') }}</span></a>
        </li>
    </ul>
    <div class="tab-content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
    <!-- start tab content -->
    <div id="tab3_sec1_03" class="tab-size tab-pane fade in active show" role="tabpanel">
    <div class="container-sty">
        <div class="row align-items-center gy-4 pt-5">
            <div class="col-lg-5 pe-xl-8">
                <div class="h2 mb-3" style="margin-left: 80px;">Make smarter business decisions with data analysis</div>
                <p class="lead mb-5" style="margin-left: 80px;"><?php $str = htmlspecialchars_decode(trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationonefeatures'));
                                          echo $str; ?></p>
               
                
            </div>
            <div class="col-lg-7 text-center">
                <img src="/assets/images/solutions/financial-management.png" class="tab-img" title="" alt="">
            </div>
        </div></div></div><!-- end tab content --><!-- start tab content -->
        <div id="tab3_sec2_03" class="tab-size tab-pane fade in" role="tabpanel">
        <div class="container-sty">
            <div class="row align-items-center gy-4 pt-5 flex-row-reverse">
                <div class="col-lg-5 ps-xl-8">
                    <div class="h2 mb-3" style="margin-left: 80px;">Make smarter business decisions with data analysis</div>
                    <p class="lead mb-5" style="margin-left: 80px;"><?php $str = htmlspecialchars_decode(trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationtwofeatures'));
                                          echo $str; ?></p>
                    
                   
                </div>
                <div class="col-lg-7 text-center">
                    <img src="/assets/images/solutions/financial-management.png" class="tab-img" title="" alt="">
                </div></div></div></div><!-- end tab content -->
                <!-- start tab content -->
                <div id="tab3_sec3_03" class="tab-size tab-pane fade in" role="tabpanel">
                <div class="container-sty">
                    <div class="row align-items-center gy-4 pt-5">
                        <div class="col-lg-5 pe-xl-8">
                            <div class="h2 mb-3" style="margin-left: 80px;">Make smarter business decisions with data analysis</div>
                        <p class="lead mb-5" style="margin-left: 80px;"><?php $str = htmlspecialchars_decode(trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationthreefeatures'));
                                          echo $str; ?></p>
                        
                       </div>
                        <div class="col-lg-7 text-center">
                            <img src="/assets/images/solutions/financial-management.png" class="tab-img" title="" alt="">
                        </div>
                    </div></div></div><!-- end tab content -->
                    </div></div></div>
                </section>
@include('site.layouts.ask-for-quotation')
    
</main>
    
    @include('site.layouts.footer')
    @include('site.layouts.js')
@endif