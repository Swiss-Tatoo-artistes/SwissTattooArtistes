<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CantonController;


Route::controller(CantonController::class)->group(function (){


    // The Route to display all the cantons
    Route::get('cantons', 'index');


    // The Route to display a specific canton
    Route::get('cantons/{name}', 'show');

    // The Route to display all the tattoo artists of a specific canton
    Route::get('cantons/{name}/tattooartists', 'showByCanton');


});

