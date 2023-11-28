<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function createUSer(Request $request)
    {
        Log::info("create Role - 1");
        try {
            $user = $request->all();
            dump($user);

            $user = User::create([
                'user_name' => $user['user_name'],
                'email' => $user['email'],
                'password' => $user['password'],
                'phone' => $user['phone'],
                'role' => $user['role'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'User created',
                'data' => $user,
            ], Response::HTTP_OK);
        } catch (\Exception $errorMessage) {
            return response()->json([
                'success' => false,
                'message' => 'User not created',
                'error' => $errorMessage->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getAllUsers(Request $request)
    {
        Log::info("getAllRoles - 1");
        try {
            $users = User::query()->get();
            return response()->json([
                'success' => true,
                'message' => 'Roles found',
                'data' => $users,
            ], Response::HTTP_OK);
        } catch (\Exception $errorMessage) {
            return response()->json([
                'success' => false,
                'message' => 'Roles not found',
                'error' => $errorMessage->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function deleteAUserById(Request $request , $id)
    {
        Log::info("deleteARoleById - 1");
        try {
            $user = User::query()->findOrFail($id);
            $user->delete();
            return response()->json([
                'success' => true,
                'message' => 'User deleted',
                'data' => $user,
            ], Response::HTTP_OK);
        } catch (\Exception $errorMessage) {
            return response()->json([
                'success' => false,
                'message' => 'User not deleted',
                'error' => $errorMessage->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
