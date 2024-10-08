<?php

// app/Http/Controllers/Auth/AuthenticatedSessionController.php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        // Validate request data
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember' => 'boolean', // for "Remember Me" functionality
        ]);

        // Attempt to authenticate the user
        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        // Optionally, generate a token for API authentication
        $user = Auth::user();
        $token = $user->createToken('Ecomerce')->plainTextToken; // If using Laravel Sanctum

        return response()->json([
            'message' => 'Login successful!',
            'token' => $token, // Return token for API authentication
            'user' => $user,
        ]);
    }

    public function destroy(Request $request)
    {
        Auth::logout(); // Log out the user
        return response()->json(['message' => 'Logout successful!']);
    }
}
