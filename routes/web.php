<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

Route::get('/', function () {
    return view('index');
});

Route::post('/submit', [LeadController::class, 'submit'])->name('lead.submit');
Route::get('/thankyou', function () { return view('thankyou'); })->name('thankyou');