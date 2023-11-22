<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Requests\UserLoginRequest;

class UserLoginController extends Controller
{
    public function login(UserLoginRequest $request): JsonResponse
    {
        $validatedUser = $request->validated();
        if ($validatedUser) {
            $user = User::where('email', $validatedUser['email'])->get();

            if ($user) {
                 return response()->json([
                    'status' => 200,
                    'message' => 'User login success',
                ]);
            }
        }
        return response()->json([]);
    }
}
