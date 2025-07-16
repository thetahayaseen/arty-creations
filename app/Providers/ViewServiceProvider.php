<?php

namespace App\Providers;

use App\Models\Artist\ArtistEnrollment;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        view()->composer("partials.navigation", function ($view){
            $hasEnrollment = false;
            $user = auth()->user();
            
            if($user){
                $hasEnrollment = ArtistEnrollment::where("user_id", $user->id)->exists();
            }

            return $view->with("hasEnrollment", $hasEnrollment);
        });
    }
}
