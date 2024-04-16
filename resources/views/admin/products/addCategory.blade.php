@extends('admin.adminLayout')
@section('header')
@section('content')

    <div class="container px-5 mt-3">
        <form action="{{ route('categories.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Category Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>

        <table class="table table-bordered table-striped mt-5">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created at</th>
            </tr>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
