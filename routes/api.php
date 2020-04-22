<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/services', function (Request $request) {
//     return $request->service();
// });

Route::group(['middleware' => ['auth:api']], function () {

    Route::get('/services', 'ApiServicesController@index')->name('api.services.index');
    //getRouteKeyName() altered on Service Model
    Route::get('/services/{service_slug}', 'ApiServicesController@show')->name('api.services.show');
    
    Route::post('/services', 'ApiServicesController@store')->name('api.services.store');
    Route::patch('services/{service_slug}', 'ApiServicesController@update')->name('api.services.update');
    Route::delete('services/{service_slug}', 'ApiServicesController@destroy')->name('api.services.destroy');
});

// Route::prefix('team_edits')->group(function() {
//     Route::post('full_name/{member}', 'TeamDetailsController@update')->name('memberNameUpdate');
// });
