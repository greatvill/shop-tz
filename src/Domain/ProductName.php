<?php
declare(strict_types=1);

namespace Shop\Domain;
class ProductName
{
    public function __construct(private readonly string $val)
    {
        if (empty(trim($val))) {
            throw new \RuntimeException();
        }
    }

    public function __toString(): string
    {
        return $this->val;
    }

    public function toString(): string
    {
        return $this->val;
    }
}
