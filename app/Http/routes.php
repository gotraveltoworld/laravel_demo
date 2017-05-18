<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('foo', function () {
//     // return $number . ', result';
//     return 'Seconds';
//     // return view('welcome');
//     // return Redirect::to('/');
// });
Route::get('bladePage', 'BladePage@showPage');

Route::get('first/{name?}', 'FirstController@showName');

Route::get('second/{number?}', 'SecondController@showTextFromUrl');
