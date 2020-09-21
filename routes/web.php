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
Auth::routes(['register' => false]);

Route::group(['middleware'=>'auth'],function()
{
    Route::get('/cd-admin/dashboard', function(){
       return view('cd-admin.dashboard.dashboard');
   })->name('home');



    //About
    Route::get('/cd-admin/add-about','backend\AboutController@addAboutForm')->name('add-about-form');
    Route::get('/cd-admin/view-about','backend\AboutController@viewAbout')->name('view-about');
    Route::post('/cd-admin/add-about','backend\AboutController@addAbout')->name('add-about');
    Route::get('/cd-admin/edit-about/{id}','backend\AboutController@editAboutForm')->name('edit-about-form');
    Route::post('/cd-admin/edit-about/{id}','backend\AboutController@editAbout')->name('edit-about');


    //Carousel
    Route::get('/cd-admin/add-carousel','backend\CarouselController@addCarouselForm')->name('add-carousel-form');
    Route::post('/cd-admin/add-carousel','backend\CarouselController@addCarousel')->name('add-carousel');
    Route::get('/cd-admin/view-carousel','backend\CarouselController@viewCarousel')->name('view-carousel');
    Route::get('/cd-admin/edit-carousel/{id}','backend\CarouselController@editCarouselForm')->name('edit-carousel-form');
    Route::post('/cd-admin/edit-carousel/{id}','backend\CarouselController@editCarousel')->name('edit-carousel');
    Route::get('/cd-admin/delete-carousel/{id}','backend\CarouselController@deleteCarousel')->name('delete-carousel');


    //Blog
    Route::get('/cd-admin/add-blog','backend\BlogController@addBlogForm')->name('add-blog-form');
    Route::post('/cd-admin/add-blog','backend\BlogController@addBlog')->name('add-blog');
    Route::get('/cd-admin/view-blog','backend\BlogController@viewBlog')->name('view-blog');
    Route::get('/cd-admin/edit-blog/{id}','backend\BlogController@editBlogForm')->name('edit-blog-form');
    Route::post('/cd-admin/edit-blog/{id}','backend\BlogController@editBlog')->name('edit-blog');
    Route::get('/cd-admin/delete-blog/{id}','backend\BlogController@deleteBlog')->name('delete-blog');

    //Objective
    Route::get('/cd-admin/add-why-us','backend\ObjectiveController@addWhyUsForm')->name('add-why-us-form');
    Route::get('/cd-admin/view-why-us','backend\ObjectiveController@viewWhyUs')->name('view-why-us');
    Route::post('/cd-admin/add-why-us','backend\ObjectiveController@addWhyUs')->name('add-why-us');
    Route::get('/cd-admin/edit-why-us/{id}','backend\ObjectiveController@editWhyUsForm')->name('edit-why-us-form');
    Route::post('/cd-admin/edit-why-us/{id}','backend\ObjectiveController@editWhyUs')->name('edit-why-us');
    Route::get('/cd-admin/delete-why-us/{id}','backend\ObjectiveController@deleteWhyUs')->name('delete-why-us');

// Clients 
    Route::get('/cd-admin/add-partners','backend\PartnersController@addPartnersForm')->name('add-partners-form');
    Route::post('/cd-admin/add-partners','backend\PartnersController@addPartners')->name('add-partners');
    Route::get('/cd-admin/view-partners','backend\PartnersController@viewPartners')->name('view-partners');
    Route::get('/cd-admin/edit-partners/{id}','backend\PartnersController@editPartnersForm')->name('edit-partners-form');
    Route::post('/cd-admin/edit-partners/{id}','backend\PartnersController@editPartners')->name('edit-partners');
    Route::get('/cd-admin/delete-partners/{id}','backend\PartnersController@deletePartners')->name('delete-partners');
});
