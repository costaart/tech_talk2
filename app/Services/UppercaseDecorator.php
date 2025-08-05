<?php

namespace App\Services;

class UppercaseDecorator extends MessageFormatter
{
    public function format(string $message): string
    {
        return strtoupper(parent::format($message));
    }
}
