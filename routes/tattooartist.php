<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TattooArtistController;


Route::controller(TattooArtistController::class)->group(function (){


    // CRUD tattoo artists
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


    //CRUD adresses
        // The Route to get the adresses of a specific tattoo artist
        Route::get('/tattooartists/{id}/adresses', 'indexAdresses');

        //The Route to create an adress for a specific tattoo artist
        Route::post('/tattooartists/{id}/adresses', 'createAdress');

        //The Route to update an adress of a specific tattoo artist
        Route::put('/tattooartists/{id}/adresses/{adressId}', 'updateAdress');

        //The Route to delete an adress of a specific tattoo artist
        Route::delete('/tattooartists/{id}/adresses/{adressId}', 'deleteAdress');

        //The Route to show a specific adress of a specific tattoo artist
        Route::get('/tattooartists/{id}/adresses/{adressId}', 'showAdress');


    
    // The Route to get the opening time of the adresses of a specific tattoo artist
    Route::get('/tattooartists/{id}/openingtimes', 'getOpeningTimes');
    
    // The Route to get all opening time and all adresses
    Route::get('/tattooartists/{id}/adresses/openingtimes', 'getAdressesAndOpeningtimes');
});

