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

// Route::get('/', function () {
//     return view('layouts/master');
// });

// master layout
Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

// pages die in de master layout worden weergegeven
Route::get('/telefoonboek', function () {
    return view('pages/telefoonboek');
});

Route::get('/home', function () {
    return view('pages/home');
});

Route::get('/create', function () {
    return view('pages/create');
});

Route::get('/update', function () {
    return view('pages/update');
});

// Route::get('/index', function () {
//     return view('pages/index');
// });

// Route::get('/index', function() {
//     // $telefoon_boeks = TelefoonBoek::all();

//     // return view('pages/index', compact('telefoon_boeks'));
// });


// Route::get('/index', function () {

//     $telefoon_boeks = DB::table('telefoon_boeks')->get();

//     return view('pages/index', ['telefoon_boeks' => $telefoon_boeks]);
// });

Route::resource('telefoon_boeks', 'TelefoonBoekController');

Route::get('/pages','TelefoonBoekController@index');