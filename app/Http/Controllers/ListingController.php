<?php

namespace App\Http\Controllers;
use App\Models\Listing;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::all();
        // dd($listings);
        // $videoLink = $listings->youtube_link; // spelling matches your controller
        // parse_str(parse_url($videoLink, PHP_URL_QUERY), $queryParams);
        // $videoId = $queryParams['v'] ?? null;
        return view('listing.index', compact('listings'));
    }

    public function allSales()
    {
        $listings = Listing::where('category', 'Sales')->get();
        return view('listing.all_sales', compact('listings'));
    }
    public function allRent()
    {
        $listings = Listing::where('category', 'Rent')->get();
        return view('listing.all_rent', compact('listings'));
    }
    public function allRentToOwn()
    {
        $listings = Listing::where('category', 'Rent to Own')->get();
        return view('listing.all_rent_to_own', compact('listings'));
    }
    public function allProject()
    {
        $listings = Listing::where('category', 'Project')->get();
        return view('listing.all_project', compact('listings'));
    }

    public function home()
    {
        $listings = Listing::all();
        $sales_listing = Listing::where('category', 'Sales')->limit(4)->get();
        $rent_listing = Listing::where('category', 'Rent')->limit(4)->get();
        $rent_to_own_listing = Listing::where('category', 'Rent to Own')->limit(4)->get();
        $project_listing = Listing::where('category', 'Project')->limit(5)->get(); 

        // dd($sales_listing);
        return view('home', compact('listings', 'sales_listing', 'rent_listing', 'rent_to_own_listing', 'project_listing'));
    }

    
}
