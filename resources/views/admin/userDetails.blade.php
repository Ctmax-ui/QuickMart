@extends('admin.adminLayout')
@section('content')
<!-- Main content -->
<div class="container mt-4">
    <h2>Welcome to the User Panel.</h2>
</div>



<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <td>Id</td>
            <td>Username</td>
            <td>Email</td>
            <td>Created at</td>
            <td>Updated at</td>
            <td>Address</td>
            <td>Phone</td>
            <td>Admin Access</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->phone_number}}</td>
            <td>
                <input type="radio" name="is_admin_{{ $user->id }}" value="1" {{ $user->is_admin ? 'checked' : '' }}> True
                <div class=" clearfix"></div>
                <input type="radio" name="is_admin_{{ $user->id }}" value="0" {{ $user->is_admin ? '' : 'checked' }}> False
            </td>
            

            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('input[name^="is_admin_"]').change(function () {
            var newValue = $(this).val();
            var userId = $(this).closest('tr').find('td:first').text(); // Get the user ID from the first column of the current row

            $.ajax({
                url: '{{ route("update.admin.status") }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    userId: userId,
                    isAdmin: newValue
                },
                success: function (response) {
                    // console.log('Admin status updated successfully');
                    location.reload(true);
                },
                error: function (xhr, status, error) {
                    // console.error('Error updating admin status:', error);
                }
            });
        });
    });
</script>
