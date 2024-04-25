<div class="container">

    <div class="position-fixed end-0 bottom-0 me-2 me-md-5">
        @if ($message)
            <div class="alert alert-success bg-opacity-75 alert-dismissible fade show mt-2 fs-6 " role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <div class="row justify-content-between my-5">
        <div class="col-md-8 px-3 mb-3 mb-md-0 ">
            <div class="row g-3">
                @if (session('cart'))
                    @foreach (session('cart') as $id => $details)
                        <div class="col-12" rowId="{{ $id }}">
                            <div class="row justify-content-between p-3 rounded-3 bg-light">
                                <div class="col-2 p-0">
                                    <img class="img-fluid rounded-3" style="width: 100px;"
                                        src="{{ asset('storage/images/products_img/' . $details['image']) }}"
                                        alt="">
                                </div>
                                <div class="col-10 p-0">
                                    <div class="row  d-flex justify-content-between h-100">
                                        <div class="col-7 px-2 ps-3">
                                            <span
                                                class="d-block fw-bold w-100 text-wrap fs-6">{{ $details['name'] }}</span>
                                            <span class="mt-4 fs-6 "></span>
                                        </div>

                                        <div class="col-5 d-grid justify-content-center">

                                            <div class="btn-group md" style="height: fit-content;">

                                                <a wire:click="decrementQuantity('{{ $id }}')"
                                                    class="btn btn-outline-primary"><i
                                                        class="fa-solid fa-minus"></i></a>

                                                <input style="width: 50px"
                                                    class="border border-start-0 border-primary bg-white text-center outline-none"
                                                    type="number" value="{{ $details['quantity'] }}" min="1"
                                                    wire:input.debounce.500ms="updateQuantity({{ $id }}, $event.target.value)" />


                                                <a wire:click="incrementQuantity('{{ $id }}')"
                                                    class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i></a>


                                            </div>

                                            <div class="d-flex justify-content-between align-items-center  h-100">
                                                <p class="fs-5 m-0">{{ $details['price'] }}</p>
                                                <button wire:click="deleteProduct('{{ $id }}'), $dispatch('cartUpdate')" 
                                                    class="btn btn-outline-danger"><i
                                                        class="fa-solid fa-trash"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h3 class="text-center" style="height:130px;">You have no product in your cart !!</h3>
                @endif
            </div>
        </div>

        <div class="col-md-4 p-0 p-md-1">
            <div class="bg-light p-4 rounded-3">
                @if (session('cart'))
                    <div class="mt-6 h-full rounded-3 p-6 shadow-md md:mt-0 md:w-1/3">
                        <div class="mb-3 d-flex justify-content-between">
                            <p class="">Subtotal</p>
                            <p class="">${{ number_format($totalPrice, 2) }} USD</p>
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            
                            <p class="">Total items</p>
                            <p class="">{{ $totalItems }}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="">Shipping charges</p>
                            <p class="">$4.99</p>
                        </div>
                        <hr class="my-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="text-lg font-bold">Total</p>
                            <div>
                                <p class="mb-1 text-lg font-bold">${{ number_format($totalPrice+ 4.99, 2)}} USD</p>
                                <p class="text-sm ">including VAT</p>
                            </div>
                        </div>
                        <a class="mt-4 w-full btn btn-primary rounded-md">Proceed to Checkout</a>
                    </div>
                @endif
            </div>
        </div>

    </div>
</div>
