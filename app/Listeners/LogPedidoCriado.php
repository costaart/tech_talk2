<?php

namespace App\Listeners;

use App\Events\PedidoCriado;
use Illuminate\Support\Facades\Storage;

class LogPedidoCriado
{
    public function handle(PedidoCriado $event): void
    {
        $msg = "Pedido com ID {$event->pedido->id} criado com sucesso!\n";
        Storage::disk('local')->append('pedidos_log.txt', $msg);
    }
}
