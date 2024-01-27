<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmailController;

Route::get('', [WebsiteController::class, 'home'])->name('w.home');
Route::get('documentation', [WebsiteController::class, 'documentation'])->name('w.documentation');
Route::get('services', [WebsiteController::class, 'services'])->name('w.services');
Route::get('pricing', [WebsiteController::class, 'pricing'])->name('w.pricing');
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
Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('home');
    Route::group(['prefix' => 'email'], function () {
        Route::get('marketing', [EmailController::class, 'index'])->name('email.marketing');
        Route::get('show/{id}', [EmailController::class, 'show'])->name('email.show');
        Route::post('store', [EmailController::class, 'store'])->name('email.store');
        Route::post('delete/{id}', [EmailController::class, 'delete'])->name('email.delete');
        Route::get('send/{id}', [EmailController::class, 'sendEmails'])->name('send.emails');
        Route::get('send-again/{id}', [EmailController::class, 'sendAgain'])->name('send.again');
        Route::get('add-favourite/{id}', [EmailController::class, 'addFavourite'])->name('add.favourite');
    });
});
