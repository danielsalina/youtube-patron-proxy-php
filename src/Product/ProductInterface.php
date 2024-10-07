<?php

// Esta interfaz define los métodos que serán implementados tanto por el servicio real como por el proxy.

namespace Product;

interface ProductInterface
{
    public function getProduct(int $productId): array;
}
