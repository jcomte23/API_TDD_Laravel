<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'deviceName' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (!Hash::check($request->password, $user->password)) {
                return response()->json([
                    'message' => 'The password provided is incorrect',
                    'status' => 'Unauthorized',
                ], 401);
            } else {
                return response()->json([
                    'message' => 'Save this token on your device to be able to use the API on protected endpoints.',
                    'token' => $user->createToken($request->deviceName)->plainTextToken,
                    'status' => 'Success'
                ], 200);
            }
        } else {
            return response()->json([
                'message' => 'The e-mail address provided is not registered in our system.',
                "status" => "not_found"
            ], 404);
        }
    }

    public function logout()
    {
        return "llego al controlador de salida";
    }
}
