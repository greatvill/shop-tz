<?php
declare(strict_types=1);
namespace Shop\Domain;

class Money
{
    public function __construct(private int $val)
    {
        if ($val <= 0) {
            throw new \RuntimeException();
        }
    }

    public function toInt(): int
    {
        return $this->val;
    }
}
