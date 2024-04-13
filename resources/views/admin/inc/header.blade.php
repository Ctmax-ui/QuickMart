<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        /* Sidebar */
        #sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 3rem;
            transition: all 0.3s;
            z-index: 1000;
        }

        #sidebar ul.nav flex-column {
            padding: 0;
        }

        #sidebar .nav-link {
            color: #fff;
            padding: 0.5rem 1rem;
        }

        #sidebar .nav-link:hover {
            background-color: #495057;
        }

        /* Content */
        #content {
            margin-left: 250px;
            transition: margin-left 0.3s;
        }

        /* Navbar */
        nav.navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Toggle button */
        #sidebarCollapse {
            background-color: #343a40;
            color: #fff;
            border: none;
            border-radius: 0;
            padding: 10px 15px;
            cursor: pointer;
        }

        #sidebarCollapse:hover {
            background-color: #495057;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
<div id="sidebar">

    <ul class="nav flex-column">

        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.admin')}}"><i class="fas fa-tachometer-alt me-2"></i>Home</a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
        </li> --}}

        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-users me-2"></i>Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.productsAdd')}}"><i class="fas fa-box me-2"></i>Products Add</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-shopping-cart me-2"></i>Orders</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-cog me-2"></i>Settings</a>
        </li>
    </ul>
</div>
