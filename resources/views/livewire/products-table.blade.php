<div class="row product-list m-0" style="gap: 2%;">

    <div class="position-fixed end-0 bottom-0 me-2 w-25">
        @if ($message)
            <div class="alert alert-success bg-opacity-75 alert-dismissible fade show mt-2 fs-6 " role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    @foreach ($products as $product)
        <div class="product-col-boxs mb-3 mb-lg-3 border py-3 px-2 rounded-2">
            <section class="panel">
                <div class="pro-img-box">
                    <img style="background-image: url('{{ asset('storage/images/products_img/' . $product->p_image) }}')"
                        src="" alt class="img-fluid" />

                </div>
                <div class="panel-body text-center">
                    <h4>
                        <a href="{{route('product.single.page',$product->id)}}" class="pro-title text-decoration-none text-start w-100 px-2">{{ $product->p_name }}</a>
                    </h4>
                    <div class="d-flex justify-content-between align-items-center px-2">
                        <p class="price m-0">${{ $product->p_price }}</p>

                        <form wire:click="$dispatch('cartUpdate')" wire:submit.prevent="addToCart({{ $product->id }})"
                            action="{{ route('add.to.cart', $product->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn  btn-outline-primary" href="">Add <i
                                    class="fa-solid fa-shopping-cart"></i></button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    @endforeach
</div>
