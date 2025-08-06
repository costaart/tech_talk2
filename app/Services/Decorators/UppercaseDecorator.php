<?php

namespace App\Services\Decorators;

class UppercaseDecorator implements FormatterInterface
{
    public function __construct(private FormatterInterface $inner)
    {
    }

    public function format(string $message): string
    {
        return strtoupper($this->inner->format($message));
    }
}
