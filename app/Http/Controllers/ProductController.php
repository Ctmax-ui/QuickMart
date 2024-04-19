<?php
// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('main.sections.products', ['products' => $products]);
    }

    public function showCatagory(){
        $categories = Category::all();
        return view('admin.products.productsAdd', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'description' => 'required|string',
            'brand' => 'nullable|string|max:255',
            'price' => 'required|numeric|min:0',
            'category' => 'nullable|string|max:255',
            'quantity' => 'nullable|integer|min:0',
        ]);

        $fileName = null;
        if ($request->hasFile("image")) {
            $fileName = 'product_' . uniqid() . time() . uniqid() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('images/products_img', $fileName, 'public');
        }

        // Create a new Product instance
        $product = new Product([
            'p_name' => $validatedData['name'],
            'p_image' => $fileName,
            'p_description' => $validatedData['description'],
            'p_brand' => $validatedData['brand'],
            'p_price' => $validatedData['price'],
            'p_category' => $validatedData['category'],
            'p_quantity' => $validatedData['quantity'],
        ]);
        // Save the product to the database
        $product->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product created successfully!');
    }

    public function showProductLists(){
        $products = Product::all();
        return view('admin.products.showProductList', ['products' => $products]);
    }
}
