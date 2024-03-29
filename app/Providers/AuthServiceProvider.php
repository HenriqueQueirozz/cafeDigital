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
        Gate::define('admin', function(User $user){
            return $user->fk_idTipoPerfil_usu <= 1;
        });

        Gate::define('owner', function(User $user){
            return $user->fk_idTipoPerfil_usu <= 2;
        });

        Gate::define('frater', function(User $user){
            return $user->fk_idTipoPerfil_usu <= 3;
        });
    }
}
