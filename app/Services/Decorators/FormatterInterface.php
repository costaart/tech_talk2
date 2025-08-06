<?php

namespace App\Services\Decorators;

interface FormatterInterface
{
    public function format(string $message): string;
}
