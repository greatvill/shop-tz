<?php
declare(strict_types=1);
declare(strict_types=1);

namespace Shop\Application\Create;

class CreateProductCommand implements \Shop\Domain\ProductRepositoryInterface
{
    public function __construct(private string $name, private int $price, private \DateTime $createdAt)
    {

    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}
