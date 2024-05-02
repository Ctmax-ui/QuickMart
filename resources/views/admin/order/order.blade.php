@extends('admin.adminLayout')

@section('content')
    <div class="container my-5 px-5">
        <a class=" text-decoration-none btn btn-outline-primary" href="{{route('main.admin.userOrderShow')}}">Show Orders</a>
    </div>
@endsection