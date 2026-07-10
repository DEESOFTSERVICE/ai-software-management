<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Faqs;
use App\Models\Freelancer;
use App\Models\Page;
use App\Models\SoftwareTool;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $data['metaTags'] = Page::where('page_name', 'home')->first();
        $data['faqs'] = Faqs::orderBy('id', 'asc')->limit(6)->get();
        $data['tags'] = [];
        $data['exploreCategory'] = Category::where('domain_id', $this->currentDomainId)->orderBy('total_blogs', 'desc')->get();
        $data['tools'] = SoftwareTool::where('status','Active')->limit(4)->get();
        $data['freelancer'] = Freelancer::where('status','Active')->limit(4)->get();
        return view('home')->with($data);
    }

    public function category(String $slug)
    {

        // $data['metaTags'] = Page::where('page_name', 'home')->first();
        $data['pageType'] = 'category';
        $data['categoryDetails'] = Category::where('slug', $slug)->first();
        if (!empty($data['categoryDetails'])) {
            $data['popularBlog'] = Blog::where('domain_id', $this->currentDomainId)->where('category_id', $data['categoryDetails']->id)->orderBy('views', 'desc')->limit(8)->get();
            $data['exploreCategory'] = Category::where('domain_id', $this->currentDomainId)->orderBy('total_blogs', 'desc')->get();
            return view('blogs')->with($data);
        } else {
            return redirect()->route('index');
        }
    }

    public function tags(String $tag)
    {

        $data['metaTags'] = Page::where('page_name', 'blog-tags')->first();
        $data['pageType'] = 'tags';
        $data['popularBlog'] = Blog::where('domain_id', $this->currentDomainId)->whereRaw("FIND_IN_SET(?, tags)", [$tag])->orderBy('views', 'desc')->limit(8)->get();
        $data['exploreCategory'] = Category::where('domain_id', $this->currentDomainId)->orderBy('total_blogs', 'desc')->get();
        return view('blogs')->with($data);
    }

    public function blogs(Request $request)
    {
        $data['pageType'] = 'static';
        $data['metaTags'] = Page::where('page_name', 'blogs')->first();
        $data['tags'] = [];

        $data['popularBlog'] = Blog::where('domain_id', $this->currentDomainId)->orderBy('views', 'desc')->limit(8)->get();
        $data['exploreCategory'] = Category::where('domain_id', $this->currentDomainId)->orderBy('total_blogs', 'desc')->get();
        return view('blogs')->with($data);
    }


    public function blogDetails(String $slug)
    {
        $data['blogDetails'] = Blog::where('slug', $slug)->with(['author', 'category'])->first();
        
        if (!empty($data['blogDetails'])) {
            $data['popularBlog'] = Blog::where('domain_id', $this->currentDomainId)->where('id', '!=', $data['blogDetails']->id)->orderBy('views', 'desc')->limit(4)->get();
            $data['exploreCategory'] = Category::where('domain_id', $this->currentDomainId)->orderBy('total_blogs', 'desc')->get();

            // update view count
            $this->updateViewCount($data['blogDetails']->slug);
            return view('blog_details')->with($data);
        } else {
            return redirect()->route('index');
        }
    }

    private function updateViewCount(String $slug)
    {
        $url = config('constant.view_update_api_url');
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('slug' => $slug),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return true;
    }

    public function contact(Request $request)
    {

        $data['metaTags'] = Page::where('page_name', 'contact_us')->first();
        $data['tags'] = [];
        return view('contact')->with($data);
    }

    public function about(Request $request)
    {

        $data['metaTags'] = Page::where('page_name', 'about_us')->first();
        $data['tags'] = [];
        return view('about')->with($data);
    }

    public function privacyPolicy(Request $request)
    {
        $data['metaTags'] = Page::where('page_name', 'privacy_policy')->first();
        return view('privacy_policy', $data);
    }

     public function cookiePolicy(Request $request)
    {
        $data['metaTags'] = Page::where('page_name', 'cookie_policy')->first();
        return view('cookie_policy', $data);
    }

     public function termsConditions(Request $request)
    {
        $data['metaTags'] = Page::where('page_name', 'terms_conditions')->first();
        return view('terms_conditions', $data);
    }

     public function disclaimer(Request $request)
    {
        $data['metaTags'] = Page::where('page_name', 'disclaimer')->first();
        return view('disclaimer', $data);
    }
}
