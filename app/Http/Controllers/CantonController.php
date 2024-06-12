<?php

namespace App\Http\Controllers;

use App\Models\Canton;
use App\Models\Adress;
use App\Models\TattooArtist;
use Illuminate\Http\Request;

class CantonController extends Controller
{

    private function validateCanton(Request $request)
    {
        //Validations of datas
        $request->validate([
            'name' => 'required|string|max:255|unique:cantons', // Add minuscule caractère
            'image_url' => 'nullable|url'
        ]);
    }

    //Display all the cantons
    public function index()
    {
        $cantons = Canton::get();

        return response()->json(['cantons' => $cantons], 200);
    }

    //Create a new canton
    public function create(Request $request)
    {
        $this->validateCanton($request);

        $newCanton = new Canton();
        $newCanton->fill($request->all());
        $newCanton->save();

        if ($newCanton) {
            return response()->json(['message' => 'Canton created successfully'], 201);
        } else {
            return response()->json(['message' => 'Failed to create canton'], 500);
        }
    }

    //Update a specific canton
    public function update(Request $request, $name)
    {
        $this->validateCanton($request);

        $canton = Canton::where('name', $name)->first();
        if (!$canton) {
            return response()->json(['message' => 'Canton not found'], 404);
        }

        $canton->fill($request->all());
        $canton->save();

        return response()->json(['message' => 'Canton updated successfully'], 200);
    }

    //Delete a specific canton
    public function delete($name)
    {
        $deleted = Canton::where('name', $name)->delete();

        if ($deleted) {
            return response()->json(['message' => 'Canton deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Canton not found'], 404);
        }
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
        // Get the ID of the addresses associated with specific canton
        $adressIds = Adress::whereHas('canton', function ($query) use ($name) {
            $query->where('name', $name);
        })->pluck('id');

        // Get the ID of the tattoo artists associated with the addresses
        $tattooArtistIds = Adress::whereIn('id', $adressIds)->pluck('tattoo_artist_id');

        // Retrieve matching tattoo artists with user data
        $tattooArtists = TattooArtist::with('user')
            ->whereIn('id', $tattooArtistIds)
            ->get();

        return response()->json(['tattoo_artists' => $tattooArtists]);
    }
}
