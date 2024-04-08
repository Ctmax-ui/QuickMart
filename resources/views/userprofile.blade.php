<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
    @include('utility.header')

    <div class="container mt-5">
        <div class="row">
            <div class="col-4 ">
                <div class="border border-2 border-dark rounded-circle d-flex justify-content-center align-items-center" style="height: 200px;width:200px">
                    <img class="img-fluid" src="" alt=" Upload an image">
                </div>
            </div>
            <div class="col-7">
                <h5>Username : {{Auth::user()->name}} <a class="ps-3" href="#"><i class="fa-solid fa-pen"></i></a></h5>
                    <p class="fs-5">Email : {{Auth::user()->email}}</p>
                    <p class="fs-5"> Address : {{Auth::user()->address}}</p>
                    <p class="fs-5">Ph : {{Auth::user()->phone}}</p>

                    <div class="d-flex justify-content-between mt-4" style="width:40%;">
                    <a class="nav-link" href="#">Edit Profile <i class="fa-solid fa-pen-to-square"></i></a>
                    <a class="nav-link" href="#">Edit Password <i class="fa-solid fa-pen-to-square"></i></a>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>