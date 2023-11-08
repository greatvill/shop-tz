<?php
declare(strict_types=1);

namespace Shop\Application\Create;

use Illuminate\Support\Str;
use Shop\Domain\Money;
use Shop\Domain\Product;
use Shop\Domain\ProductId;
use Shop\Domain\ProductName;
use Shop\Domain\ProductRepositoryInterface;

class CreateProductCommandHandler
{
    public function __construct(private readonly ProductRepositoryInterface $repository)
    {
    }

    public function __invoke(CreateProductCommand $command): void
    {
        $p = new Product(
            new ProductId(Str::uuid()),
            new ProductName($command->getName()),
            new Money($command->getPrice()),
            $command->getCreatedAt());
        $this->repository->create($p);
    }
}
