<?php
declare(strict_types=1);

namespace Shop\Domain;
interface ProductRepositoryInterface
{
    /**
     * @param int $page
     * @param int $limit
     * @return array|Product[]
     */
    public function list(int $page, int $limit): array;

    public function create(Product $product): Product;
}
