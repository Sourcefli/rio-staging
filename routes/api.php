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

    /**
     * SERVICES Routes
     */
    Route::get('/services', 'ApiServicesController@index')->name('api.services.index');
    Route::get('/services/{service_slug}', 'ApiServicesController@show')->name('api.services.show');
    Route::post('/services', 'ApiServicesController@store')->name('api.services.store');
    Route::patch('services/{service_slug}', 'ApiServicesController@update')->name('api.services.update');
    Route::delete('services/{service_slug}', 'ApiServicesController@destroy')->name('api.services.destroy');

    /**
     * AGENT Routes
     */
    Route::get('/agents', 'ApiAgentsController@index')->name('api.agents.index');
    Route::get('/agents/{agent_asb_id}', 'ApiAgentsController@show')->name('api.agents.show');
    Route::post('/agents', 'ApiAgentsController@store')->name('api.agents.store');
    Route::patch('agents/{agent_asb_id}', 'ApiAgentsController@update')->name('api.agents.update');
    Route::delete('agents/{agent_asb_id}', 'ApiAgentsController@destroy')->name('api.agents.destroy');
});

// Route::prefix('team_edits')->group(function() {
//     Route::post('full_name/{member}', 'TeamDetailsController@update')->name('memberNameUpdate');
// });
