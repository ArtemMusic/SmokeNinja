<?php

namespace App\Http\services\Admin\User;

use App\Models\User;

class Service
{
    public function store($data)
    {
        $user = User::FirstOrCreate(["email" => $data['email']], $data);
        return $user;
    }

    public function update($data, $user)
    {
        $user->update($data);
        return $user;
    }
}
