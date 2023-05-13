<?php

namespace App\Http\Actions;

class UpdateUserAction
{
    public static function execute($user_type, $data)
    {
        $user_type->user()->update([
            'first_name'  => $data->first_name,
            'middle_name' => $data->middle_name,
            'last_name'   => $data->last_name,
            'email'       => $data->email,
            'is_active'   => $data->is_active ?? null,
            'avatar'      => $data->avatar ?? null,
        ]);
    }
}
