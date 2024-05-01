@extends('main.layouts')
@section('content')
    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <form method="post" action="{{ route('product.checkout.store') }}">
            @csrf
            <div class="row px-xl-5">
                <div class="col-lg-8">
                    <div class="mb-4">
                        <h4 class=" fw-semibold mb-4">Billing Address</h4>
                        <div class="row">
                            <div class="col-md-6 form-group my-1">
                                <label>First Name</label>
                                <input value="" name="first_name" class="form-control mt-1" type="text" placeholder="John"
                                    autocomplete>
                            </div>
                            <div class="col-md-6 form-group my-1">
                                <label>Last Name</label>
                                <input class="form-control mt-1" type="text" placeholder="Doe">
                            </div>
                            <div class="col-md-6 form-group my-1">
                                <label>E-mail</label>
                                <input class="form-control mt-1" type="text" placeholder="example@email.com">
                            </div>
                            <div class="col-md-6 form-group my-1">
                                <label>Mobile No</label>
                                <input class="form-control mt-1" type="text" placeholder="+123 456 789">
                            </div>
                            <div class="col-md-6 form-group my-1">
                                <label>Address Line 1</label>
                                <input class="form-control mt-1" type="text" placeholder="123 Street">
                            </div>
                            <div class="col-md-6 form-group my-1">
                                <label>Address Line 2</label>
                                <input class="form-control mt-1" type="text" placeholder="123 Street">
                            </div>
                            <div class="col-md-6 form-group my-1">
                                <label>Country</label>
                                <div class="clear-fix"></div>
                                <select class="custom-select w-100 bg-white border px-2 py-2">
                                    <option selected>None</option>
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group my-1">
                                <label>City</label>
                                <input class="form-control mt-1" type="text" placeholder="New York">
                            </div>
                            <div class="col-md-6 form-group my-1">
                                <label>State</label>
                                <input class="form-control mt-1" type="text" placeholder="New York">
                            </div>
                            <div class="col-md-6 form-group my-1">
                                <label>ZIP Code</label>
                                <input class="form-control mt-1" type="text" placeholder="123">
                            </div>

                            <div class="col-md-12 form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="shipto">
                                    <label class="custom-control-label" for="shipto" data-toggle="collapse"
                                        data-target="#shipping-address">Ship to different address</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse mb-4" id="shipping-address">
                        <h4 class="fw-bold mb-4">Shipping Address</h4>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" placeholder="John">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" placeholder="Doe">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="text" placeholder="example@email.com">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mobile No</label>
                                <input class="form-control" type="text" placeholder="+123 456 789">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 1</label>
                                <input class="form-control" type="text" placeholder="123 Street">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 2</label>
                                <input class="form-control" type="text" placeholder="123 Street">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Country</label>
                                <select class="custom-select">
                                    <option selected>United States</option>
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>City</label>
                                <input class="form-control" type="text" placeholder="New York">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>State</label>
                                <input class="form-control" type="text" placeholder="New York">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>ZIP Code</label>
                                <input class="form-control" type="text" placeholder="123">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-secondary mb-5">
                        <div class="card-header bg-secondary bg-opacity-10 border-0">
                            <h4 class="fw-semibold  m-0">Order Total</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-medium mb-3">Products</h5>
                            @foreach (session('cart') as $id => $details)
                                <div class="d-flex justify-content-between">
                                    <p class="w-50 text-truncate">{{ $details['name'] }}</p>
                                    <p></p>
                                    <p>{{ $details['quantity'] }} x
                                        {{ number_format(floatval($details['price']) * floatval($details['quantity']), 2) }}
                                    </p>
                                </div>
                            @endforeach
                            <hr class="mt-0">
                            <div class="d-flex justify-content-between mb-3 pt-1">
                                @php
                                    // dd(session('cart'))
                                @endphp
                                <h6 class="fw-medium">Subtotal</h6>
                                <h6 class="fw-medium">${{ $subtotal }}</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-medium">Shipping</h6>
                                <h6 class="fw-medium">$4.99</h6>
                            </div>
                        </div>
                        <div class="card-footer border-secondary bg-transparent">
                            <div class="d-flex justify-content-between mt-2">
                                <h5 class="fw-bold">Total</h5>
                                <h5 class="fw-bold">${{ $subtotal + 4.99 }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card border-secondary mb-5">
                        <div class="card-header bg-secondary bg-opacity-10  border-0">
                            <h4 class="fw-semibold m-0">Payment</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="payment" id="paypal">
                                    <label class="custom-control-label" for="paypal">Paypal</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                                    <label class="custom-control-label" for="directcheck">Direct Check</label>
                                </div>
                            </div>
                            <div class="">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                                    <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                                </div>
                            </div>
                            <div class="">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="payment" id="cashOnDel">
                                    <label class="custom-control-label" for="cashOnDel">Cash on delivery</label>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer border-secondary bg-transparent">
                            <button type="submit"
                                class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Checkout End -->
@endsection
