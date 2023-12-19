<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Template · Bootstrap v5.0</title>
    <link href="{{ asset('styles/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('styles/dashboard.css') }}" rel="stylesheet">


</head>
<body>
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 ">
    <a class="navbar-brand" href="#"><img src="/assets/telur.png" height="40" /></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">Sign out</a>
      </div>
    </div>
  </header>
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/dasboardsuplier">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/riwayat-pengirimansuplier">
                <span data-feather="shopping-cart"></span>
                Riwayat Pengiriman
              </a>
            </li>
            <li class="nav-item dropdown no-arrow">
              <button class="nav-link dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">akun</span>
              </button>
              <!-- Dropdown - User Information -->
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/akunsuplier">Informasi Akun</a></li>
                <li><a class="dropdown-item" href="/login">Keluar Akun</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      @yield('dasboardsuplier')
      </body>
</html>
