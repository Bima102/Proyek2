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
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboardadmin">Jayalaksana</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="bg-dark w-100"> </div>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
      <a class="nav-link px-3 btn-primary" href="#">Sign out</a>
      </div>
    </div>
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
              <a class="nav-link active" aria-current="page" href="/pesan-ke-suplier">
                <span data-feather="users"></span>
                Pesan Ke Supplier
              </a>
            </li>

          </ul>



        </div>
      </nav>


      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Pesan Ke Supplier</h4>
          <form class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-12">
                <label for="nama" class="form-label">Nama Supplier</label>
                <select class="form-select" id="nama" required>
                  <option value="">Pilih Nama Supplier Yang Terdaftar</option>
                  <option>Ujang</option>
                  <option>Ujang</option>
                  <option>Ujang</option>
                  <option>Ujang</option>
                </select>
                <div class="invalid-feedback">
                  Tolong Pilih Nama Supplier
                </div>
              </div>

              <div class="col-12">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" required>
                <div class="invalid-feedback">
                  Isi Alamat Anda
                </div>
              </div>

              <div class="col-12">
                <label for="no.telp" class="form-label">No.telp</label>
                <input type="text" class="form-control" id="alamat" required>
                <div class="invalid-feedback">
                  Isi Alamat Anda
                </div>
              </div>

              <div class="col-4">
                <label for="telur" class="form-label">Berat Telur Yang Di Pesan</label>
                <input type="number" class="form-control" id="telur" placeholder="Kg" onchange="calculatePrice()" required>
              </div>





                <hr class="my-4">

                <h4 class="mb-3">Pembayaran</h4>

                <div class="my-3">
                  <div class="form-check">
                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" onclick="setFieldValue()" value="2132131" checked required>
                    <label class="form-check-label" for="credit">Dana</label>
                  </div>
                  <div class="form-check">
                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" onclick="setFieldValue()" value="817281782" checked required>
                    <label class="form-check-label" for="debit">Bri</label>
                  </div>
                  <div class="form-check">
                    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" onclick="setFieldValue()" value="435435435" required>
                    <label class="form-check-label" for="paypal">Bni</label>
                  </div>
                </div>


                <div class="col-12">
                  <label for="namabayar" class="form-label">No. Rekening/Dana</label>
                  <input type="text" class="form-control" id="namabayar" required>

                  <div class="invalid-feedback">
                    Isi Nama Yang Membayar
                  </div>
                </div>

                <script>
                    function setFieldValue() {
                        var creditRadio = document.querySelector('input[name="paymentMethod"]:checked');
                        var inputValue = creditRadio.value;
                        document.getElementById('namabayar').value = inputValue;
                      }
                </script>








                <div class="col-4">
                    <label for="harga" class="form-label">Harga </label>
                    <input type="number" class="form-control" id="harga" placeholder="Rp" disabled>
                  </div>


                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Pesan</button>
                <hr class="my-4">
          </form>
        </div>
      </main>
    </div>
  </div>

  <script>
    function calculatePrice() {
      // Mendapatkan nilai dari input berat telur
      var beratTelur = document.getElementById('telur').value;

      // Harga per kilogram telur (contoh: Rp 15.000)
      var hargaPerKg = 15000;

      // Menghitung harga total
      var hargaTotal = beratTelur * hargaPerKg;

      // Menyimpan nilai harga total ke dalam input dengan id 'harga'
      document.getElementById('harga').value = hargaTotal;
    }
  </script>



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
