<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" /> -->
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/css-dashboard.css" />
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
    <!-- CDN Google Font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter&display=swap"
      rel="stylesheet"
    />

    <title>Thrifty</title>
  </head>
  <body>
    <!-- headers -->
    <div class="header">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <a href="dashboard"><img class="" src="images/logo-thrifty.svg" alt="" /></a>
        </div>
        <div class="d-flex justify-content-around align-items-center">
          <div class="d-none d-sm-block ">
            <a href="daftarjual"><button type="button" class="btn btn-success "style="border-radius: 5px;border-color: white; border-width: 1px">Daftar Jual</button></a>
            <a href="jualproduk"><button type="button" class="btn btn-danger " style="border-radius: 5px;border-color: white; border-width:1px ">+ Jual</button></a>
          </div>
          <div class="ps-3">
            <div class="dropdown">
              <a href="editprofile">
                <img src="{{ $user->img ? asset($user->img) : 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png' }}" class="rounded-circle" height="50" width="50 " >
              </a>
              <button class="btn btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">   
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="editprofile">Edit Profile</a></li>
                <li><a class="dropdown-item d-sm-none d-block" href="daftarjual">Daftar jual</a></li>
                <li><a class="dropdown-item d-sm-none d-block" href="jualproduk">Jual Barang</a></li>
                <li><a class="dropdown-item" href="logout">Logout</a></li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Input-->
    <form action="{{ route('jual.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="container">
        <h3 style="font-weight: bold;">Jual Produk</h3>
        <div class="tabel">
          <h5>Foto Produk</h5>
          <div class="d-flex">
            <div>Format gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px.
              Pilih foto produk atau tarik dan letakkan hingga 5 foto sekaligus di sini. Cantumkan min.
              3 foto yang menarik agar produk semakin banyak pembeli.
            </div>
            <div class="d-flex">
              <div>
                  <div class="">
                    <div class="d-flex">
                      <div class="inputgambar ms-3">
                        <div class="mb-3">
                          <input class="form-control" type="file" id="formFile" name="img1">
                        </div>
                      </div>
                      <div class="inputgambar ms-3">
                        <div class="mb-3">
                            <input class="form-control" type="file" id="formFile " name="img2">
                          </div>
                      </div>
                      <div class="inputgambar ms-3">
                        <div class="mb-3">
                            <input class="form-control" type="file" id="formFile" name="img3">
                          </div>
                      </div>
                    </div>
                  </div>

              </div>
            </div>
          </div>
        </div>
        <div class="tabel">
          <div>
            <div class="d-flex">
              <div style="width: 300px;">
                <h5 class="pb-2">Informasi Produk</h5>
                <h5>Nama Produk</h5>
                <div>
                  Cantumkan min. 40 karakter agar semakin menarik dan mudah ditemukan oleh pembeli,
                  terdiri dari jenis produk, merek, dan keterangan seperti warna, bahan, atau tipe.
                </div>
              </div>
              <div>
                <input  type="text" class="form-control ms-5 mt-5" name="namaproduk">
              </div>
            </div>
            <div class="d-flex">
              <div>
                <h5 class="pt-5">Kategori</h5>
                <div>
                  PIlih kategori yang sesuai dengan produk.
                </div>
              </div>
              <div>
                <div>
                  <select class="form-control ms-5 mt-5" name="id_categories" id="">
                    <option value="1">Kaos</option>
                    <option value="2">Celana</option>
                    <option value="3">Kemeja</option>
                    <option value="4">Jaket</option>
                    <option value="5">Sepatu</option>
                    <option value="6">Topi</option>
                    <option value="7">Tas</option>
                  </select>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="tabel">
        <div>
          <div class="d-flex">
            <div style="width: 300px;">
              <h5 class="pb-2">Detail produk</h5>
              <h5>Kondisi Produk</h5>
            </div>
            <div class="form-check form-check-inline ms-5 mt-5">
              <input class="form-check-input" type="radio" name="kondisi" id="inlineRadio1" value="seperti baru">
              <label class="form-check-label" for="inlineRadio1">Bekas - Seperti Baru</label>
            </div>
            <div class="form-check form-check-inline ms-5 mt-5">
              <input class="form-check-input" type="radio" name="kondisi" id="inlineRadio2" value="baik">
              <label class="form-check-label" for="inlineRadio2">Bekas - Baik</label>
            </div>
            <div class="form-check form-check-inline ms-5 mt-5">
              <input class="form-check-input" type="radio" name="kondisi" id="inlineRadio3" value="kurang">
              <label class="form-check-label" for="inlineRadio3">Bekas - Kurang</label>
            </div>
          </div>
          <div class="d-flex">
            <div style="width: 300px;">
              <div>
                <h5>Deskripsi Produk</h5>
                <div>
                  Cantumkan min. 40 karakter agar semakin menarik dan mudah ditemukan oleh pembeli,
                  terdiri dari jenis produk, merek, dan keterangan seperti warna, bahan, atau tipe.
                </div>
              </div>
            </div>
            <div>
              <div>
                <input  type="text" class="form-control ms-5 mt-5" name="deskripsiproduk">
              </div>
            </div>
            <div></div>
          </div>
          <div class="d-flex">
            <div style="width: 300px;">
              <h5 class="pt-5">Ukuran Produk</h5>
            </div>
            <div>
              <input  type="text" class="form-control ms-5 mt-5" name="ukuranproduk">
            </div>
          </div>
      </div>
      </div>
      <div class="tabel">
        <div>
          <div class="d-flex">
            <div style="width: 300px;">
              <h5 class="pb-2">Pengelolaan produk</h5>
              <h5>Status Produk</h5>
            </div>
            <div>
              <div class="form-check form-switch mt-5 ms-5">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="status">
                <label class="form-check-label" for="flexSwitchCheckDefault">Nonaktif</label>
              </div>
            </div>
          </div>
          <div class="d-flex">
            <div style="width: 300px;">
              <div>
                <h5 class="mt-5">Harga Produk</h5>
              </div>
            </div>
            <div>
              <div>
                <input  type="text" class="form-control ms-5 mt-5" name="hargaproduk">
              </div>
            </div>
            <div></div>
          </div>
          <div class="d-flex">
            <div style="width: 300px;">
              <h5 class="pt-5">Stok Produk</h5>
            </div>
            <div>
              <input  type="text" class="form-control ms-5 mt-5" name="stok">
            </div>
          </div>
      </div>
      </div>
      <div>
        <button type="button" class="btn btn-outline-danger">Batal</button>
        <button class="btn btn-primary" type="submit">Simpan</button>
      </div>
    </form>

  </body>
  <script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"
></script>
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/plugins/buffer.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/plugins/filetype.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/plugins/piexif.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/plugins/sortable.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/fileinput.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/locales/LANG.js"></script>
  <script>
    $.fn.fileinputBsVersion = '3.4.1'; 

    $(document).ready(function() {
        // initialize with defaults
        $(".input-id").fileinput();

        // with plugin options
        $(".input-id").fileinput({'uploadUrl': '/path/to/your-upload-api', 'previewFileType': 'any'});
    });
  </script> -->
</html>