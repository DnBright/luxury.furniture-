<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/collections/{slug}', [MainController::class, 'getCollectionDetails'])->name('collections.show');
Route::post('/inquiry', [MainController::class, 'submitInquiry'])->name('inquiry.submit');
Route::post('/subscribe', [MainController::class, 'submitSubscriber'])->name('subscribe.submit');
