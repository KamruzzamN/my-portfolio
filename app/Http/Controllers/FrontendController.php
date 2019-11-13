<?php

namespace App\Http\Controllers;

use App\About;
use App\Header;
use App\Service;
use App\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    

    public function index()
    {
        $header= Header::take(1)->latest()->first();
        $about = About::take(1)->latest()->first();
        $services = Service::take(6)->latest()->get();
        $testimonials = Testimonial::take(6)->latest()->get();
        return view('frontend.index',[
            'header' => $header,
            'about' => $about,
            'services' => $services,
        ]);
    }
}
