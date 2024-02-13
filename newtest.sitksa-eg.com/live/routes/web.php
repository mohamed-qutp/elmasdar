<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SolutionsController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('demo-request', [DemoController::class,'demoRequest'])->name('demo-request');
Route::post('sendEmail', [DemoController::class,'sendEmail'])->name('sendEmail'); 
Route::get('services/erp-systems', [ServicesController::class,'erpSystemsService'])->name('erp-systems');
Route::get('services/pos', [ServicesController::class, 'pos'])->name('pos');
Route::get('services/web-development', [ServicesController::class, 'webDevelopment'])->name('web-development');
Route::get('services/mobile-applications', [ServicesController::class, 'mobileApplications'])->name('mobile-applications');
Route::get('services/web-applications', [ServicesController::class, 'webApplications'])->name('web-applications');
Route::get('services/cyber-security', [ServicesController::class, 'cyberSecurity'])->name('cyber-security');
Route::get('services/digital-marketing', [ServicesController::class, 'digitalMarketing'])->name('digital-marketing');
Route::get('services/technical-support', [ServicesController::class, 'technicalSupport'])->name('technical-support');


Route::get('solutions/real-estate', [SolutionsController::class, 'realEstate'])->name('real-estate');  
Route::get('solutions/construction-and-Contracting', [SolutionsController::class, 'constructionAndContracting'])->name('construction-and-Contracting');
Route::get('solutions/manufacturing-and-industrial-production', [SolutionsController::class, 'manufacturingAndIndustrialProduction'])->name('manufacturing-and-industrial-production');
Route::get('solutions/educational-institutions', [SolutionsController::class, 'educationalInstitutions'])->name('educational-institutions');
Route::get('solutions/rental-of-vehicles', [SolutionsController::class, 'rentalOfVehicles'])->name('rental-of-vehicles');
Route::get('solutions/restaurants-and-catering', [SolutionsController::class, 'restaurantsAndCatering'])->name('restaurants-and-catering');
Route::get('solutions/financial-management', [SolutionsController::class, 'financialManagement'])->name('financial-management');
Route::get('solutions/human-resources-management', [SolutionsController::class, 'humanResourcesManagement'])->name('human-resources-management');
Route::get('solutions/supply-chain-management', [SolutionsController::class, 'supplyChainManagement'])->name('supply-chain-management');
Route::get('solutions/inventory-management', [SolutionsController::class, 'inventoryManagement'])->name('inventory-management');
Route::get('solutions/project-management-and-workflow', [SolutionsController::class, 'projectManagementAndWorkflow'])->name('project-management-and-workflow');
Route::get('solutions/tasks-management', [SolutionsController::class, 'tasksManagement'])->name('tasks-management');
});
