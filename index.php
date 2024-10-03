<?php

require __DIR__ . '/vendor/autoload.php';

use Cart\Cart;
use Cart\CartHistory;

// Crear carrito y el historial
$cart = new Cart();
$history = new CartHistory();

// Añadir productos al carrito
$cart->addProduct('Laptop', 1);
$cart->addProduct('Mouse', 2);

// Guardar el estado actual del carrito en el historial
$history->save($cart->save());

echo "Carrito antes de eliminar producto:\n";
print_r($cart->getProducts());

// Eliminar un producto
$cart->removeProduct('Mouse');

// Guardar el estado actual después de la eliminación
// $history->save($cart->save());

echo "Carrito después de eliminar producto:\n";
print_r($cart->getProducts());

// Deshacer la última acción (eliminar el producto)
$cart->restore($history->undo());

echo "Carrito después de deshacer:\n";
print_r($cart->getProducts());
