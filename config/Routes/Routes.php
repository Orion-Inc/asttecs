<?php 
	session_start();

	Route::set('home', function() {
		Home::CreateView('home');
	});

	Route::set('about-us', function() {
		Home::CreateView('about-us');
	});

	Route::set('services', function() {
		Home::CreateView('services');
	});

	Route::set('products', function() {
		Home::CreateView('products');
	});

	Route::set('contact-us', function() {
		Home::CreateView('contact-us');
	});
?>