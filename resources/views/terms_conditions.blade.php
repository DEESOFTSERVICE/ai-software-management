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
  
    <section class="bg-gradient-to-r from-zinc-900 to-zinc-800 py-20">

        <div class="max-w-5xl mx-auto px-6 text-center text-white">

            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-white/10 mb-8">
                <i class="fa-solid fa-file-contract text-4xl"></i>
            </div>

            <h1 class="text-5xl font-black">
                Terms & Conditions
            </h1>

            <p class="mt-6 text-lg text-zinc-300 max-w-3xl mx-auto">
                Please read these Terms and Conditions carefully before using our
                website or requesting software development services.
            </p>

            <p class="mt-6 text-sm text-zinc-400">
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
                        Acceptance of Terms
                    </h2>

                    <p class="text-zinc-600 leading-8">
                        By accessing this website, you agree to comply with these
                        Terms and Conditions and all applicable laws.
                    </p>

                </div>

                <div>

                    <h2 class="text-3xl font-bold mb-5">
                        Software Reviews
                    </h2>

                    <p class="text-zinc-600 leading-8">
                        Reviews and comparisons are based on our research and should
                        not be considered financial or legal advice.
                    </p>

                </div>

                <div>

                    <h2 class="text-3xl font-bold mb-5">
                        Affiliate Disclosure
                    </h2>

                    <p class="text-zinc-600 leading-8">
                        Some links on this website are affiliate links. We may earn
                        a commission when you purchase software through these links,
                        at no additional cost to you.
                    </p>

                </div>

                <div>

                    <h2 class="text-3xl font-bold mb-5">
                        Custom Software Development
                    </h2>

                    <p class="text-zinc-600 leading-8">
                        Project scope, pricing, timelines, ownership, and payment
                        terms are agreed separately with each client through formal
                        quotations or contracts.
                    </p>

                </div>

                <div>

                    <h2 class="text-3xl font-bold mb-5">
                        Intellectual Property
                    </h2>

                    <p class="text-zinc-600 leading-8">
                        All website content including logos, graphics, text, and
                        designs are protected by copyright laws unless otherwise
                        stated.
                    </p>

                </div>

                <div>

                    <h2 class="text-3xl font-bold mb-5">
                        Limitation of Liability
                    </h2>

                    <p class="text-zinc-600 leading-8">
                        We shall not be liable for any damages resulting from the
                        use of this website, third-party software, or external
                        services.
                    </p>

                </div>

                <div>

                    <h2 class="text-3xl font-bold mb-5">
                        Changes to Terms
                    </h2>

                    <p class="text-zinc-600 leading-8">
                        We reserve the right to modify these Terms and Conditions at
                        any time without prior notice.
                    </p>

                </div>

                <div>

                    <h2 class="text-3xl font-bold mb-5">
                        Contact Information
                    </h2>

                    <p class="text-zinc-600 leading-8">
                        If you have any questions regarding these Terms &
                        Conditions, please contact us through our Contact page.
                    </p>

                </div>

            </div>

        </div>

    </section>
  @endsection