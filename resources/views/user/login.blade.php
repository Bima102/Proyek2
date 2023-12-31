<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">
        <title>SI TELUR</title>
        </title>
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('styles/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="{{ asset('styles/blog.css') }}" rel="stylesheet">
    </head>
    <link href="signin.css" rel="stylesheet">
    <style>
        .card-title {
            font-family: 'Lato', sans-serif;
            font-weight: bold;
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
    </head>
    <body class="body">
        <nav class="navbar navbar-expand-sm navbar-light" id="neubar">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="/assets/telur.png" height="60" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item">
                            <a class="nav-link fw-bold mx-2 acti" href="#">WA:086457323499</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="form-signin">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form">
                    <form method="POST" action="{{ route('login') }}" class="mt-5 border p-4 bg-light shadow">
                        @csrf
                        <h4 class="mb-5 text-secondary">Login</h4>

                        <div class="mb-3 col-md-12">
                            <label for="email">Email<span class="text-danger">*</span></label>
                            <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Masukkan Email" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-12">
                            <label for="password">Password<span class="text-danger">*</span></label>
                            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
            <a class="btn btn-primary" href="{{ route('password.request') }}">Lupa Password</a>
        </div>

        

        <div class="mb-3">
            <button type="submit" name="login_as" value="user" class="btn btn-primary">Login Sebagai Pembeli</button>
        </div>

        <div class="mb-3">
            <button type="submit" name="login_as" value="supplier" class="btn btn-primary">Login Sebagai Supplier</button>
        </div>

        <div class="mb-3">
            <a class="btn btn-primary" href="/regis">Daftar</a>
        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

        <script src="{{ asset('js/dashboard.js') }}">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
            integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
            integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
        </script>
        <script src="dashboard.js"></script>
    </body>
    </html>