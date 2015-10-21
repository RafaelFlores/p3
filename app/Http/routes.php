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
    return view('developerbestfriend');
});

// Route::get('/lorem', function() {
//
//     echo 'Aqui va el loremIpsum';
//
// });


Route::get('/lorem', 'LoremController@getIndex');

// Route::get('/randomuser', function() {
//
//     echo 'Aqui va el randomUser';
//
// });

Route::get('/randomuser', 'RandomUserController@getIndex');

Route::post('/lorem', 'LoremController@postLorem');

Route::post('/randomuser', 'RandomUserController@postRandomUser');
