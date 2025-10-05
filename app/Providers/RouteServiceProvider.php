<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/dashboard'; // Rota para onde o usuário é redirecionado após login

    // Você pode implementar outros métodos padrão do Laravel aqui, ou deixar assim para começar
}
