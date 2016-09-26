<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //CRIA ROTAS PARA GERAR OS TOKENS E REFRESH TOKEN
        Passport::routes();

        //SETA O TEMPO DE DURAÇÃO DE UM TOKEN
        Passport::tokensExpireIn(Carbon::now()->addDays(15));

        //SETA O TEMPO DE DURAÇÃO DE UM REFRESH TOKEN
        Passport::refreshTokensExpireIn(Carbon::now()->addDays(30));

        //DIZ AO PASSAPORT PARA DELETAR OS TOKENS VENCIDOS DO BANCO DE DADOS
        Passport::pruneRevokedTokens();
    }
}
