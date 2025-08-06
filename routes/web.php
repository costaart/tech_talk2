<?php

use Illuminate\Support\Facades\Route;
use App\Services\ConfigService;
use App\Services\Decorators\PlainFormatter;
use App\Services\Decorators\UppercaseDecorator;
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

    return "A: {$a->label} <br> <br>  B: {$b->label}";
});

// Decorator: Estrutural
Route::get('/decorator', function () {
    $plain = new PlainFormatter();
    $formatter = new UppercaseDecorator($plain);

    return $formatter->format("mensagem exibida com sucesso");
});

// Observer: Comportamental
Route::get('/observer', function () {
    $pedido = new Pedido("Pedido demonstrativo");
    event(new PedidoCriado($pedido));

    return "Pedido criado com sucesso ✅  (ID: {$pedido->id})";
});