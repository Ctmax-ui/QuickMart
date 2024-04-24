<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductsTable extends Component
{
    public $products;
    public array $quantity=[];
    public $totalItems = 0;
    public $totalPrice = 0;

    public function mount()
    {
        $this->products = Product::all();
        foreach($this->products as $product){
            $this->quantity[$product->id] = 1;
        }
    }

    public function render()
    {
        return view('livewire.products-table');
    }

    public function addToCart($id)
    {
        $item = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }else{
            $cart[$id] = [
                "name" => $item->p_name,
                "quantity" => 1,
                "price" => $item->p_price,
                "image" => $item->p_image,
            ];
        }

        session()->put('cart', $cart);

        // Update total items and total price
        $this->updateTotals();

        $this->dispatch('cartUpdate');

        return redirect()->back()->with('success', 'Item has been added to your cart');
    }

    private function updateTotals()
    {
        $cart = session()->get('cart', []);

        $this->totalItems = count($cart);
        $this->totalPrice = 0;

        foreach ($cart as $item) {
            $this->totalPrice += $item['quantity'] * $item['price'];
        }
    }
}
