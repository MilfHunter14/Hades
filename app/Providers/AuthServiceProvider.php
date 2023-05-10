<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Venta;
use App\Models\Team;
use App\Policies\TeamPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        $this->registerPolicies();

        //Es una puerta que da acceso a editar los usuarios que hayan creado los registros
        Gate::define('edita-venta', function (User $user, Venta $venta) {
            return $user->id === $venta->user_id;
        });

        //Es una puerta que da acceso a eliminar los usuarios que hayan creado los registros
        Gate::define('elimina-venta', function (User $user, Venta $venta) {
            return $user->id === $venta->user_id;
        });

        
    }
}
