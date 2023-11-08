<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Shop\Domain\Product;

/**
 * @mixin Product
 */
class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            'id' => $this->getId()->toString(),
            'name' => $this->getName()->toString(),
            'created_at' => $this->getCreatedAt()->format('d.m.Y H:i'),
            'price' => $this->getPrice()->toInt(),
        ];
    }
}
