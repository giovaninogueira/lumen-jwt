<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Lumen\Routing\Controller as BaseController;

class UserController extends BaseController
{
    /**
     * Get user actual
     *
     * @return void
     */
    public function me()
    {
        return response()->json(
            auth()->user()
        );
    }

    /**
     * Get list of users
     *
     * @return void
     */
    public function getUsers()
    {
        return response()->json([
            'list' => User::all()
        ]);
    }
}
