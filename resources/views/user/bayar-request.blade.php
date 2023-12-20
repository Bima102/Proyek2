    <!DOCTYPE html>
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
        <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap"
            rel="stylesheet">
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
                            <a class="nav-link fw-bold mx-2 acti" href="#">WA:082222222112</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" aria-current="page" href="/dasboarduser">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="/riwayat-pembelian">Riwayat Pembelian</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link mx-2" href="/informasi-akunuser">Akun</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-white w-100">
                    <div class="col-md-7 col-lg-8">
                        <h4 class="mb-3">Pesan telur </h4>
                        <form method="post" action="{{ route('create-payment') }}">
                            @csrf
                            <div class="col-12">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" required>
                                <div class="invalid-feedback">
                                    Isi Nama Anda
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                                <div class="invalid-feedback">
                                    Isi Alamat Anda
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="no_telp" class="form-label">No. Telepon</label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp" required>
                                <div class="invalid-feedback">
                                    Isi Nomor Telepon Anda
                                </div>
                            </div>
                            <div class="col-4">
                                <label for="telur" class="form-label">Berat Telur Yang Dipesan</label>
                                <select class="form-control" id="telur" onchange="handleWeightSelection()" name="telur"
                                    required>
                                    <option value="1">1 Kg</option>
                                    <option value="10">10 Kg</option>
                                    <option value="50">50 Kg</option>
                                    <option value="1000">1 Ton</option>
                                    <option id="customB" value="custom">Berat Lainnya</option>
                                </select>
                            </div>

                            <!-- Menampilkan input berat kustom saat opsi "Berat Lainnya" dipilih -->
                            <div class="col-4" id="customBeratTelur" style="display: none;">
                                <label for="customTelur" class="form-label">Berat Telur Kustom</label>
                                <input type="number" class="form-control" id="customTelur" name="customTelur"
                                    placeholder="Kg" oninput="calculateCustomPrice()">
                            </div>

                            <div class="col-12">
                                <h4 class="mb-3">Pembayaran</h4>
                                <div class="my-3">
                                    <div class="form-check">
                                        <input id="credit" name="payment_method" type="radio" class="form-check-input"
                                            onclick="setFieldValue()" value="2132131" checked required>
                                        <label class="form-check-label" for="credit">Dana</label>
                                    </div>
                                    <div class="form-check">
                                        <input id="debit" name="payment_method" type="radio" class="form-check-input"
                                            onclick="setFieldValue()" value="817281782" required>
                                        <label class="form-check-label" for="debit">Bri</label>
                                    </div>
                                    <div class="form-check">
                                        <input id="paypal" name="payment_method" type="radio" class="form-check-input"
                                            onclick="setFieldValue()" value="435435435" required>
                                        <label class="form-check-label" for="paypal">Bni</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="namabayar" class="form-label">No. Rekening/Dana</label>
                                <input type="text" class="form-control" id="namabayar" name="namabayar" required>
                                <div class="invalid-feedback">
                                    Isi Nama Yang Membayar
                                </div>
                            </div>
                            <div class="col-4">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="harga" placeholder="Rp" name="harga"
                                    readonly>
                            </div>
                            <hr class="my-4">
                            <button class="w-100 btn btn-primary btn-lg" type="submit">Pesan</button>
                            <hr class="my-4">
                        </form>

                        <script>
                            function handleWeightSelection() {
                                var selectElement = document.getElementById('telur');
                                var customBeratTelurElement = document.getElementById('customBeratTelur');
                                var customTelurElement = document.getElementById('customTelur');

                                if (selectElement.value === 'custom') {
                                    customBeratTelurElement.style.display = 'block';
                                    customTelurElement.setAttribute('required', 'required');
                                    calculateCustomPrice();
                                } else {
                                    customBeratTelurElement.style.display = 'none';
                                    customTelurElement.removeAttribute('required');
                                    calculatePrice(); // Call calculatePrice for non-custom options
                                }
                            }

                            function calculatePrice() {
                                var beratTelur = document.getElementById('telur').value;
                                var hargaPerKg = 15000;
                                var hargaTotal = beratTelur * hargaPerKg;
                                document.getElementById('harga').value = hargaTotal;
                            }

                            function calculateCustomPrice() {
                                var customTelurElement = document.getElementById('customTelur');
                                var hargaPerKg = 15000;
                                var beratTelur = customTelurElement.value;
                                var hargaTotal = beratTelur * hargaPerKg;
                                document.getElementById('harga').value = hargaTotal;
                            }

                            function setFieldValue() {
                                var paymentMethodRadio = document.querySelector('input[name="payment_method"]:checked');
                                var inputValue = paymentMethodRadio.value;
                                document.getElementById('namabayar').value = inputValue;
                            }

                        </script>

                    </div>
                </main>
            </div>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <script src="{{ asset('js/dashboard.js') }}"></script>
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
