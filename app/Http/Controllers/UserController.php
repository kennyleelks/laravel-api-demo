<?php

namespace App\Http\Controllers;

use App\Resources\UserResource;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getMe(Request $request)
    {
        $user = $request->user();

        return response()->json([
            'status' => 1,
            'data' => new UserResource($user),
        ]);
//        return response()->json([
//            'status' => 1,
//            'data' => $user->toArray(),
//        ]);
    }

    public function updateMe(Request $request)
    {
        $user = $request->user();
    }

    public function deleteMe(Request $request)
    {
        $user = $request->user();
    }
}
