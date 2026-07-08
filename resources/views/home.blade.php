@extends('layout')
@section('title',$metaTags->meta_title)
@section('meta_tags')
<meta name="robots" content="index, follow">
<meta name="title" content="{{ $metaTags->meta_title }}">
<meta name="description" content="{{ $metaTags->meta_description }}">
<meta name="keywords" content="">
<meta property="og:title" content="{{ $metaTags->meta_title }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:image" content="{{ env('MAIN_SERVER_URL').'/uploads/general_setting_images/'.$websiteSetting->header_logo }}" />
<meta property="og:description" content="{{ $metaTags->meta_description }}" />
<link rel="canonical" href="{{ url('/') }}" />
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{  $metaTags->meta_title }}">
<meta name="twitter:description" content="{{ $metaTags->meta_description }}">
<meta name="twitter:image" content="{{ env('MAIN_SERVER_URL').'/uploads/general_setting_images/'.$websiteSetting->header_logo }}">
<meta name="twitter:url" content="{{ url('/') }}">
@endsection
@section('pages')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-white via-amber-50/40 to-orange-50 py-6">

    <!-- Background -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">

        <div class="absolute -top-40 -left-40 w-[500px] h-[500px] rounded-full bg-amber-300/20 blur-[140px]"></div>

        <div class="absolute top-40 -right-40 w-[450px] h-[450px] rounded-full bg-orange-300/20 blur-[140px]"></div>

        <div
            class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[900px] h-[300px] bg-amber-200/20 blur-[120px] rounded-full">
        </div>

    </div>

    <div class="relative max-w-screen-2xl mx-auto px-6 lg:px-10">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- ================= LEFT ================= -->

            <div>

                <!-- Badge -->

                <div
                    class="inline-flex items-center gap-3 px-5 py-2.5 rounded-full bg-white border border-amber-200 shadow-sm">

                    <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>

                    <span class="text-sm font-semibold text-zinc-700">

                        Trusted by <span class="text-amber-600">15,000+</span> Businesses Worldwide

                    </span>

                </div>

                <!-- Heading -->

                <h1 class="mt-8 text-5xl lg:text-7xl font-black leading-tight text-zinc-900">

                    Compare the

                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-amber-500 via-orange-500 to-yellow-500">

                        Best Business Software

                    </span>

                    <br>

                    & Build Custom Solutions

                </h1>

                <!-- Description -->

                <p class="mt-8 text-xl leading-9 text-zinc-600 max-w-2xl">

                    Discover the perfect software for your business with expert reviews,
                    feature comparisons, pricing insights, and AI-powered recommendations.
                    Need something unique? Our development team builds custom CRM, ERP,
                    HRMS, Inventory, and AI solutions tailored to your workflow.

                </p>

                <!-- CTA -->

                <div class="flex flex-wrap gap-5 mt-10">

                    <a href="#"
                        class="group px-8 py-4 rounded-2xl bg-gradient-to-r from-amber-500 to-orange-500 text-white font-semibold shadow-xl hover:-translate-y-1 transition">

                        Explore Software

                        <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition"></i>

                    </a>

                    <a href="#"
                        class="px-8 py-4 rounded-2xl border-2 border-zinc-200 bg-white hover:border-amber-500 hover:text-amber-600 font-semibold transition">

                        Get Custom Software

                    </a>

                </div>

                <!-- Popular Searches -->

                <div class="mt-10">

                    <p class="text-sm font-semibold text-zinc-500 mb-4">

                        Popular Searches

                    </p>

                    <div class="flex flex-wrap gap-3">

                        <a href="#"
                            class="px-4 py-2 rounded-full bg-white border hover:border-amber-500 hover:text-amber-600 transition">

                            CRM

                        </a>

                        <a href="#"
                            class="px-4 py-2 rounded-full bg-white border hover:border-amber-500 hover:text-amber-600 transition">

                            ERP

                        </a>

                        <a href="#"
                            class="px-4 py-2 rounded-full bg-white border hover:border-amber-500 hover:text-amber-600 transition">

                            HRMS

                        </a>

                        <a href="#"
                            class="px-4 py-2 rounded-full bg-white border hover:border-amber-500 hover:text-amber-600 transition">

                            Accounting

                        </a>

                        <a href="#"
                            class="px-4 py-2 rounded-full bg-white border hover:border-amber-500 hover:text-amber-600 transition">

                            AI Tools

                        </a>

                        <a href="#"
                            class="px-4 py-2 rounded-full bg-white border hover:border-amber-500 hover:text-amber-600 transition">

                            Project Management

                        </a>

                    </div>

                </div>

                <!-- Stats -->

                <div class="grid grid-cols-2 md:grid-cols-4 gap-5 mt-14">

                    <div class="bg-white rounded-2xl p-5 border">

                        <h3 class="text-3xl font-black text-amber-500">

                            500+

                        </h3>

                        <p class="text-sm text-zinc-500 mt-2">

                            Software Reviewed

                        </p>

                    </div>

                    <div class="bg-white rounded-2xl p-5 border">

                        <h3 class="text-3xl font-black text-blue-500">

                            120+

                        </h3>

                        <p class="text-sm text-zinc-500 mt-2">

                            Categories

                        </p>

                    </div>

                    <div class="bg-white rounded-2xl p-5 border">

                        <h3 class="text-3xl font-black text-green-500">

                            15K+

                        </h3>

                        <p class="text-sm text-zinc-500 mt-2">

                            Monthly Visitors

                        </p>

                    </div>

                    <div class="bg-white rounded-2xl p-5 border">

                        <h3 class="text-3xl font-black text-purple-500">

                            100+

                        </h3>

                        <p class="text-sm text-zinc-500 mt-2">

                            Custom Projects

                        </p>

                    </div>

                </div>

            </div>

            <!-- ================= RIGHT ================= -->

            <div class="relative">

                <div class="bg-white rounded-[36px] border border-zinc-200 shadow-2xl overflow-hidden">

                    <!-- Header -->

                    <div class="p-8 border-b">

                        <h3 class="text-3xl font-black">

                            Software Finder

                        </h3>

                        <p class="mt-2 text-zinc-500">

                            Find the perfect software in under 30 seconds.

                        </p>

                    </div>

                    <div class="p-8 space-y-6">

                        <input type="text" placeholder="Search software..."
                            class="w-full h-14 rounded-2xl border border-zinc-200 px-5 focus:border-amber-500 outline-none">

                        <button
                            class="w-full h-14 rounded-2xl bg-gradient-to-r from-amber-500 to-orange-500 text-white font-bold hover:shadow-xl transition">

                            Find Best Software

                        </button>

                    </div>

                    <!-- Recommended -->

                    <div class="border-t p-8">

                        <div class="flex items-center justify-between mb-6">

                            <h4 class="font-bold text-xl">

                                Recommended Software

                            </h4>

                            <a href="#" class="text-amber-600 font-semibold">

                                View All →

                            </a>

                        </div>

                        <div class="space-y-4">

                            <div
                                class="flex items-center justify-between p-4 rounded-2xl bg-zinc-50 hover:bg-amber-50 transition">

                                <div class="flex items-center gap-4">

                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSVWBvUZ7W6s_T2wgXdyyBWySdgNeIGssMzXRa0zASMYZ00BRH7nI90Mf_&s=10"
                                        class="w-12 h-12 rounded-xl bg-white p-2">

                                    <div>

                                        <h5 class="font-bold">

                                            ClickUp

                                        </h5>

                                        <p class="text-sm text-zinc-500">

                                            Project Management

                                        </p>

                                    </div>

                                </div>

                                <span class="text-amber-500 font-bold">

                                    ★ 4.9

                                </span>

                            </div>

                            <div
                                class="flex items-center justify-between p-4 rounded-2xl bg-zinc-50 hover:bg-amber-50 transition">

                                <div class="flex items-center gap-4">

                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQST4y-2OzFCvgm1VztX7n60ZQX2EhGtW0VOb2yvHNf_w&s=10"
                                        class="w-12 h-12 rounded-xl bg-white p-2">

                                    <div>

                                        <h5 class="font-bold">

                                            HubSpot

                                        </h5>

                                        <p class="text-sm text-zinc-500">

                                            CRM

                                        </p>

                                    </div>

                                </div>

                                <span class="text-amber-500 font-bold">

                                    ★ 4.8

                                </span>

                            </div>

                            <div
                                class="flex items-center justify-between p-4 rounded-2xl bg-zinc-50 hover:bg-amber-50 transition">

                                <div class="flex items-center gap-4">

                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTckqkEd4wshH4d2DzjOxk2j4SjEbDRrs368dyaUelTausmFgc2erf_kYcZ&s=10"
                                        class="w-12 h-12 rounded-xl bg-white p-2">

                                    <div>

                                        <h5 class="font-bold">

                                            Zoho CRM

                                        </h5>

                                        <p class="text-sm text-zinc-500">

                                            CRM

                                        </p>

                                    </div>

                                </div>

                                <span class="text-amber-500 font-bold">

                                    ★ 4.8

                                </span>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Floating Card -->

                <div
                    class="hidden xl:flex absolute -left-12 top-12 bg-white rounded-2xl shadow-xl border p-5 items-center gap-4">

                    <div
                        class="w-14 h-14 rounded-xl bg-gradient-to-br from-green-500 to-emerald-500 flex items-center justify-center text-white">

                        <i class="fa-solid fa-robot"></i>

                    </div>

                    <div>

                        <h4 class="font-bold">

                            AI Recommendation

                        </h4>

                        <p class="text-sm text-zinc-500">

                            Smart Software Suggestions

                        </p>

                    </div>

                </div>

                <div
                    class="hidden xl:flex absolute -right-12 bottom-12 bg-white rounded-2xl shadow-xl border p-5 items-center gap-4">

                    <div class="w-14 h-14 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center">

                        <i class="fa-solid fa-scale-balanced"></i>

                    </div>

                    <div>

                        <h4 class="font-bold">

                            Compare Software

                        </h4>

                        <p class="text-sm text-zinc-500">

                            Side-by-side Comparison

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ========================= -->
<!-- Trusted Companies Section -->
<!-- ========================= -->
<section class="py-10 bg-white border-y border-zinc-200">

    <div class="max-w-screen-2xl mx-auto px-6 lg:px-10">

        <!-- Heading -->
        <div class="text-center max-w-3xl mx-auto">

            <span
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-50 text-amber-600 font-semibold text-sm">
                <i class="fa-solid fa-shield-check"></i>
                Trusted Software Partners
            </span>

            <h2 class="mt-5 text-4xl font-black text-zinc-900">
                Compare the World's Most Trusted Business Software
            </h2>

            <p class="mt-5 text-lg text-zinc-600 leading-8">
                We research, compare and recommend industry-leading software trusted by
                millions of businesses worldwide.
            </p>

        </div>

        <!-- Companies -->
        <div class="mt-14 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">

            <!-- Company -->
            <!-- Premium Software Card -->
            @foreach(range(0,3) as $k => $v)
            <a href="#"
                class="group relative overflow-hidden rounded-3xl border border-zinc-200 bg-white p-6 hover:-translate-y-2 hover:border-amber-400 hover:shadow-2xl transition-all duration-300">

                <!-- Featured Badge -->

                <span
                    class="absolute top-5 right-5 bg-amber-100 text-amber-700 text-xs font-semibold px-3 py-1 rounded-full">
                    Featured
                </span>

                <!-- Logo -->

                <div
                    class="w-20 h-20 mx-auto rounded-2xl border border-zinc-100 bg-zinc-50 flex items-center justify-center">

                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRk-F9oY545UiEitGIcJCNOdj_Wl4waMtmHhFElMA40Wg&s=10"
                        alt="ClickUp" class="h-12 object-contain transition duration-300 group-hover:scale-110">

                </div>

                <!-- Content -->

                <div class="mt-6 text-center">

                    <h3 class="text-xl font-bold text-zinc-900 group-hover:text-amber-600 transition">

                        ClickUp

                    </h3>

                    <p class="mt-2 text-sm text-zinc-500">

                        Project Management Software

                    </p>

                </div>

                <!-- Rating -->

                <div class="flex items-center justify-center gap-2 mt-5">

                    <div class="flex text-amber-500 text-sm">

                        ★★★★★

                    </div>

                    <span class="font-semibold text-zinc-800">

                        4.9

                    </span>

                    <span class="text-zinc-400 text-sm">

                        (2,450 Reviews)

                    </span>

                </div>

                <!-- Features -->

                <div class="mt-6 flex flex-wrap justify-center gap-2">

                    <span class="px-3 py-1 rounded-full bg-zinc-100 text-xs font-medium">
                        Cloud
                    </span>

                    <span class="px-3 py-1 rounded-full bg-zinc-100 text-xs font-medium">
                        Team Collaboration
                    </span>

                    <span class="px-3 py-1 rounded-full bg-zinc-100 text-xs font-medium">
                        AI
                    </span>

                </div>

                <!-- Footer -->

                <div class="mt-8 pt-6 border-t border-zinc-100 flex items-center justify-between">

                    <div>

                        <p class="text-xs text-zinc-500">

                            Starting From

                        </p>

                        <h4 class="font-bold text-lg text-zinc-900">

                            Free

                        </h4>

                    </div>

                    <div
                        class="flex items-center gap-2 font-semibold text-amber-600 group-hover:gap-4 transition-all">

                        View Details

                        <i class="fa-solid fa-arrow-right"></i>

                    </div>

                </div>

            </a>
            @endforeach


        </div>

    </div>

</section>

<!-- ========================================= -->
<!-- Browse by Category -->
<!-- ========================================= -->
<section class="py-10 bg-gradient-to-b from-zinc-50 to-white">

    <div class="max-w-screen-2xl mx-auto px-6 lg:px-10">

        <!-- Section Heading -->
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-14">

            <div>

                <span
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-100 text-amber-700 text-sm font-semibold">
                    <i class="fa-solid fa-layer-group"></i>
                    Browse Categories
                </span>

                <h2 class="mt-5 text-4xl lg:text-5xl font-black text-zinc-900">
                    Find Software by
                    <span class="text-amber-500">Business Category</span>
                </h2>

                <p class="mt-4 text-lg text-zinc-600 max-w-2xl leading-8">
                    Discover the best business software across every industry. Compare
                    features, pricing, reviews and choose the perfect solution.
                </p>

            </div>

            <a href="#"
                class="inline-flex items-center gap-2 font-semibold text-amber-600 hover:text-amber-700 transition">
                View All Categories
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

        <!-- Categories -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-6">

            <!-- Premium Category Card -->
            @foreach($exploreCategory as $k => $v)
            <a href="{{ route('blogs.category',$v->slug) }}"
                class="group relative overflow-hidden rounded-3xl border border-zinc-200 bg-white p-7 transition-all duration-300 hover:-translate-y-2 hover:border-amber-400 hover:shadow-2xl">

                <!-- Background Decoration -->

                <div
                    class="absolute -right-8 -top-8 w-32 h-32 rounded-full bg-blue-100/40 group-hover:scale-150 transition duration-500">
                </div>

                <!-- Top -->

                <div class="relative flex items-start justify-between">

                    <div
                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-500 to-cyan-500 text-white flex items-center justify-center text-3xl shadow-lg">

                        <i class="fa-solid fa-users"></i>

                    </div>

                    <span class="rounded-full bg-blue-50 text-blue-700 text-xs font-semibold px-3 py-1">
                        {{ $v->total_blogs }}+
                    </span>

                </div>

                <!-- Content -->

                <div class="relative mt-8">

                    <h3 class="text-xl font-bold text-zinc-900 group-hover:text-blue-600 transition">

                        {{ $v->category_name }}

                    </h3>

                    <p class="mt-3 text-zinc-500 leading-7">

                        {{ $v->short_desc }}

                    </p>

                </div>

                <!-- Footer -->

                <div class="relative mt-8 flex items-center justify-between border-t border-zinc-100 pt-5">

                    <span class="text-sm font-medium text-zinc-500">

                        45 Software Listed

                    </span>

                    <div
                        class="w-10 h-10 rounded-full bg-zinc-100 flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition">

                        <i class="fa-solid fa-arrow-right"></i>

                    </div>

                </div>

            </a>
            @endforeach

        </div>

    </div>

</section>
<!-- ========================================= -->
<!-- Development Process -->
<!-- ========================================= -->

<section class="py-10 bg-zinc-50">

    <div class="max-w-7xl mx-auto px-6">

        <!-- Heading -->

        <div class="max-w-3xl mx-auto text-center mb-16">

            <span
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-100 text-amber-700 font-semibold text-sm">

                <i class="fa-solid fa-code"></i>

                Our Development Process

            </span>

            <h2 class="mt-6 text-5xl font-black text-zinc-900">

                From Idea to Successful Launch

            </h2>

            <p class="mt-6 text-lg text-zinc-600 leading-8">

                Every software project follows a proven development process that ensures
                quality, transparency and timely delivery.

            </p>

        </div>

        <!-- Bento Grid -->

        <div class="grid lg:grid-cols-12 gap-6">

            <!-- Step 1 -->

            <div class="lg:col-span-7 bg-white rounded-[32px] p-10 shadow-sm hover:shadow-xl transition group">

                <div class="flex items-center justify-between">

                    <span class="text-7xl font-black text-zinc-100">
                        01
                    </span>

                    <div
                        class="w-20 h-20 rounded-3xl bg-amber-100 flex items-center justify-center text-4xl text-amber-600 group-hover:bg-amber-500 group-hover:text-white transition">

                        <i class="fa-solid fa-comments"></i>

                    </div>

                </div>

                <h3 class="text-3xl font-bold mt-10">

                    Discovery & Requirement Analysis

                </h3>

                <p class="mt-5 text-zinc-600 leading-8">

                    We discuss your business, understand your workflow,
                    identify challenges, and prepare detailed project requirements.

                </p>

                <div class="flex flex-wrap gap-3 mt-8">

                    <span class="px-4 py-2 rounded-full bg-zinc-100 text-sm">Requirement Gathering</span>

                    <span class="px-4 py-2 rounded-full bg-zinc-100 text-sm">Business Analysis</span>

                    <span class="px-4 py-2 rounded-full bg-zinc-100 text-sm">Cost Estimation</span>

                </div>

            </div>

            <!-- Step 2 -->

            <div
                class="lg:col-span-5 bg-zinc-900 rounded-[32px] p-10 text-white shadow-sm hover:shadow-xl transition">

                <span class="text-6xl font-black text-white/10">
                    02
                </span>

                <div class="w-18 h-18 mt-8">

                    <i class="fa-solid fa-sitemap text-5xl text-amber-400"></i>

                </div>

                <h3 class="text-3xl font-bold mt-8">

                    Planning

                </h3>

                <p class="mt-5 text-zinc-300 leading-8">

                    Technology stack, roadmap,
                    milestones and project architecture.

                </p>

            </div>

            <!-- Step 3 -->

            <div class="lg:col-span-4 bg-white rounded-[32px] p-8 shadow-sm hover:shadow-xl transition">

                <span class="text-5xl font-black text-zinc-100">
                    03
                </span>

                <div class="mt-6">

                    <i class="fa-solid fa-pen-ruler text-5xl text-purple-600"></i>

                </div>

                <h3 class="text-2xl font-bold mt-6">

                    UI / UX Design

                </h3>

                <p class="mt-4 text-zinc-600">

                    Wireframes, prototypes and modern interface design.

                </p>

            </div>

            <!-- Step 4 -->

            <div
                class="lg:col-span-8 bg-gradient-to-r from-blue-600 to-indigo-700 rounded-[32px] p-10 text-white shadow-sm hover:shadow-xl transition">

                <div class="flex items-center justify-between">

                    <div>

                        <span class="text-7xl font-black text-white/10">

                            04

                        </span>

                        <h3 class="text-4xl font-bold mt-6">

                            Development

                        </h3>

                        <p class="mt-6 text-blue-100 max-w-2xl leading-8">

                            Our experienced developers build scalable, secure,
                            and high-performance web & mobile applications
                            using modern technologies.

                        </p>

                    </div>

                    <i class="fa-solid fa-code text-7xl text-white/30"></i>

                </div>

            </div>

            <!-- Step 5 -->

            <div class="lg:col-span-5 bg-white rounded-[32px] p-8 shadow-sm hover:shadow-xl transition">

                <span class="text-5xl font-black text-zinc-100">

                    05

                </span>

                <div class="mt-6">

                    <i class="fa-solid fa-shield-halved text-5xl text-green-600"></i>

                </div>

                <h3 class="text-2xl font-bold mt-6">

                    Testing

                </h3>

                <p class="mt-4 text-zinc-600">

                    QA, security testing,
                    bug fixing and optimization.

                </p>

            </div>

            <!-- Step 6 -->

            <div
                class="lg:col-span-7 bg-gradient-to-r from-amber-500 to-orange-500 rounded-[32px] p-10 text-white shadow-sm hover:shadow-xl transition">

                <div class="flex items-center justify-between">

                    <div>

                        <span class="text-7xl font-black text-white/20">

                            06

                        </span>

                        <h3 class="text-4xl font-bold mt-6">

                            Launch & Long-Term Support

                        </h3>

                        <p class="mt-6 text-amber-100 max-w-xl leading-8">

                            Deployment, monitoring,
                            maintenance, updates and continuous support
                            to keep your software running smoothly.

                        </p>

                    </div>

                    <i class="fa-solid fa-rocket text-7xl text-white/30"></i>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ========================================= -->
<!-- Featured Freelancers (Sponsored) -->
<!-- ========================================= -->
<section class="py-10 bg-gradient-to-b from-zinc-50 to-white">

    <div class="max-w-screen-2xl mx-auto px-6 lg:px-10">

        <!-- Heading -->
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-14">

            <div>

                <span
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-100 text-amber-700 text-sm font-semibold">
                    <i class="fa-solid fa-bullhorn"></i>
                    Sponsored Freelancers
                </span>

                <h2 class="mt-5 text-4xl lg:text-5xl font-black text-zinc-900">
                    Hire Trusted
                    <span class="text-amber-500">Freelancers</span>
                </h2>

                <p class="mt-5 text-lg text-zinc-600 leading-8 max-w-3xl">
                    Looking for a Laravel developer, Flutter expert, UI/UX designer or
                    digital marketing specialist? Connect with verified freelancers
                    trusted by businesses worldwide.
                </p>

            </div>

            <a href="#"
                class="inline-flex items-center gap-2 text-amber-600 font-semibold hover:text-amber-700 transition">
                View All Freelancers
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

        <!-- Cards -->
        <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8">

            <!-- Card -->
            <div
                class="group relative bg-white rounded-3xl border border-zinc-200 overflow-hidden hover:-translate-y-2 hover:shadow-2xl transition duration-300">

                <!-- Sponsored -->
                <div
                    class="absolute top-5 right-5 bg-amber-500 text-white text-xs font-semibold px-3 py-1 rounded-full">
                    Sponsored
                </div>

                <div class="p-8 text-center">

                    <img src="https://i.pravatar.cc/160?img=12"
                        class="w-28 h-28 rounded-full mx-auto border-4 border-white shadow-lg">

                    <h3 class="mt-6 text-xl font-bold text-zinc-900">
                        John Anderson
                    </h3>

                    <p class="mt-2 text-amber-600 font-medium">
                        Senior Laravel Developer
                    </p>

                    <div class="flex justify-center gap-1 text-amber-400 mt-4">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="text-sm text-zinc-500 mt-2">
                        4.9 Rating • 150+ Projects
                    </p>

                    <div class="flex justify-center gap-3 mt-6">

                        <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-semibold">
                            Laravel
                        </span>

                        <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">
                            API
                        </span>

                    </div>

                    <button
                        class="mt-8 w-full bg-gradient-to-r from-amber-500 to-orange-500 text-white font-semibold py-3 rounded-2xl hover:shadow-lg transition">
                        Hire Now
                    </button>

                </div>

            </div>

            <!-- Card -->
            <div
                class="group relative bg-white rounded-3xl border border-zinc-200 overflow-hidden hover:-translate-y-2 hover:shadow-2xl transition duration-300">

                <div
                    class="absolute top-5 right-5 bg-amber-500 text-white text-xs font-semibold px-3 py-1 rounded-full">
                    Sponsored
                </div>

                <div class="p-8 text-center">

                    <img src="https://i.pravatar.cc/160?img=32"
                        class="w-28 h-28 rounded-full mx-auto border-4 border-white shadow-lg">

                    <h3 class="mt-6 text-xl font-bold text-zinc-900">
                        Emma Wilson
                    </h3>

                    <p class="mt-2 text-amber-600 font-medium">
                        Flutter Developer
                    </p>

                    <div class="flex justify-center gap-1 text-amber-400 mt-4">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                    <p class="text-sm text-zinc-500 mt-2">
                        5.0 Rating • 95+ Apps
                    </p>

                    <div class="flex justify-center gap-3 mt-6">

                        <span class="px-3 py-1 rounded-full bg-sky-100 text-sky-700 text-xs font-semibold">
                            Flutter
                        </span>

                        <span class="px-3 py-1 rounded-full bg-indigo-100 text-indigo-700 text-xs font-semibold">
                            Firebase
                        </span>

                    </div>

                    <button
                        class="mt-8 w-full bg-gradient-to-r from-amber-500 to-orange-500 text-white font-semibold py-3 rounded-2xl hover:shadow-lg transition">
                        Hire Now
                    </button>

                </div>

            </div>

            <!-- Card -->
            <div
                class="group relative bg-white rounded-3xl border border-zinc-200 overflow-hidden hover:-translate-y-2 hover:shadow-2xl transition duration-300">

                <div
                    class="absolute top-5 right-5 bg-amber-500 text-white text-xs font-semibold px-3 py-1 rounded-full">
                    Sponsored
                </div>

                <div class="p-8 text-center">

                    <img src="https://i.pravatar.cc/160?img=18"
                        class="w-28 h-28 rounded-full mx-auto border-4 border-white shadow-lg">

                    <h3 class="mt-6 text-xl font-bold text-zinc-900">
                        Michael Brown
                    </h3>

                    <p class="mt-2 text-amber-600 font-medium">
                        UI / UX Designer
                    </p>

                    <div class="flex justify-center gap-1 text-amber-400 mt-4">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="text-sm text-zinc-500 mt-2">
                        4.8 Rating • 220+ Designs
                    </p>

                    <div class="flex justify-center gap-3 mt-6">

                        <span class="px-3 py-1 rounded-full bg-pink-100 text-pink-700 text-xs font-semibold">
                            Figma
                        </span>

                        <span class="px-3 py-1 rounded-full bg-purple-100 text-purple-700 text-xs font-semibold">
                            UX
                        </span>

                    </div>

                    <button
                        class="mt-8 w-full bg-gradient-to-r from-amber-500 to-orange-500 text-white font-semibold py-3 rounded-2xl hover:shadow-lg transition">
                        Hire Now
                    </button>

                </div>

            </div>

            <!-- Card -->
            <div
                class="group relative bg-white rounded-3xl border border-zinc-200 overflow-hidden hover:-translate-y-2 hover:shadow-2xl transition duration-300">

                <div
                    class="absolute top-5 right-5 bg-amber-500 text-white text-xs font-semibold px-3 py-1 rounded-full">
                    Sponsored
                </div>

                <div class="p-8 text-center">

                    <img src="https://i.pravatar.cc/160?img=51"
                        class="w-28 h-28 rounded-full mx-auto border-4 border-white shadow-lg">

                    <h3 class="mt-6 text-xl font-bold text-zinc-900">
                        Sophia Taylor
                    </h3>

                    <p class="mt-2 text-amber-600 font-medium">
                        Digital Marketing Expert
                    </p>

                    <div class="flex justify-center gap-1 text-amber-400 mt-4">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                    <p class="text-sm text-zinc-500 mt-2">
                        5.0 Rating • 300+ Clients
                    </p>

                    <div class="flex justify-center gap-3 mt-6">

                        <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">
                            SEO
                        </span>

                        <span class="px-3 py-1 rounded-full bg-orange-100 text-orange-700 text-xs font-semibold">
                            Google Ads
                        </span>

                    </div>

                    <button
                        class="mt-8 w-full bg-gradient-to-r from-amber-500 to-orange-500 text-white font-semibold py-3 rounded-2xl hover:shadow-lg transition">
                        Hire Now
                    </button>

                </div>

            </div>

        </div>

        <!-- Bottom Banner -->
        <div
            class="mt-16 rounded-3xl bg-zinc-900 p-10 lg:p-12 flex flex-col lg:flex-row items-center justify-between gap-8">

            <div>

                <h3 class="text-3xl font-bold text-white">
                    Are You a Freelancer?
                </h3>

                <p class="mt-3 text-zinc-400 text-lg max-w-2xl">
                    Promote your profile, get featured on our homepage and receive
                    high-quality client inquiries every month.
                </p>

            </div>

            <a href="#"
                class="inline-flex items-center gap-3 bg-gradient-to-r from-amber-500 to-orange-500 px-8 py-4 rounded-2xl text-white font-semibold hover:shadow-xl transition">
                Advertise Your Profile
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </div>

</section>

<!-- ========================================= -->
<!-- FAQ Section -->
<!-- ========================================= -->
<section class="py-10 bg-gradient-to-b from-white to-zinc-50">

    <div class="max-w-7xl mx-auto px-6 lg:px-10">

        <!-- Heading -->
        <div class="text-center max-w-3xl mx-auto mb-6">

            <span
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-100 text-amber-700 text-sm font-semibold">
                <i class="fa-solid fa-circle-question"></i>
                Frequently Asked Questions
            </span>

            <h2 class="mt-6 text-4xl lg:text-5xl font-black text-zinc-900">
                Got Questions?
                <span class="text-amber-500">We've Got Answers</span>
            </h2>

            <p class="mt-6 text-lg leading-8 text-zinc-600">
                Learn how AIManager helps you discover the best software, compare
                products, and build custom business solutions.
            </p>

        </div>

        <div class="grid lg:grid-cols-1 gap-12 items-start">

            <!-- Left -->
            <div class="space-y-2">
                @foreach($faqs as $k => $v)
                <!-- Item -->
                <div class="faq-item bg-white rounded-3xl border border-zinc-200 shadow-sm overflow-hidden">

                    <button
                        class="faq-btn w-full flex items-center justify-between text-left px-8 py-6 hover:bg-zinc-50 transition">

                        <span class="text-lg font-semibold text-zinc-900">
                            {{ $v->question }}
                        </span>

                        <i class="fa-solid fa-plus text-amber-500 transition-transform duration-300"></i>

                    </button>

                    <div class="faq-content hidden px-8 pb-7 text-zinc-600 leading-8">
                        {{ $v->answer_desc }}
                    </div>

                </div>
                @endforeach
            </div>

        </div>

        <!-- Bottom CTA -->
    
    </div>
    <x-cta-section-component />

</section>

@endsection