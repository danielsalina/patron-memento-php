<?php

// Caretaker: Encargado de manejar el memento (almacenar y restaurar estados). No modifica ni accede al contenido del memento directamente.

namespace Cart;

class CartHistory {
    private array $history = [];

    // Guardar un nuevo estado del carrito en el historial
    public function save(CartMemento $memento): void {
        $this->history[] = $memento;
    }

    // Restaurar el último estado del carrito
    public function undo(): ?CartMemento {
        return array_pop($this->history);
    }
}
