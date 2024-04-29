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
    <section class="container my-3 px-0">



    </section>
@endsection

@section('short_tranding_pr')
    <section class="container my-5 px-5">

        <div class="mx-5 mb-4">
            <div class="px-5 w-100 text-center d-flex justify-content-between align-items-center ">
                <h4 class="fs-3 m-0">See our Latest Product</h4>
                <a class="btn btn-outline-primary rounded-2 fs-5" href="{{ route('main.products') }}">Browse now <i
                        class="fa-solid fa-arrow-right"></i></a>

            </div>
            <div class="black-line mt-3 p-0"></div>
        </div>


        <div class="row product-list mx-5 px-5" style="gap: 2%;">

            @foreach ($products as $product)
                <div class="product-col-boxs mb-3 mb-lg-3 border py-3 px-2 rounded-2">
                    <section class="panel">
                        <div class="pro-img-box">
                            <img style="background-image: url('{{ asset('storage/images/products_img/' . $product->p_image) }}')"
                                src="" alt class="img-fluid" />

                        </div>
                        <div class="panel-body text-center">
                            <h4>
                                <a href="{{ route('product.single.page', $product->id) }}"
                                    class="pro-title text-decoration-none text-start w-100 px-2">{{ $product->p_name }}</a>
                            </h4>
                            <div class="d-flex justify-content-between align-items-center px-2">
                                <p class="price m-0">${{ $product->p_price }}</p>

                                <form wire:click="$dispatch('cartUpdate')"
                                    wire:submit.prevent="addToCart({{ $product->id }})" method="post">
                                    @csrf
                                    <button type="submit" class="btn  btn-outline-primary">Add <i
                                            class="fa-solid fa-shopping-cart"></i></button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            @endforeach
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

@section('script')
    <script>
        let items = document.querySelectorAll('.carousel .carousel-item')

        items.forEach((el) => {
            const minPerSlide = 3
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

        /* Nothing below this point is needed. */
        const darkSwitch = document.getElementById("darkSwitch");
        window.addEventListener("load", function() {
            if (darkSwitch) {
                initTheme();
                darkSwitch.addEventListener("change", function() {
                    resetTheme();
                });
            }
        });

        function initTheme() {
            let darkThemeSelected =
                localStorage.getItem("darkSwitch") !== null &&
                localStorage.getItem("darkSwitch") === "dark";
            darkSwitch.checked = darkThemeSelected;
            darkThemeSelected
                ?
                document.documentElement.setAttribute('data-bs-theme', 'dark') :
                document.documentElement.removeAttribute("data-bs-theme");
        }

        function resetTheme() {
            if (darkSwitch.checked) {
                document.documentElement.setAttribute("data-bs-theme", "dark");
                localStorage.setItem("darkSwitch", "dark");
            } else {
                document.documentElement.removeAttribute("data-bs-theme");
                localStorage.removeItem("darkSwitch");
            }
        }
    </script>
@endsection
