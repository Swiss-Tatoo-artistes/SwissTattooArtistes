<?php

namespace App\Http\Controllers;

use App\Models\Canton;
use App\Models\Adress;
use App\Models\TattooArtist;

class CantonController extends Controller
{


    //Display all the cantons
    public function index()
    {
        $cantons = Canton::get();

        return response()->json(['cantons' => $cantons], 200);
    }



    //Display a specific canton
    public function show($canton)
    {
        $canton = Canton::where('name', $canton)->first();

        if (!$canton) {
            return response()->json(['error' => 'Canton not found'], 404);
        }

        return response()->json(['canton' => $canton], 200);
    }


    // Display all tattoo artists of a specific canton
    public function showByCanton($name)
    {
        // Récupérer les IDs des adresses associées au canton spécifié
        $adressIds = Adress::whereHas('canton', function ($query) use ($name) {
            $query->where('name', $name);
        })->pluck('id');

        // Récupérer les IDs des tatoueurs associés à ces adresses
        $tattooArtistIds = Adress::whereIn('id', $adressIds)->pluck('tattoo_artist_id');

        // Récupérer les tatoueurs correspondants avec les données utilisateur
        $tattooArtists = TattooArtist::with('user')
            ->whereIn('id', $tattooArtistIds)
            ->get();

        return response()->json(['tattoo_artists' => $tattooArtists]);
    }
}
