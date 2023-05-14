<?php

namespace App\Http\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserAction
{
    public static function execute($data, $password): void
    {
        $user = $data->user()->create([
            'first_name'      => $data->first_name ?? null,
            'middle_name'     => $data->middle_name ?? null,
            'last_name'       => $data->last_name ?? null,
            'university_name' => $data->name ?? null,
            'email'           => $data->email,
            'is_active'       => $data->is_active ?? null,
            'avatar'          => $data->avatar ?? null,
            'password'        => Hash::make($password)
        ]);
    }
}
