<?php

namespace App\Http\Actions;

use Illuminate\Support\Facades\Auth;

class UpdateUserAction
{
    public static function execute($user_type, $data)
    {
        $user_type->user()->update([
            'first_name'      => $data['first_name'] ?? null,
            'middle_name'     => $data['middle_name'] ?? null,
            'last_name'       => $data['last_name'] ?? null,
            'university_name' => $data['name'] ?? null,
            'is_active'       => $data['is_active'] ?? null,
            'avatar'          => $data['avatar'] ?? null,
        ]);
    }
}
