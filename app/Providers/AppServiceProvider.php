<?php

namespace App\Providers;

use App\Providers\ValidacaoForm\ClientValidation;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Code\Validator\Cnpj;
use Code\Validator\Cpf;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $platform = Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform();
        // Quando um campo for enum, vai ser utilizado string
        $platform->registerDoctrineTypeMapping('enum', 'string');

        // Realiza a validação personalizada do cpf e cnpj
        ClientValidation::documentNumber();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
