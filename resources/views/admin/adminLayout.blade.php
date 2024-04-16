@include('admin.inc.header')
@yield('sidebar')
<div id="content">
    <!-- Top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <ul>
                <li class=" list-unstyled"><a class="text-decoration-none fs-4" href="{{route('main.home')}}">QuickMart</a></li>
            </ul>
        </div>
    </nav>
@yield('content')
@include('admin.inc.footer')