<?php

// Proxy (Intermediario): Proporciona la misma interfaz que el objeto real y actúa como un intermediario entre el cliente y el objeto real.

namespace Product;

class ProductProxy implements ProductInterface
{
    private $cache = [];

    public function __construct(private ProductService $productService){}

    public function getProduct(int $productId): array
    {
        if (!isset($this->cache[$productId])) {
            echo "Producto no encontrado en caché. ";
            $this->cache[$productId] = $this->productService->getProduct($productId);
        } else {
            echo "Producto encontrado en caché. ";
        }

        return $this->cache[$productId];
    }
}
