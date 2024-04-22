<div class="row justify-content-start g-2 px-5">
    @foreach ($products as $product)

        <div class="col-3 p-0 me-2" style="width: 24%;">

            <div class="product-item border p-2 rounded-3">
                <a class="nav-link w-100" href="#" style="height: 371px !important">

                    <img class="img-fluid" src="{{ asset('storage/images/products_img/' . $product->p_image) }}"
                        alt="Product 1">
                    <h4 class="fs-6 pt-3 text-right text-wrap m-0" style="height: 90px">{{ $product->p_name }}</h4>

                </a>

                <div class="d-flex justify-content-between align-items-center">
                    <p class="m-0 fs-5">Price : <span class="text-primary">$200</span></p>

                    <form wire:submit.prevent="addToCart({{$product->id}})" action="{{ route('add.to.cart', $product->id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary"><i
                                class="fa-solid fa-cart-plus"></i></button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>