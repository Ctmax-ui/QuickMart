@extends('main.layouts')

@section('hero_section')

    <section class="hero-section" style="background: url('{{ asset('images/banner.jpg') }}'); background-size: cover;">
        <div class="overlay">
            <div class="hero-text-box container w-75">
                <h3 class="pt-4 fs-1 text-white">Get 50% off on your first purchase.</h3>
                <p class="py-4 fs-4 text-white">Elevate your style with our exclusive collection. Discover the latest trends
                    in fashion and accessories, all at unbeatable prices. Hurry, limited time offer!</p>
                <a href="{{ route('main.products') }}"
                    class="btn btn-lg text-white btn-outline-light yllo-btn  rounded-pill px-4">Shop now <i
                        class="fa-solid fa-arrow-right "></i></a>
            </div>
        </div>
    </section>


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Products</p>
                    <a href="{{ route('main.products') }}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ asset('images/res/cat-1.jpg') }}" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Men's dresses</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Products</p>
                    <a href="{{ route('main.products') }}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ asset('images/res/cat-2.jpg') }}" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Women's dresses</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Products</p>
                    <a href="{{ route('main.products') }}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ asset('images/res/cat-3.jpg') }}" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Baby's dresses</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Products</p>
                    <a href="{{ route('main.products') }}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ asset('images/res/cat-4.jpg') }}" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Accerssories</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Products</p>
                    <a href="{{ route('main.products') }}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ asset('images/res/cat-5.jpg') }}" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Bags</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Products</p>
                    <a href="{{ route('main.products') }}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ asset('images/res/cat-6.jpg') }}" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Shoes</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories End -->


    {{-- Featured Start --}}
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="yllo-btn d-flex align-items-center border mb-4 " style="padding: 30px;">
                    <i class="text-yllo fa fa-check text-primary m-0 mr-3 fs-3"></i>
                    <h5 class="font-weight-semi-bold m-0 ps-2 "> Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="yllo-btn featured-sm-box d-flex align-items-center border mb-4" style="padding: 30px;">
                    <i class="fs-3 text-yllo fa fa-shipping-fast text-primary m-0 mr-2"></i>
                    <h5 class="font-weight-semi-bold m-0 ps-2"> Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="yllo-btn featured-sm-box d-flex align-items-center border mb-4" style="padding: 30px;">
                    <i class="fs-3 text-yllo fas fa-exchange-alt text-primary m-0 mr-3"></i>
                    <h5 class="font-weight-semi-bold m-0 ps-2"> 14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="yllo-btn featured-sm-box d-flex align-items-center border mb-4" style="padding: 30px;">
                    <i class="fs-3 text-yllo fa fa-phone-volume text-primary m-0 mr-3"></i>
                    <h5 class="font-weight-semi-bold m-0 ps-2"> 24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    {{-- Featured end --}}
@endsection


@section('short_tranding_pr')
@livewire('home-page-product-sec')
@endsection

@section('short_about')
    <!-- Subscribe Start -->
    <div class="container-fluid my-5 subscribe-form">
        <div class="row justify-content-md-center py-5 px-xl-5">
            <div class="col-md-6 col-12 py-5">
                <div class="text-center mb-2 pb-2">
                    <h2 class="section-title px-5 mb-3"><span class="fw-bold px-2">Stay Updated</span></h2>
                    <p>Amet lorem at rebum amet dolores. Elitr lorem dolor sed amet diam labore at justo ipsum eirmod duo
                        labore labore.</p>
                </div>
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-4" placeholder="Email Goes Here">
                        <div class="input-group-append">
                            <button class="btn btn-primary p-4 fs-5">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->
@endsection

@section('script')
@endsection
