<?php
declare(strict_types=1);
declare(strict_types=1);

namespace Shop\Application\List;

class ListProductQuery
{
    public function __construct(private int $limit, private int $page)
    {
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setLimit(int $limit): void
    {
        $this->limit = $limit;
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function setPage(int $page): void
    {
        $this->page = $page;
    }


}
