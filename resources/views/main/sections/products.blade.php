@extends('main.layouts')


@section('products_sect')
    <section class="container my-5 px-5">
        <div class="d-flex justify-content-between mb-4">
            <h4 class=" mb-4 ms-4 fs-3">See our trending product</h4>
        </div>
        <div class="row justify-content-start g-2 px-5">

            @foreach ($products as $product)
            
                <div class="col-3 p-0 me-2" style="width: 24%;">
                    <div class="product-item border p-2 rounded-3">
                        <a class="nav-link w-100" href="#" style="height: 371px !important">
                            <img class="img-fluid"
                                src="{{ asset('storage/images/products_img/'.$product->p_image) }}"
                                alt="Product 1">
                            <h4 class="fs-6 pt-3 text-right text-wrap m-0" style="height: 90px">{{$product->p_name}}</h4>
                        </a>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="m-0 fs-5">Price : <span class="text-primary">$200</span></p>
                            <a href="#" class="btn btn-outline-primary"><i class="fa-solid fa-cart-plus"></i></a>
                        </div>
                    </div>
                </div>


            @endforeach


        </div>
    </section>
@endsection
