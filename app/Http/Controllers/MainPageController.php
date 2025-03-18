<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Models\Country;

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



    public function jobListing(Request $request)
    {
        // Get the location filter from the request
        $countryId = $request->input('country_id');

        // Start building the query
        $query = Job::orderBy('created_at', 'asc');

        // Apply the location filter if it's provided
        if ($countryId) {
            $query->where('country_id', $countryId);
        }

        // Paginate the results
        $jobs = $query->paginate(20);

        // Fetch all locations for the filter dropdown
        $countries = Country::all();

        // Pass the jobs and locations to the view
        return view('main-pages.job-listing', ['jobs' => $jobs, 'countries' => $countries]);
    }


    //work-visa
    public function workVisa()
    {
        return view('main-pages.work-visa');
    }



}
