<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/','IndexController@index');
Route::get('token-sale','TokenSaleController@index');
Route::get('token-sale-detail','TokenSaleController@detail');

Route::group(['prefix' => 'admin','namespace' => 'Admin','middleware' => ['auth']], function() {
    Route::get('dashboard','IndexController@index');
    Route::get('home-section','HomeController@index');
    Route::post('home-update/{id}','HomeController@update')->name('home-update');
    Route::get('how-to-buy','HowToBuyController@index');
    Route::post('how-to-buy','HowToBuyController@store')->name('add-buy');
    Route::post('buy-update/{id}','HowToBuyController@update')->name('buy-update');
    Route::post('buy-sub-update','HowToBuyController@subUpdate')->name('buy-sub-update');
    Route::post('delete-buy-sub/{id}','HowToBuyController@destroy');
    Route::get('our-tokens','OurTokenController@index');
    Route::post('our-tokens/{id}','OurTokenController@update');
    Route::get('tokenomics','TokenomicController@index');
    Route::post('tokenomics-update/{id}','TokenomicController@update')->name('tokenomics-update');
    Route::get('features','FeatureController@index');
    Route::post('features','FeatureController@store')->name('add-feature');
    Route::post('feature-update/{id}','FeatureController@update')->name('feature-update');
    Route::post('feature-sub-update','FeatureController@subUpdate')->name('feature-sub-update');
    Route::post('delete-feature-sub/{id}','FeatureController@destroy');

    Route::get('roadmap','RoadmapController@index');
    Route::post('roadmap','RoadmapController@store')->name('add-roadmap');
    Route::post('roadmap-update/{id}','RoadmapController@update')->name('roadmap-update');
    Route::post('roadmap-sub-update','RoadmapController@subUpdate')->name('roadmap-sub-update');
    Route::post('delete-roadmap-sub/{id}','RoadmapController@destroy');

    Route::get('team','TeamController@index');
    Route::post('team','TeamController@store')->name('add-team');
    Route::post('team-update/{id}','TeamController@update')->name('team-update');
    Route::post('team-sub-update','TeamController@subUpdate')->name('team-sub-update');
    Route::post('delete-team-sub/{id}','TeamController@destroy');

    Route::get('faq','FaqController@index');
    Route::post('faq','FaqController@store')->name('add-faq');
    Route::post('faq-update/{id}','FaqController@update')->name('faq-update');
    Route::post('faq-sub-update','FaqController@subUpdate')->name('faq-sub-update');
    Route::post('delete-faq-sub/{id}','FaqController@destroy');

    Route::get('subscription','SubscriptionController@index');
    Route::post('subscription-update/{id}','SubscriptionController@update')->name('subscription-update');

});

Route::group(['prefix' => '','middleware' => ['auth']], function() {
    Route::get('manager','TokenSaleController@manager');

});