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

Auth::routes();

Route::get('routes', function() {
    \Artisan::call('route:list');
    return '<pre>' . \Artisan::output() . '</pre>';
});
Route::group(['prefix' => '{locale?}', 'where' => ['locale' => '(?!admin)*[a-z]{2}'],], function() {
    Route::group(['namespace' => 'Front'], function () {
        Route::get('/', 'IndexController@index')->name('index');
        Route::get('/apartamenty', 'InvestmentController@show')->name('plan');

        Route::get('/lokalizacja', 'LocationController@index')->name('location');

        Route::get('/inwestor', 'InvestorController@index')->name('investor');

        Route::get('/o-architekcie', 'ArchitectController@index')->name('architect');

        Route::get('/o-inwestycji/crowne-plaza', 'CrowneplazaController@index')->name('crowneplaza');

        Route::get('/o-inwestycji', 'InvestmentController@index')->name('investment');

        Route::get('/model-biznesowy', 'BusinessmodelController@index')->name('businessmodel');

        Route::get('/galeria', 'GalleryController@index')->name('gallery');

        Route::get('/kontakt', 'ContactController@index')->name('contact');
        Route::post('/kontakt', 'ContactController@contact')->name('contact.form');
    });
});