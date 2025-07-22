<?php

namespace App\Providers;

use App\Enums\UserRole;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        view()->composer("partials.navigation", function ($view){
            $user = auth()->user();
            $hasEnrollment = $user && $user->role === UserRole::ARTIST;
            return $view->with("hasEnrollment", $hasEnrollment);
        });
    }
}
