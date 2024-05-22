<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TranslationController;


Route::get('/translations/{locale}', [TranslationController::class, 'getTranslations']);
