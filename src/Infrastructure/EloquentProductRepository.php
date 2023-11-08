<?php
declare(strict_types=1);

namespace Shop\Infrastructure;

use Shop\Domain\Money;
use Shop\Domain\Product;
use App\Models\Product as ProductEloquent;
use Shop\Domain\ProductId;
use Shop\Domain\ProductName;
use Shop\Domain\ProductRepositoryInterface;

class EloquentProductRepository implements ProductRepositoryInterface
{

    /**
     * @param int $page
     * @param int $limit
     * @return array|Product[]
     */
    public function list(int $page, int $limit): array
    {
        return ProductEloquent::query()->forPage($page, $limit)
            ->orderByDesc('created_at')
            ->get()
            ->map(fn(ProductEloquent $p) => $this->convertToDomain($p))->toArray();
    }

    public function create(Product $product): Product
    {
        $p = new ProductEloquent();
        $p->name = $product->getName();
        $p->id = $product->getId();
        $p->created_at = $product->getCreatedAt();
        $p->price = $product->getPrice()->toInt();
        $p->save();
        return $product;
    }

    public function convertToDomain(ProductEloquent $product): Product
    {
        return new Product(
            new ProductId($product->id),
            new ProductName($product->name),
            new Money($product->price),
            $product->created_at
        );
    }
}
