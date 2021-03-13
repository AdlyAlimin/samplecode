<?php

namespace App\Services\User;

use App\Models\User;
use Exception;

class DeleteService
{
    public function delete($id)
    {
        try {   

            User::destroy($id);

            return response()->json('User Deleted', 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }
}