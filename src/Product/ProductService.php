<?php

// Objeto Real (Real Subject): El objeto al cual el Proxy representa.

namespace Product;

class ProductService implements ProductInterface
{
    // Simula una base de datos
    private $products = [
        1 => ['name' => 'Laptop', 'price' => 1200],
        2 => ['name' => 'Mouse', 'price' => 25],
        3 => ['name' => 'Keyboard', 'price' => 70]
    ];

    public function getProduct(int $productId): array
    {
        echo "Consultando la base de datos para obtener el producto {$productId}...\n";
        return $this->products[$productId] ?? [];
    }
}
