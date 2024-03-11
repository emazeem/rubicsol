<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\AttendanceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SubscriptionController;

Route::get('', [WebsiteController::class, 'home'])->name('w.home');
Route::get('documentation/{section?}', [WebsiteController::class, 'documentation'])->name('w.documentation');
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
Route::post('subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');


Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('home');
    Route::group(['prefix' => 'users'], function () {
        Route::get('', [UserController::class, 'index'])->name('users.index');
        Route::post('fetch', [UserController::class, 'fetch'])->name('users.fetch');
        Route::get('create', [UserController::class, 'create'])->name('users.create');
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::post('store', [UserController::class, 'store'])->name('users.store');
        Route::post('update', [UserController::class, 'update'])->name('users.update');
        Route::get('show/{id}', [UserController::class, 'show'])->name('users.show');
        Route::get('delete/{id}', [UserController::class, 'delete'])->name('users.delete');
        Route::get('profile', [UserController::class, 'profile'])->name('users.profile');

    });
    Route::group(['prefix' => 'attendance'], function () {
        
        Route::get('', [AttendanceController::class, 'index'])->name('attendance.index');
        Route::get('check-in', [AttendanceController::class, 'checkIn'])->name('check.in');
        Route::get('check-out', [AttendanceController::class, 'checkOut'])->name('check.out');
        Route::get('create', [AttendanceController::class, 'create'])->name('attendance.create');
        Route::post('store', [AttendanceController::class, 'store'])->name('attendance.store');
        Route::post('update', [AttendanceController::class, 'update'])->name('attendance.update');
        Route::get('edit/{id}', [AttendanceController::class, 'edit'])->name('attendance.edit');
        Route::get('show/{id}', [AttendanceController::class, 'show'])->name('attendance.show');
        Route::get('delete/{id}', [AttendanceController::class, 'delete'])->name('attendance.delete');

    });
    
        Route::group(['prefix' => 'email'], function () {
        Route::get('template', [EmailController::class, 'emailTemplate'])->name('email.template');
        Route::get('template1', [EmailController::class, 'emailTemplate1'])->name('email.template1');
        Route::get('marketing', [EmailController::class, 'index'])->name('email.marketing');
        Route::get('show/{id}', [EmailController::class, 'show'])->name('email.show');
        Route::post('store', [EmailController::class, 'store'])->name('email.store');
        Route::post('delete/{id}', [EmailController::class, 'delete'])->name('email.delete');
        Route::get('send/{id}', [EmailController::class, 'sendEmails'])->name('send.emails');
        Route::get('send-again/{id}', [EmailController::class, 'sendAgain'])->name('send.again');
        Route::get('add-favourite/{id}', [EmailController::class, 'addFavourite'])->name('add.favourite');
    });

});
