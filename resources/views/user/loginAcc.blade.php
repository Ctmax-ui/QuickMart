<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <x-auth-session-status class="mb-4" :status="session('status')" />
    <section class="d-flex align-items-center justify-content-center  min-vh-100 min-vw-100 ">

        <form class="text-center form-control p-3 w-25  was-validated " action="{{ route('login') }}" method="post">
            @csrf

            <a href="{{ route('main.home') }}" class="mx-auto mb-4 fs-4 btn" @style('box-shadow: none !important')>QuickMart</a>

            <div class="form-floating mb-3">

                <input class="form-control" id="email" type="email" name="email" placeholder="Create a new pasword" required
                    value="{{old('email')}}" autocomplete="username">

                <label for="floatingPassword">Email</label>
            </div>

            <div class="form-floating">
                <input class="form-control" id="password"
                type="password"
                name="password"
                required autocomplete="current-password" placeholder="Create a new pasword">
                <label for="floatingPassword">Password</label>
                <!-- <a class="text-end" href="./forgetpassword.php">Forget password</a> -->
            </div>
            <div class="text-end pt-1">
                <a href="{{ route('password.request') }}">Forget password</a>
            </div>


            <input class="my-2 w-100 btn btn-outline-primary py-2" type="submit" name="loginbtn" value="Login">
            <br>OR<br>
            <a class="w-100 my-2 btn btn-outline-success py-2" href="">Create Account</a>

            <div class="position-relative mb-4 w-100 text-center d-flex justify-content-center">
                <div class="text-danger position-absolute warning-text ">
   
                </div>
            </div>
        </form>
    </section>

</body>

</html>
