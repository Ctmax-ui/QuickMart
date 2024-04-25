<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Livewire\ProductsTable;
use App\Livewire\SessionPquantity;

class SingleProductDetailPage extends Component
{
    public $message;
    public $productId;
    public $product;
    public $size;
    public $quantity;

    public function mount($id)
    {
        $this->productId = $id;
        $this->product = Product::find($id);
        $this->quantity = 1; 
    }


    public function addToCart()
    {

        $this->dispatch('cartUpdate');
        $productsTable = new ProductsTable(); 
        $this->updateCart('Item added in your cart');

        $productsTable->addToCart($this->productId);
    }

    public function deleteProduct($id)
    {
        $this->dispatch('cartUpdate');
        $this->updateCart('Item removed from cart!!');
        session()->forget("cart.$id");
    }
    public function updateCart($message=null){   
        $this->message = $message;
    }
    public function render()
    {
        return view('livewire.single-product-detail-page');
    }
}
