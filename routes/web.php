<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fronted\MasterController;

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

route::controller(MasterController::class)->group(function(){
    route::get('/','index')->name('home');
   
   
    route::get('/service','service')->name('page.service');
  
    route::get('/bitrix24-partner','bitrix24')->name('partner.bitrix24');
    route::get('/respond-partner','respond')->name('partner.respond');

    // Help Center navogation 
    route::get('/faq','faq')->name('help_center.faq');
    route::get('/about','about_us')->name('help_center.about');
    route::get('/support','support')->name('help_center.support');
    route::get('/contact','contacts')->name('help_center.contact');
});

Route::fallback(function () {
    return response()->view('main-pages.error404', [], 404);
});