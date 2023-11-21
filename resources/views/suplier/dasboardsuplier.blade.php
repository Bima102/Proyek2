<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Dasbrod</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C800"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato%3A800"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Outfit%3A400%2C500"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat%3A800"/>
  <link rel="stylesheet" href="{{ asset('styles/dasboardsuplier.css') }}"/>
  <link rel="stylesheet" href="{{ asset('styles/scss/dasboardsuplier.scss') }}"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="dasbrod-qHz">
  <div class="header-top-Bck">
    <img class="rectangle-56-Wf2" src="./assets/rectangle-56-NmN.png"/>
    <div class="your-account-items-qhJ">
      <div class="frame-6-ZNQ">No WA : 089999999999</div>
      <a href="/informasi-akunsuplier" class=" btn frame-3-qKv">Akun</a>
      <a href="/loginsuplier"class=" btn frame-3-6me">Logout</a>
    </div>
  </div>
  <div class="auto-group-36he-AWc">
    <div class="frame-2609093-VYt">
      <div class="frame-34c">

      </div>
      <div class="frame-54-kfA">
        <div class="frame-sjn">
          <div class="text-otL">Menu</div>
          <div class="content-vi4">
            <div class="icon-text-tPz">
                <a href="/dasboardsuplier" class="text-e8G">  Dashboard</a>
            </div>
          </div>
          <div class="content-XSx">
            <a href="/kirim-telur" class="text-gKr" style="text-decoration: none;">  Kirim Telur</a>
          </div>
          <div class="content-Akp">
            <a href="/riwayat-pengirimansuplier" class="text-7g4" style="text-decoration: none;">  Riwayat Pengiriman</a>
          </div>

        </div>
      </div>
    </div>
    <div class="auto-group-4zy8-LHv">
      <div class="">
        <div class="">
        </div>
        <div class="frame-1321314410-tcG">
        </div>

        <div class="riwayat-pesanan-3da ">Riwayat Pesanan</div>
        <div class="pesanan-xhn">Pesanan</div>

        <div class="frame-695-tLY">
          <div class="container mt-5">
            <table class="table custom-table">
              <thead class="bg-info text-dark">
                <tr>
                  <th class="fs-1" scope="col">Nama Pemesan</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Status</th>
                  <th scope="col">Edit Status</th>
                  <th scope="col">Alamat</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="border: 1px  #000;">Susanto</td>
                  <td>21 Maret 2023</td>
                  <td>Rp.323.323</td>
                  <td>Telur 12 Kg</td>
                  <td>DiProses</td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Edit
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Proses</a></li>
                        <li><a class="dropdown-item" href="#">Batal</a></li>
                        <li><a class="dropdown-item" href="#">Terkirim</a></li>
                        <li><a class="dropdown-item" href="#">BarangMasuk</a></li>
                      </ul>
                      </ul>
                    </div>
                  </td>
                  <td>Jl.Indramayu Desa,krowok Rt2/Rw4 Petokan:dibelakang penjual baso</td>
                </tr>
                <tr>
                  <td>Ujang</td>
                  <td>23 November 2023</td>
                  <td>Rp.13.313</td>
                  <td>Telur 43 Kg</td>
                  <td>Terkirim</td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Edit
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Proses</a></li>
                        <li><a class="dropdown-item" href="#">Batal</a></li>
                        <li><a class="dropdown-item" href="#">Terkirim</a></li>
                        <li><a class="dropdown-item" href="#">BarangMasuk</a></li>
                      </ul>
                      </ul>
                    </div>
                  </td>
                  <td>Your address here</td>
                </tr>
                <tr>
                  <td>Ronaldo</td>
                  <td>22 Desember 2033</td>
                  <td>Rp.321,00</td>
                  <td>Telur 2 Kg</td>
                  <td>DiBatalkan</td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Edit
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Proses</a></li>
                        <li><a class="dropdown-item" href="#">Batal</a></li>
                        <li><a class="dropdown-item" href="#">Terkirim</a></li>
                        <li><a class="dropdown-item" href="#">BarangMasuk</a></li>
                      </ul>
                      </ul>
                    </div>
                  </td>
                  <td>Your address here</td>
                </tr>
              </tbody>
            </table>

          </div>

    </div>
  </div>

      </div>

        </div>
      </div>
    </div>
  </div>
</div>
</body>
