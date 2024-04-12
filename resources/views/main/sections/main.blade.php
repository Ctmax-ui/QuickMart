@extends('main.layouts')

@section('hero_section')
    <section class="hero-section" style="background: url('{{ asset('images/banner.jpg') }}'); background-size: cover;">
        <div class="overlay">
            <div class="hero-text-box container w-75">
                <h3 class="pt-4 fs-1 text-white">Get 50% off on your first purchase.</h3>
                <p class="py-4 fs-4 text-white">Elevate your style with our exclusive collection. Discover the latest trends
                    in fashion and accessories, all at unbeatable prices. Hurry, limited time offer!</p>
                <a href="#" class="btn btn-outline-light fs-5 rounded-pill px-3">Shop now <i
                        class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </section>
@endsection

@section('short_product_cl')
    <section class="container my-5 px-5">
        <div class="d-flex justify-content-between mb-4">
            <h4 class=" mb-4 ms-4 fs-3">See our latest Men's wear</h4>
            <a href="" class="fs-4 px-3 btn btn-outline-primary rounded-pill">See more <i
                    class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="row justify-content-start g-2 px-5">
            <div class="col-3 p-0 me-2" style="width: 24%;">
                <div class="product-item border p-2 rounded-3">
                    <a class="nav-link w-100" href="#">
                        <img class="img-fluid" src="{{ asset('images/res/ecom/men-t-1.webp') }}" alt="Product 1">
                        <h4 class="fs-6 pt-3 text-right text-wrap m-0" style="height: 90px">Veirdo Printed Men Round Neck
                            White
                            T-shirt.</h4>
                    </a>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="m-0 fs-5">Price : <span class="text-primary">$200</span></p>
                        <a href="#" class="btn btn-outline-primary"><i class="fa-solid fa-cart-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-3 p-0 me-2" style="width: 24%;">
                <div class="product-item border p-2 rounded-3">
                    <a class="nav-link w-100" href="#">
                        <img class="img-fluid" src="{{ asset('images/res/ecom/men-t-2.webp') }}" alt="Product 1">
                        <h4 class="fs-6 pt-3 text-right text-wrap m-0" style="height: 90px">Veirdo Printed Men Round Neck
                            Black
                            T-shirt.</h4>
                    </a>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="m-0 fs-5">Price : <span class="text-primary">$190</span></p>
                        <a href="#" class="btn btn-outline-primary"><i class="fa-solid fa-cart-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-3 p-0 me-2" style="width: 24%;">
                <div class="product-item border p-2 rounded-3">
                    <a class="nav-link w-100" href="#">
                        <img class="img-fluid" src="{{ asset('images/res/ecom/men-t-1.webp') }}" alt="Product 1">
                        <h4 class="fs-6 pt-3 text-right text-wrap m-0" style="height: 90px">Veirdo Printed Men Round Neck
                            White
                            T-shirt.</h4>
                    </a>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="m-0 fs-5">Price : <span class="text-primary">$200</span></p>
                        <a href="#" class="btn btn-outline-primary"><i class="fa-solid fa-cart-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-3 p-0 me-2" style="width: 24%;">
                <div class="product-item border p-2 rounded-3">
                    <a class="nav-link w-100" href="#">
                        <img class="img-fluid" src="{{ asset('images/res/ecom/men-t-2.webp') }}" alt="Product 1">
                        <h4 class="fs-6 pt-3 text-right text-wrap m-0" style="height: 90px">Veirdo Printed Men Round Neck
                            Black
                            T-shirt.</h4>
                    </a>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="m-0 fs-5">Price : <span class="text-primary">$190</span></p>
                        <a href="#" class="btn btn-outline-primary"><i class="fa-solid fa-cart-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-3 p-0 me-2" style="width: 24%;">
                <div class="product-item border p-2 rounded-3">
                    <a class="nav-link w-100" href="#">
                        <img class="img-fluid" src="{{ asset('images/res/ecom/men-t-1.webp') }}" alt="Product 1">
                        <h4 class="fs-6 pt-3 text-right text-wrap m-0" style="height: 90px">Veirdo Printed Men Round Neck
                            White
                            T-shirt.</h4>
                    </a>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="m-0 fs-5">Price : <span class="text-primary">$200</span></p>
                        <a href="#" class="btn btn-outline-primary"><i class="fa-solid fa-cart-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-3 p-0 me-2" style="width: 24%;">
                <div class="product-item border p-2 rounded-3">
                    <a class="nav-link w-100" href="#">
                        <img class="img-fluid" src="{{ asset('images/res/ecom/men-t-2.webp') }}" alt="Product 1">
                        <h4 class="fs-6 pt-3 text-right text-wrap m-0" style="height: 90px">Veirdo Printed Men Round Neck
                            Black
                            T-shirt.</h4>
                    </a>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="m-0 fs-5">Price : <span class="text-primary">$190</span></p>
                        <a href="#" class="btn btn-outline-primary"><i class="fa-solid fa-cart-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('short_tranding_pr')
<section class="container my-5 px-5">
    <div class="d-flex justify-content-between mb-4">
        <h4 class=" mb-4 ms-4 fs-3">See our trending product</h4>
        <a href="" class="fs-4 px-3 btn btn-outline-primary rounded-pill">See more <i
                class="fa-solid fa-arrow-right"></i></a>
    </div>
    <div class="row justify-content-start g-2 px-5">
        <div class="col-3 p-0 me-2" style="width: 24%;">
            <div class="product-item border p-2 rounded-3">
                <a class="nav-link w-100" href="#"  style="height: 371px !important">
                    <img class="img-fluid" src="{{ asset('images/res/tranding/Tokyo Talkies Micro Ditsy Printed Oversized Casual Shirt.webp') }}" alt="Product 1">
                    <h4 class="fs-6 pt-3 text-right text-wrap m-0" style="height: 90px">Blive Men Solid Casual Black Shirt</h4>
                </a>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="m-0 fs-5">Price : <span class="text-primary">$200</span></p>
                    <a href="#" class="btn btn-outline-primary"><i class="fa-solid fa-cart-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="col-3 p-0 me-2" style="width: 24%;">
            <div class="product-item border p-2 rounded-3">
                <a class="nav-link w-100" href="#">
                    <img class="img-fluid" src="{{ asset('images/res/ecom/men-t-2.webp') }}" alt="Product 1">
                    <h4 class="fs-6 pt-3 text-right text-wrap m-0" style="height: 90px">Veirdo Printed Men Round Neck
                        Black
                        T-shirt.</h4>
                </a>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="m-0 fs-5">Price : <span class="text-primary">$190</span></p>
                    <a href="#" class="btn btn-outline-primary"><i class="fa-solid fa-cart-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="col-3 p-0 me-2" style="width: 24%;">
            <div class="product-item border p-2 rounded-3">
                <a class="nav-link w-100" href="#">
                    <img class="img-fluid" src="{{ asset('images/res/ecom/men-t-1.webp') }}" alt="Product 1">
                    <h4 class="fs-6 pt-3 text-right text-wrap m-0" style="height: 90px">Veirdo Printed Men Round Neck
                        White
                        T-shirt.</h4>
                </a>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="m-0 fs-5">Price : <span class="text-primary">$200</span></p>
                    <a href="#" class="btn btn-outline-primary"><i class="fa-solid fa-cart-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="col-3 p-0 me-2" style="width: 24%;">
            <div class="product-item border p-2 rounded-3">
                <a class="nav-link w-100" href="#">
                    <img class="img-fluid" src="{{ asset('images/res/ecom/men-t-2.webp') }}" alt="Product 1">
                    <h4 class="fs-6 pt-3 text-right text-wrap m-0" style="height: 90px">Veirdo Printed Men Round Neck
                        Black
                        T-shirt.</h4>
                </a>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="m-0 fs-5">Price : <span class="text-primary">$190</span></p>
                    <a href="#" class="btn btn-outline-primary"><i class="fa-solid fa-cart-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="col-3 p-0 me-2" style="width: 24%;">
            <div class="product-item border p-2 rounded-3">
                <a class="nav-link w-100" href="#">
                    <img class="img-fluid" src="{{ asset('images/res/ecom/men-t-1.webp') }}" alt="Product 1">
                    <h4 class="fs-6 pt-3 text-right text-wrap m-0" style="height: 90px">Veirdo Printed Men Round Neck
                        White
                        T-shirt.</h4>
                </a>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="m-0 fs-5">Price : <span class="text-primary">$200</span></p>
                    <a href="#" class="btn btn-outline-primary"><i class="fa-solid fa-cart-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="col-3 p-0 me-2" style="width: 24%;">
            <div class="product-item border p-2 rounded-3">
                <a class="nav-link w-100" href="#">
                    <img class="img-fluid" src="{{ asset('images/res/ecom/men-t-2.webp') }}" alt="Product 1">
                    <h4 class="fs-6 pt-3 text-right text-wrap m-0" style="height: 90px">Veirdo Printed Men Round Neck
                        Black
                        T-shirt.</h4>
                </a>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="m-0 fs-5">Price : <span class="text-primary">$190</span></p>
                    <a href="#" class="btn btn-outline-primary"><i class="fa-solid fa-cart-plus"></i></a>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection

@section('short_about')
    <section id="about-us" class="py-5 container px-5">
        <h2 class="section-title mb-4 mx-auto w-fit text-center">About Us</h2>
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <p class="lead">Welcome to OurCompany, your ultimate destination for quality products and exceptional
                    service. We are dedicated to making your shopping experience enjoyable, convenient, and hassle-free.</p>
                <p>We pride ourselves on delivering the best to our customers, ensuring that every interaction with us
                    exceeds your expectations. Whether you're looking for fashion, electronics, home essentials, or more,
                    we've got you covered.</p>
                <p>Experience the convenience of shopping with OurCompany. Enjoy free delivery on all orders, ensuring that
                    your items reach you swiftly and conveniently. Plus, our hassle-free return policy gives you peace of
                    mind, allowing you to shop with confidence.</p>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/res/extra-section-res/aboutus.jpg') }}" class="img-fluid rounded"
                    alt="About Us Image">
            </div>
        </div>
    </section>
@endsection
