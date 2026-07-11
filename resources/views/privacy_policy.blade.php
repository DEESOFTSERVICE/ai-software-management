  @extends('layout')

  @section('title',$metaTags->meta_title)
  @section('meta_tags')
  <meta name="title" content="{{ $metaTags->meta_title }}">
  <meta name="description" content="{{ $metaTags->meta_description }}">
  <meta name="keywords" content="">
  <meta property="og:title" content="{{ $metaTags->meta_title }}" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:image" content="{{ env('MAIN_SERVER_URL').'/uploads/general_setting_images/'.$websiteSetting->header_logo }}" />
  <meta property="og:description" content="{{ $metaTags->meta_description }}" />
  <link rel="canonical" href="{{ url()->current() }}" />

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="{{  $metaTags->meta_title }}">
  <meta name="twitter:description" content="{{ $metaTags->meta_description }}">
  <meta name="twitter:image" content="{{ env('MAIN_SERVER_URL').'/uploads/general_setting_images/'.$websiteSetting->header_logo }}">
  <meta name="twitter:url" content="{{ url()->current() }}">
  @endsection
  @section('pages')
      <section class="bg-gradient-to-r from-amber-500 to-orange-500 py-20">

        <div class="max-w-5xl mx-auto px-6 text-center text-white">

            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-white/20 mb-8">
                <i class="fa-solid fa-shield-halved text-4xl"></i>
            </div>

            <h1 class="text-5xl font-black">
                Privacy Policy
            </h1>

            <p class="mt-6 text-lg text-amber-100 max-w-3xl mx-auto">
                We value your privacy and are committed to protecting your personal
                information. This page explains how we collect, use, and safeguard your data.
            </p>

            <p class="mt-6 text-sm text-white/80">
                Last Updated: July 2026
            </p>

        </div>

    </section>

    <!-- Content -->

    <section class="py-20 bg-zinc-50">

        <div class="max-w-5xl mx-auto px-6">

            <div class="bg-white rounded-3xl shadow-sm p-10 lg:p-14 space-y-12">

                <div>

                    <h2 class="text-3xl font-bold mb-5">
                        Information We Collect
                    </h2>

                    <p class="text-zinc-600 leading-8">
                        We may collect your name, email address, phone number,
                        company information, and any information you submit through
                        contact forms or consultation requests.
                    </p>

                </div>

                <div>

                    <h2 class="text-3xl font-bold mb-5">
                        How We Use Your Information
                    </h2>

                    <ul class="space-y-4 text-zinc-600">

                        <li>✓ Provide software recommendations.</li>
                        <li>✓ Respond to inquiries.</li>
                        <li>✓ Improve website performance.</li>
                        <li>✓ Send updates if subscribed.</li>
                        <li>✓ Develop custom software solutions.</li>

                    </ul>

                </div>

                <div>

                    <h2 class="text-3xl font-bold mb-5">
                        Cookies
                    </h2>

                    <p class="text-zinc-600 leading-8">
                        We use cookies to improve user experience, analyze website
                        traffic, and personalize content and advertisements.
                    </p>

                </div>

                <div>

                    <h2 class="text-3xl font-bold mb-5">
                        Third-Party Services
                    </h2>

                    <p class="text-zinc-600 leading-8">
                        Our website may contain affiliate links, Google AdSense
                        advertisements, analytics tools, and third-party software
                        providers that may collect information according to their own
                        privacy policies.
                    </p>

                </div>

                <div>

                    <h2 class="text-3xl font-bold mb-5">
                        Data Security
                    </h2>

                    <p class="text-zinc-600 leading-8">
                        We implement industry-standard security measures to protect
                        your information from unauthorized access or disclosure.
                    </p>

                </div>

                <div>

                    <h2 class="text-3xl font-bold mb-5">
                        Contact Us
                    </h2>

                    <p class="text-zinc-600 leading-8">
                        If you have any questions regarding this Privacy Policy,
                        please contact us through our Contact page.
                    </p>

                </div>

            </div>

        </div>

    </section>
  @endsection