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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('dashboard/{id}', 'HomeController@organisationDashboard');

Route::get('dashboard', 'HomeController@dashboard');

Route::get('donors', 'DonorController@index');

Route::post('donors/create', 'DonorController@store');

Route::get('add_donor', 'DonorController@create');

Route::get('view_donors', 'DonorController@view_donors');

Route::get('donations', 'DonationController@index');

Route::get('add_donation', 'DonationController@create');

Route::post('donations/create', 'DonationController@store');

Route::get('dashboard/{id}/cause', 'CauseController@index');


Route::get('dashboard/{id}/cause/create', 'CauseController@create');
Route::post('dashboard/{id}/cause/create', 'CauseController@store');
Route::get('dashboard/{id}/cause/show/{cause_id}','CauseController@show');


Route::get('view_donations', 'DonationController@view_donations');

Route::post('organisation/create', 'OrganisationController@store');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
