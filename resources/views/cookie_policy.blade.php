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
  
  @endsection