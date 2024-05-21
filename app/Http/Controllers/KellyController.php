<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KellyController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    public function resume()
    {
        return view('pages.resume');
    }
    public function portfolio()
    {
        return view('pages.portfolio');
    }
    public function about_us()
    {
        return view('pages.about-us');
    }
    public function contact_us()
    {
        return view('pages.contact-us');
    }
    public function services()
    {
        return view('pages.services');
    }
}
