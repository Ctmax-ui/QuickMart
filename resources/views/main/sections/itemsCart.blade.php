@extends('main.layouts')

@section('content')
    <div class="container">
        <table id="itemsCart" class="table table-bordered ">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if (session('cart'))
                    @foreach (session('cart') as $id => $details)
                        <tr rowId="{{ $id }}">
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-3"><img class=" img-fluid h-100 w-25" src="{{ asset('storage/images/products_img/'.$details['image']) }}">
                                        {{-- // {{ asset('storage/images/products_img/'.$product->p_image) }} --}}
                                    </div>
                                    <div class="col-sm-9 d-flex align-items-center ">
                                        <div class="m-0">{{ $details['name'] }}</div>
                                    </div>
                                </div>
                            </td>
                            <td data-th="price">{{ $details['price'] }}</td>
                            <td data-th="subtotal" class="text-center"></td>
                            <td class="actions">
                                <a href="" class="btn btn-outline-danger btn-sm delete-product"><i
                                        class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection

@section('script')

<script>
    $('.delete-product').click(function(e){
        e.preventDefault();
        var ele= $(this);
        
        if(confirm('Do you really want to delete?')){
            $.ajax({
                url:'{{route('delete.cart.product')}}',
                method:'DELETE',
                data: {
                    _token: '{{csrf_token()}}',
                    id: ele.parents('tr').attr('rowId')
                },
                success: function(response){
                    window.location.reload();
                }

            })
        }
    })
</script>
@endsection
