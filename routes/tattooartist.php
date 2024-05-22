<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TattooArtistController;


Route::controller(TattooArtistController::class)->group(function (){


    // Ili est possible de grouper toute ces routes
    
    // The Route to display all the tattooartists
    Route::get('/tattooartists', 'index');

    // The Route to display a specific tattooartist
    Route::get('/tattooartists/show/{id}', 'show');

    // The Route to create a new tattoo artist
    Route::post('/tattooartists', 'create');

    //The Route to update a specific tattoo artist
    Route::put('/tattooartists/{id}', 'update');

    // The Route to delete a specific tattooartist
    Route::delete('/tattooartists/{id}', 'delete');
    
});