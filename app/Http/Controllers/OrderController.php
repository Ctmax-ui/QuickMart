<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderTable;

class OrderController extends Controller
{
    /**
     * Store a newly created order in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        // Validate the request data
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            // 'last_name' => 'required|string',
            // 'email' => 'required|email',
            // 'number' => 'required|string',
            // 'address_one' => 'required|string',
            // 'address_two' => 'nullable|string',
            // 'country' => 'required|string',
            // 'state' => 'required|string',
            // 'city' => 'required|string',
            // 'zip_code' => 'required|integer',
            // 'ordered_item' => 'integer',
            // 'total_quantity' => 'integer',
            // 'total_price' => 'numeric',
        ]);

        // Create a new order record
        $order = OrderTable::create([
            'first_name' => $validatedData['name'],
            'p_description' => $validatedData['description'],
            'p_brand' => $validatedData['brand'],
            'p_price' => $validatedData['price'],
            'p_category' => $validatedData['category'],
            'p_quantity' => $validatedData['quantity'],
        ]);
        $order  ->save();

        // Return a response
        return response()->json(['message' => 'Order created successfully', 'order' => $order], 201);
    }
}
