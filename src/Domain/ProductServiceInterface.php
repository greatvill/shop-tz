<?php
declare(strict_types=1);

namespace Shop\Domain;

use Shop\Application\Dto\CreateProductDto;

interface ProductServiceInterface
{
    public function create(CreateProductDto $dto): void;
}
