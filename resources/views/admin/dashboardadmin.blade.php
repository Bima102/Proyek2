<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Table Example</title>
  <!-- Add Bootstrap CSS link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>dasbor</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C800" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Outfit%3A400%2C500" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato%3A800" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400" />
  <link rel="stylesheet" href="{{ asset('styles/riwayat-pesanan.css') }}" />
  <link rel="stylesheet" href="{{ asset('styles/scss/dasbor.scss') }}" />
</head>
<style>
  .lato-font th,
  .lato-font td,
  .lato-font .edit-button {
    font-family: 'Lato', sans-serif;
  }

  a:hover {
    background-color: yellow;
  }

  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  * {
    box-sizing: border-box;
  }

  /* Add your custom styles here if needed */
  .edit-button {
    cursor: pointer;
  }

  /* Set a custom width for the table */
  .custom-table {
    width: 100%;
    border: 1px solid #000;
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
          <p class="kg-67r">100000 </p>
          <p class="tekan-untuk-mengganti-harga-swE"><button class="button" data-modal="modalOne">Tekan untuk menambah telur</button></p>
          <div id="modalOne" class="modal">
            <div class="modal-content">
              <div class="contact-form">
                <a class="close">&times;</a>
                <form action="/">
                  <h2>Tambah telur</h2>
                  <div>

                    <input type="number" placeholder="contoh: 1 = 1KG" />

                  </div>
                  <button type="submit" href="/">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="frame-1321314414-iQ8">
          <p class="harga-telur-perkg-dmz">Harga Telur Per KG</p>
          <p class="rp31000-LgQ">31000</p>
          <p class="tekan-untuk-mengganti-harga-swE"><button class="button" data-modal="modalTwo">Tekan untuk mengganti harga</button></p>
          <div id="modalTwo" class="modal">
            <div class="modal-content">
              <div class="contact-form">
                <span class="close">&times;</span>
                <form action="/">
                  <h2>Ganti harga</h2>
                  <div>
                    <input type="number" placeholder="contoh: 2000" />
                  </div>
                  <button type="submit" href="/">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
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

          <!-- Bootstrap JS and Popper.js scripts are required for Bootstrap functionality -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

          <!-- Your JavaScript code -->
          <script>
            function openForm(id) {
              // Your logic to open the form based on the clicked row
              console.log("Edit clicked for row with ID: " + id);
            }
          </script>







        </div>
        <div class="pagination-75i">
          <img class="bold-arrows-alt-arrow-left-R6Q" src="./assets/bold-arrows-alt-arrow-left-zyW.png" />
          <img class="bold-arrows-alt-arrow-right-YB2" src="./assets/bold-arrows-alt-arrow-right.png" />
        </div>
    </div>
  </div>
  <script>
    let modalBtns = [...document.querySelectorAll(".button")];
    modalBtns.forEach(function(btn) {
      btn.onclick = function() {
        let modal = btn.getAttribute("data-modal");
        document.getElementById(modal).style.display = "block";
      };
    });
    let closeBtns = [...document.querySelectorAll(".close")];
    closeBtns.forEach(function(btn) {
      btn.onclick = function() {
        let modal = btn.closest(".modal");
        modal.style.display = "none";
      };
    });
    window.onclick = function(event) {
      if (event.target.className === "modal") {
        event.target.style.display = "none";
      }
    };

    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    
  </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>