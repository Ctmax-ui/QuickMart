@extends('admin.adminLayout')
@section('header')
@section('content')

    <div class="container mt-3">
        <div class="w-100 text-center fs-4">Products</div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Add New Product') }}</div>

                        <div class="card-body">

                            <form method="POST" action="{{ route('admin.products.update', $product->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="name" class="form-label">{{ __('Product Name') }} <span
                                            class="text-danger">*</span></label>

                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="p_name"
                                        value="{{ $product->p_name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">{{ __('Product Image') }}<span
                                            class="text-danger">*</span></label>

                                    <input id="image" type="file"
                                        class="form-control @error('image') is-invalid @enderror" name="p_image"
                                        accept="image/*" >

                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">{{ __('Description') }}<span
                                            class="text-danger">*</span></label>

                                    <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="p_description" required
                                        style="max-height: 100px !important;"> {{ $product->p_description }}"</textarea>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="brand" class="form-label">{{ __('Brand') }}</label>

                                    <input id="brand" type="text"
                                        class="form-control @error('brand') is-invalid @enderror" name="p_brand"
                                        value="{{ $product->p_brand }}" autocomplete="brand">

                                    @error('brand')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="price" class="form-label">{{ __('Price') }}<span
                                            class="text-danger">*</span></label>

                                    <input id="price" type="number" min="0" step="0.01"
                                        class="form-control @error('price') is-invalid @enderror" name="p_price"
                                        value="{{ $product->p_price }}" required autocomplete="price">

                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="category">Category:</label>
                                    <select name="p_category" id="category" class="form-control">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        
                                        @endforeach
                                    </select>

                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}

                                <div class="mb-3">
                                    <label for="quantity" class="form-label">{{ __('Quantity') }}</label>

                                    <input id="quantity" type="number" min="0"
                                        class="form-control @error('quantity') is-invalid @enderror" name="p_quantity"
                                        value="{{ $product->p_quantity }}" autocomplete="quantity">

                                    @error('quantity')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <button type="submit">Update Product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="p_name" id="name" value="{{ $product->p_name }}">

        <label for="price">Price:</label>
        <input type="text" name="p_price" id="price" value="{{ $product->p_price }}">

        <!-- Add more fields as needed -->

        
    </form>

@endsection
