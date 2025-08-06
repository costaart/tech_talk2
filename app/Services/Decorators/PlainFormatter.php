<?php

namespace App\Services\Decorators;

class PlainFormatter implements FormatterInterface
{
    public function format(string $message): string
    {
        return $message;
    }
}
