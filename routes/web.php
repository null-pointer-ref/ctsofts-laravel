<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

// Home route
Route::get('/', fn() => view('home'))->name('home');
Route::get('/services', fn() => view('services', ['services' => config('services-data.services')]))->name('services');

// Static pages
Route::view('/about', 'about')->name('about');
Route::view('/projects', 'projects')->name('projects');
Route::view('/gallery', 'gallery')->name('gallery');
Route::view('/contact', 'contact')->name('contact');
Route::view('/terms', 'terms')->name('terms');
Route::view('/privacy', 'privacy')->name('privacy');

// Services listing
Route::get('/services', function () {
    $services = config('services-data.services');
    return view('services', compact('services'));
})->name('services');
// Special route for GPS Tracking (different layout)
Route::get('/services/gps-tracking', function () {
    $services = config('services-data.services');

    // Find the GPS Tracking service
    $service = collect($services)->firstWhere('name', 'GPS Tracking');

    if (!$service) {
        abort(404);
    }

    return view('services.gps-tracking', compact('service'));
})->name('service.gps-tracking');
// Service detail route - USING THE DETAILS BLADE FILE
Route::get('/services/{service}', function ($serviceSlug) {
    $services = config('services-data.services');

    // Find the service by matching the slug with the service name
    $service = collect($services)->first(function ($item) use ($serviceSlug) {
        return Str::slug($item['name']) === $serviceSlug;
    });

    if (!$service) {
        abort(404);
    }

    return view('services.details', compact('service'));
})->name('service.detail');