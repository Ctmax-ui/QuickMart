<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;




class ProductsTable extends Component
{



    public $products;
    public array $quantity=[];

    public function mount(){
        $this->products = Product::all();
    }


    public function render()
    {
        return view('livewire.products-table');
        foreach($this->products as $product){
            $this->quantity[$product->id]=1;
        }
    }

    public function addToCart($id){
        $item= Product::findOrFail($id);
        $cart=session()->get('cart',[]);

        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }else{
            $cart[$id]=[
                "name"=>$item->p_name,
                "quantity"=>1,
                "price"=>$item->p_price,
                "image"=>$item->p_image,
            ];
        }
        session()->put('cart',$cart);
        $this->dispatch('cartUpdate');

        return redirect()->back()->with('success','Item has been added in your cart');
    }
}
