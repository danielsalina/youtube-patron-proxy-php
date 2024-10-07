<?php

// Este archivo simula el cliente que interactúa con el sistema. Utiliza el Proxy en lugar de interactuar directamente con el servicio.

require_once 'vendor/autoload.php';

use Product\ProductService;
use Product\ProductProxy;

// Crear el servicio real
$productService = new ProductService();

// Crear el proxy con el servicio real
$productProxy = new ProductProxy($productService);

// Solicitar productos
echo "Carrito de compras:\n";
$product = $productProxy->getProduct(1); // No está en caché, consulta la base de datos
print_r($product);

$product = $productProxy->getProduct(1); // Está en caché, no consulta la base de datos
print_r($product);

$product = $productProxy->getProduct(2); // No está en caché, consulta la base de datos
print_r($product);
