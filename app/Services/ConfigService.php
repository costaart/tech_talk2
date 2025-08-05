<?php

// Singleton
namespace App\Services;

class ConfigService
{
    protected array $data;
    public string $label = 'default';

    public function __construct()
    {
        $this->data = ['env' => 'production', 'version' => '1.0.0'];
    }

    public function get(string $key): mixed
    {
        return $this->data[$key] ?? null;
    }
}
