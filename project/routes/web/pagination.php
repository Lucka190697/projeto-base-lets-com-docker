<?php
/**
 * Authenticated routes
 * Middleware 'auth', 'web'
 * Prefix pagination
 */

Route::get('users', 'Admin\UserController@pagination')->name('pagination.users');

Route::get('books', 'BookController@pagination')->name('pagination.books');

Route::get('loans', 'LoanController@pagination')->name('pagination.loans');
