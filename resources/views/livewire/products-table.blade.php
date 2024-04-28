<section class="container my-5">

    <div wire:loading wire:target="loadProducts" class="loading-bar"></div>

    <div class=" mt-2 mb-4 text-center ">
        <h4 class="fs-3">Browse out latest product's.</h4>
        <p class="black-line "></p>
    </div>
    <div class="row m-0">

        <div class="col-md-3  py-3  py-md-0 ">
            <div class="border p-3 rounded-2">

                <section class="panel">
                    <div class="panel-body">
                        <form wire:submit.prevent="loadProducts('{{ $search }}')" class="input-group">
                            <input type="text" wire:model="search" placeholder="Keyword Search"
                                class="form-control" />
                            <button type="submit" wire:click="loadProducts('{{ $search }}')"
                                class="btn btn-outline-primary">Go</button>
                        </form>
                    </div>
                </section>




                {{-- <section class="panel my-3">
                    <div class="panel-heading">
                        <h5 class="panel-title">Category</h5>
                    </div>
                    <div class="panel-body">
                        <ul class="nav prod-cat">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dress
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                                    <li><a class="dropdown-item" href="#">Shirt</a></li>
                                    <li><a class="dropdown-item" href="#">Pant</a></li>
                                    <li><a class="dropdown-item" href="#">Shoes</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="otherCategoryDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Bags & Purses
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="otherCategoryDropdown">
                                    <li><a class="dropdown-item" href="#">Subcategory 1</a></li>
                                    <li><a class="dropdown-item" href="#">Subcategory 2</a></li>
                                    <li><a class="dropdown-item" href="#">Subcategory 3</a></li>
                                </ul>
                            </li>
                            <!-- Add more categories as needed -->
                        </ul>
                    </div>
                </section> --}}

                {{-- <section class="panel">
                    <header class="panel-heading">
                        Price Range
                    </header>
                    <div class="panel-body sliders">
                        <div id="slider-range" class="slider"></div>
                        <div class="slider-info">
                            <span id="slider-range-amount"></span>
                        </div>
                    </div>
                </section> --}}

                {{-- <section class="panel my-2">
                    <header class="panel-heading">
                        Filter
                    </header>
                    <div class="panel-body">
                        <form role="form product-form">
                            <div class="form-group">
                                <label>Brand</label>
                                <select class="form-select">
                                    <option>Wallmart</option>
                                    <option>Catseye</option>
                                    <option>Moonsoon</option>
                                    <option>Textmart</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Color</label>
                                <select class="form-select">
                                    <option>White</option>
                                    <option>Black</option>
                                    <option>Red</option>
                                    <option>Green</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <select class="form-select">
                                    <option>Small</option>
                                    <option>Medium</option>
                                    <option>Large</option>
                                    <option>Extra Large</option>
                                </select>
                            </div>
                            <button class="btn btn-primary my-4 px-4 py-2" type="submit">Apply</button>
                        </form>
                    </div>
                </section> --}}
            </div>
        </div>

        <div class="col-md-9 mt-3 mt-md-0 px-0 px-md-3 ">


            <div class="row product-list m-0" style="gap: 2%;">

                <div class="position-fixed end-0 bottom-0 me-2 w-25">
                    @if ($message)
                        <div class="alert alert-success bg-opacity-75 alert-dismissible fade show mt-2 fs-6 "
                            role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
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

            <section class="panel">
                <div class="panel-body">
                    <div class="pull-right">
                        <ul class="pagination pagination-sm pro-page-list justify-content-end ">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </div>
                </div>
            </section>

        </div>
    </div>

</section>
