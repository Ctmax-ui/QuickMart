<div class="container my-2" style="height: fit-content">

    <div class="position-fixed end-0 bottom-0 me-2 me-md-5">
        @if ($message)
            <div class="alert alert-success bg-opacity-75 alert-dismissible fade show mt-2 fs-6 " role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <div class="row">
        <div class="col-md-5">
            <div class="row m-0 justify-content-evenly  ">
                <div class="col-2 p-0">
                    <div class="row m-0 flex-column g-2 align-items-end " style='height:100%;'>
                        <div class="col-12 p-0">
                            <img src="{{ asset('storage/images/products_img/' . $product->p_image) }}"
                                class="img-fluid rounded-1" onclick="changeMainImage(this)" alt="Product Image 1">
                        </div>
                        @if (isset($product->p_image2))
                            <div class="col-12 p-0">
                                <img src="{{ asset('images/our_team/team2.jpg') }}" class="img-fluid rounded-1"
                                    onclick="changeMainImage(this)" alt="Product Image 2">
                            </div>
                        @endif
                        @if (isset($product->p_image3))
                            <div class="col-12 p-0">
                                <img src="{{ asset('images/our_team/team3.jpg') }}" class="img-fluid rounded-1"
                                    onclick="changeMainImage(this)" alt="Product Image 3">
                            </div>
                        @endif

                        @if (isset($product->p_image4))
                            <div class="col-12 p-0">
                                <img src="{{ asset('images/our_team/team4.jpg') }}" class="img-fluid rounded-1"
                                    onclick="changeMainImage(this)" alt="Product Image 4">
                            </div>
                        @endif

                    </div>
                </div>
                <div class="col-9 p-0">
                    <img id="main-image" src="{{ asset('storage/images/products_img/' . $product->p_image) }}"
                        class="img-fluid rounded main-product-image" id="mainProductImage" alt="Main Product Image">
                </div>
            </div>
        </div>


        <div class="col-md-5">
            <h3 class="text-dark">{{ $product->p_name }}.</h3>
            <p class="fs-1 text-primary">${{ $product->p_price }}</p>

            <p class="fs-6 text-secondary">{{ $product->p_description }}</p>

            <div class="d-flex align-items-center justify-content-between mt-2">

                

                @if (session('cart') && isset(session('cart')[$product->id]))
                    <button wire:click="deleteProduct('{{ $product->id }}'), $dispatch('cartUpdate')"
                        class="btn btn-outline-danger">Remove <i class="fa-solid fa-trash"></i></button>
                @else
                    <form wire:click="$dispatch('cartUpdate');" wire:submit.prevent="addToCart({{ $product->id }})"
                        action="" method="post">
                        @csrf
                        <button type="submit" class="btn  btn-outline-primary" href="">Add <i
                                class="fa-solid fa-shopping-cart"></i></button>
                    </form>
                @endif
            </div>
        </div>

    </div>
</div>
