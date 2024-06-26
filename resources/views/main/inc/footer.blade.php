    <!-- footer section start -->
    <footer id="footer-section" class="mt-5 py-5">
        <div class="container overflow-hidden">
            <div class="row justify-content-lg-between justify-content-sm-around justify-content-center  row-gap-3">

                <div class="col-lg-3 col-md-6 col-10 contact-box">
                    <h4>Contact</h4>
                    <ul class="pt-4">
                        <li><a href="#" style="pointer-events: none"><span class="fa-solid fa-location-dot"></span>
                                London, 235 Terry, 10001</a></li>
                        <li><a href="mailto:info@example.com"><span class="fas fa-envelope-open-text"></span>
                                info@example.com</a></li>
                        <li><a href="tel:++44-000-888-999"><span class="fa-solid fa-phone"></span> ++44-000-888-999</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-10 info-box">
                    <h4>Information</h4>
                    <ul class="pt-3">
                        <li><a href="{{route('main.home')}}"><span class="fa fa-angle-right"></span> Home</a> </li>
                        <li><a href="{{route('main.products')}}"><span class="fa fa-angle-right"></span> Products</a> </li>
                        <li><a href="{{route('main.about')}}"><span class="fa fa-angle-right"></span> About Us</a> </li>
                        <li><a href="{{route('main.contact')}}"><span class="fa fa-angle-right"></span> Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-10 category-box">
                    <h4>Category</h4>
                    <ul class="pt-3">
                        <li><a href="{{route('main.products')}}"><span class="fa fa-angle-right"></span> Men's</a></li>
                        <li><a href="{{route('main.products')}}"><span class="fa fa-angle-right"></span> Women's</a></li>
                        <li><a href="{{route('main.products')}}"><span class="fa fa-angle-right"></span> Children's</a></li>
                        <li><a href="{{route('main.products')}}"><span class="fa fa-angle-right"></span> Bag's</a></li>
                        <li><a href="{{route('main.products')}}"><span class="fa fa-angle-right"></span> Accerssorie's</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-4 col-10 profile-box p-0 mb-3">
                    <h4>Profile</h4>
                    <ul class="">
                        <li><a href="#"><span class="fa fa-angle-right"></span> Today's Deals</a></li>
                    </ul>
                    <div class="follow-us-box h-100 ">
                        <h5>Follow Us</h5>
                        <ul class="">
                            <li class="m-0 p-0 mx-1"><a class="border px-3 py-2 rounded-2" href="#"><span class="fa-brands fa-facebook"></span></a></li>
                            <li class="m-0 p-0 mx-1"><a class="border px-2 py-2 rounded-2" href="#"><span class="fa-brands fa-twitter"></span></a></li>
                            <li class="m-0 p-0 mx-1"><a class="border px-2 py-2 rounded-2" href="#"><span class="fa-brands fa-google-plus-g"></span></a></li>
                            <li class="m-0 p-0 mx-1"><a class="border px-3 py-2 rounded-2" href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    </body>
    </html>
