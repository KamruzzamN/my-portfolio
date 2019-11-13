<?php

//cache clear commend
Route::get('/clear', function (){
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    return back();
});

//frontend routes
Route::get('/', 'FrontendController@index')->name('/');

// Authentication Routes...
Route::get('/home', 'AdminController@index')->name('home');
Route::group(['prefix'=>'admin'], function(){
	Route::get('login', 'Admin\LoginController@showLoginForm')->name('login');
	Route::post('login', 'Admin\LoginController@login');
	Route::post('logout', 'Admin\LoginController@logout')->name('logout');
	// Registration Routes...
	Route::get('register', 'Admin\RegisterController@showRegistrationForm')->name('register');
	Route::post('register', 'Admin\RegisterController@register');
	//password reset routes...
	Route::get('password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('password.request');
	Route::post('password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
	Route::get('password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('password.reset');
	Route::post('password/reset', 'Admin\ResetPasswordController@reset')->name('password.update');
	Route::get('password/confirm', 'Admin\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
	Route::post('password/confirm', 'Admin\ConfirmPasswordController@confirm');
	//email verfy
	Route::get('email/verify', 'Admin\VerificationController@show')->name('verification.notice');
	Route::post('email/resend', 'Admin\VerificationController@resend')->name('verification.resend');
	Route::get('email/verify/{id}/{hash}', 'Admin\VerificationController@verify')->name('verification.verify');

	//admin home routes
	Route::get('/', 'AdminController@index')->name('home');

	//options routes
	Route::get('header','HeaderController@create')->name('headers.create');
	Route::get('about/create','AboutController@create')->name('abouts.create');
	Route::post('about/create','AboutController@store')->name('abouts.store');

	Route::get('services','ServiceController@create')->name('services.create');
    Route::get('testimonial','TestimonialController@create')->name('testimonials.create');
    Route::get('portfolio','PortfolioController@create')->name('portfolios.create');
});
