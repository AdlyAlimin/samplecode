<?php

namespace App\Services\User;

use App\Models\User;
use Exception;

class IndexService
{
    public function index()
    {
        try {

            $data = User::all();

            return response()->json($data, 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }
}