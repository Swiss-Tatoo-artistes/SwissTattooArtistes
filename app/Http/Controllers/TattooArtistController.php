<?php

namespace App\Http\Controllers;

use App\Models\TattooArtist;
use App\Models\Adress;
use App\Http\Requests\AdressRequest;
use App\Http\Requests\TattooArtistRequest;


class TattooArtistController extends Controller
{
    //Tattoo Artists
    //Display all the tattooartists
    public function index()
    {
        $tattooArtists = TattooArtist::with(['user' => function ($query) {
            $query
                ->where('is_tattoo_artist', true)
                ->select('id', 'name', 'lastname', 'pseudo');
        }])
            ->get();

        return response()->json(['tattooArtists' => $tattooArtists], 200);
    }

    // Create new tattoo artist
    public function create(TattooArtistRequest $request)
    {

        $newTattooArtist = new TattooArtist();
        $newTattooArtist->fill($request->all());
        $newTattooArtist->save();

        // Check if the creation is done
        if ($newTattooArtist) {
            return response()->json(['message' => 'Tattoo artist created successfully'], 201);
        } else {
            return response()->json(['message' => 'Failed to create tattoo artist'], 500);
        }
    }

    // Update a specific tattoo artist
    public function update(TattooArtistRequest $request, $id)
    {
        $updateTattooArtist = TattooArtist::find($id);
        if (!$updateTattooArtist) {
            return response()->json(['message' => 'Tattoo artist not found'], 404);
        }

        $updateTattooArtist->fill($request->all());
        $updateTattooArtist->save();

        return response()->json(['message' => 'Tattoo artist updated successfully'], 200);
    }

    // Delete a specific tattoo artist
    public function delete($id)
    {
        $deleted = TattooArtist::destroy($id);

        if ($deleted) {
            return response()->json(['message' => 'Tattoo artist deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Failed to delete tattoo artist'], 404);
        }
    }

    // Display a specific tattoo artists
    public function show($id)
    {

        $tattooArtist = TattooArtist::where('id', $id)
            ->with(['user' => function ($query) {
                $query
                    ->select('id', 'name', 'lastname', 'pseudo');
            }])
            ->first();

        if ($tattooArtist) {
            return response()->json(['tattooArtist' => $tattooArtist], 200);
        } else {
            return response()->json(['message' => 'Tattoo artist not found'], 404);
        }
    }


    // Adresses
    // Get the addresses of a specific tattoo artist
    public function indexAdresses($id)
    {
        $tattooArtist = TattooArtist::with('adresses.canton')->find($id);

        if (!$tattooArtist) {
            return response()->json(['error' => 'Tattoo artist not found'], 404);
        }

        return response()->json(['adresses' => $tattooArtist->adresses], 200);
    }

    // Create an adress for a specific tattoo artist
    public function createAdress(AdressRequest $request, $id)
    {
        // Check if the tattoo artist exists
        $tattooArtist = TattooArtist::find($id);
        if (!$tattooArtist) {
            return response()->json(['message' => 'Tattoo artist not found'], 404);
        }

        // Si canton_id n'est pas présent dans les données validées, le définir à null
        if (!isset($validated['canton_id'])) {
            $validated['canton_id'] = null;
        }

        $newAdress = new Adress();
        $newAdress->fill($request->all());
        $newAdress->tattoo_artist_id = $id;
        $newAdress->save();

        // Check if the creation is done
        if ($newAdress) {
            return response()->json(['message' => 'Adress created successfully'], 201);
        } else {
            return response()->json(['message' => 'Failed to create adress'], 500);
        }
    }

    //Update an adresse for a specific tattoo artist
    public function updateAdress(AdressRequest $request, $id, $adressId)
    {
        // Check if the tattoo artist exists
        $tattooArtist = TattooArtist::find($id);
        if (!$tattooArtist) {
            return response()->json(['message' => 'Tattoo artist not found'], 404);
        }

        // Check if the address exists and belongs to the tattoo artist
        $adress = Adress::where('id', $adressId)->where('tattoo_artist_id', $id)->first();
        if (!$adress) {
            return response()->json(['message' => 'Address not found or does not belong to the tattoo artist'], 404);
        }

        // Update the address with the new data
        $adress->fill($request->all());
        $adress->save();

        return response()->json(['message' => 'Address updated successfully'], 200);
    }

    //Delete an adress of a specific tattoo artist
    public function deleteAdress($id, $adressId)
    {
        // Check if the tattoo artist exists
        $tattooArtist = TattooArtist::find($id);
        if (!$tattooArtist) {
            return response()->json(['message' => 'Tattoo artist not found'], 404);
        }

        // Check if the address exists and belongs to the tattoo artist
        $adress = Adress::where('id', $adressId)->where('tattoo_artist_id', $id)->first();
        if (!$adress) {
            return response()->json(['message' => 'Address not found or does not belong to the tattoo artist'], 404);
        }

        // Delete the address
        $adress->delete();

        return response()->json(['message' => 'Address deleted successfully'], 200);
    }

    // Get an address for a specific tattoo artist
    public function showAdress($id, $adressId)
    {
        // Check if the address exists and belongs to the tattoo artist
        $adress = Adress::where('id', $adressId)
            ->where('tattoo_artist_id', $id)
            ->first();

        if (!$adress) {
            return response()->json(['message' => 'Address not found or does not belong to the tattoo artist'], 404);
        }

        return response()->json(['address' => $adress], 200);
    }




    // Opening Times
    // Get all the opening time of a specific adress
    public function indexOpeningTimes($tattooArtist, $adressId)
    {
        // Vérifiez d'abord si le tatoueur existe
        $tattooArtist = TattooArtist::find($tattooArtist);

        if (!$tattooArtist) {
            return response()->json(['error' => 'Tattoo artist not found'], 404);
        }

        // Récupérez l'adresse avec les horaires d'ouverture associés
        $adress = Adress::where('id', $adressId)
            ->where('tattoo_artist_id', $tattooArtist->id)
            ->with('openingTime')
            ->first();

        if (!$adress) {
            return response()->json(['error' => 'Address not found for this tattoo artist'], 404);
        }

        return response()->json(['opening_times' => $adress->openingTime], 200);
    }

    // Create

    // Update

    // Delete

    //Show













    public function getAdressesAndOpeningtimes($id)
    {
        $tattooArtist = TattooArtist::with(['adresses.canton', 'openingTimes'])->find($id);

        if (!$tattooArtist) {
            return response()->json(['error' => 'Tattoo artist not found'], 404);
        }

        return response()->json([
            'adresses' => $tattooArtist->adresses,
            'openingTimes' => $tattooArtist->openingTimes
        ], 200);
    }
}
