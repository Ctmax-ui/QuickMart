<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <section class="d-flex align-items-center justify-content-center  min-vh-100 min-vw-100 ">
        <form class="text-center form-control p-3 w-25 was-validated" action="./createacc.php" method="post"
            enctype="multipart/form-data">
            <a href="{{ route('main.main') }}" class="mx-auto mb-4 fs-4 btn" @style('box-shadow: none !important')>QuickMart</a>
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="create-username" placeholder="Username" value=""
                    required>
                <label for="floatingPassword">Chose a username</label>
            </div>

            <div class="form-floating mb-3">
                <input class="form-control" type="email" name="create-usermail" placeholder="Email" value=""
                    required>
                <label for="floatingPassword">Type your email</label>
            </div>

            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="create-password" placeholder="Password" value=""
                    required>
                <label for="floatingPassword">Type your Password</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="create-password" placeholder="Password" value=""
                    required>
                <label for="floatingPassword">Confirm Password</label>
            </div>

            <input class="my-2 w-100 btn btn-outline-primary py-2" type="submit" name="create-btn" value="Create User">

            <p>
                {{-- err msg --}}
            </p>
        </form>
    </section>
</body>

</html>
