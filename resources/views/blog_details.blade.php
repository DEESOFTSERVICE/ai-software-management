@extends('layout')
@section('pages')
<section class="bg-zinc-100 py-10">

    <div class="max-w-screen-2xl mx-auto px-6">

        <div class="grid lg:grid-cols-12 gap-8">

            <!-- ================================= -->
            <!-- LEFT SIDEBAR -->
            <!-- ================================= -->

            <aside class="lg:col-span-3">

                <div class="sticky top-24 space-y-6">

                    <!-- Author -->
                    <div class="bg-white rounded-3xl p-6 shadow-sm border">

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

                    <div class="bg-white rounded-3xl p-6 shadow-sm border">

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
                        class="bg-white rounded-3xl h-[600px] border-2 border-dashed border-zinc-300 flex items-center justify-center">

                        Google AdSense 300x600

                    </div>

                </div>

            </aside>

            <!-- ================================= -->
            <!-- BLOG CONTENT -->
            <!-- ================================= -->

            <main class="lg:col-span-6">

                <article class="bg-white rounded-3xl shadow-sm overflow-hidden">

                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=1200"
                        class="w-full h-[450px] object-cover">

                    <div class="p-10">

                        <span class="bg-amber-100 text-amber-700 px-4 py-2 rounded-full text-sm font-semibold">

                            Project Management

                        </span>

                        <h1 class="text-5xl font-black mt-6 leading-tight">

                            Best Project Management Software in 2026

                        </h1>

                        <div class="flex flex-wrap gap-6 text-zinc-500 text-sm mt-6">

                            <span>

                                <i class="fa fa-calendar"></i>

                                June 30, 2026

                            </span>

                            <span>

                                <i class="fa fa-clock"></i>

                                12 Min Read

                            </span>

                            <span>

                                <i class="fa fa-eye"></i>

                                8,954 Views

                            </span>

                        </div>

                        <div class="prose max-w-none mt-10">

                            <h2 id="overview">
                                Introduction
                            </h2>

                            <p>

                                Lorem ipsum dolor sit amet consectetur adipisicing elit...

                            </p>

                            <p>

                                Lorem ipsum dolor sit amet consectetur adipisicing elit...

                            </p>

                        </div>

                        <!-- Adsense -->

                        <div class="my-12 rounded-3xl border-2 border-dashed h-36 flex items-center justify-center">

                            Responsive Google AdSense

                        </div>

                        <div class="prose max-w-none">

                            <h2 id="features">

                                Features

                            </h2>

                            <p>

                                Lorem ipsum dolor sit amet...

                            </p>

                            <h2 id="pricing">

                                Pricing

                            </h2>

                            <p>

                                Lorem ipsum dolor sit amet...

                            </p>

                            <h2 id="pros">

                                Pros & Cons

                            </h2>

                            <ul>

                                <li>Easy to use</li>

                                <li>Affordable</li>

                                <li>Powerful integrations</li>

                            </ul>

                        </div>
                        <!-- ========================================= -->
                        <!-- Blog Content -->
                        <!-- ========================================= -->

                        <div class="prose prose-lg max-w-none prose-zinc">

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae turpis
                                vulputate, vulputate ipsum at, pretium mauris. Curabitur vitae sem non
                                velit bibendum feugiat. Aliquam erat volutpat. Donec at nibh ac ligula
                                faucibus scelerisque. Sed posuere magna vel velit faucibus, eget
                                pellentesque neque tincidunt.
                            </p>

                            <h2>What is Project Management Software?</h2>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel
                                sollicitudin nisi. Duis dignissim, purus non placerat malesuada, risus
                                purus scelerisque lorem, sed feugiat erat risus vitae elit. Curabitur
                                pulvinar bibendum ipsum, et cursus purus consequat vitae.
                            </p>

                            <blockquote>
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                                tincidunt mauris at purus feugiat, nec luctus est luctus."
                            </blockquote>

                            <h2>Key Benefits</h2>

                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                <li>Vestibulum ante ipsum primis in faucibus orci luctus.</li>
                                <li>Integer eget justo sed lorem facilisis hendrerit.</li>
                                <li>Donec in purus sit amet erat feugiat volutpat.</li>
                                <li>Nullam luctus turpis vitae augue efficitur suscipit.</li>
                            </ul>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                potenti. Integer vel orci nec lorem vulputate fermentum. Sed at lacus
                                vitae neque dignissim ultrices. Mauris tempor orci sed justo tristique
                                luctus.
                            </p>

                            <img src="https://picsum.photos/1200/600" alt="Software Dashboard" class="rounded-2xl">

                            <h2>Important Features</h2>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempor
                                arcu sed lorem faucibus, sit amet dictum est placerat. Morbi tincidunt
                                est in purus volutpat, sed sollicitudin lectus fermentum.
                            </p>

                            <ol>
                                <li>Task Management</li>
                                <li>Project Planning</li>
                                <li>Time Tracking</li>
                                <li>Team Collaboration</li>
                                <li>Reporting Dashboard</li>
                                <li>AI Automation</li>
                            </ol>

                            <h3>Why Businesses Choose It</h3>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                                habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Donec gravida sapien at felis porta, sed posuere mauris
                                facilisis.
                            </p>

                            <div class="grid md:grid-cols-2 gap-6">

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

                            <h2>Pricing</h2>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed
                                lacus in lectus posuere placerat. Cras tincidunt purus eget turpis
                                convallis, sed cursus augue hendrerit.
                            </p>

                            <table>

                                <thead>

                                    <tr>

                                        <th>Plan</th>

                                        <th>Monthly Price</th>

                                        <th>Best For</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>

                                        <td>Free</td>

                                        <td>$0</td>

                                        <td>Individuals</td>

                                    </tr>

                                    <tr>

                                        <td>Starter</td>

                                        <td>$9</td>

                                        <td>Small Teams</td>

                                    </tr>

                                    <tr>

                                        <td>Business</td>

                                        <td>$19</td>

                                        <td>Growing Companies</td>

                                    </tr>

                                    <tr>

                                        <td>Enterprise</td>

                                        <td>Custom</td>

                                        <td>Large Organizations</td>

                                    </tr>

                                </tbody>

                            </table>

                            <h2>Final Thoughts</h2>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et sapien
                                sed nisl malesuada aliquet. Integer ultricies nibh non velit volutpat,
                                quis faucibus augue volutpat. Morbi pellentesque consequat elit, sed
                                convallis orci aliquam ac.
                            </p>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae
                                sapien vitae velit efficitur malesuada. Vestibulum nec ligula eget
                                mauris scelerisque laoreet. Donec malesuada turpis nec augue varius,
                                vitae feugiat justo porta. Sed viverra, mauris vitae volutpat dictum,
                                augue velit luctus neque, sed faucibus lorem justo at elit.
                            </p>

                        </div>

                        <!-- Adsense -->

                        <div class="my-12 rounded-3xl border-2 border-dashed h-24 flex items-center justify-center">

                            Google AdSense 728x90

                        </div>

                        <div class="prose max-w-none">

                            <h2 id="faq">

                                Frequently Asked Questions

                            </h2>

                            <p>

                                Lorem ipsum dolor sit amet...

                            </p>

                        </div>

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

                            <a href="#" class="flex gap-4">

                                <img src="https://picsum.photos/90/70?1" class="rounded-xl">

                                <div>

                                    <h4 class="font-semibold">

                                        Best CRM Software

                                    </h4>

                                    <span class="text-sm text-zinc-500">

                                        6 Min Read

                                    </span>

                                </div>

                            </a>

                            <a href="#" class="flex gap-4">

                                <img src="https://picsum.photos/90/70?2" class="rounded-xl">

                                <div>

                                    <h4 class="font-semibold">

                                        Top ERP Platforms

                                    </h4>

                                    <span class="text-sm text-zinc-500">

                                        8 Min Read

                                    </span>

                                </div>

                            </a>

                            <a href="#" class="flex gap-4">

                                <img src="https://picsum.photos/90/70?3" class="rounded-xl">

                                <div>

                                    <h4 class="font-semibold">

                                        Monday vs ClickUp

                                    </h4>

                                    <span class="text-sm text-zinc-500">

                                        10 Min Read

                                    </span>

                                </div>

                            </a>

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