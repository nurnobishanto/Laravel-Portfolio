<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Company;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        $blogs = Blog::orderBy('created_at','desc')->take(3)->get();
        $companies = Company::all();
        $services = Service::all();
        $testimonials = Testimonial::all();
        $skills = Skill::all()->random(5);
        $p_cats = PortfolioCategory::all();
        $portfolios = Portfolio::all();
        return view('index',compact(['skills','p_cats','portfolios','blogs','companies','services','testimonials']));
    }
    public function contact(){
        return "hellow World";
    }
    public function blog(){
        return "hellow World";
    }
    public function content($slug){
        return "hellow World";
    }
    public function services(){
        return "hellow World";
    }
    public function service($slug){
        return "hellow World";
    }
    public function portfolios(){
        return "hellow World";
    }
    public function portfolio($slug){
        return "hellow World";
    }

}
