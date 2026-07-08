@extends('layout')
@section('pages')
<div class="max-w-screen-2xl mx-auto p-6">
    <div class="h-48 border-2 border-dashed flex items-center justify-center bg-white rounded">Google AdSense
        970x250</div>
    <div class="grid lg:grid-cols-12 gap-6 mt-8">
        <!-- ========================================= -->
        <!-- Left Sticky Sidebar -->
        <!-- ========================================= -->

        <aside class="lg:col-span-3">

            <div class="sticky top-20 space-y-6">
                <!-- Google AdSense -->

                <div
                    class="bg-white rounded-3xl border-2 border-dashed border-zinc-300 h-[600px] flex items-center justify-center">

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

                <div class="bg-white rounded-3xl border border-zinc-200 shadow-sm p-6">

                    <div class="flex items-center justify-between mb-5">

                        <h3 class="text-xl font-bold">
                            Categories
                        </h3>

                        <span class="text-xs bg-amber-100 text-amber-700 px-3 py-1 rounded-full">
                            18
                        </span>

                    </div>

                    <div class="space-y-3">

                        <a href="#"
                            class="flex items-center justify-between rounded-2xl px-4 py-3 hover:bg-amber-50 hover:text-amber-600 transition">

                            <div class="flex items-center gap-3">

                                <i class="fa-solid fa-chart-line text-amber-500"></i>

                                <span>Project Management</span>

                            </div>

                            <span class="text-xs bg-zinc-100 px-2 py-1 rounded-full">
                                42
                            </span>

                        </a>

                        <a href="#"
                            class="flex items-center justify-between rounded-2xl px-4 py-3 hover:bg-amber-50 hover:text-amber-600 transition">

                            <div class="flex items-center gap-3">

                                <i class="fa-solid fa-users text-sky-500"></i>

                                <span>CRM Software</span>

                            </div>

                            <span class="text-xs bg-zinc-100 px-2 py-1 rounded-full">
                                35
                            </span>

                        </a>

                        <a href="#"
                            class="flex items-center justify-between rounded-2xl px-4 py-3 hover:bg-amber-50 hover:text-amber-600 transition">

                            <div class="flex items-center gap-3">

                                <i class="fa-solid fa-building text-indigo-500"></i>

                                <span>ERP</span>

                            </div>

                            <span class="text-xs bg-zinc-100 px-2 py-1 rounded-full">
                                29
                            </span>

                        </a>

                        <a href="#"
                            class="flex items-center justify-between rounded-2xl px-4 py-3 hover:bg-amber-50 hover:text-amber-600 transition">

                            <div class="flex items-center gap-3">

                                <i class="fa-solid fa-user-tie text-green-500"></i>

                                <span>HRMS</span>

                            </div>

                            <span class="text-xs bg-zinc-100 px-2 py-1 rounded-full">
                                18
                            </span>

                        </a>

                        <a href="#"
                            class="flex items-center justify-between rounded-2xl px-4 py-3 hover:bg-amber-50 hover:text-amber-600 transition">

                            <div class="flex items-center gap-3">

                                <i class="fa-solid fa-robot text-purple-500"></i>

                                <span>AI Tools</span>

                            </div>

                            <span class="text-xs bg-zinc-100 px-2 py-1 rounded-full">
                                67
                            </span>

                        </a>

                        <a href="#"
                            class="flex items-center justify-between rounded-2xl px-4 py-3 hover:bg-amber-50 hover:text-amber-600 transition">

                            <div class="flex items-center gap-3">

                                <i class="fa-solid fa-money-bill-wave text-emerald-500"></i>

                                <span>Accounting</span>

                            </div>

                            <span class="text-xs bg-zinc-100 px-2 py-1 rounded-full">
                                24
                            </span>

                        </a>

                    </div>

                </div>

                <!-- Popular Tags -->

                <div class="bg-white rounded-3xl border border-zinc-200 shadow-sm p-6">

                    <h3 class="text-xl font-bold mb-5">

                        Popular Tags

                    </h3>

                    <div class="flex flex-wrap gap-3">

                        <a href="#"
                            class="px-4 py-2 rounded-full bg-zinc-100 hover:bg-amber-500 hover:text-white transition">
                            AI
                        </a>

                        <a href="#"
                            class="px-4 py-2 rounded-full bg-zinc-100 hover:bg-amber-500 hover:text-white transition">
                            CRM
                        </a>

                        <a href="#"
                            class="px-4 py-2 rounded-full bg-zinc-100 hover:bg-amber-500 hover:text-white transition">
                            ERP
                        </a>

                        <a href="#"
                            class="px-4 py-2 rounded-full bg-zinc-100 hover:bg-amber-500 hover:text-white transition">
                            HRMS
                        </a>

                        <a href="#"
                            class="px-4 py-2 rounded-full bg-zinc-100 hover:bg-amber-500 hover:text-white transition">
                            SaaS
                        </a>

                        <a href="#"
                            class="px-4 py-2 rounded-full bg-zinc-100 hover:bg-amber-500 hover:text-white transition">
                            Automation
                        </a>

                        <a href="#"
                            class="px-4 py-2 rounded-full bg-zinc-100 hover:bg-amber-500 hover:text-white transition">
                            Startups
                        </a>

                    </div>

                </div>



            </div>

        </aside>
        <main class="lg:col-span-6 grid md:grid-cols-2 gap-6">
            <!-- ========================================= -->
            <!-- Premium Blog Card -->
            <!-- ========================================= -->
            @foreach(range(0,7) as $k => $v)
            <div
                class="group bg-white rounded-3xl border border-zinc-200 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">

                <!-- Thumbnail -->
                <div class="relative overflow-hidden">

                    <img src="https://picsum.photos/600/400?random=1" alt="Blog Thumbnail"
                        class="w-full h-60 object-cover transition duration-500 group-hover:scale-110">

                    <!-- Category -->

                    <span
                        class="absolute top-5 left-5 bg-amber-500 text-white px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wide">

                        Project Management

                    </span>

                    <!-- Read Time -->

                    <span
                        class="absolute bottom-5 left-5 bg-white/90 backdrop-blur px-3 py-2 rounded-full text-xs font-semibold">

                        <i class="fa-regular fa-clock mr-1"></i>

                        8 Min Read

                    </span>

                </div>

                <!-- Content -->

                <div class="p-7">

                    <!-- Meta -->

                    <div class="flex items-center justify-between text-sm text-zinc-500">

                        <div class="flex items-center gap-2">

                            <i class="fa-regular fa-calendar"></i>

                            June 30, 2026

                        </div>

                        <div class="flex items-center gap-2">

                            <i class="fa-regular fa-eye"></i>

                            12.5K

                        </div>

                    </div>

                    <!-- Title -->

                    <h3
                        class="text-xl font-bold mt-5 leading-snug group-hover:text-amber-600 transition line-clamp-2">

                        <a href="/blog/best-project-management-software-for-2026">Best Project Management Software for Small Businesses in 2026</a>

                    </h3>

                    <!-- Description -->

                    <p class="text-zinc-600 mt-4 leading-7 line-clamp-3 hidden">

                        Discover the best project management software with AI features,
                        affordable pricing, team collaboration, automation, and advanced
                        reporting for businesses of every size.

                    </p>

                    <!-- Tags -->

                    <div class="flex flex-wrap gap-2 mt-6">

                        <span class="bg-zinc-100 text-zinc-700 px-3 py-1 rounded-full text-xs">

                            AI

                        </span>

                        <span class="bg-zinc-100 text-zinc-700 px-3 py-1 rounded-full text-xs">

                            SaaS

                        </span>

                        <span class="bg-zinc-100 text-zinc-700 px-3 py-1 rounded-full text-xs">

                            Productivity

                        </span>

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