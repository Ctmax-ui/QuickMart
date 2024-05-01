<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class SessionPquantity extends Component
{

    public $cart;
    public $message;
    public $totalItems = 0;
    public $totalPrice = 0;

    public function mount()
    {
        $this->cart = Session::get('cart', []);
        $this->calculateTotals();
    }

    public function updateQuantity($id, $value)
    {
        if ((int)$value >= 1) {
            $this->cart[$id]['quantity'] = (int)$value;
            $this->updateCart('Quantity of ' . $this->cart[$id]['name'] . ' added +' . (int)$value . ' in your cart');
        } else {
            $this->cart[$id]['quantity'] = 1;
            $this->updateCart('Quantity of ' . $this->cart[$id]['name'] . ' added +' . $this->cart[$id]['quantity'] . ' in your cart');
        }
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
        if (isset($this->cart[$id]['name'])) {
            $productName = $this->cart[$id]['name'];
        }
        unset($this->cart[$id]);
        $this->updateCart('Item removed from cart!!');

        // Check if cart is empty and update total items accordingly
        if (empty($this->cart)) {
            $this->totalItems = 0;
        }
    }

    private function updateCart($message = null)
    {
        Session::put('cart', $this->cart);
        $this->dispatch('cartUpdate');
        $this->calculateTotals();
        $this->message = $message;
    }

    private function calculateTotals()
    {
        $this->totalPrice = 0;
        $this->totalItems = 0;

        foreach ($this->cart as $item) {
            $this->totalPrice += $item['quantity'] * $item['price'];
            $this->totalItems += $item['quantity'];
        }


    }

    public function render()
    {
        return view('livewire.session-pquantity');
    }
}
