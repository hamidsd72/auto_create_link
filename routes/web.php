<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Link;

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

Route::get('/', 'LinkController@index');

Route::resource('link', 'LinkController');

Route::get('redirect/{slug?}', function ($slug) {
	return Redirect::to( Link::where('slug', $slug)->pluck('link')->first() );
})->name('redirect');
