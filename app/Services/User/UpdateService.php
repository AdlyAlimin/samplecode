<?php

namespace App\Services\User;

use App\Models\User;
use Exception;

class UpdateService
{
    public function update($id, $request)
    {
        try {

            User::where('id', $id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password
                ]); 

            return response()->json('User Updated', 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }
}