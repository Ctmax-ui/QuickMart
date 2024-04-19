@extends('admin.adminLayout')
@section('header')
@section('content')

<div class="container overflow-auto ">
    <table class="table table-bordered table-striped ">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th>{{$product->id}}</th>
                    <th>{{$product->p_name}}</th>
                    <th><img class="img-fluid" src="{{ asset('storage/images/products_img/'.$product->p_image) }}" alt=""></th>
                    <th>{{$product->p_brand}}</th>
                    <th>{{$product->p_price}}</th>
                    <th>{{$product->p_category}}</th>
                    <th>{{$product->p_quantity}}</th>
                    <th>{{$product->created_at}}</th>
                    <th>{{$product->updated_at}}</th>
                    <th><button>Edit</button></th>
                    <th><button>Delete</button></th>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>



@endsection
