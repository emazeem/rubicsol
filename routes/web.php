<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\AttendanceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LeaveApplicationController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Admin\SubtaskController;
use App\Http\Controllers\Admin\PostController;

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
// services
Route::get('services', [WebsiteController::class, 'services'])->name('w.services');


Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('home');
    Route::get('profile', [DashboardController::class, 'profile'])->name('profile');
    Route::post('change-profile', [DashboardController::class, 'changeProfile'])->name('change.profile');
    Route::post('update-cv', [DashboardController::class, 'updateCV'])->name('update.cv');
    Route::post('update-cnic', [DashboardController::class, 'updateCnic'])->name('update.cnic');
    Route::get('change_password', [DashboardController::class, 'changePassword'])->name('change.password');
    Route::post('update_password', [DashboardController::class, 'updatePassword'])->name('update.password');


    Route::group(['prefix' => 'users'], function () {
        Route::get('', [UserController::class, 'index'])->name('users.index');
        Route::post('fetch', [UserController::class, 'fetch'])->name('users.fetch');
        Route::get('create', [UserController::class, 'create'])->name('users.create');
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::post('store', [UserController::class, 'store'])->name('users.store');
        Route::post('update', [UserController::class, 'update'])->name('users.update');
        Route::get('show/{id}', [UserController::class, 'show'])->name('users.show');
        Route::get('delete/{id}', [UserController::class, 'delete'])->name('users.delete');


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


    Route::group(['prefix' => 'leave-application'], function () {
        Route::get('', [LeaveApplicationController::class, 'index'])->name('leave.application.index');
        Route::get('create', [LeaveApplicationController::class, 'create'])->name('leave.application.create');
        Route::post('store', [LeaveApplicationController::class, 'store'])->name('leave.application.store');
        Route::post('update', [LeaveApplicationController::class, 'update'])->name('leave.application.update');
        Route::get('edit/{id}', [LeaveApplicationController::class, 'edit'])->name('leave.edit');
        Route::get('show/{id}', [LeaveApplicationController::class, 'show'])->name('leave.show');
        Route::get('delete/{id}', [LeaveApplicationController::class, 'delete'])->name('leave.delete');
        Route::get('approve/{id}', [LeaveApplicationController::class, 'approve'])->name('leave.approve');
        Route::get('reject/{id}', [LeaveApplicationController::class, 'reject'])->name('leave.reject');
        Route::post('reason', [LeaveApplicationController::class, 'reason'])->name('leave.reason');
        
    });

    Route::group(['prefix' => 'task'], function () {

        Route::get('', [TaskController::class, 'index'])->name('task.index');
        Route::get('create', [TaskController::class, 'create'])->name('tasks.create');
        Route::post('store', [TaskController::class, 'store'])->name('tasks.store');
        Route::get('edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
        Route::get('show/{id}', [TaskController::class, 'show'])->name('task.show');
        Route::get('delete/{id}', [TaskController::class, 'delete'])->name('task.delete');
        Route::post('update', [TaskController::class, 'update'])->name('task.update');
        Route::get('delete/{id}', [TaskController::class, 'delete'])->name('task.delete');
        Route::get('start/{id}', [TaskController::class, 'start'])->name('task.start');
        Route::get('complete/{id}', [TaskController::class, 'complete'])->name('task.complete');
        Route::post('/task/{id}/switch-priority', [TaskController::class, 'switchPriority'])->name('task.switchPriority');
        Route::post('subtask', [TaskController::class, 'subtask'])->name('task.subtask');
       
        



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
        Route::group(['prefix'=>'subtask'],function(){
            Route::post('store',[SubtaskController::class,'store'])->name('subtask.store');
            Route::get('complete/{id}', [SubtaskController::class, 'complete'])->name('subtask.complete');
            
        });
        Route::group(['prefix'=>'post'],function(){
            Route::get('',[PostController::class,'index'])->name('post.index');
            Route::get('create',[PostController::class,'create'])->name('post.create');
            Route::post('store', [PostController::class, 'store'])->name('post.store');
            Route::get('edit/{id}', [PostController::class, 'edit'])->name('post.edit');
            Route::post('update', [PostController::class, 'update'])->name('post.update');
            Route::get('delete/{id}', [PostController::class, 'delete'])->name('post.delete');
            Route::get('show/{id}', [PostController::class, 'show'])->name('post.show');
            Route::post('update', [PostController::class, 'update'])->name('post.update');
            Route::get('approve/{id}', [PostController::class, 'approve'])->name('post.approve');

        });
});
