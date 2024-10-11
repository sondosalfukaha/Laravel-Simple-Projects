<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;


Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

Route::get('/', function () {
    return view('feedback');
});
