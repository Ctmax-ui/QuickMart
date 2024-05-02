<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderTable;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $productIds = [];
        $productQuantitys = [];
        $productPrices = [];
        foreach (session()->get('cart') as $item) {
            $productIds[] = $item['id'];
            $productQuantitys[] = $item['quantity'];
            $productPrices[] = $item['price'];
        }

        // Serialize the array
        $orderedItemsSerializeArrIds = serialize($productIds);
        $orderedItemsSerializeArrQuantitys = serialize($productQuantitys);
        $orderedItemsSerializeArrPrices = serialize($productPrices);

        // Deserialize the serialized array back into an array
        // $UnserializeArrQuantity = unserialize($orderedItemsSerializeArrPrices);
        // $UnserializeArrPrices = unserialize($orderedItemsSerializeArrQuantitys);
        // $UnserializeArrIds = unserialize($orderedItemsSerializeArrIds);


        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'nullable|string',
            'email' => 'required|email',
            'number' => 'required|string',
            'address_one' => 'required|string',
            'address_two' => 'nullable|string',
            'country' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'zip_code' => 'required|integer',
            'payment_method' => 'required|string',
        ]);

        $order = new OrderTable([
            'ordered_user_id' => Auth::user()->id,
            'order_status' => 'Recently Ordered',
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'number' => $validatedData['number'],
            'address_one' => $validatedData['address_one'],
            'address_two' => $validatedData['address_two'],
            'country' => $validatedData['country'],
            'state' => $validatedData['state'],
            'city' => $validatedData['city'],
            'zip_code' => $validatedData['zip_code'],
            'payment_method' => $validatedData['payment_method'],

            'ordered_items_arr' => $orderedItemsSerializeArrIds,
            'items_quantity_arr' => $orderedItemsSerializeArrQuantitys,
            'total_price_arr' => $orderedItemsSerializeArrPrices,

        ]);
        $order->save();

        return redirect()->back()->with('cart', session()->forget('cart'));
    }


    // for admin order panle.
    public function navigaetToOrderShow()
    {
        $orderItems = OrderTable::paginate(10);

        foreach ($orderItems as $orderItem) {
            $orderedItemIds = unserialize($orderItem->ordered_items_arr);
            $products = Product::whereIn('id', $orderedItemIds)->get();
            $orderItem->products = $products;
        }

        return view('admin.order.ordersShow', ['orderItems' => $orderItems]);
    }
}
