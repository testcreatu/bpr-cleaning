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

Route::get('/','frontend\FrontendController@home');

Route::get('home','frontend\FrontendController@home');

Route::get('cleaning_services', function () {
    return view('booking.booking-services');
});

Route::get('booking_form', function () {
    return view('booking.booking-form');
});

Route::get('about_us','frontend\FrontendController@about');

Route::get('why_us','frontend\FrontendController@whyUs');

Route::get('why_us_subpage/{slug}', 'frontend\FrontendController@compliments');

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


    // Services
    Route::get('/cd-admin/view-services','backend\ServicesController@viewServices')->name('view-services');
    Route::get('/cd-admin/add-services','backend\ServicesController@addServicesForm')->name('add-services-form');
    Route::post('/cd-admin/add-services','backend\ServicesController@addServices')->name('add-services');
    Route::get('/cd-admin/edit-services/{id}','backend\ServicesController@editServicesForm')->name('edit-services-form');
    Route::post('/cd-admin/edit-services/{id}','backend\ServicesController@editServices')->name('edit-services');
    Route::get('/cd-admin/delete-services/{id}','backend\ServicesController@deleteServices')->name('delete-services');


    // Features
    Route::get('/cd-admin/view-features','backend\FeaturesController@viewFeatures')->name('view-features');
    Route::get('/cd-admin/add-features','backend\FeaturesController@addFeaturesForm')->name('add-features-form');
    Route::post('/cd-admin/add-features','backend\FeaturesController@addFeatures')->name('add-features');
    Route::get('/cd-admin/edit-features/{id}','backend\FeaturesController@editFeaturesForm')->name('edit-features-form');
    Route::post('/cd-admin/edit-features/{id}','backend\FeaturesController@editFeatures')->name('edit-features');
    Route::get('/cd-admin/delete-features/{id}','backend\FeaturesController@deleteFeatures')->name('delete-features');


    //FAQ
    Route::get('cd-admin/add-faq','backend\FaqController@addFaqForm')->name('add-faq-form');
    Route::get('/cd-admin/view-faq','backend\FaqController@viewFaq')->name('view-faq');
    Route::post('/cd-admin/add-faq','backend\FaqController@addFaq')->name('add-faq');
    Route::get('/cd-admin/edit-faq/{key}','backend\FaqController@editFaqForm')->name('edit-faq-form');
    Route::post('/cd-admin/edi-faq/{key}','backend\FaqController@editFaq')->name('edit-faq');
    Route::get('/cd-admin/delete-faq/{key}','backend\FaqController@deleteFaq')->name('delete-faq');


    //Testimonials
    Route::get('/cd-admin/add-testimonial','backend\TestimonialController@addTestimonialForm')->name('add-testimonial-form');
    Route::post('/cd-admin/add-testimonial','backend\TestimonialController@addTestimonial')->name('add-testimonial');
    Route::get('/cd-admin/view-testimonial','backend\TestimonialController@viewTestimonial')->name('view-testimonial');
    Route::get('/cd-admin/edit-testimonial/{id}','backend\TestimonialController@editTestimonialForm')->name('edit-testimonial-form');
    Route::post('/cd-admin/edit-testimonial/{id}','backend\TestimonialController@editTestimonial')->name('edit-testimonial');
    Route::get('/cd-admin/delete-testimonial/{id}','backend\TestimonialController@deleteTestimonial')->name('delete-testimonial');


     //Compliments
    Route::get('/cd-admin/add-compliments','backend\ComplimentsController@addComplimentsForm')->name('add-compliments-form');
    Route::post('/cd-admin/add-compliments','backend\ComplimentsController@addCompliments')->name('add-compliments');
    Route::get('/cd-admin/view-compliments','backend\ComplimentsController@viewCompliments')->name('view-compliments');
    Route::get('/cd-admin/edit-compliments/{id}','backend\ComplimentsController@editComplimentsForm')->name('edit-compliments-form');
    Route::post('/cd-admin/edit-compliments/{id}','backend\ComplimentsController@editCompliments')->name('edit-compliments');
    Route::get('/cd-admin/delete-compliments/{id}','backend\ComplimentsController@deleteCompliments')->name('delete-compliments');


     //Social Links
    Route::get('/cd-admin/add-social-links','backend\SocialLinksController@addSocialLinksform')->name('add-social-links-form');
    Route::get('/cd-admin/view-social-links','backend\SocialLinksController@view')->name('view-social-links');
    Route::post('/store-social-links','backend\SocialLinksController@store')->name('add-social-links');
    Route::get('/cd-admin/edit-socialLinks/{id}','backend\SocialLinksController@editSocialLinksForm')->name('edit-social-links-form');
    Route::post('/update-social-links/{id}','backend\SocialLinksController@update')->name('edit-social-links');


//CEO Message
    Route::get('/cd-admin/add-ceo-message','backend\CeoMessageController@addCeoMessageForm')->name('add-ceo-message-form');
    Route::get('/cd-admin/view-ceo-message','backend\CeoMessageController@viewCeoMessage')->name('view-ceo-message');
    Route::post('/cd-admin/add-ceo-message','backend\CeoMessageController@addCeoMessage')->name('add-ceo-message');
    Route::get('/cd-admin/edit-ceo-message/{id}','backend\CeoMessageController@editCeoMessageForm')->name('edit-ceo-message-form');
    Route::post('/cd-admin/edit-ceo-message/{id}','backend\CeoMessageController@editCeoMessage')->name('edit-ceo-message');
});
