<?php

namespace App\Http\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserAction
{
    public static function execute($user_type, $password): void
    {
        $user_type->user()->create([
            'first_name'      => $user_type->first_name ?? null,
            'middle_name'     => $user_type->middle_name ?? null,
            'last_name'       => $user_type->last_name ?? null,
            'university_name' => $user_type->name ?? null,
            'email'           => $user_type->email,
            'is_active'       => $user_type->is_active ?? null,
            'avatar'          => $user_type->avatar ?? null,
            'password'        => Hash::make($password)
        ]);
    }
}
