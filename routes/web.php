<?php










/*
-----------------------------------------------------------------------
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
	
	
	
	
	
}





);






Auth::routes();






Route::get('/home', 'PagesController@index')->name('home');





Route::get('/help', 'PagesController@help')->name('help');





Route::get('/contact', 'PagesController@contact')->name('contact');





Route::get('/datenbank', 'PagesController@datenbank')->name('datenbank');




Route::get('/users', 'PagesController@getUsers')->name('get.users');




Route::get('/ingest', 'PagesController@ingest')->name('ingest');





Route::get('/speicherorte', 'PagesController@speicherorte')->name('speicherorte');




