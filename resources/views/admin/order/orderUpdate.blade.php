@extends('admin.adminLayout')
@section('content')
    <div class="container">
        <a href="{{ url()->previous() }}">Go Back</a>

        <div class="row">
            <div class="col">
                <h1 class="text-center mb-4">Quickmart <i class="fa-solid fa-shopping-cart"></i></h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5>Bill To: {{ ucwords($orderSingle['first_name']) }} {{ $orderSingle['last_name'] }}</h5>
                <p class="mb-1"></p>
                <p class="mb-1">{{ $orderSingle['state'] }} ({{ $orderSingle['city'] }})</p>
                <p class="mb-1">{{ $orderSingle['address_one'] }}, {{ $orderSingle['zip_code'] }}</p>
                <p class="mb-1">{{ $orderSingle['country'] }}</p>
            </div>
            <div class="col">
                <h5>Invoice Details:</h5>
                <p>Invoice Number: {{ $orderSingle['id'] }}</p>
                <p>Ordered Date: {{ $orderSingle['created_at'] }}</p>

                <div class="">
                    <p>Status: {{ $orderSingle['order_status'] }}.</p>
                    <form class="btn-group" action="{{ route('product.UpdateOrderStatus.page', ['id' => $orderSingle['id']]) }}" method="post">
                        @csrf
                        <select name="order_status" class="border border-end-0 border-success bg-white  rounded-start-2 rounded-bottom-0 px-3">
                            <option value="Recently Ordered" class=" bg-white ">Recently Ordered</option>
                            <option value="Delivered">Delivered</option>
                        </select>
                        <button type="submit" class="btn btn-outline-success">Go</button>
                    </form>
                </div>
                <a href="{{route('product.printInvoice.page', ['id' => $orderSingle['id']] )}}">Print Invoice</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <table class="table table-bordered text-center table-striped ">
                    <thead class="">
                        <tr>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @php
                            $orderedQuantitys = unserialize($orderSingle['items_quantity_arr']);
                            $orderedItems = unserialize($orderSingle['ordered_items_arr']);
                            $orderedPrices = unserialize($orderSingle['total_price_arr']);
                            $count = count($orderedQuantitys); // Assuming both arrays have the same length
                        @endphp

                        @for ($i = 0; $i < $count; $i++)
                            @php
                                $product = App\Models\Product::find($orderedItems[$i]);
                            @endphp
                            <tr>
                                <td>{{ $product->p_name }}</td>
                                <td>{{ $orderedQuantitys[$i] }}</td>
                                <td>${{ $orderedPrices[$i] }}</td>
                                <td>${{ $orderedPrices[$i] * $orderedQuantitys[$i] }}</td>
                            </tr>
                        @endfor
                    </tbody>

                    <tfoot class="">
                        <tr>
                            <th colspan="3">Total (Shipping & VAT Included)</th>
                            <td class="fw-bold">{{ $orderSingle['subtotal'] }}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
