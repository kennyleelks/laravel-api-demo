<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function helloWorld()
    {
        return response()->json([
            'message' => 'Hello World',
        ]);
    }
}
