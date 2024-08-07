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
    route::get('/about','about_us')->name('page.about');
    route::get('/404','error404')->name('page.error404');
    route::get('/service','service')->name('page.service');
    route::get('/contact','contacts')->name('page.contact');
    route::get('/support','support')->name('page.support');
    route::get('/bitrix24-partner','bitrix24')->name('partner.bitrix24');
    route::get('/respond-partner','respond')->name('partner.respond');
});

Route::fallback(function () {
    return response()->view('main-pages.error404', [], 404);
});