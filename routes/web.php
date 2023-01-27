<?php

use App\Models\Blog;
use App\Models\Company;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
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

Route::get('/', function () {
    $blogs = Blog::orderBy('created_at','desc')->take(3)->get();
    $companies = Company::all();
    $services = Service::all();
    $testimonials = Testimonial::all();
    $skills = Skill::all()->random(5);
    $p_cats = PortfolioCategory::all();
    $portfolios = Portfolio::all();
    return view('index',compact(['skills','p_cats','portfolios','blogs','companies','services','testimonials']));
});
