@include('main.inc.header')

<div class="container mt-5 vh-100 ">
    <div class="row">
        <div class="col-4 ">
            <div class="border border-2 border-dark rounded-circle d-flex justify-content-center align-items-center"
                style="height: 200px;width:200px">
                <img class="img-fluid" src="" alt=" Upload an image">
            </div>
        </div>
        <div class="col-7">
            <h5>Username : {{ Auth::user()->name }}</h5>
            <p class="fs-5">Email : {{ Auth::user()->email }}</p>
            <p class="fs-5"> Address : @if (Auth::user()->address===null)
               <span class="text-danger"> Please update your Address.</span>
            @else
            {{ Auth::user()->address }}
            @endif</p>

            <p class="fs-5">Phone : @if (Auth::user()->address===null)
                <span class="text-danger"> Please update your Number.</span>
             @else
             {{ Auth::user()->phone_number}}
             @endif</p>

            <div class="d-flex justify-content-between mt-4" style="width:45%;">

                <a class=" btn btn-outline-dark" href="{{ route('profile.edit') }}">Edit Profile <i
                        class="fa-solid fa-pen-to-square"></i></a>

                @if (auth()->user()->is_admin)
                    <a class="btn btn-outline-dark" href="{{route('admin.admin')}}">Admin Panel <i class="fa-solid fa-gear"></i></a>
                @endif

            </div>
        </div>
    </div>
</div>
@include('main.inc.footer')
