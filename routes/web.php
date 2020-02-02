<?php



Route::get('/', 'WebsiteController@getHomePage');
Route::get('/about', 'WebsiteController@getAboutPage')->name('aboutPage');
Route::get('/services', 'WebsiteController@getServicesPage')->name('servicesPage');
Route::get('/client-resources', 'WebsiteController@getClientResourcesPage')->name('clientResourcesPage');
Route::get('/contact', 'WebsiteController@getContactPage')->name('contactPage');
Route::get('/get-a-quote', 'WebsiteController@getGetAQuotePage')->name('getAQuotePage');
Route::get('/privacy', 'WebsiteController@getPrivacyPage')->name('privacyPage');
Route::get('/sitemap', 'WebsiteController@getSitemapPage')->name('sitemapPage');

// Blog Routes
Route::get('/blog', 'PostController@getBlogPage')->name('blogPage');
//************ */ Run php artisan make:controller PostController -mr **********

// Service Details Routes
Route::get('/wise-retirement', 'WebsiteController@getWiseRetirementPage')->name('wiseRetirementDetail');
Route::get('/protected-investments', 'WebsiteController@getProtectedInvestmentsPage')->name('protectedInvestmentsDetail');
Route::get('/diversify-your-nestegg', 'WebsiteController@getDiversifyYourNesteggPage')->name('diversifyYourNesteggDetail');
Route::get('/expect-the-unexpected', 'WebsiteController@getExpectTheUnexpectedPage')->name('expectTheUnexpectedDetail');
Route::get('/medicare360', 'WebsiteController@getMedicare360Page')->name('medicare360Detail');
Route::get('/burial-preperation', 'WebsiteController@getBurialPreperationPage')->name('burialPreperationDetail');
