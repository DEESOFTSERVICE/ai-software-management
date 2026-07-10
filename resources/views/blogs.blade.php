@extends('layout')
@section('title',($pageType == 'static' ? $metaTags->meta_title : ($pageType == 'tags' ? $metaTags->meta_title : $categoryDetails->meta_title)))
@section('meta_tags')
@if($pageType == 'static')
<meta name="title" content="{{ $metaTags->meta_title }}">
<meta name="description" content="{{ $metaTags->meta_description }}">
<meta name="keywords" content="">
<meta property="og:title" content="{{ $metaTags->meta_title }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ route('blogs') }}" />
<meta property="og:image" content="{{ env('MAIN_SERVER_URL').'/uploads/general_setting_images/'.$websiteSetting->header_logo }}" />
<meta property="og:description" content="{{ $metaTags->meta_description }}" />
<link rel="canonical" href="{{ route('blogs') }}" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{  $metaTags->meta_title }}">
<meta name="twitter:description" content="{{ $metaTags->meta_description }}">
<meta name="twitter:image" content="{{ env('MAIN_SERVER_URL').'/uploads/general_setting_images/'.$websiteSetting->header_logo }}">
<meta name="twitter:url" content="{{ route('blogs') }}">
@elseif($pageType == 'tags')
<meta name="title" content="{{ $metaTags->meta_title }}">
<meta name="description" content="{{ $metaTags->meta_description }}">
<meta name="keywords" content="">
<meta property="og:title" content="{{ $metaTags->meta_title }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ route('blogs') }}" />
<meta property="og:image" content="{{ env('MAIN_SERVER_URL').'/uploads/general_setting_images/'.$websiteSetting->header_logo }}" />
<meta property="og:description" content="{{ $metaTags->meta_description }}" />
<link rel="canonical" href="{{ route('blogs') }}" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{  $metaTags->meta_title }}">
<meta name="twitter:description" content="{{ $metaTags->meta_description }}">
<meta name="twitter:image" content="{{ env('MAIN_SERVER_URL').'/uploads/general_setting_images/'.$websiteSetting->header_logo }}">
<meta name="twitter:url" content="{{ route('blogs') }}">
@else
<meta name="robots" content="index, follow">
<meta name="title" content="{{ $categoryDetails->meta_title }}">
<meta name="description" content="{{ $categoryDetails->meta_description }}">
<meta name="keywords" content="">
<meta property="og:title" content="{{ $categoryDetails->meta_title }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ route('blogs.category',$categoryDetails->slug) }}" />
<meta property="og:image" content="{{ env('MAIN_SERVER_URL').'/uploads/general_setting_images/'.$websiteSetting->header_logo }}" />
<meta property="og:description" content="{{ $categoryDetails->meta_description }}" />
<link rel="canonical" href="{{ route('blogs.category',$categoryDetails->slug) }}" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $categoryDetails->meta_title }}">
<meta name="twitter:description" content="{{ $categoryDetails->meta_description }}">
<meta name="twitter:image" content="{{ env('MAIN_SERVER_URL').'/uploads/general_setting_images/'.$websiteSetting->header_logo }}">
<meta name="twitter:url" content="{{ route('blogs.category',$categoryDetails->slug) }}">
@endif
@endsection
@section('pages')
@php
$imageNotFound = asset('home_assets/images/image-not-found.png');
@endphp
<div class="max-w-screen-2xl mx-auto p-6">
    <div class="h-48 border-2 border-dashed flex items-center justify-center bg-white rounded">Google AdSense
        970x250</div>
    <div class="grid lg:grid-cols-12 gap-6 mt-1 md:mt-8">
        <!-- ========================================= -->
        <!-- Left Sticky Sidebar -->
        <!-- ========================================= -->

        <aside class="lg:col-span-3">

            <div class="sticky top-20 space-y-6">
                <!-- Google AdSense -->

                <div class="hidden md:flex bg-white rounded-3xl border-2 border-dashed border-zinc-300 h-[600px] items-center justify-center">
                    <div class="text-center">
                        <i class="fa-brands fa-google text-5xl text-zinc-400 mb-4"></i>
                        <h4 class="font-semibold">
                            Google AdSense
                        </h4>
                        <p class="text-sm text-zinc-500 mt-2">
                            300 × 600
                        </p>
                    </div>
                </div>



                <!-- Categories -->

                <!-- Added 'hidden md:block' to the parent div below -->
                <div class="hidden md:block bg-white rounded-3xl border border-zinc-200 shadow-sm p-6">

                    <div class="flex items-center justify-between mb-5">
                        <h3 class="text-xl font-bold">
                            Categories
                        </h3>

                    </div>

                    <div class="space-y-3">
                        @foreach($exploreCategory as $k => $v)
                        <a href="{{ route('blogs.category',$v->slug) }}" class="flex items-center justify-between rounded-2xl px-4 py-3 hover:bg-amber-50 hover:text-amber-600 transition">
                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-chart-line text-amber-500"></i>
                                <span>{{ $v->category_name }}</span>
                            </div>
                            <span class="text-xs bg-zinc-100 px-2 py-1 rounded-full">
                                {{ $v->total_blogs }}
                            </span>
                        </a>
                        @endforeach
                    </div>

                </div>


                <!-- Popular Tags -->
                @if(!empty($websiteSetting->popular_tags))
                <!-- Added 'hidden md:block' to the parent div below -->
                <div class="hidden md:block bg-white rounded-3xl border border-zinc-200 shadow-sm p-6">

                    <h3 class="text-xl font-bold mb-5">
                        Popular Tags
                    </h3>

                    <div class="flex flex-wrap gap-3">
                        @foreach(explode(',',$websiteSetting->popular_tags) as $k => $v)
                        <a href="{{ route('blog.tags',\illuminate\Support\Str::slug($v)) }}" class="px-4 py-2 rounded-full bg-zinc-100 hover:bg-amber-500 hover:text-white transition">
                            {{ $v }}
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

        </aside>
        <main class="lg:col-span-6 grid md:grid-cols-2 gap-6">
            <!-- ========================================= -->
            <!-- Premium Blog Card -->
            <!-- ========================================= -->
            @foreach($popularBlog as $k => $v)
            <div
                class="group bg-white rounded-3xl border border-zinc-200 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">

                <!-- Thumbnail -->
                <div class="relative overflow-hidden">

                    <img src="{{ env('MAIN_SERVER_URL').'/uploads/blog_images/'.$v->thumbnail_image }}" onerror="this.onerror=null;this.src='{{ $imageNotFound }}'" alt="{{ $v->title }}"
                        class="w-full h-60 object-cover transition duration-500 group-hover:scale-110">

                    <!-- Category -->

                    <span
                        class="absolute top-5 left-5 bg-amber-500 text-white px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wide">

                        {{ $v->category->category_name }}

                    </span>

                    <!-- Read Time -->

                    <span
                        class="absolute bottom-5 left-5 bg-white/90 backdrop-blur px-3 py-2 rounded-full text-xs font-semibold">

                        <i class="fa-regular fa-clock mr-1"></i>

                        {{ $v->min_read }}

                    </span>

                </div>

                <!-- Content -->

                <div class="p-7">

                    <!-- Meta -->

                    <div class="flex items-center justify-between text-sm text-zinc-500">

                        <div class="flex items-center gap-2">

                            <i class="fa-regular fa-calendar"></i>

                            {{ \Illuminate\Support\Carbon::parse($v->created_at)->format('M d, Y') }}

                        </div>

                        <div class="flex items-center gap-2">

                            <i class="fa-regular fa-eye"></i>

                            {{ $v->views }}

                        </div>

                    </div>

                    <!-- Title -->

                    <h3
                        class="text-xl font-bold mt-5 leading-snug group-hover:text-amber-600 transition line-clamp-2">

                        <a href="{{ route('blog.details',$v->slug) }}">{{ $v->title }}</a>

                    </h3>

                    <!-- Description -->

                    <p class="text-zinc-600 mt-4 leading-7 line-clamp-3 hidden">

                        Discover the best project management software with AI features,
                        affordable pricing, team collaboration, automation, and advanced
                        reporting for businesses of every size.

                    </p>

                    <!-- Tags -->

                    <div class="flex flex-wrap gap-2 mt-6">
                        @if($v->tags!="")
                        @foreach(explode(',',$v->tags) as $k => $v)
                        <a href="{{ route('blog.tags',\Illuminate\Support\Str::slug($v)) }}">
                            <span class="bg-zinc-100 text-zinc-700 px-3 py-1 rounded-full text-xs">
                                {{$v}}
                            </span>
                        </a>
                        @endforeach
                        @endif
                    </div>


                </div>

            </div>
            @endforeach
        </main>
        <!-- ========================================= -->
        <!-- Right Sticky Sidebar -->
        <!-- ========================================= -->

        <aside class="lg:col-span-3">

            <div class="sticky top-20 space-y-6">


                <!-- Google AdSense -->

                <div
                    class="bg-white rounded-3xl border-2 border-dashed border-zinc-300 h-[600px] flex flex-col items-center justify-center">

                    <i class="fa-brands fa-google text-5xl text-zinc-400 mb-4"></i>

                    <h4 class="font-semibold text-lg">
                        Google AdSense
                    </h4>

                    <p class="text-sm text-zinc-500 mt-2">
                        300 × 600 Display Ad
                    </p>

                </div>

                <!-- Hire Us -->

                <div class="bg-zinc-900 rounded-3xl p-6 text-white">

                    <h3 class="text-2xl font-bold">
                        Need Custom Software?
                    </h3>

                    <p class="text-zinc-300 mt-4 leading-7">
                        We build CRM, ERP, HRMS, Inventory Systems, Mobile Apps, and AI-powered business software.
                    </p>

                    <a href="#"
                        class="mt-6 inline-flex items-center justify-center w-full bg-amber-500 hover:bg-amber-600 py-3 rounded-2xl font-semibold transition">

                        Get Free Quote

                    </a>

                </div>

            </div>

        </aside>
    </div>
</div>
@endsection