<?php

namespace App\Services\User;

use App\Models\User;
use Exception;

class ShowService
{
    public function show($id)
    {
        try {
            
            $data = User::find($id);

            return response()->json($data, 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }
}