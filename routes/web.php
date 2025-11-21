<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

Route::get('/', function () {
    return view('index');
});

Route::post('/submit', [LeadController::class, 'submit'])->name('lead.submit');
Route::get('/thankyou', function () { return view('thankyou'); })->name('page.thankyou');
Route::get('/privacy-policy', function () { return view('privacy-policy'); })->name('page.privacy');
Route::get('/terms-and-conditions', function () { return view('terms-and-condition'); })->name('page.terms');
Route::get('/admin/enquiries', [LeadController::class, 'index'])->name('enquiry.index');
