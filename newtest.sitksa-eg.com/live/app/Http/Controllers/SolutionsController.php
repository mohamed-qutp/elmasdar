<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SolutionsController extends Controller
{
    public function realEstate()
    {
      return view('site.home.solutions.byField.real-estate');
    }
    public function constructionAndContracting()
    {
      return view('site.home.solutions.byField.construction-and-contracting');
    }
    public function manufacturingAndIndustrialProduction()
    {
      return view('site.home.solutions.byField.manufacturing-and-industrial-production');
    }
    public function educationalInstitutions()
    {
      return view('site.home.solutions.byField.educational-institutions');
    }
    public function rentalOfVehicles()
    {
      return view('site.home.solutions.byField.rental-of-vehicles');
    }
    public function restaurantsAndCatering()
    {
      return view('site.home.solutions.byField.restaurants-and-catering');
    }
    public function financialManagement()
    {
      return view('site.home.solutions.byCompanyDepartment.financial-management');
    }
    public function humanResourcesManagement()
    {
      return view('site.home.solutions.byCompanyDepartment.human-resources-management');
    }
    public function supplyChainManagement()
    {
        return view('site.home.solutions.byCompanyDepartment.supply-chain-management');
    }
    public function inventoryManagement()
    {
        return view('site.home.solutions.byCompanyDepartment.inventory-management');
    }
    public function projectManagementAndWorkflow()
    {
        return view('site.home.solutions.byCompanyDepartment.project-management-and-workflow');
    }
    public function tasksManagement()
    {
        return view('site.home.solutions.byCompanyDepartment.task-management-system');
    }
}
