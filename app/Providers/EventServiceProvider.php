<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Events\PedidoCriado;
use App\Listeners\LogPedidoCriado;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        PedidoCriado::class => [
            LogPedidoCriado::class,
        ],
    ];
}
