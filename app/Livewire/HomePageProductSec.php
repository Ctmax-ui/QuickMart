<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Livewire\ProductsTable;

class HomePageProductSec extends Component
{
    public $products;
    public $message;
    public $productId;

    public function mount()
    {
        $this->products = Product::all();
    }

    
    public function addToCart($id)
    {
        $this->dispatch('cartUpdate');
        $productsTable = new ProductsTable(); 
        $this->updateCart('Item added in your cart');
        
        $productsTable->addToCart($id);
    }
    
    public function updateCart($message=null){   
        $this->message = $message;
    }
    public function render()
    {
        return view('livewire.home-page-product-sec');
    }
}
