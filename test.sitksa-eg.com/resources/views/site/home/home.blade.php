@if(app()->getLocale() == 'ar')
@include('site.layouts_ar.head')
<body id="blur_body">
    <div class="wrapper">
@include('site.layouts_ar.header')
@include('site.layouts_ar.body')
@include('site.layouts_ar.footer')
@include('site.layouts_ar.js')
@else
    @include('site.layouts.head')
    <body>
        <div class="wrapper">
    @include('site.layouts.header')
    @include('site.layouts.body')
    @include('site.layouts.footer') 
    @include('site.layouts.js')
@endif