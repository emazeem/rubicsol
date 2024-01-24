<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::get('', [WebsiteController::class, 'home'])->name('w.home');
Route::get('documentation', [WebsiteController::class, 'documentation'])->name('w.documentation');
Route::get('services', [WebsiteController::class, 'services'])->name('w.services');
Route::get('service/{id}', [WebsiteController::class, 'service'])->name('w.service');
Route::get('team', [WebsiteController::class, 'teams'])->name('w.team');
Route::get('team/view/{id}', [WebsiteController::class, 'team'])->name('w.team.show');
Route::get('faqs', [WebsiteController::class, 'faqs'])->name('w.faqs');
Route::get('terms-and-conditions', [WebsiteController::class, 'tac'])->name('w.tac');
Route::get('privacy-policy', [WebsiteController::class, 'privacy_policy'])->name('w.privacy.policy');
Route::get('contact-us', [WebsiteController::class, 'contact_us'])->name('w.contact.us');
Route::get('about-us', [WebsiteController::class, 'about_us'])->name('w.about.us');
Route::post('contact-us-send-email', [WebsiteController::class, 'send_email'])->name('w.contact.us.send.email');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
