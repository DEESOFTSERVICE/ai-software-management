<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/category/{slug}', [HomeController::class, 'category'])->name('blogs.category');
Route::get('/blog/{slug}', [HomeController::class, 'blogDetails'])->name('blog.details');
Route::get('/tag/{slug}', [HomeController::class, 'tags'])->name('blog.tags');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/cookie-policy', [HomeController::class, 'cookiePolicy'])->name('cookie.policy');
Route::get('/terms-conditions', [HomeController::class, 'termsConditions'])->name('terms.conditions');
Route::get('/disclaimer', [HomeController::class, 'disclaimer'])->name('disclaimer');

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/blogs-sitemap.xml', [SitemapController::class, 'blogsSitemap'])->name('blogs.sitemap');
Route::get('/pages-sitemap.xml', [SitemapController::class, 'pagesSitemap'])->name('pages.sitemap');

Route::get('/robots.txt', [SitemapController::class, 'robots']);