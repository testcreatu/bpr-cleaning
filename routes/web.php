<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.home');
});

Route::get('home', function () {
    return view('home.home');
});

Route::get('cleaning_services', function () {
    return view('booking.booking-services');
});

Route::get('booking_form', function () {
    return view('booking.booking-form');
});

Route::get('about_us', function () {
    return view('about.about-us');
});

Route::get('why_us', function () {
    return view('about.why-us');
});

Route::get('why_us_subpage', function () {
    return view('about.why-us-subpage');
});

Route::get('faq', function () {
    return view('about.faq');
});

Route::get('service_detail', function () {
    return view('service.service-detail');
});

Route::get('contact_us', function () {
    return view('contact.contact-us');
});

Route::get('blog_list', function () {
    return view('blog.blog-list');
});


Route::get('blog_detail', function () {
    return view('blog.blog-detail');
});



Route::get('link', function () {
    return view('link.link');
});