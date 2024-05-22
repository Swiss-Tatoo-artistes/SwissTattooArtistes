<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    private function validateUser(Request $request)
    {
        // Validations of the datas
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'is_tattoo_artist' => 'required|bool',
            'pseudo' => 'required|string|max:25',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);
    }

    //Display all the users
    public function index()
    {
        $users = User::get();

        return response()->json(['users' => $users], 200);
    }

    // Display a specific user
    public function show($id)
    {
        $user = User::find($id);

        if ($user) {
            return response()->json(['user' => $user], 200);
        } else {
            return response()->json(['message' => 'User not found'], 404);
        }
    }

    // Create a new user
    public function create(Request $request)
    {
        $this->validateUser($request);

        $newUser = new User();
        $newUser->fill($request->all());
        $newUser->save();

        $token = $newUser->createToken('auth_token')->plainTextToken;


        if ($newUser) {
            return response()->json([
                'message' => 'User created successfully',
                'access_token' => $token,
                'token_type' => 'Bearer',
            ], 201);
        } else {
            return response()->json(['message' => 'Failed to create user'], 500);
        }
    }


    // Login of a user
    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    // Resend authenticated user account with Bearer token
    public function me(Request $request)
    {
        return $request->user();
    }


    // Update a specific user
    public function update(Request $request, $id)
    {
        $this->validateUser($request);

        $updateUser = User::find($id);
        if (!$updateUser) {
            return response()->json(['message' => 'User not found'], 400);
        }

        $updateUser->fill($request->all());
        $updateUser->save();

        return response()->json(['mesasge' => 'User updated successfully'], 200);
    }

    //delete a specific user
    public function delete($id)
    {
        $deleted = User::destroy($id);

        if ($deleted) {
            return response()->json(['message' => 'User deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Failed to delete user'], 404);
        }
    }
}
