<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
        Gate::define('usuario-login', function($usuario){
            return $usuario->rol_id == 0; // User
        });
        Gate::define('soporte-login', function($usuario){
            return $usuario->rol_id == 1; // User
        });
        Gate::define('admin-login', function($usuario){
            return $usuario->rol_id == 2; // User
        });
    }
}
