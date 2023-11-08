<?php
declare(strict_types=1);

namespace Shop\Application;

use Illuminate\Support\Str;
use Shop\Application\Dto\CreateProductDto;
use Shop\Domain\Money;
use Shop\Domain\Product;
use Shop\Domain\ProductId;
use Shop\Domain\ProductName;
use Shop\Domain\ProductRepositoryInterface;
use Shop\Domain\ProductServiceInterface;

class ProductService implements ProductServiceInterface
{
    public function __construct(private readonly ProductRepositoryInterface $repository)
    {
    }

    public function create(CreateProductDto $dto): void
    {
        $p = new Product(
            new ProductId(Str::uuid()->toString()),
            new ProductName($dto->getName()),
            new Money($dto->getPrice()),
            $dto->getCreatedAt());
        $this->repository->create($p);
    }
}
