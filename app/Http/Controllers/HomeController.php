<?php
namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        $services = Service::where('is_active', true)->get();
        
        return view('frontend.pages.home', compact('settings', 'services'));
    }
    
    public function about()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        return view('frontend.pages.about', compact('settings'));
    }
    
    public function services()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        $services = Service::where('is_active', true)->get();
        return view('frontend.pages.services', compact('settings', 'services'));
    }
    
    public function contact()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        return view('frontend.pages.contact', compact('settings'));
    }
}