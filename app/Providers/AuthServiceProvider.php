<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Entrada;
use App\Policies\EntradaPolicy;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Entrada::class => EntradaPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->deleteAction();
    }

    public function deleteAction(){
        //Un gate o una puerta devuelve un true o false
        //Recibe dos parametros
        //El nombre del gate y una funcion anonima
        //La funcion anonima recibe dos parametros
        //El usuario y el objeto a evaluar
        Gate::define('deleteEntrada',function($user,$entrada){
            return $user->id==$entrada->user_id;
        });
    }
}
