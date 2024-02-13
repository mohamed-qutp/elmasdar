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
    <div id="video" class="basic-2">
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
  <section id="hero" class="hero bg-gray-100">
        <div class="container">
        <div class="container">
        <div class="row  justify-content-center section-heading">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h3 class="bg-primary-after after-50px pb-3 mb-3">{{ trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationbasetitle') }}</h3>                       
                      </div>
                    </div>
            <div class="row wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
            <div class="col-lg-12 col-xl-12">          
                <h4 class="h4 mb-3">{{ trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationone') }}</h4>
                <p class="lead mb-3"><?php $str = htmlspecialchars_decode(trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationonefeatures'));
                                          echo $str; ?></p>
                  <h4 class="h4 mb-3">{{ trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationtwo') }}</h4>
                <p class="lead mb-3"><?php $str = htmlspecialchars_decode(trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationtwofeatures'));
                                          echo $str; ?></p>
                <h4 class="h4 mb-3">{{ trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationthree') }}</h4>
                <p class="lead mb-3"><?php $str = htmlspecialchars_decode(trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationthreefeatures'));
                                          echo $str; ?></p>                          
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
                    <h2 class="text-white h1 mb-4"> {{ trans('solutions/byField/manufacturing_and_industrial_production.solutiontitle') }} </h2>
                    <ol class="breadcrumb breadcrumb-light justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active"> {{ trans('solutions/byField/manufacturing_and_industrial_production.solutiontitle') }} </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>  
    <div id="video" class="basic-2">
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
    <section id="hero" class="hero d-flex bg-gray-100">
        <div class="container">
        <div class="row  justify-content-center section-heading">
                        <div class="col-lg-8 col-xl-7 text-center wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h3 class="bg-primary-after after-50px pb-3 mb-3">{{ trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationbasetitle') }}</h3>                       
                      </div>
                    </div>
            <div class="row wow fadeInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
            <div class="col-lg-12 col-xl-12">           
                <h4 class="h4 mb-3">{{ trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationone') }}</h4>
                <p class="lead mb-3"><?php $str = htmlspecialchars_decode(trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationonefeatures'));
                                          echo $str; ?></p>
                  <h4 class="h4 mb-3">{{ trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationtwo') }}</h4>
                <p class="lead mb-3"><?php $str = htmlspecialchars_decode(trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationtwofeatures'));
                                          echo $str; ?></p>
                <h4 class="h4 mb-3">{{ trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationthree') }}</h4>
                <p class="lead mb-3"><?php $str = htmlspecialchars_decode(trans('solutions/byField/manufacturing_and_industrial_production.solutionclassificationthreefeatures'));
                                          echo $str; ?></p>                          
            </div>
        </div>   

</div>
</section>
@include('site.layouts.ask-for-quotation')
    
</main>
    
    @include('site.layouts.footer')
    @include('site.layouts.js')
@endif