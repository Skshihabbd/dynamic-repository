<?php

use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

// main route

Route::get('/', function () {
    return view('page.home');
})->name('home');

Route::get('/case-studies', function () {
    return view('page.case-studies');
})->name('case-studies');
Route::get('/service', function () {
    return view('page.service');
})->name('service');
Route::get('/contact', function () {
    return view('page.contact');
})->name('contact');

Route::get('/about', function () {
    return view('page.about');
})->name('about');
Route::get('/dashboard', function () {
    return view('dashboard.page.dashboard');
})->name('dashboard');
Route::get('/profile', function () {
    return view('dashboard.page.profile');
})->name('profile');

// service sub route
Route::get('/service_category', function () {
    return view('service_submenu.service_sub_route');
})->name('service_sub_route');
// service sub route

// solution route
Route::get('/solution', function () {
    return view('service_submenu.solution_sub_route');
})->name('solution_sub_route');
// solution route

// technologies
Route::get('/technologies', function () {
    return view('service_submenu.technolies_sub_route');
})->name('technologies-sub-route');
// technologies
