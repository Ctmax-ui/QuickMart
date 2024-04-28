<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductsTable extends Component
{
    public $products;
    public array $quantity = [];
    public $totalItems = 0;
    public $totalPrice = 0;
    public $message;
    public $search = '';
    public $loading = false;

    public function mount()
    {
        $this->loadProducts($this->search);

        $this->quantity = [];
        foreach ($this->products as $product) {
            $this->quantity[$product->id] = 1;
        }
    }

    public function loadProducts($search)
    {
        $this->loading = true;
    
        $this->products = Product::query()
            ->where(function ($query) use ($search) {
                $query->whereRaw('LOWER(p_name) LIKE ?', ['%' . strtolower($search) . '%'])
                      ->orWhereRaw('LOWER(p_brand) LIKE ?', ['%' . strtolower($search) . '%']);
            })
            ->get();
    
        $this->loading = false;
    
        if ($this->products->isEmpty()) {
            $this->message('No products found.');
            $this->products = Product::all();
            // Optionally, clear products array if no results found
            // $this->products = [];
        }
    }
    

    public function updatedSearch()
    {
        $this->loadProducts($this->search);
    }

    public function render()
    {
        return view('livewire.products-table');
    }

    public function addToCart($id)
    {
        $item = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id" => $item->id,
                "name" => $item->p_name,
                "quantity" => 1,
                "size" => "none",
                "price" => $item->p_price,
                "image" => $item->p_image,
            ];
        }

        session()->put('cart', $cart);

        // Update total items and total price
        $this->updateTotals();
        $this->message('Item added in your cart');
        $this->dispatch('cartUpdate');
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
    public function message($message = null)
    {
        $this->message = $message;
    }
}
