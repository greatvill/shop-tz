<?php
declare(strict_types=1);
namespace Shop\Domain;
use Ramsey\Uuid\Uuid;

class ProductId
{
    public function __construct(private readonly string $val)
    {
        if (!Uuid::isValid($this->val)) {
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
