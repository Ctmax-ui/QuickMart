<?php

namespace App\Livewire;

use Livewire\Component;

class CartCounter extends Component
{

    protected $listeners= ['cartUpdate'=>'render'];

    public function render()
    {

        $cart_count=count((array) session('cart'));
        return view('livewire.cart-counter', compact('cart_count'));

    }
}
