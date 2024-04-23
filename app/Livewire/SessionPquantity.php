<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class SessionPquantity extends Component
{

    public $cart;
    public $message;

    public function mount()
    {
        $this->cart = Session::get('cart', []);
    }

    public function updateQuantity($id, $value)
    {
        $this->cart[$id]['quantity'] = (int)$value;
        $this->updateCart('Quantity of ' . $this->cart[$id]['name'] . ' added +'. (int)$value.' in your cart');
    }

    public function incrementQuantity($id)
    {
        $this->cart[$id]['quantity']++;
        $this->updateCart('Quantity of ' . $this->cart[$id]['name'] . ' added +1 in your cart');
    }

    public function decrementQuantity($id)
    {
        if ($this->cart[$id]['quantity'] > 1) {
            $this->cart[$id]['quantity']--;
            $this->updateCart('Quantity of ' . $this->cart[$id]['name'] . ' removed -1 in your cart');
        }
    }

    public function deleteProduct($id)
    {
        $productName = $this->cart[$id]['name'];
        unset($this->cart[$id]);
        $this->updateCart($productName . ' removed from cart');
    }

    private function updateCart($message = null)
    {
        Session::put('cart', $this->cart);
        $this->dispatch('cartUpdated');
        $this->message = $message;
    }

    public function render()
    {
        return view('livewire.session-pquantity');
    }
}
