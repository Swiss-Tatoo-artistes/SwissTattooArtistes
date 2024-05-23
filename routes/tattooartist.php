<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TattooArtistController;


Route::controller(TattooArtistController::class)->group(function (){


    // CRUD
    // The Route to display all the tattooartists
    Route::get('/tattooartists', 'index');

    // The Route to create a new tattoo artist
    Route::post('/tattooartists', 'create');

    //The Route to update a specific tattoo artist
    Route::put('/tattooartists/{id}', 'update');

    // The Route to delete a specific tattooartist
    Route::delete('/tattooartists/{id}', 'delete');
    
    // The Route to display a specific tattooartist
    Route::get('/tattooartists/show/{id}', 'show');

    // The Route to get the adresses of a specific tattoo artist
    Route::get('/tattooartists/{id}/adresses', 'getAdresses');
    
    // IN WORKING
    // The Route to get the opening time of the adresses of a specific tattoo artist
    Route::get('/tattooartists/{id}/opening-times', 'getOpeningTimes');
    
});

