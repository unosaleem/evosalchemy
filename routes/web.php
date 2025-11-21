<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    return "Cleared!";
});

Route::get('/mail-test', function() {
    Mail::raw("Mail working OK!", function ($msg) {
        $msg->to('your-email@gmail.com')->subject('Test Email');
    });

    return "Mail Sent!";
});

Route::get('/', function () {return view('index');});
Route::post('/submit', [LeadController::class, 'submit'])->name('lead.submit');
Route::get('/thankyou', function () { return view('thankyou'); })->name('page.thankyou');
Route::get('/privacy-policy', function () { return view('privacy-policy'); })->name('page.privacy');
Route::get('/terms-and-conditions', function () { return view('terms-and-condition'); })->name('page.terms');
Route::get('/admin/enquiries', [LeadController::class, 'index'])->name('enquiry.index');
