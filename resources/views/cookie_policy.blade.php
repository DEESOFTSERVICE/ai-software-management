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

    <div class="max-w-7xl mx-auto px-6 text-center text-white">

      <div
        class="w-20 h-20 mx-auto rounded-3xl bg-white/20 flex items-center justify-center text-4xl">

        <i class="fa-solid fa-cookie-bite"></i>

      </div>

      <h1 class="mt-8 text-5xl font-black">

        Cookie Policy

      </h1>

      <p class="mt-6 max-w-3xl mx-auto text-lg text-amber-100 leading-8">

        This Cookie Policy explains how AI Management Software uses cookies and similar
        technologies to improve your browsing experience, analyze website traffic,
        and personalize content.

      </p>

      <div class="mt-8 text-sm text-amber-100">

        Last Updated : July 11, 2026

      </div>

    </div>

  </section>

  <!-- Content -->

  <section class="py-20">

    <div class="max-w-5xl mx-auto px-6">

      <div class="bg-white rounded-3xl shadow-sm p-10 space-y-12">

        <!-- Section -->

        <div>

          <h2 class="text-2xl font-bold text-zinc-900">

            What Are Cookies?

          </h2>

          <p class="mt-5 text-zinc-600 leading-8">

            Cookies are small text files stored on your device when you visit our website.
            They help us remember your preferences, improve website functionality,
            analyze visitor behavior, and deliver relevant content.

          </p>

        </div>

        <div>

          <h2 class="text-2xl font-bold">

            Why We Use Cookies

          </h2>

          <div class="grid md:grid-cols-2 gap-6 mt-8">

            <div class="border rounded-2xl p-6">

              <i class="fa-solid fa-shield-halved text-3xl text-amber-500"></i>

              <h3 class="font-bold mt-5">

                Essential Cookies

              </h3>

              <p class="mt-3 text-zinc-600 leading-7">

                Required for website functionality such as security,
                navigation and accessibility.

              </p>

            </div>

            <div class="border rounded-2xl p-6">

              <i class="fa-solid fa-chart-line text-3xl text-blue-500"></i>

              <h3 class="font-bold mt-5">

                Analytics Cookies

              </h3>

              <p class="mt-3 text-zinc-600 leading-7">

                Help us understand visitor behavior through Google Analytics
                and similar services.

              </p>

            </div>

            <div class="border rounded-2xl p-6">

              <i class="fa-solid fa-bullhorn text-3xl text-green-500"></i>

              <h3 class="font-bold mt-5">

                Advertising Cookies

              </h3>

              <p class="mt-3 text-zinc-600 leading-7">

                Used by Google AdSense and advertising partners to display
                personalized advertisements.

              </p>

            </div>

            <div class="border rounded-2xl p-6">

              <i class="fa-solid fa-user-check text-3xl text-purple-500"></i>

              <h3 class="font-bold mt-5">

                Preference Cookies

              </h3>

              <p class="mt-3 text-zinc-600 leading-7">

                Remember language settings, preferences and recently viewed
                software recommendations.

              </p>

            </div>

          </div>

        </div>

        <div>

          <h2 class="text-2xl font-bold">

            Third-Party Cookies

          </h2>

          <p class="mt-5 text-zinc-600 leading-8">

            Our website may use trusted third-party services including Google
            Analytics, Google AdSense, affiliate partners, and social media
            platforms that may place cookies on your device to measure
            performance and improve advertising relevance.

          </p>

        </div>

        <div>

          <h2 class="text-2xl font-bold">

            Managing Cookies

          </h2>

          <p class="mt-5 text-zinc-600 leading-8">

            Most browsers allow you to control cookies through browser settings.
            You may disable or delete cookies at any time. Please note that
            disabling cookies may affect certain website features and user
            experience.

          </p>

        </div>

        <div>

          <h2 class="text-2xl font-bold">

            Changes to This Policy

          </h2>

          <p class="mt-5 text-zinc-600 leading-8">

            We may update this Cookie Policy from time to time. Any changes will
            be posted on this page with an updated revision date.

          </p>

        </div>

        <div>

          <h2 class="text-2xl font-bold">

            Contact Us

          </h2>

          <p class="mt-5 text-zinc-600 leading-8">

            If you have any questions regarding our Cookie Policy, please contact
            us through our Contact Page or email us.

          </p>

        </div>

      </div>

    </div>

  </section>

  @endsection