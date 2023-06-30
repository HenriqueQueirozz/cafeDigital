<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('ver-detalhes-admin', function(User $user){
            return $user->type_usu <= 0;
        });

        Gate::define('ver-detalhes-owner', function(User $user){
            return $user->type_usu <= 1;
        });

        Gate::define('ver-detalhes-frater', function(User $user){
            return $user->type_usu <= 1;
        });
    }
}
