<?php


//Home Routes
Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('dashboard/{id}', 'HomeController@organisationDashboard');
Route::get('dashboard', 'HomeController@dashboard');



//Donor routes
Route::get('dashboard/{id}/donor', 'DonorController@index');
Route::post('dashboard/{id}/donor/create', 'DonorController@store');
Route::get('dashboard/{id}/donor/create', 'DonorController@create');
Route::get('dashboard/{id}/donor/view/', 'DonorController@view_donors');
Route::get('dashboard/{id}/donor/view/{donor_id}', 'DonorController@show');



//Donation Routes
Route::get('dashboard/{id}/donation', 'DonationController@index');
Route::get('dashboard/{id}/donation/create', 'DonationController@create');
Route::post('donation/create', 'DonationController@store');
Route::get('view_donation', 'DonationController@view_donations');



//Cause Routes
Route::get('dashboard/{id}/cause', 'CauseController@index');
Route::get('dashboard/{id}/cause/create', 'CauseController@create');
Route::post('dashboard/{id}/cause/create', 'CauseController@store');
Route::get('dashboard/{id}/cause/show/{cause_id}','CauseController@show');



//Organisation Routes
Route::post('organisation/create', 'OrganisationController@store');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
