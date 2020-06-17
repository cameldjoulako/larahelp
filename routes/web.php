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

// Route::get('contact', function () {
//     return view('contact');
// });

Route::get('about', function () {
    return view('about');
});

/*Racoursi */
Route::view('contact', 'contact');
Route::view('/admin/post', 'admin');

/* route avec passage des données dans un tableau */
Route::get('/clients', 'ClientsController@list');

Route::post('/clients', 'ClientsController@store');
