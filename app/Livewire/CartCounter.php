<?php

namespace App\Livewire;

use Livewire\Component;


class CartCounter extends Component
{

    public $cartCount;

    protected $listeners = ['cartUpdate' => 'updateCartCount'];

    public function mount()
    {
        $this->updateCartCount();
    }
    
    public function updateCartCount()
    {
        $this->cartCount = count((array) session('cart'));
    }

    public function render()
    {
        return view('livewire.cart-counter');
    }

    
}
