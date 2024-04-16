@extends('admin.adminLayout')
@section('content')

        <!-- Main content -->
        <div class="container mt-4 mb-4">
            <h2>Welcome to the Product Panel</h2>
        </div>


        <ul>
            <li><a href="{{route('admin.productsAdd')}}">Add Product</a></li>
            <li><a href="{{route('categories.create')}}">Add Category</a></li>
        </ul>
    </div>
    @endsection
