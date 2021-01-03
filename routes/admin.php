<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth:admin'], function () {

        Route::get('/', function () {
            return view('dashboard.home');
        })->name('home');

        //blogs routes
        Route::resource('blogs', 'BlogController')->except('show');

        //packages routes
        Route::resource('packages', 'PackageController')->except('show');


        //logout route
        Route::get('logout', 'LoginController@logout')->name('admin.logout');
});






Route::group(['namespace' => 'Dashboard', 'middleware' => 'guest:admin', 'prefix' => 'admin'], function() {

        //login routes
        Route::get('login', 'LoginController@login')->name('admin.login');
        Route::post('post-login', 'LoginController@postLogin')->name('post-admin.login');
});
