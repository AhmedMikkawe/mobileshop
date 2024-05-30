<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use App\Models\Service;
use App\Models\Social;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $promotions = Promotion::all();
        $socials = Social::all();
        $services = Service::all();
        $testimonials = Testimonial::all();
        return view('pages.home', ['promotions' => $promotions, 'socials' => $socials, 'services' => $services, 'testimonials' => $testimonials]);
    }
    public function service($id)
    {
        $service = Service::find($id);
        return view('pages.service', ['service' => $service]);
    }
}
