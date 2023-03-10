<?php declare(strict_types=1);

namespace Surda\Zebra\Label;

class StringLabel implements ILabel
{
    private string $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function getData(): string
    {
        return $this->data;
    }
}