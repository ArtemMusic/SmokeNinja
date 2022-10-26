<?php

namespace App\Http\services\Admin\User;

use App\Jobs\StoreUserJob;
use App\Mail\User\PasswordMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class Service
{
    public function store($data)
    {
        // StoreUserJob::dispatch($data);
    }

    public function update($data, $user)
    {
        $user->update($data);
        return $user;
    }
}
