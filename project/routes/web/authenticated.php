<?php

use App\Enums\UserRolesEnum;

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->middleware('role:admin')//permission
    ->group(function (){
        Route::resource('/user', 'UserController');
    });

Route::resource('books', 'BookController');

Route::resource('loans', 'LoanController');
