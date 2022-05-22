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
    return view('front.index');
})->name('home');


Route::get('about', function () {
    return view('front.about');
})->name('about');


Route::get('contact', function () {
    return view('front.contact');
})->name('contact');


Route::get('projects', 'ProjectsController@index')->name('projects');

Route::post('send-message', 'ContactController@sendMessage')->name('send_message');


// language
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Voyager::routes();

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
