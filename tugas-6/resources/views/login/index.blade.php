<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>{{ $title }}</title>
    <style>
        body {
            background-color: #ffffff;
            font-family: 'Poppins', sans-serif;
        }

        .left-section {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
        }

        .left-section h1 {
            font-family: 'Zen Dots', sans-serif;
            font-size: 4rem;
            color: #0056b3;
        }

        .left-section p {
            font-size: 1.2rem;
            color: #666666;
        }

        .card {
            width: 350px;
            background-color: #0056b3;
        }

        .card:hover {
            box-shadow: rgba(226, 226, 230, 0.2) 0px 7px 29px 0px;
        }
    </style>
</head>
<body>
    <div class="container-fluid vh-100">
        <div class="row h-100">
            <!-- Left Section with Cinemaville Title -->
            <div class="col-md-6 left-section">
                <div class="text-center">
                    <h1>Cinemaville</h1>
                    <p>Selamat datang di Cinemaville. Temukan film favoritmu dan pesan tiket dengan mudah, cepat, dan nyaman!</p>
                </div>
            </div>

            <!-- Right Section with Login Card -->
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="card my-auto">
                    <div class="card-header text-center text-white">
                        <h2>Login</h2>
                        <hr class="text-white">
                    </div>
                    <div class="card-body">
                        <form action="/login" method="post" class="text-white">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email: </label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" autofocus required value="{{ old('email') }}" placeholder="name@example.com">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password: </label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required placeholder="Password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" name="remember" class="custom-control-input" id="remember">
                                <label class="custom-control-label" for="remember">Remember Me</label>
                            </div>
                            <button type="submit" class="btn w-100" name="submit" style="background-color: rgb(192, 231, 255); border-color: rgb(192, 231, 255); color: black;">Login</button>
                            <hr>
                        </form>
                        <a href="{{ url('auth/google') }}">
                            <button class="btn btn-light w-100" name="submit">Login with Google</button>
                        </a>
                    </div>
                    <p class="text-center text-white" style="font-size: 14px;">Belum memiliki akun? <a href="/register" style="text-decoration: none; color: rgb(192, 240, 255);">Register Sekarang!</a>
                    </p>
                    <div class="card-footer text-center text-white">
                        <small>&copy; 2024 Cinemaville</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $(document).on('click', '.btn-close', function(){
                $('.alert').remove();
            });
        });
    </script>
</body>
</html>
