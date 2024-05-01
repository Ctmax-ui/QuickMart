<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Trandy Products</span></h2>
    </div>
    <div class="row px-xl-5 pb-3 ">

        @foreach ($products as $product)
            <div class="col-lg-3 col-md-6 col-sm-4 col-5 pb-1 ">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="{{ asset('storage/images/products_img/' . $product->p_image) }}"
                            alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <a class="product-link-main" href="{{ route('product.single.page', $product->id) }}">
                            <h6 class="text-truncate mb-3">{{ $product->p_name }}</h6>
                        </a>
                        <div class="d-flex justify-content-center">
                            <h6>{{ $product->p_price }}</h6>
                            <h6 class="text-muted ml-2 ps-2"><del>$123.00</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="{{ route('product.single.page', $product->id) }}" class="btn btn-sm text-dark p-0 yllo-btn"><i
                                class="fas fa-eye text-primary mr-1 text-yllo"></i> View Detail</a>

                        <form wire:click="$dispatch('cartUpdate')" wire:submit.prevent="addToCart({{ $product->id }})"
                            method="post">
                            @csrf

                            <button type="submit" class="btn btn-sm text-dark p-0 yllo-btn"><i
                                    class="fas fa-shopping-cart  mr-1 text-yllo"></i> Add To Cart</button>
                        </form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
