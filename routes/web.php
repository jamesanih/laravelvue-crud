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



        Route::post('/signin', [
            'uses'=> 'UserController@signin',
            'as'=> 'signin'
        ]);





// Dashboard routes

Route::group(['middleware'=>'auth'], function() {

    Route::get('/getusers','UserController@getusers' );

    Route::get('/dashboard', function() {
        return view('dashboard.dashboardmaster');
    });

    Route::get('/logout', [
        'uses' => 'UserController@Logout',
        'as'=> 'logout'
    ]);

    Route::get('/edit/{id}', 'UserController@edit');
    Route::post('/update/{id}', 'UserController@Update');
    Route::get('/delete/{id}', 'UserController@Delete');

    
} );

Route::post('/submit', 'UserController@store');

