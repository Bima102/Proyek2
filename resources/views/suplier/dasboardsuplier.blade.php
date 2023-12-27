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
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                    <a class="nav-link px-3" href="login">Log out</a>
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
                                <button class="nav-link dropdown-toggle " type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">akun</span>
                                </button>
                                <!-- Dropdown - User Information -->
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/akunsuplier">Informasi Akun</a></li>
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


                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Telur Tersisa</h5>
                                        <input type="number" class="form-control" id="harga" placeholder="" disabled>
                                        <p class="tekan-untuk-mengganti-harga-swE">
                                            <button class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#modalOne">Tambah Stok Telur</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title harga-telur-perkg-dmz">Harga Telur Per KG</h5>
                                        <input type="text" class="form-control" id="namabayar" required disabled>
                                        <p class="tekan-untuk-mengganti-harga-swE">
                                            <button class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#modalTwo">Ganti Harga Per KG</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal One -->
                    <div class="modal fade" id="modalOne" tabindex="-1" aria-labelledby="modalOneLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalOneLabel">Tambah Stok Telur</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="#" onsubmit="submitForm1(event)">
                                        <div class="form-group">
                                            <label for="hargaTelur">Stok Telur (per KG)</label>
                                            <input type="number" class="form-control" id="hargaTelur"
                                                placeholder="Contoh: 2000">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Two -->
                    <div class="modal fade" data-bs-backdrop="static" id="modalTwo" tabindex="-1"
                        aria-labelledby="modalTwoLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTwoLabel">Ganti Harga Lainnya</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="#" onsubmit="submitForm(event)">
                                        <div class="form-group">
                                            <label for="hargaLainnya">Harga </label>
                                            <input type="number" class="form-control" id="hargaLainnya"
                                                placeholder="Contoh: 50000">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Bootstrap JS and Popper.js -->
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                        crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
                        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                        crossorigin="anonymous"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                        crossorigin="anonymous"></script>

                    <script>
                        function submitForm1(event) {
                            // Prevent the default form submission
                            event.preventDefault();
                            // Get the value from the input
                            var hargaLainnyaValue = document.getElementById('hargaTelur').value;
                            // Set the value to the 'namabayar' input
                            document.getElementById('harga').value = hargaLainnyaValue;
                            // Close the modal
                            $('#modalOne').modal('hide');
                        }
                        function submitForm(event) {
                            // Prevent the default form submission
                            event.preventDefault();
                            // Get the value from the input
                            var hargaLainnyaValue = document.getElementById('hargaLainnya').value;
                            // Set the value to the 'namabayar' input
                            document.getElementById('namabayar').value = hargaLainnyaValue;
                            // Close the modal
                            $('#modalTwo').modal('hide');
                        }
                    </script>
                    <h2>Pesanan</h2>
                    <div class="table-responsive h-100">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Kg.Telur</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Edit Status</th>
                                    <th scope="col">No.tlp</th>
                                    <th scope="col">Alamat</th>
                                    <th class="col-md-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($supliers as $item)
                                <tr>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->telur }}</td>
                                    <td>{{ $item->harga }}</td>
                                    <td id="status-" + {{ $item->id }}>{{ $item->status }}</td>
                                    <td>
                                        <form method="post"
                                            action="{{ route('dasboardsuplier-update-status', ['id' => $item->id]) }}">
                                            @csrf
                                            <div class="dropdown">
                                                <button class="btn btn-success dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Edit
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><button class="dropdown-item" type="submit" name="status"
                                                            value="Proses">Proses</button></li>
                                                    <li><button class="dropdown-item" type="submit" name="status"
                                                            value="Batal">Batal</button></li>
                                                    <li><button class="dropdown-item" type="submit" name="status"
                                                            value="Terkirim">Terkirim</button></li>
                                                    <li><button class="dropdown-item" type="submit" name="status"
                                                            value="BarangMasuk">Barang Masuk</button></li>
                                                </ul>
                                                </ul>
                                            </div>
                                        </form>
                                    </td>
                                    <td>{{ $item->no_telp}}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>
                                        <form id="delete-form"
                                            action="{{ route('dasboardsuplier-delete-payment', ['id' => $item->id]) }}"
                                            method="post" style="display: none;">
                                            @csrf
                                            <button type="submit">Delete</button>
                                        </form>
                                        <a href="#" class="btn btn-danger btn-sm"
                                            onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <script>
                            // Fungsi untuk mengubah status menggunakan Ajax
                            function ubahStatus(id, status) {
                                // Buat objek XMLHttpRequest
                                var xhr = new XMLHttpRequest();
                                // Tentukan URL dan metode HTTP
                                var url = '/dasboardsuplier/update/' + id;
                                var method = 'POST';
                                // Konfigurasi permintaan
                                xhr.open(method, url, true);
                                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                xhr.setRequestHeader('X-CSRF-Token', '{{ csrf_token() }}');
                                // Tangani peristiwa ketika permintaan berhasil atau gagal
                                xhr.onload = function () {
                                    if (xhr.status === 200) {
                                        // Ubah isi kolom status pada baris dengan id tertentu
                                        document.getElementById('status-' + id).innerText = status;
                                        alert(JSON.parse(xhr.responseText).message); // Tampilkan pesan sukses
                                    } else {
                                        console.error('Gagal mengubah status');
                                    }
                                };
                                // Tangani kesalahan
                                xhr.onerror = function () {
                                    console.error('Gagal mengirim permintaan Ajax');
                                };
                                // Kirim permintaan dengan data payload
                                xhr.send('status=' + encodeURIComponent(status));
                            }
                            function deleteRecord(id) {
                                if (confirm('Are you sure you want to delete this record?')) {
                                    var xhr = new XMLHttpRequest();
                                    xhr.open('POST', '/delete-payment/' + id, true);
                                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                    xhr.setRequestHeader('X-CSRF-Token', '{{ csrf_token() }}');
                                    xhr.send('_method=DELETE&_token=' + '{{ csrf_token() }}');
                                }
                            }
                        </script>

                    </div>
                </main>
            </div>
        </div>
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
