<?php

use Illuminate\Support\Facades\Route;
use App\Services\ConfigService;
use App\Services\UppercaseDecorator;
use App\Models\Pedido;
use App\Events\PedidoCriado;

Route::get('/', function () {
    return view('welcome');
});

// Singleton: Criacional
Route::get('/singleton', function () {
    $a = app(ConfigService::class);
    $b = app(ConfigService::class);

    $a->label = 'primeira alteração';
    $b->label .= ' + segunda alteração';

    return "A: {$a->label} | B: {$b->label}";
});

// Decorator: Estrutural
Route::get('/decorator', function () {
    $formatter = new UppercaseDecorator();
    return $formatter->format("mensagem alterada com sucesso");
});

// Observer: Comportamental
Route::get('/observer', function () {
    $pedido = new Pedido("Pedido demonstrativo");
    event(new PedidoCriado($pedido));

    return "Pedido criado com sucesso ✅  (ID: {$pedido->id})";
});