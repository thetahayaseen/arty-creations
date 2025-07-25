<?php

namespace App\Traits;

use App\Enums\UserRole;

trait RedirectUserByRole
{
    public function redirectTo()
    {
        return match(auth()->user()->role){
            UserRole::ADMIN => route("admin.dashboard"),
            default => "/"
        };
    }
}
