<?php

// Observer
namespace App\Models;

class Pedido
{
    public $id;
    public $descricao;

    public function __construct(string $descricao)
    {
        $this->descricao = $descricao;
        $this->id = random_int(1000, 9999);
    }
}
