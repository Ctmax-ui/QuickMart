@extends('main.layouts')
@section('content')
    <!-- Checkout Start -->
    @if (Auth::user() === null)
        <div class="container text-center my-5 py-5">
            <h2 class="my-5">Please login or register to order.</h2>
        </div>
    @elseif (session()->has('cart') && !empty(session()->get('cart')))
        <div class="container-fluid pt-5">
            <form method="post" action="{{ route('product.checkout.store') }}">
                @csrf
                <div class="row px-xl-5">
                    <div class="col-lg-8">
                        <div class="mb-4">
                            <h4 class=" fw-semibold mb-4">Billing Address</h4>
                            <div class="row">
                                <div class="col-md-6 form-group my-1">
                                    <label>First Name <span class="text-danger fw-bold ">*</span></label>
                                    <input value="{{ Auth::user()->name }}" name="first_name" class="form-control mt-1"
                                        type="text" placeholder="Your name" autocomplete>
                                </div>

                                <div class="col-md-6 form-group my-1">
                                    <label>Last Name </label>
                                    <input value="{{ old('last_name') }}" name="last_name" class="form-control mt-1"
                                        type="text" placeholder="Your last name">
                                    <x-input-error class="mt-1 text-danger" :messages="$errors->get('last_name')" />
                                </div>

                                <div class="col-md-6 form-group my-1">
                                    <label>E-mail <span class="text-danger fw-bold ">*</span></label>
                                    <input name="email" class="form-control mt-1" value="{{ Auth::user()->email }}"
                                        type="text" placeholder="Your email.">
                                    <x-input-error class="mt-1 text-danger" :messages="$errors->get('email')" />
                                </div>

                                <div class="col-md-6 form-group my-1">
                                    <label>Mobile No <span class="text-danger fw-bold ">*</span></label>
                                    <input
                                        value="{{ isset(Auth::user()->phone_number) ? Auth::user()->phone_number : old('number') }}"
                                        name="number" class="form-control mt-1" type="text"
                                        placeholder="Your phone number">
                                    <x-input-error class="mt-1 text-danger" :messages="$errors->get('number')" />
                                </div>

                                <div class="col-md-6 form-group my-1">
                                    <label>Address Line 1 <span class="text-danger fw-bold ">*</span></label>
                                    <input value="{{ Auth::user()->address }}" name="address_one" class="form-control mt-1"
                                        type="text" placeholder="123 Street">
                                    <x-input-error class="mt-1 text-danger" :messages="$errors->get('address_one')" />
                                </div>

                                <div class="col-md-6 form-group my-1">
                                    <label>Address Line 2</label>
                                    <input value="{{ old('address_two') }}" name="address_two" class="form-control mt-1"
                                        type="text" placeholder="123 Street">
                                    <x-input-error class="mt-1 text-danger" :messages="$errors->get('address_two')" />
                                </div>

                                <div class="col-md-6 form-group my-1">
                                    <label>Country <span class="text-danger fw-bold ">*</span></label>
                                    <input
                                        value="{{ isset(Auth::user()->country) ? Auth::user()->country : old('country') }}"
                                        name="country" class="form-control my-1" type="text" placeholder="Your Country">
                                    <x-input-error class="mt-1 text-danger" :messages="$errors->get('country')" />
                                </div>

                                <div class="col-md-6 form-group my-1">
                                    <label>State <span class="text-danger fw-bold ">*</span></label>
                                    <input value="{{ isset(Auth::user()->state) ? Auth::user()->state : old('state') }}"
                                        name="state" class="form-control mt-1" type="text" placeholder="Your State">
                                    <x-input-error class="mt-1 text-danger" :messages="$errors->get('state')" />
                                </div>

                                <div class="col-md-6 form-group my-1">
                                    <label>City <span class="text-danger fw-bold ">*</span></label>
                                    <input value="{{ isset(Auth::user()->city) ? Auth::user()->city : old('city') }}"
                                        name="city" class="form-control mt-1" type="text" placeholder="Your City">
                                    <x-input-error class="mt-1 text-danger" :messages="$errors->get('city')" />
                                </div>

                                <div class="col-md-6 form-group my-1">
                                    <label>ZIP Code <span class="text-danger fw-bold ">*</span></label>
                                    <input
                                        value="{{ isset(Auth::user()->postal) ? Auth::user()->postal : old('zip_code') }}"
                                        name="zip_code" class="form-control mt-1" type="text"
                                        placeholder="Your Postal code">
                                    <x-input-error class="mt-1 text-danger" :messages="$errors->get('zip_code')" />
                                </div>


                            </div>

                            @if (!isset(Auth::user()->postal) && !isset(Auth::user()->city) && !isset(Auth::user()->state))
                                

                            <div class="my-2">
                                <a href="{{ route('profile.edit') }}#credentials">Update Your Credentials</a>
                                <p> <span class="text-danger">*NOTE</span> You should consider updating your credentials, so
                                    you do not have to go through this every time you order somthing.</p>
                            </div>
                            @endif

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
                                <select name="payment_method" class="form-control form-select ">
                                    <option value="cash_on_delivery">Cash on Delivery</option>
                                    {{-- <option value="bank_transfer">Bank Transfer</option>
                                    <option value="other">Other Payment Method</option> --}}
                                </select>


                            </div>
                            <div class="card-footer border-secondary bg-transparent">
                                <button type="submit"
                                    class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Place
                                    Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @else
        <div class="container my-5 py-5 text-center ">
            <h3>You have no items to order, add into your cart to order.</h3>
        </div>
    @endif

    <!-- Checkout End -->
@endsection
