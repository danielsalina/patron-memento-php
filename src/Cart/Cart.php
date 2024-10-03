<?php

// Originador: Objeto que tiene un estado interno y que puede crear un memento (un snapshot de su estado).

namespace Cart;

class Cart {
    private array $products = [];

    public function addProduct(string $product, int $quantity): void {
        $this->products[$product] = ($this->products[$product] ?? 0) + $quantity;
    }

    public function removeProduct(string $product): void {
        unset($this->products[$product]);
    }

    public function getProducts(): array {
        return $this->products;
    }

    // Crear un Memento para guardar el estado actual del carrito
    public function save(): CartMemento {
        return new CartMemento($this->products);
    }

    // Restaurar el estado del carrito desde un Memento
    public function restore(CartMemento $memento): void {
        $this->products = $memento->getState();
    }
}
