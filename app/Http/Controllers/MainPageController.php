<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class MainPageController extends Controller
{

    // Home
    // About Us
    // Services
    // Terms & Conditions
    // Privacy Policy
    // Blog
    // Contact Us

    //home

    public function home()
    {
        return view('main-pages.home');
    }

    //about-us

    public function aboutUs()
    {
        return view('main-pages.about-us');
    }

    //services

    public function services()
    {
        return view('main-pages.services');
    }

    //terms

    public function terms()
    {
        return view('main-pages.terms');
    }

    //privacy-policy

    public function privacyPolicy()
    {
        return view('main-pages.privacy-policy');
    }

    //blog

    public function blog()
    {
        return view('main-pages.blog');
    }

    //contact-us

    public function contactUs()
    {
        return view('main-pages.contact-us');
    }

    public function jobListing()
    {
        //get all jobs sorted by latest and paginate 60
    
        $jobs = Job::orderBy('created_at', 'asc') // Sort by created_at in descending order (latest first)
            ->paginate(60); // Paginate the results, displaying 60 jobs per page
    
        return view('main-pages.job-listing', ['jobs' => $jobs]);
    }
    
    

    //work-visa
    public function workVisa()
    {
        return view('main-pages.work-visa');
    }



}
