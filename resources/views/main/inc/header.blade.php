<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
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
                            <a class="nav-link fs-5" href="{{route('main.products')}}">Products</a>
                        </li>
                        <li class="nav-item pe-2">
                            <a class="nav-link fs-5" href="#">About</a>
                        </li>
                        <li class="nav-item pe-2">
                            <a class="nav-link fs-5" href="#">Contact</a>
                        </li>

                        <li class="nav-item pe-2 dropdown">
                            <a class="nav-link fs-5 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                @auth
                                    <span class="user-name">{{Auth::user()->name}}</span>
                                @else
                                    <span class="user-name">Guest</span>
                                @endauth
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @auth
                                    <li>
                                        <a class="dropdown-item" href="{{route('dashboard')}}">Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="">Items Cart</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href=""
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                    <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                                @endauth
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
