<?php

namespace App\Http\Controllers;

use App\Models\Canton;

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
}
