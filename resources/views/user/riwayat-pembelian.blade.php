    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">
        <title>SI TELUR</title>
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('styles/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="{{ asset('styles/blog.css') }}" rel="stylesheet">
    </head>
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
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="/dasboarduser">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" aria-current="page" href="/riwayat-pembelian">Riwayat
                                Pembelian</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link mx-2" href="/informasi-akunuser">Akun</a>
                        <li class="nav-item ">
                            <a class="nav-link mx-2" href="/login">Log out</a>
                        </li>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="bg-white container">
            <h2>Riwayat Barang Masuk</h2>
            <div class="table-responsive ">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Kg.Telur</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Status</th>
                            <th scope="col">Alamat</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pembayaran as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->telur }}</td>
                            <td>{{ $item->harga }}</td>
                            <td id="status-" + {{ $item->id }}>{{ $item->status }}</td>
                            <td>{{ $item->no_telp}}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>
                                <form id="delete-form" action="{{ route('delete-payment', ['id' => $item->id]) }}"
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
                <div class="pagination-75i">
                </div>
            </div>
        </main>
        <footer class="blog-footer">
            <p>
            </p>
            <p>
                COPYRIGHT © 2023 Jayalaksana
            </p>
        </footer>
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
