<?php

use Illuminate\Support\Facades\Storage;

Route::get('/imgs', function () {
    return \App\OptionsQuery::getImages();
});



Route::get('/', 'WebsiteController@getHomePage')->name('homePage');
Route::get('/about', 'WebsiteController@getAboutPage')->name('aboutPage');
Route::get('/services', 'WebsiteController@getServicesPage')->name('servicesPage');
Route::get('/client-resources', 'WebsiteController@getClientResourcesPage')->name('clientResourcesPage');
Route::get('/contact', 'WebsiteController@getContactPage')->name('contactPage');
Route::get('/get-a-quote', 'WebsiteController@getGetAQuotePage')->name('getAQuotePage');
Route::get('/privacy', 'WebsiteController@getPrivacyPage')->name('privacyPage');
Route::get('/sitemap', 'ƒ@getSitemapPage')->name('sitemapPage');

// Blog Routes
// Route::get('/blog', 'PostController@getBlogPage')->name('blogPage');
//************ */ Run php artisan make:controller PostController -mr **********

//Test S3
//Route::get('/to-s3', function () {
//    Storage::put('testing-folder/test.png', 'img/asbsw-suited-banner-compr.png');
//    return 'upload complete!';
//});

// Service Details Routes
Route::get('/annuity-services', 'ServicePagesController@getAnnuityServicesPage')->name('annuity-services');
Route::get('/extended-care-services', 'ServicePagesController@getExtendedCareServicesPage')->name('extended-care-services');
Route::get('/life-insurance-services', 'ServicePagesController@getLifeInsuranceServicesPage')->name('life-insurance-services');
Route::get('/medicare-services', 'ServicePagesController@getMedicareServicesPage')->name('medicare-services');
Route::get('/retirement-planning-services', 'ServicePagesController@getRetirementPlanningServicesPage')->name('retirement-planning-services');
Route::get('/specialized-healthcare-services', 'ServicePagesController@getSpecializedHealthcareServicesPage')->name('specialized-healthcare-services');

//Form Handlers
Route::post('/contact-form-submission', 'FormSubmissionsController@contact')->name('contact-form-handler');
Route::post('/quote-form-submission', 'FormSubmissionsController@quote')->name('quote-form-handler');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('blog')->group(function () {
    Route::get('/', 'BlogController@getPosts')->name('blog.index');
    Route::middleware('Canvas\Http\Middleware\ViewThrottle')->get('{slug}', 'BlogController@findPostBySlug')->name('blog.post');
    Route::get('tag/{slug}', 'BlogController@getPostsByTag')->name('blog.tag');
    Route::get('topic/{slug}', 'BlogController@getPostsByTopic')->name('blog.topic');
});
