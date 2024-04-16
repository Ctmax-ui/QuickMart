<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.addCategory', ['categories' => $categories]);
    }


    public function store(Request $request)
    {
        // Validation goes here

        Category::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('categories.create')->with('success', 'Category added successfully!');
    }
}
