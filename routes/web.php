<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/contact',[WebsiteController::class,'contact'])->name('contact');
Route::get('/blog',[WebsiteController::class,'blog'])->name('blog');
Route::get('/services',[WebsiteController::class,'services'])->name('services');
Route::get('/service/{slug}',[WebsiteController::class,'services'])->name('service');
Route::get('/portfolios',[WebsiteController::class,'portfolios'])->name('portfolios');
Route::get('/portfolio/{slug}',[WebsiteController::class,'portfolios'])->name('portfolio');
Route::post('/contact-store',[ContactController::class,'contact_store']);
Route::get('/{slug}',[WebsiteController::class,'content'])->name('content');

Route::get('migrate',function (){
    Artisan::call('migrate:fresh --seed');
    return Artisan::output();
});
