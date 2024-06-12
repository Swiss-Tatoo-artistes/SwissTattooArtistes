<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CantonController;


Route::controller(CantonController::class)->group(function (){


    // The Route to display all the cantons
    Route::get('cantons', 'index');

    // The Route to create a new canton
    Route::post('cantons', 'create');

    // The Route to update a specific canton
    Route::put('cantons/{name}', 'update');

    // The Route to delete a specific canton
    Route::delete('cantons/{name}', 'delete');

    // The Route to display a specific canton
    Route::get('cantons/{name}', 'show');

    // The Route to display all the tattoo artists of a specific canton
    Route::get('cantons/{name}/tattooartists', 'showByCanton');


});

