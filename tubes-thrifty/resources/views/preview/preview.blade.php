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
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/css-dashboard.css') }}" />
    <!-- CDN Google Font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter&display=swap"
      rel="stylesheet"
    />
    <title>Preview Barang</title>
  </head>
  <body>
    <body>
    <!-- headers -->
    <div class="header">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <a href="/dashboard"><img class="" src="{{asset('Asset/asset-preview/logo-thrifty.svg')}}" alt="" /></a>
        </div>
        <div class="d-flex justify-content-around align-items-center">
          <div class="d-none d-sm-block ">
            <a href="/daftarjual"><button type="button" class="btn btn-success "style="border-radius: 5px;border-color: white; border-width: 1px">Daftar Jual</button></a>
            <a href="/jualproduk"><button type="button" class="btn btn-danger " style="border-radius: 5px;border-color: white; border-width:1px ">+ Jual</button></a>
          </div>
          <div class="ps-3">
            <div class="dropdown">
              <a href="/editprofile">
                <img src="{{ $user->img ? asset($user->img) : 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png' }}" class="rounded-circle" height="50" width="50 " >
              </a>
              <button class="btn btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">   
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="/editprofile">Edit Profile</a></li>
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                <li><a class="dropdown-item d-sm-none d-block" href="/daftarjual">Daftar jual</a></li>
                <li><a class="dropdown-item d-sm-none d-block" href="/jualproduk">Jual Barang</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Konten -->
    <div class="container mt-5 d-flex">
      <!-- kiri -->
      <div class="kiri">
        <div class="d-flex">
          <img
            class="preview-foto"
            src="{{ asset($produk->img1) }}"
            alt=""
          />
            <div class="ms-2 d-flex flex-column">
              <img class="foto rounded mb-1" src="{{ asset($produk->img1) }}" alt="">
              <img class="foto rounded mb-1" src="{{ asset($produk->img2) }}" alt="">
              <img class="foto rounded mb-1" src="{{ asset($produk->img3) }}" alt="">
            </div>
        </div>

        <div class="box konten mt-3">
          <div class="text-center">
            <h5>Rp.{{ $produk->hargaproduk }}</h5>
          </div>

          <center>
            <div class="mt-2">
              <button class="ps-5 pe-5 btn btn-primary">
                <img src="{{ asset('Asset/asset-preview/icon-whatsapp.png') }}" width="30" /> Chatt Penjual
              </button>
            </div>
          </center>
        </div>

        <div class="box konten mt-3">
          <div class="text-center">
            <h6>Dijual Oleh</h6>
          </div>

          <div class="d-flex justify-content-start align-items-center mt-2">
            <img src="{{ asset('Asset/asset-preview/profile-penjual.svg') }}" alt="">
            <h5 class="ms-3">{{ $produk->user->fullname }}</h5>
          </div>

          <div class="tanggal-jual mt-2 d-flex justify-content-between">
            <h6>Diposting pada : </h6>
            <h6>{{ $produk->created_at->format('d/m/Y') }}</h6>
          </div>
        </div>
      </div>

      <!-- kanan -->
      <div class="kanan ps-5">
        <div class="box konten">
          <h3 class="mb-2 fw-bolder">{{ $produk->namaproduk }}</h3>
          <div class="mb-2 d-flex align-items-center justify-content-start">
            <span class="me-3">Kategori</span>
            <span class="me-3 keterangan">{{ $produk->kategori }}</span>
            <div class="me-3 garis"></div>
            <span class="me-3">Kondisi</span>
            <span class="keterangan">Bekas - {{ $produk->kondisi }}</span>
          </div> 

          <div class="status">
            <!-- ukuran produk -->
            <div class="d-flex mb-3">
              <img class="me-3" src="{{ asset('Asset/asset-preview/icon-ukuran.svg') }}" alt="">
              <h6 class="me-3">Ukuran Produk</h6>
              <h6 class="ukuran fw-bolder">{{ $produk->ukuranproduk }}</h6>
            </div>

            <!-- stok produk -->
            <div class="d-flex mb-3">
              <img class="me-3" src="{{ asset('Asset/asset-preview/icon-stok.svg') }}" alt="">
              <h6 class="me-3">Stok produk</h6>
              <h6 class="stok fw-bolder">{{ $produk->stok }}</h6>
            </div>


            <!-- lokasi -->
            <div class="d-flex">
              <img class="me-3" src="{{ asset('Asset/asset-preview/icon-lokasi.svg') }}" alt="">
              <h6>Cibiru, Bandung</h6>
            </div>
          </div>
        </div>

        <!-- deskripsi -->
        <div class="box konten mt-3">
          <div class="pb-3 border-bottom">
            <h5>Deskripsi</h5>
          </div>

          <div class="p-2">
            <p>
              {{ $produk->deskripsiproduk }}
          </div>

        </div>
      </div>
    </div>

    <!-- footer -->
    <div class="footer d-flex">
      <div class="container d-flex align-items-center">
        <img class="logo-footer" src="{{ asset('Asset/logo-thrifty.svg') }}" alt="" />
      </div>
    </div>
  </body>
</html>