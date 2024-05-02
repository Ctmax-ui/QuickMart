@extends('admin.adminLayout')

@section('content')
    <div class="container overflow-auto  ">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>Actions</th>

                    <th>Product_Id </th>
                    <th>ordered_user_id</th>
                    <th>order_status</th>
                    <th>payment_method</th>

                    <th>first_name</th>
                    <th>last_name</th>
                    <th>number</th>
                    <th>address_one</th>
                    <th>address_two</th>
                    <th>country</th>
                    <th>state</th>
                    <th>city</th>
                    <th>zip_code</th>

                    <th>ordered_items_Id's</th>
                    <th>ordered_items_Details</th>
                    <th>items_quantity's'</th>
                    <th>total_price's'</th>

                </tr>
            </thead>
            <tbody>
                @foreach ( $orderItems as $orderItem)
                <tr>
                    <td class="text-center"><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td>{{$orderItem['id']}}</td>
                    <td>{{$orderItem['ordered_user_id']}}</td>
                    <td>{{$orderItem['order_status']}}</td>
                    <td>{{$orderItem['payment_method']}}</td>

                    <td>{{$orderItem['first_name']}}</td>
                    <td>{{$orderItem['last_name']}}</td>
                    <td>{{$orderItem['number']}}</td>
                    <td>{{$orderItem['address_one']}}</td>
                    <td>{{$orderItem['address_two']}}</td>
                    <td>{{$orderItem['country']}}</td>
                    <td>{{$orderItem['state']}}</td>
                    <td>{{$orderItem['city']}}</td>
                    <td>{{$orderItem['zip_code']}}</td>

                    <td>{{ implode(', ', unserialize($orderItem['ordered_items_arr'])) }}</td>
                    <td> @foreach($orderItem->products as $product)
                        <li>ID:({{ $product->id }}) --Name:{{ $product->p_name }} --Price:({{ $product->p_price }})</li>
                    @endforeach</td>
                    <td>{{ implode(', ', unserialize($orderItem['items_quantity_arr'])) }}</td>
                    <td>{{ implode(', ', unserialize($orderItem['total_price_arr'])) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container my-2">
    {{ $orderItems->links() }}
</div>
@endsection
