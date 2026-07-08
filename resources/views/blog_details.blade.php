@extends('layout')
@section('title',$blogDetails->meta_title)
@section('meta_tags')
<meta name="robots" content="index, follow">
<meta name="title" content="{{ $blogDetails->meta_title }}">
<meta name="description" content="{{ $blogDetails->meta_description }}">
<meta name="keywords" content="{{ $blogDetails->meta_keywords }}">
<meta property="og:title" content="{{ $blogDetails->meta_title }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ route('blog.details',$blogDetails->slug) }}" />
<meta property="og:image" content="{{ env('MAIN_SERVER_URL').'/uploads/blog_images/'.$blogDetails->thumbnail_image }}" />
<meta property="og:description" content="{{ $blogDetails->meta_description }}" />
<link rel="canonical" href="{{ route('blog.details',$blogDetails->slug) }}" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $blogDetails->meta_title }}">
<meta name="twitter:description" content="{{ $blogDetails->meta_description }}">
<meta name="twitter:image" content="{{ env('MAIN_SERVER_URL').'/uploads/blog_images/'.$blogDetails->thumbnail_image }}">
<meta name="twitter:url" content="{{ route('blog.details',$blogDetails->slug) }}">
@endsection


@push('css-styles')
<style>
    .prose p {
        color: #52525b;
        /* zinc-600 */
        line-height: 1.75;
        margin-bottom: 1.5rem;
        font-size: 1.125rem;
    }

    .prose h2 {
        color: #18181b;
        /* zinc-900 */
        font-size: 1.875rem;
        font-weight: 800;
        margin-top: 2.5rem;
        margin-bottom: 1rem;
    }

    .prose h3 {
        color: #27272a;
        /* zinc-800 */
        font-size: 1.5rem;
        font-weight: 700;
        margin-top: 2rem;
        margin-bottom: 0.75rem;
    }

    .prose h4 {
        color: #27272a;
        font-size: 1.25rem;
        font-weight: 600;
        margin-top: 1.5rem;
        margin-bottom: 0.5rem;
    }

    .prose ul {
        list-style-type: disc;
        padding-left: 1rem;
        margin-bottom: 1.5rem;
    }

    .prose ul li {
        color: #3f3f46;
        /* zinc-700 */
        margin-bottom: 0.5rem;
    }

    .prose a {
        color: #d97706;
        /* amber-600 */
        text-decoration: underline;
        text-underline-offset: 4px;
        transition: color 0.2s;
    }

    .prose a:hover {
        color: #b45309;
        /* amber-700 */
    }
</style>
@endpush
@section('json-data')
<script type="application/ld+json">
@php
   $schema = [
        "@context"      => "https://schema.org",
        "@type"         => "BlogPosting",
        "mainEntityOfPage" => [
            "@type" => "WebPage",
            "@id"   => url()->current()
        ],
        "headline"      => $blogDetails->title,
        "description"   => strip_tags($blogDetails->meta_description ?? ''),
        "image"         => env('MAIN_SERVER_URL') . '/uploads/blog_images/' . $blogDetails->thumbnail_image,
        "author"        => [
            "@type" => "Person",
            "name"  => "Your Author Name",   // Yahan apna author name daal sakte ho
            "url"   => url('/')
        ],
        "publisher"     => [
            "@type" => "Organization",
            "name"  => "Your Company Name",   // Apna company name daal do
            "logo"  => [
                "@type" => "ImageObject",
                "url"   => env('MAIN_SERVER_URL') . '/uploads/general_setting_images/logo.png'
            ]
        ],
        "datePublished" => $blogDetails->created_at->format('c'),
        "dateModified"  => $blogDetails->updated_at->format('c') ?? $blogDetails->created_at->format('c')
    ];
@endphp
{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endsection
@section('pages')

@php
$imageNotFound = asset('home_assets/images/image-not-found.png');
@endphp
<section class="bg-zinc-100 py-0 md:py-4">

    <div class="max-w-screen-2xl mx-auto px-1">

        <div class="grid lg:grid-cols-12 gap-8">

            <!-- ================================= -->
            <!-- LEFT SIDEBAR -->
            <!-- ================================= -->

            <aside class="lg:col-span-3">

                <div class="sticky top-24 space-y-6">

                    <!-- Author -->
                    <div class="hidden md:block bg-white rounded-3xl p-6 shadow-sm border">

                        <img src="https://i.pravatar.cc/120" class="w-20 h-20 rounded-full mx-auto">

                        <h3 class="text-center font-bold text-xl mt-4">
                            John Smith
                        </h3>

                        <p class="text-center text-zinc-500 text-sm mt-2">
                            Software Expert
                        </p>

                        <div class="flex justify-center gap-4 mt-5">

                            <a href="#" class="text-blue-600">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="#" class="text-sky-500">
                                <i class="fab fa-twitter"></i>
                            </a>

                            <a href="#" class="text-red-500">
                                <i class="fab fa-youtube"></i>
                            </a>

                            <a href="#" class="text-blue-700">
                                <i class="fab fa-linkedin"></i>
                            </a>

                        </div>

                    </div>

                    <!-- Table of Contents -->

                    <!-- Added 'hidden md:block' to the parent div below -->
                    <div class="hidden md:block bg-white rounded-3xl p-6 shadow-sm border">

                        <h3 class="font-bold text-xl mb-5">
                            Table of Contents
                        </h3>

                        <ul class="space-y-3 text-sm">
                            <li>
                                <a href="#overview" class="hover:text-amber-600">
                                    Introduction
                                </a>
                            </li>
                            <li>
                                <a href="#features" class="hover:text-amber-600">
                                    Features
                                </a>
                            </li>
                            <li>
                                <a href="#pricing" class="hover:text-amber-600">
                                    Pricing
                                </a>
                            </li>
                            <li>
                                <a href="#pros" class="hover:text-amber-600">
                                    Pros & Cons
                                </a>
                            </li>
                            <li>
                                <a href="#faq" class="hover:text-amber-600">
                                    FAQ
                                </a>
                            </li>
                        </ul>

                    </div>


                    <!-- Adsense -->

                    <div
                        class="hidden md:flex bg-white rounded-3xl h-[600px] border-2 border-dashed border-zinc-300 flex items-center justify-center">

                        Google AdSense 300x600

                    </div>

                </div>

            </aside>

            <!-- ================================= -->
            <!-- BLOG CONTENT -->
            <!-- ================================= -->

            <main class="lg:col-span-6">

                <article class="bg-white rounded-3xl shadow-sm overflow-hidden">

                    <img src="{{ env('MAIN_SERVER_URL').'/uploads/blog_images/'.$blogDetails->thumbnail_image }}" onerror="this.onerror=null;this.src='{{ $imageNotFound }}'" alt="{{ $blogDetails->title }}"
                        class="w-full h-[250px] md:h-[450px] object-cover">

                    <div class="p-3 md:p-10">

                        <span class="bg-amber-100 text-amber-700 px-4 py-2 rounded-full text-sm font-semibold">

                            {{ $blogDetails->category->category_name }}

                        </span>

                        <h1 class="text-2xl md:text-5xl font-black mt-6 leading-tight">

                            {{ $blogDetails->title }}

                        </h1>

                        <div class="flex flex-wrap gap-6 text-zinc-500 text-sm mt-6">

                            <span>

                                <i class="fa fa-calendar"></i>

                                {{ \Illuminate\Support\Carbon::parse($blogDetails->created_at)->format('M d, Y') }}

                            </span>

                            <span>

                                <i class="fa fa-clock"></i>

                                {{ $blogDetails->min_read }}

                            </span>

                            <span>

                                <i class="fa fa-eye"></i>

                                {{ $blogDetails->views }} Views

                            </span>

                        </div>

                        <div class="prose max-w-none mt-10">

                        </div>

                        <!-- Adsense -->

                        <div class="my-12 rounded-3xl border-2 border-dashed h-36 flex items-center justify-center">

                            Responsive Google AdSense

                        </div>

                        <!-- ========================================= -->
                        <!-- Blog Content -->
                        <!-- ========================================= -->

                        <div class="prose prose-lg max-w-none prose-zinc">
                            @php
                            $ads_code = view()->exists('google_ad_code') ? view('google_ad_code')->render() : '';
                            @endphp

                            {!! str_replace('[ads_code]',$ads_code, $blogDetails->full_desc) !!}


                            <div class="grid md:grid-cols-2 gap-6 mt-10">

                                <div class="bg-green-50 border border-green-200 rounded-2xl p-6">

                                    <h4 class="font-bold text-green-700 mb-3">
                                        Pros
                                    </h4>

                                    <ul>
                                        <li>Easy to use</li>
                                        <li>Affordable pricing</li>
                                        <li>Modern interface</li>
                                        <li>Excellent integrations</li>
                                        <li>Great customer support</li>
                                    </ul>

                                </div>

                                <div class="bg-red-50 border border-red-200 rounded-2xl p-6">

                                    <h4 class="font-bold text-red-700 mb-3">
                                        Cons
                                    </h4>

                                    <ul>
                                        <li>Learning curve for beginners</li>
                                        <li>Advanced features require paid plans</li>
                                        <li>Limited offline support</li>
                                    </ul>

                                </div>

                            </div>

                        </div>

                        <!-- Adsense -->



                    </div>

                </article>

            </main>

            <!-- ================================= -->
            <!-- RIGHT SIDEBAR -->
            <!-- ================================= -->

            <aside class="lg:col-span-3">

                <div class="sticky top-24 space-y-6">

                    <!-- CTA -->

                    <div class="bg-gradient-to-r from-amber-500 to-orange-500 rounded-3xl p-8 text-white">

                        <h3 class="text-2xl font-bold">

                            Need Custom Software?

                        </h3>

                        <p class="mt-4">

                            Build your own CRM, ERP, HRMS or Mobile App.

                        </p>

                        <button class="w-full bg-white text-amber-600 py-3 rounded-xl font-bold mt-6">

                            Get Free Quote

                        </button>

                    </div>

                    <div
                        class="bg-white rounded-3xl h-[600px] border-2 border-dashed border-zinc-300 flex items-center justify-center">

                        Google AdSense 300x600

                    </div>

                    <!-- Related Posts -->

                    <div class="bg-white rounded-3xl p-6 shadow-sm border">

                        <h3 class="font-bold text-xl mb-5">

                            Related Articles

                        </h3>

                        <div class="space-y-5">
                            @foreach($popularBlog as $k => $v)
                            <a href="{{ route('blog.details',$v->slug) }}" class="flex gap-4">

                                <img src="{{ env('MAIN_SERVER_URL').'/uploads/blog_images/'.$v->thumbnail_image }}" onerror="this.onerror=null;this.src='{{ $imageNotFound }}'" alt="{{ $v->title }}" class="w-20 rounded-xl">

                                <div>

                                    <h4 class="font-semibold">

                                        {{ $v->title }}

                                    </h4>

                                    <span class="text-sm text-zinc-500">

                                        {{ $v->min_read }}

                                    </span>

                                </div>

                            </a>
                            @endforeach

                        </div>

                    </div>

                    <!-- Newsletter -->

                    <div class="bg-white rounded-3xl p-6 shadow-sm border">

                        <h3 class="font-bold text-xl">

                            Weekly Software Tips

                        </h3>

                        <input type="email" placeholder="Email address"
                            class="w-full mt-5 border rounded-xl px-4 py-3">

                        <button class="w-full mt-4 bg-zinc-900 text-white py-3 rounded-xl">

                            Subscribe

                        </button>

                    </div>

                    <!-- Adsense -->



                </div>

            </aside>

        </div>

    </div>

</section>
@endsection