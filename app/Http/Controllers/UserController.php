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
        $this->validate($request, [
            'name' => ['nullable', 'string'],
        ]);

        $user = $request->user();

        $user->name = $request->get('name');
        $user->save();

        return response()->json([
            'status' => 1,
        ]);
    }


    public function deleteMe(Request $request)
    {
        $user = $request->user();

        $user->delete();

        return response()->json([
            'status' => 1,
        ]);
    }
}
