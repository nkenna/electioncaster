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
    return view('frontpage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/dataland', function () {
    return view('dataland');
});

Route::get('/resolveissue', function () {
    return view('resolveissue');
});

Route::get('/supportus', function () {
    return view('supportus');
});

Route::get('/nigeria/political/party/hub', function () {
    return view('partyhub');
});

Route::get('/nigeria/political/party/hub/apc', function () {
    return view('party/apc');
});

Route::get('/nigeria/political/party/hub/pdp', function () {
    return view('party/pdp');
});

//Route::match(['get','post'],'/', 'frontPageController@getFrontPresidentPie')->name('frontpage');



Route::get('user/update', function () {
    return view('update');
})->middleware('auth');

Route::get('/success', function () {
    return view('success');
})->middleware('auth');

Route::get('user/dataview', function () {
    return view('dataview');
})->middleware('auth');

Route::get('user/govdataview', function () {
    return view('govdataview');
})->middleware('auth');

Route::get('user/updategov', function () {
    return view('updategov');
})->middleware('auth');

//Route::get('user/dataview', function () {
  //  return view('dataview');
//});
//Route::match(['get','post'],'user/dataview', 'dataviewController@testsome')->name('dataview');

//Route::match(['get','post'],'user/dataview', 'dataviewController@getPresidentChart')->name('dataview');

Route::match(['get','post'],'/update', 'updateController@update')->name('update');

Route::match(['get','post'],'/updategov', 'updateGovController@updateGov');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/user/dataview', 'dataviewController@getAllVotes')->name('dataview');
