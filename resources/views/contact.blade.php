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
<section class="bg-gradient-to-r from-amber-500 to-orange-500 py-20">

    <div class="max-w-7xl mx-auto px-6 text-center text-white">

        <span class="uppercase tracking-[4px] font-semibold text-sm">
            Contact Us
        </span>

        <h1 class="text-5xl font-black mt-4">
            Let's Build Something Amazing
        </h1>

        <p class="max-w-3xl mx-auto mt-6 text-lg text-white/90">
            Looking for the perfect software or need a custom CRM, ERP,
            HRMS, Website, Mobile App, or AI solution? We'd love to hear
            about your project.
        </p>

    </div>

</section>

<!-- Contact -->

<section class="py-10">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-5 gap-10">

            <!-- Left -->

            <div class="lg:col-span-2 space-y-6">

                <div class="bg-white rounded-3xl p-8 shadow-sm">

                    <h2 class="text-3xl font-bold">
                        Get in Touch
                    </h2>

                    <p class="text-zinc-600 mt-4 leading-7">
                        Fill out the form and our team will get back to you
                        within 24 hours.
                    </p>

                    <div class="mt-10 space-y-6">

                        <div class="flex gap-4">

                            <div class="w-14 h-14 rounded-2xl bg-amber-100 flex items-center justify-center">

                                <i class="fa-solid fa-envelope text-amber-600"></i>

                            </div>

                            <div>

                                <p class="text-sm text-zinc-500">
                                    Email
                                </p>

                                <h4 class="font-semibold">
                                    hello@example.com
                                </h4>

                            </div>

                        </div>

                        <div class="flex gap-4">

                            <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center">

                                <i class="fa-brands fa-whatsapp text-green-600"></i>

                            </div>

                            <div>

                                <p class="text-sm text-zinc-500">
                                    WhatsApp
                                </p>

                                <h4 class="font-semibold">
                                    +91 98765 43210
                                </h4>

                            </div>

                        </div>

                        <div class="flex gap-4">

                            <div class="w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center">

                                <i class="fa-solid fa-clock text-blue-600"></i>

                            </div>

                            <div>

                                <p class="text-sm text-zinc-500">
                                    Working Hours
                                </p>

                                <h4 class="font-semibold">
                                    Mon - Sat | 10:00 AM - 7:00 PM
                                </h4>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Right -->

            <div class="lg:col-span-3">

                <div class="bg-white rounded-3xl shadow-sm p-10">

                    <h2 class="text-3xl font-bold mb-8">
                        Request a Free Consultation
                    </h2>

                    <form class="space-y-6">

                        <div class="grid md:grid-cols-2 gap-6">

                            <div>

                                <label class="font-medium mb-2 block">
                                    Full Name
                                </label>

                                <input type="text" placeholder="Enter your full name"
                                    class="w-full rounded-2xl border border-zinc-300 px-5 py-4 focus:outline-none focus:ring-2 focus:ring-amber-500">

                            </div>

                            <div>

                                <label class="font-medium mb-2 block">
                                    Email Address
                                </label>

                                <input type="email" placeholder="Enter your email"
                                    class="w-full rounded-2xl border border-zinc-300 px-5 py-4 focus:outline-none focus:ring-2 focus:ring-amber-500">

                            </div>

                        </div>

                        <div class="grid md:grid-cols-2 gap-6">

                            <div>

                                <label class="font-medium mb-2 block">
                                    WhatsApp Number
                                </label>

                                <input type="tel" placeholder="+91 9876543210"
                                    class="w-full rounded-2xl border border-zinc-300 px-5 py-4 focus:outline-none focus:ring-2 focus:ring-amber-500">

                            </div>

                            <div>

                                <label class="font-medium mb-2 block">
                                    Service Type
                                </label>

                                <select
                                    class="w-full rounded-2xl border border-zinc-300 px-5 py-4 focus:outline-none focus:ring-2 focus:ring-amber-500">

                                    <option>Select Service</option>
                                    <option>Software Recommendation</option>
                                    <option>CRM Development</option>
                                    <option>ERP Development</option>
                                    <option>HRMS Development</option>
                                    <option>Inventory Software</option>
                                    <option>Website Development</option>
                                    <option>Mobile App Development</option>
                                    <option>AI Solution</option>
                                    <option>Custom Software</option>

                                </select>

                            </div>

                        </div>

                        <div>

                            <label class="font-medium mb-2 block">
                                Estimated Budget
                            </label>

                            <select
                                class="w-full rounded-2xl border border-zinc-300 px-5 py-4 focus:outline-none focus:ring-2 focus:ring-amber-500">

                                <option>Select Budget</option>
                                <option>Under ₹25,000</option>
                                <option>₹25,000 - ₹50,000</option>
                                <option>₹50,000 - ₹1,00,000</option>
                                <option>₹1,00,000 - ₹5,00,000</option>
                                <option>Above ₹5,00,000</option>

                            </select>

                        </div>

                        <div>

                            <label class="font-medium mb-2 block">
                                Project Requirements
                            </label>

                            <textarea rows="6" placeholder="Tell us about your project..."
                                class="w-full rounded-2xl border border-zinc-300 px-5 py-4 focus:outline-none focus:ring-2 focus:ring-amber-500 resize-none"></textarea>

                        </div>

                        <button
                            class="w-full bg-amber-500 hover:bg-amber-600 text-white font-semibold py-4 rounded-2xl transition">

                            <i class="fa-solid fa-paper-plane mr-2"></i>

                            Send Inquiry

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>
@endsection