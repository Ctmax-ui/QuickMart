<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @livewireStyles
</head>

<body>
    <a href="#header" class="position-fixed end-0 bottom-0 mb-5 me-4 text-dark btn btn-outline-warning"><i class="fa fa-angle-double-up"></i></a>

    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('main.home') }}">
                    <h1 class="navbar-brand__logo fs-4">
                        Quickmart <i class="fa-solid fa-cart-shopping"></i>
                    </h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item pe-2">
                            <a class="nav-link fs-5" href="{{ route('main.home') }}">Home</a>
                        </li>
                        <li class="nav-item pe-2">
                            <a class="nav-link fs-5" href="{{ route('main.products') }}">Products</a>
                        </li>
                        <li class="nav-item pe-2">
                            <a class="nav-link fs-5" href="{{ route('main.about') }}">About</a>
                        </li>
                        <li class="nav-item pe-2">
                            <a class="nav-link fs-5" href="{{ route('main.contact') }}">Contact</a>
                        </li>

                        <li class="nav-item pe-2 dropdown">
                            <a class="nav-link fs-5 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                @auth
                                    <span class="user-name">{{ Auth::user()->name }}</span>
                                @else
                                    <span class="user-name">Guest</span>
                                @endauth
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @auth
                                    <li>
                                        <a class="dropdown-item" href="{{ route('dashboard') }}"><i
                                                class="fa-solid fa-user"></i> Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href=""><i class="fa-solid fa-cart-shopping"></i>
                                            Cart</a>
                                    </li>

                                    @if (auth()->user()->is_admin)
                                        <li><a class="dropdown-item" href="{{ route('admin.admin') }}"><i
                                                    class="fa-solid fa-gear"></i> Admin Panel</a>
                                        </li>
                                    @endif
                                    <li>
                                        <a class="dropdown-item" href=""
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                                class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                    <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                                @endauth
                            </ul>
                        </li>

                        <li class="nav-item pe-2">
                            @livewire('Cart-Counter')
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
