<?php
namespace App\Providers\ValidacaoForm;

use Code\Validator\Cnpj;
use Code\Validator\Cpf;

class ClientValidation
{
    public static function documentNumber()
    {
        /*
         * Regra de validação para cpf/cnpj
         * \Validador::extend() --> Utilizado para criar uma nova validação
         */
        \Validator::extend('document_number', function ($attribute, $value, $parameters, $validator) {
            $documentValidar = $parameters[0] == 'cpf' ? new Cpf() : new Cnpj();
            return $documentValidar->isValid($value);
        });

    }

}