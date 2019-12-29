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

//Route::get('/clients/{client}', 'ClientsController@show');


Route::get('/clients', function () {

    $clients = App\Client::all();

    return view('client', compact('clients'));
});






Route::post('/clients', function() {

    App\Client::create(request(['companyName', 'ownerName', 'ownerTitle']));

});
