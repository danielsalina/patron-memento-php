<?php

// Memento: Almacena el estado del carrito (productos). Éste objeto es el que almacena el estado capturado del originador. Es independiente y su contenido no es visible para el código externo.

namespace Cart;

class CartMemento {
    private array $state;

    public function __construct(array $state) {
        $this->state = $state;
    }

    // Retorna el estado almacenado
    public function getState(): array {
        return $this->state;
    }
}
