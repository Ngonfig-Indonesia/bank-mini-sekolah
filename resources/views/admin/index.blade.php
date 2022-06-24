<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    </head>
    <style>
        body{
            background-color: #0d6efd;
        }
    </style>
    <body>
        <div class="container-fluid vh-100">
            <div class="" style="margin-top:80px">
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3 class="text-primary">Sign In</h3>
                        </div>
                        <form action="{{ route('proses.login') }}" method="POST">
                            @csrf
                            <div class="p-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-person-plus-fill text-white"></i></span>
                                    <input type="text" class="form-control" placeholder="Email" name="email">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-key-fill text-white"></i></span>
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                                <button class="btn btn-primary mt-2" type="submit">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5" style="color: white;">
                <p>Copyright &copy <strong>SMK Negeri 1 Kota Bima</strong></p>
            </div>
        </div>
    </body>

</html>