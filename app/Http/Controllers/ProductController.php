<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\ProductIndexRequest;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Shop\Domain\ProductRepositoryInterface;
use Shop\Domain\ProductServiceInterface;

class ProductController extends Controller
{
    public function __construct(private readonly ProductRepositoryInterface $repository,
                                private readonly ProductServiceInterface    $productService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(ProductIndexRequest $request): AnonymousResourceCollection
    {
        $request->validated();
        return ProductResource::collection($this->repository->list($request->get('page'), $request->get('limit')));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(CreateProductRequest $request): Response
    {
        $request->validated();
        $this->productService->create($request->toDto());
        return new Response(status: 201);
    }
}
