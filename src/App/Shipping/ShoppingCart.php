<?php

namespace App\Shipping;

class ShoppingCart
{
    private array $items;
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->items = [];
    }

    public function addItem(Product $item): void
    {
        $this->items[] = $item;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getTotal(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrice() * $item->getQuantity();
        }
        return $total;
    }
}