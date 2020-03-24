<?php

use Illuminate\Support\Facades\Storage;

Route::get('/imgs', function () {
    return \App\OptionsQuery::getImages();
});



Route::get('/', 'WebsiteController@getHomePage');
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
Route::get('/wise-retirement', 'WebsiteController@getWiseRetirementPage')->name('wiseRetirementDetail');
Route::get('/protected-investments', 'WebsiteController@getProtectedInvestmentsPage')->name('protectedInvestmentsDetail');
Route::get('/diversify-your-nestegg', 'WebsiteController@getDiversifyYourNesteggPage')->name('diversifyYourNesteggDetail');
Route::get('/expect-the-unexpected', 'WebsiteController@getExpectTheUnexpectedPage')->name('expectTheUnexpectedDetail');
Route::get('/medicare360', 'WebsiteController@getMedicare360Page')->name('medicare360Detail');
Route::get('/burial-preperation', 'WebsiteController@getBurialPreperationPage')->name('burialPreperationDetail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('blog')->group(function () {
    Route::get('/', 'BlogController@getPosts')->name('blog.index');
    Route::middleware('Canvas\Http\Middleware\ViewThrottle')->get('{slug}', 'BlogController@findPostBySlug')->name('blog.post');
    Route::get('tag/{slug}', 'BlogController@getPostsByTag')->name('blog.tag');
    Route::get('topic/{slug}', 'BlogController@getPostsByTopic')->name('blog.topic');
});
