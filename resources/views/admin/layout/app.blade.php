    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SI TELUR</title>
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('styles/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="{{ asset('styles/dashboard.css') }}" rel="stylesheet">
    </head>
    <body>
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 ">
            <a class="navbar-brand" href="#"><img src="/assets/telur.png" height="40" /></a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        </header>
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/dashboardadmin">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/riwayat-barang-masuk">
                            <span data-feather="shopping-cart"></span>
                            Riwayat Barang Masuk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pesan-ke-suplier">
                            <span data-feather="users"></span>
                            Pesan Ke Supplier
                        </a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/riwayharga">
                            <span data-feather="users"></span>
                            Update Pergantian Harga
                        </a>
                    </li>
                    <li class="nav-item dropdown no-arrow">
                        <button class="nav-link dropdown-toggle " type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Akun</span>
                        </button>
                        <!-- Dropdown - User Information -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/akun">Informasi Akun</a></li>
                            <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('dashboardadmin')
    </body>
    </html>
