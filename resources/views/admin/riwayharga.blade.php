<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Dashboard Template · Bootstrap v5.0</title>








  <!-- Bootstrap core CSS -->
  <link href="{{ asset('styles/bootstrap.min.css') }}" rel="stylesheet">




  <!-- Custom styles for this template -->
  <link href="{{ asset('styles/dashboard.css') }}" rel="stylesheet">

</head>

<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 ">
    <a class="navbar-brand" href="#"><img src="/assets/telur.png" height="40" /></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">

  </header>

  <div class="container-fluid">

    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="/dashboardadmin">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/riwayat-pesanan">
                <span data-feather="file"></span>
                Riwayat Pesanan
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
          <a class="nav-link active" aria-current="page" href="/riwayharga">
            <span data-feather="users"></span>
            Update Pergantian Harga
          </a>
        </li>

            <li class="nav-item dropdown no-arrow">
              <button class="nav-link dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>

              </button>
              <!-- Dropdown - User Information -->
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/akun">Informasi Akun</a></li>
                <li><a class="dropdown-item" href="#">Keluar Akun</a></li>

              </ul>
            </li>

          </ul>



        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">







        <h2>Riwayat Pergantian Harga</h2>
        <div class="table-responsive ">
          <table class="table table-striped table-sm">
            <thead>
              <tr>

                <th scope="col">Tanggal</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>

              </tr>
            </thead>
            <tbody>
              <tr>

                <td>01-01-2023</td>
                <td>12.222.122</td>
                <td><button type='submit' name='submit' class='btn btn-danger btn-sm'>Delete</button></td>


              </tr>


            </tbody>
          </table>

        </div>
      </main>
    </div>
  </div>





  <script src="{{ asset('js/dashboard.js') }}">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


  <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script src="dashboard.js"></script>

</body>



</html>
