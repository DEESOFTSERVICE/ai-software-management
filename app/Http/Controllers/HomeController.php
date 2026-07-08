<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request)
    {

        // $data['metaTags'] = Page::where('page_name', 'home')->first();
        $data['tags'] = [];
        return view('home')->with($data);
    }

    public function blogs(Request $request)
    {

        // $data['metaTags'] = Page::where('page_name', 'home')->first();
        $data['tags'] = [];
        return view('blogs')->with($data);
    }


    public function blogDetails(Request $request)
    {

        // $data['metaTags'] = Page::where('page_name', 'home')->first();
        $data['tags'] = [];
        return view('blog_details')->with($data);
    }

    public function contact(Request $request)
    {

        // $data['metaTags'] = Page::where('page_name', 'home')->first();
        $data['tags'] = [];
        return view('contact')->with($data);
    }

    public function about(Request $request)
    {

        // $data['metaTags'] = Page::where('page_name', 'home')->first();
        $data['tags'] = [];
        return view('about')->with($data);
    }
}
