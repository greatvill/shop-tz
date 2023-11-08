<?php
declare(strict_types=1);

namespace Shop\Domain;

use DateTime;

class Product
{

    public function __construct(private ProductId   $id,
                                private ProductName $name,
                                private Money       $price,
                                private DateTime    $createdAt,
    )
    {
    }

    public function getId(): ProductId
    {
        return $this->id;
    }

    public function setId(ProductId $id): void
    {
        $this->id = $id;
    }

    public function getName(): ProductName
    {
        return $this->name;
    }

    public function setName(ProductName $name): void
    {
        $this->name = $name;
    }

    public function getPrice(): Money
    {
        return $this->price;
    }

    public function setPrice(Money $price): void
    {
        $this->price = $price;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}
