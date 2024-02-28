<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card my-5">
                    <form action="{{ route('login1') }}" class="card-body cardbody-color p-lg-5" method="POST">
                        @csrf
                        <div class="text-center">
                            <img src="{{ asset('gambar/smk12.jpg') }}"
                                class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="100px"
                                alt="profile">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="email" class="form-control" id="Username"
                                aria-describedby="emailHelp" placeholder="email">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="password">
                        </div>
                        <div class="text-center"><button type="submit"
                                class="btn btn-success px-5 mb-5 w-100">Login</button></div>

                        <div class="mt-2 justify-content-center text-center">
                            <p>Belum punya akun? <a href="/register">Register</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
