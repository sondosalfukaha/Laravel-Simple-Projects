<?php

use Illuminate\Support\Facades\Route;



// routes/web.php

use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

