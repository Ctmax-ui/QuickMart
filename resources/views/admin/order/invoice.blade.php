<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Order invoice</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center mb-4 ">Quickmart <i class="fa-solid fa-shopping-cart"></i></h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <h5>Bill To: {{ ucwords($orderSingle['first_name']) }} {{ $orderSingle['last_name'] }}</h5>
                <p class="mb-1">Phone: {{ $orderSingle['number'] }}</p>
                <p class="mb-1">Email: {{ $orderSingle['email'] }}</p>
                <p class="mb-1"></p>
                <p class="mb-1">{{ $orderSingle['state'] }} ({{ $orderSingle['city'] }})</p>
                <p class="mb-1">{{ $orderSingle['address_one'] }}, {{ $orderSingle['zip_code'] }}</p>
                <p class="mb-1">{{ $orderSingle['address_two'] }}</p>
                <p class="mb-1">{{ $orderSingle['country'] }}</p>
            </div>
            <div class="col">
                <h5>Invoice Details</h5>
                <p class="mb-2">Invoice Number: {{ $orderSingle['id'] }}</p>
                <p class="mb-2">Payment Method: {{ $orderSingle['payment_method'] }}.</p>
                <p class="mb-2">Ordered Date: {{ $orderSingle['created_at'] }}</p>

                <div class="">
                    <p class="mb-2">Status: {{ $orderSingle['order_status'] }}.</p>
                </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
</html>