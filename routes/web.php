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

Route::get('/',
	['as' => 'dashboard', 'uses' => 'CallController@dashboard']);
Route::get('/index',
	['as' => 'theindex', 'uses' => 'CallController@index']);
Route::get('/index/create',
	['as' => 'create_new', 'uses' => 'CallController@create']);
Route::get('/index/{$id}', 'CallController@view_by_id');
Route::get('/index/{$id/edit}', 'CallController@edit_by_id');
Route::post('/index/create',
	['as' => 'store_call', 'uses' => 'CallController@store']);

//Search
Route::get('/index/search',
	['as' => 'search_page', 'uses' => 'SearchController@index']);
Route::post('search',
	['as' => 'search', 'uses' => 'SearchController@store']);

//Reporting
Route::get('mailReporting', 
  ['as' => 'mail_report_send', 'uses' => 'ReportController@sendReport']);
Route::get('excelReporting', 'ReportController@eIndex');