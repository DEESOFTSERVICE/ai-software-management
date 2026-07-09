<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\HolidayDestination;
use App\Models\HolidayPackage;
use App\Models\HolidayTheme;
use App\Models\TrackingSetting;
use Illuminate\Http\Request;

class SitemapController extends Controller
{

    public function index()
    {
        $data['routeList'] = [
            route('pages.sitemap'),
            route('blogs.sitemap'),
        ];

        
        return response()->view('sitemaps.main', $data)->header('Content-Type', 'application/xml');
    }
    public function blogsSitemap()
    {
        $data['blogs'] = Blog::where('status', 'Active')->get();
        $data['category'] = Category::where('domain_id', $this->currentDomainId)->orderBy('category_name', 'asc')->get();
        return response()->view('sitemaps.index', $data)->header('Content-Type', 'application/xml');
    }

     public function pagesSitemap()
    {
       $data['routeList'] = [
            route('index'),
            route('about'),
            route('contact'),
        ];
        return response()->view('sitemaps.pages', $data)->header('Content-Type', 'application/xml');
    }

    /*public function holidaySitemap()
    {
        $data['holidayTheme'] = HolidayTheme::where('status', 'Active')->orderBy('theme_name', 'asc')->get();
        $data['holidayDestination'] = HolidayDestination::where('status', 'Active')->orderBy('destination_name', 'asc')->get();
        return response()->view('sitemaps.holiday', $data)->header('Content-Type', 'application/xml');
    }


    public function holidayListSitemap($slug)
    {
        $holidayTheme = HolidayTheme::where('status', 'Active')->where('slug', $slug)->first();
        if (empty($holidayTheme)) {
            return redirect()->route('index');
        }

        $data['holidayPackage'] = HolidayPackage::where('status', 'Active')->where('theme_id', $holidayTheme->id)->orderBy('title', 'asc')->get();
        return response()->view('sitemaps.package', $data)->header('Content-Type', 'application/xml');
    }*/

    public function robots()
    {
        $data['robots'] = TrackingSetting::find(1);
        return response()->view('robots', $data)->header('Content-Type', 'text/plain');
    }
}
