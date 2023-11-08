<?php
declare(strict_types=1);

namespace Shop\Application\List;

use Shop\Domain\ProductRepositoryInterface;

class ListProductQueryHandler
{
    public function __construct(private readonly ProductRepositoryInterface $repository)
    {
    }

    public function __invoke(ListProductQuery $query): array
    {
        return $this->repository->list($query->getPage(), $query->getLimit());
    }
}
