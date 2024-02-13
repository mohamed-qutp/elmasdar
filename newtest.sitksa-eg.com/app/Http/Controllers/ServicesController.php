<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ServicesController extends Controller
{
    public function erpSystemsService()
    {
      return view('site.home.erp-systems');
    }
    public function pos()
    {
      return view('site.home.point-of-sale');
    }
    public function webDevelopment()
    {
      return view('site.home.web-development');
    }
    public function mobileApplications()
    {
      return view('site.home.mobile-applications');
    }
    public function webApplications()
    {
      return view('site.home.web-applications');
    }
    public function cyberSecurity()
    {
      return view('site.home.cyber-security');
    }
    public function digitalMarketing()
    {
      return view('site.home.digital-markiting');
    }
    public function technicalSupport()
    {
      return view('site.home.customer-support');
    }
}
