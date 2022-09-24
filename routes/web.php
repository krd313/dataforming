<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\JobController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\CusCustomerController;
use App\Http\Controllers\Backend\CustomerJobController;


Route::get('/', function () {
    return view('welcome');
});



 // Admin All Route
 Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');

    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');

});

 // Customer All Route
 Route::controller(CustomerController::class)->group(function () {
    Route::get('/customer/all', 'CustomerAll')->name('customer.all');
    Route::get('/customer/add', 'CustomerAdd')->name('customer.add');
    Route::post('/customer/store', 'CustomerStore')->name('customer.store');
    Route::get('/customer/show/{id}', 'CustomerShow')->name('customer.show');
    Route::get('/customer/edit/{id}', 'CustomerEdit')->name('customer.edit');
    Route::post('/customer/update/{id}', 'CustomerUpdate')->name('customer.update');
    Route::get('/customer/delete/{id}', 'CustomerDelete')->name('customer.delete');
});

 // CusCustomer All Route
 Route::controller(CusCustomerController::class)->group(function () {
    Route::get('/cuscustomer/all', 'CusCustomerAll')->name('cuscustomer.all');
    Route::get('/cuscustomer/add', 'CusCustomerAdd')->name('cuscustomer.add');
    Route::post('/cuscustomer/store', 'CusCustomerStore')->name('cuscustomer.store');
    Route::get('/cuscustomer/edit/{id}', 'CusCustomerEdit')->name('cuscustomer.edit');
    Route::post('/cuscustomer/update/{id}', 'CusCustomerUpdate')->name('cuscustomer.update');
    Route::get('/cuscustomer/delete/{id}', 'CusCustomerDelete')->name('cuscustomer.delete');

});

 // Customer Job All Route
 Route::controller(CustomerJobController::class)->group(function () {
    Route::get('/customerjob/all', 'CustomerJobAll')->name('customerjob.all');
    Route::get('/customerjob/add', 'CustomerJobAdd')->name('customerjob.add');
    Route::post('/customerjob/store', 'CustomerJobStore')->name('customerjob.store');
    Route::get('/customerjob/edit/{id}', 'CustomerJobEdit')->name('customerjob.edit');
    Route::post('/customerjob/update/{id}', 'CustomerJobUpdate')->name('customerjob.update');
    Route::get('/customerjob/delete/{id}', 'CustomerJobDelete')->name('customerjob.delete');
});

 // Job All Route
 Route::controller(JobController::class)->group(function () {
    Route::get('/job/all', 'JobAll')->name('job.all');
    Route::get('/job/add', 'JobAdd')->name('job.add');
    Route::post('/job/store', 'JobStore')->name('job.store');
    Route::get('/job/edit/{id}', 'JobEdit')->name('job.edit');
    Route::post('/job/update', 'JobUpdate')->name('job.update');
    Route::get('/job/delete/{id}', 'JobDelete')->name('job.delete');
});

 // Invoicing All Route
 Route::controller(InvoiceController::class)->group(function () {
    Route::get('/invoice/all', 'InvoiceAll')->name('invoice.all');

});


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
