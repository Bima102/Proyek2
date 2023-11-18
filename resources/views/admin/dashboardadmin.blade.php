<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>dasbor</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C800" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Outfit%3A400%2C500" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato%3A800" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400" />
  <link rel="stylesheet" href="{{ asset('styles/dasbor.css') }}" />
  <link rel="stylesheet" href="{{ asset('styles/scss/dasbor.scss') }}" />
</head>
<style>
  a:hover {
    background-color: yellow;
  }

  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  * {
    box-sizing: border-box;
  }
</style>

<body>
  <div class="dasbor-xPi">
    <div class="frame-1321314413-Hwn">
      <div class="frame-54-Cor">
        <div class="frame-9UC">
          <div class="text-UWU">Menu</div>
          <button class="content-kyn">
            <a style="text-decoration: none; color:black;" href="/dashboardadmin"> Dashboard</a>
          </button>
          <button class="content-kyn">
            <a style="text-decoration: none; color:black;" href="/riwayat-pesanan"> Riwayat Pesanan</a>
          </button>

          <button class="content-kyn">
            <a style="text-decoration: none; color:black;" href="/riwayat-barang-masuk"> Riwayat Barang Masuk</a></button>
          <button class="content-kyn">
            <a style="text-decoration: none; color:black;" href="/pesan-ke-suplier">Pesan Ke Supplier</a>
          </button>
        </div>
      </div>
    </div>
    <div class="auto-group-ycji-aFz">
      <div class="auto-group-kke8-vak">
        <div class="frame-1321314404-qxc">
          <p class="telur-tersisa-NSk">Telur Tersisa</p>
          <p class="kg-67r">100.000 KG</p>
          <p class="tekan-untuk-menambah-stok-telur-q5S"><button class="open-button" onclick="openForm()">Tekan untuk menambah stok telur</button></p>
          <div class="form-popup" id="1">
            <form action="/action_page.php" class="form-container">
              <h1>Tambah Stock Telur</h1>
              <input type="text" placeholder="isi dengan angka">
              <button type="submit" class="btn">Tambahkan</button>
              <button type="button" class="btn cancel" onclick="closeForm(1)">Batal</button>
            </form>
            <script>
              function openForm() {
                document.getElementById("1").style.display = "block";
              }

              function closeForm() {
                document.getElementById("1").style.display = "none";
              }
            </script>
          </div>
        </div>
        <div class="frame-1321314414-iQ8">
          <p class="harga-telur-perkg-dmz">Harga Telur Per,Kg</p>
          <p class="rp31000-LgQ">Rp.31,000</p>
          <p class="tekan-untuk-mengganti-harga-swE"><button class="open-button" onclick="openForm(2)">Tekan untuk mengganti harga telur per KG</button></p>
          <div class="form-popup" id="2">
            <form action="/action_page.php" class="form-container">
              <h1>Ganti Harga Telur per KG</h1>
              <input type="text" placeholder="isi dengan angka">
              <button type="submit" class="btn">Ganti</button>
              <button type="button" class="btn cancel" onclick="closeForm(2)">Batal</button>
            </form>
            <script>
              function openForm() {
                document.getElementById("2").style.display = "block";
              }

              function closeForm() {
                document.getElementById("2").style.display = "none";
              }
            </script>
          </div>
        </div>
      </div>
      <div class="pesanan-xhn">Pesanan</div>
      <div class="frame-695-tLY">
        <div class="frame-702-Po6">
          <div class="frame-696-91a">Nama Pemesan</div>
          <div class="frame-697-Dn8">Tanggal</div>
          <div class="frame-698-K4U">Harga</div>
          <div class="frame-699-Ce4">Nama Barang</div>
          <div class="frame-708-Rmi">Status</div>
          <div class="frame-709-K6Q">Edit Status</div>
        </div>
        <div class="frame-703-CR6">
          <div class="nama">Susanto</div>
          <div class="tanggal">21 Maret 2023</div>
          <div class="harga">Rp.323.323</div>
          <div class="namabarang">Telur 12 Kg</div>
          <div class="frame-707-4EL">DiProses</div>
          <div class="frame-708-8zt">
            <div class="frame-1321314409-tz4">
              <button class="frame-3-Skg" class="dropbtn" onclick="openForm()">Edit</button>
              <div class="form-popup" id="3">
                <form action="/action_page.php" class="form-container">
                  <button type="submit" class="btn">Proses</button>
                  <button type="submit" class="btn">Terkirim</button>
                  <button type="submit" class="btn">Batal</button>
                  <button type="submit" class="btn">BarangMasuk</button>
                  <button type="button" class="btn cancel" onclick="closeForm()">Batal</button>
                </form>
                <script>
                  function openForm() {
                    document.getElementById("3").style.display = "block";
                  }

                  function closeForm() {
                    document.getElementById("3").style.display = "none";
                  }
                </script>
              </div>
            </div>
          </div>
        </div>
        <div class="frame-704-X1S">
          <div class="nama">Ujang</div>
          <div class="tanggal">23 November 2023</div>
          <div class="harga">Rp.13.313</div>
          <div class="namabarang">Telur 43 Kg</div>
          <div class="frame-708-AME">Terkirim</div>
          <div class="frame-707-qTN">
            <div class="frame-1321314409-AVe">
              <button class="frame-3-Skg" onclick="openForm(4)">Edit</button>
              <div class="form-popup" id="4">
                <form action="/action_page.php" class="form-container">
                  <h1>Ganti Harga Telur KG</h1>
                  <input type="text" placeholder="isi dengan angka">
                  <button type="submit" class="btn">Ganti</button>
                  <button type="button" class="btn cancel" onclick="closeForm()">Batal</button>
                </form>
                <script>
                  function openForm() {
                    document.getElementById("4").style.display = "block";
                  }

                  function closeForm() {
                    document.getElementById("4").style.display = "none";
                  }
                </script>
              </div>
            </div>
          </div>
        </div>
        <div class="frame-705-r16">
          <div class="nama">Ronaldo</div>
          <div class="tanggal">22 Desember 2033</div>
          <div class="harga">Rp.321,00</div>
          <div class="namabarang">Telur 2 Kg</div>
          <div class="frame-708-5Ag">DiBatalkan</div>
          <div class="frame-707-m3W">
            <div class="frame-1321314409-ufW">
              <div class="frame-3-Twv">Edit</div>
            </div>
          </div>
        </div>
        <div class="frame-706-vKi">
          <div class="nama">Toko Jaya Abadi</div>
          <div class="tanggal">22 September 2033</div>
          <div class="harga">Rp.321,00</div>
          <div class="namabarang">Telur 200 Kg</div>
          <div class="frame-708-y52">BarangMasuk</div>
          <div class="frame-707-SjJ">
            <div class="frame-1321314409-Bwn">
              <div class="frame-3-MLU">Edit</div>
            </div>
          </div>
        </div>
      </div>
      <div class="pagination-75i">
        <img class="bold-arrows-alt-arrow-left-R6Q" src="./assets/bold-arrows-alt-arrow-left-zyW.png" />
        <img class="bold-arrows-alt-arrow-right-YB2" src="./assets/bold-arrows-alt-arrow-right.png" />
      </div>
    </div>
  </div>
</body>