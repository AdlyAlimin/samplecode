<?php

namespace App\Services\User;

use App\Models\User;
use Exception;

class CreateService
{
    public function create($request)
    {
        try {

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            return response()->json('User Created', 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }
}