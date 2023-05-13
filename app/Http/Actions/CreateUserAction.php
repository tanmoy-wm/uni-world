<?php

namespace App\Http\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserAction
{
    public static function execute($data, $password)
    {
        $data->user()->create([
            'first_name'  => $data->first_name,
            'middle_name' => $data->middle_name,
            'last_name'   => $data->last_name,
            'email'       => $data->email,
            'is_active'   => $data->is_active ?? null,
            'avatar'      => $data->avatar ?? null,
            'password'    => Hash::make($password)
        ]);
    }
}
