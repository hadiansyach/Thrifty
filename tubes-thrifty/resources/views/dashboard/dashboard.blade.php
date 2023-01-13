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
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
    <!-- CDN Google Font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter&display=swap"
      rel="stylesheet"
    />
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> --}}

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
    <!-- Banner -->
    <div class="container ctn-banner">
      <div>
        <div class="d-flex justify-content-between">
          <div>
            <img class="banner" src="Asset/banner/Image-1.svg" alt="" />
          </div>

          <div>
            <img class="banner2" src="Asset/banner/Image.svg" alt="" />
          </div>
        </div>
      </div>
    </div>

    <!-- Kategori -->
    <div class="container ctn-kategori">
      <h5 class="txt-kategori">Kategori</h5>
      <div class="d-flex justify-content-between align-items-center">
        <div class="text-center">
          <a href="#kaos"><img class="kategori" src="Asset/kategori/icon-kaos.svg" alt="" />
            <h6 class="txt-iconktgr">Kaos</h6></a>
        </div>

        <div class="text-center">
          <a href="#celana"><img class="kategori" src="Asset/kategori/icon-celana.svg" alt="" />
            <h6 class="txt-iconktgr">Celana</h6></a>
        </div>

        <div class="text-center">
          <a href="#kemeja"><img class="kategori" src="Asset/kategori/icon-kemeja.svg" alt="" />
            <h6 class="txt-iconktgr">Kemeja</h6></a>
        </div>

        <div class="text-center">
          <a href="#jaket"><img class="kategori" src="Asset/kategori/icon-jaket.svg" alt="" />
            <h6 class="txt-iconktgr">Jaket</h6></a>
        </div>

        <div class="text-center">
          <a href="#sepatu"><img class="kategori" src="Asset/kategori/icon-sepatu.svg" alt="" />
            <h6 class="txt-iconktgr">Sepatu</h6></a>
        </div>

        <div class="text-center">
          <a href="#topi"><img class="kategori" src="Asset/kategori/icon-topi.svg" alt="" />
            <h6 class="txt-iconktgr">Topi</h6></a>
        </div>

        <div class="text-center">
          <a href="#tas"><img class="kategori" src="Asset/kategori/icon-tas.svg" alt="" />
            <h6 class="txt-iconktgr">Tas</h6></a>
        </div>
      </div>
      <hr class="garis-kategori" />
    </div>

    <!-- Pilihan Hari Ini -->
    <div class="container">
      <h5>Pilihan Hari Ini</h5>
      <div class="justify-content-start d-flex flex-row flex-wrap">
        @forelse ($produks as $produk)
        <?php
          $created = new Carbon\Carbon($produk->created_at);
          $now = Carbon\Carbon::now();
          $difference = ($created->diff($now)->days < 1)
              ? 'today'
              : $created->diffForHumans($now);
        ?>
        <a href="{{ route('preview', $produk->id) }}">
          <div class="card mb-4" style="width: 18rem">
            <img
            style="width: 300px; height: 300px"
              src="{{ asset($produk->img1) }}"
              class="prod card-img-top"
              alt="..."
            />
          </a>
            <div class="card-body">
              <p class="card-text">{{ $produk->namaproduk }}</p>
              <h5 class="card-title">Rp.{{ $produk->hargaproduk }}</h5>
              <div class="text-lokasi d-flex">
                <h6 class="text-muted">{{ $difference }}</h6>
              </div>
            </div>
          </div>

        @empty

        @endforelse

      </div>
    </div>

    <!-- Kategori Kaos -->
    <div class="container">
      <div class="d-flex align-items-center">
        <img
          class="icon-kategori"
          src="Asset/icon-kategori/tshirt.png"
          alt="kaos"
        />
        <h5 id="kaos">Kaos</h5>
      </div>

      <div>
        <div class="justify-content-start d-flex">
            @forelse ($kaos as $produk)
            <?php
              $created = new Carbon\Carbon($produk->created_at);
              $now = Carbon\Carbon::now();
              $difference = ($created->diff($now)->days < 1)
                  ? 'today'
                  : $created->diffForHumans($now);
            ?>
            <a href="{{ route('preview', $produk->id) }}">
              <div class="card mb-4" style="width: 18rem">
                <img
                style="width: 300px; height: 300px"
                  src="{{ asset($produk->img1) }}"
                  class="prod card-img-top"
                  alt="..."
                />
              </a>
                <div class="card-body">
                  <p class="card-text">{{ $produk->namaproduk }}</p>
                  <h5 class="card-title">Rp.{{ $produk->hargaproduk }}</h5>
                  <div class="text-lokasi d-flex">
                    <h6 class="text-muted">{{ $difference }}</h6>
                  </div>
                </div>
              </div>

            @empty

            @endforelse

        </div>
      </div>
    </div>

    {{-- Kategori Celana --}}
    <div class="container">
      <div class="d-flex align-items-center">
        <img
          class="icon-kategori"
          src="Asset/icon-kategori/jeans.png"
          alt="kaos"
        />
        <h5 id="celana">Celana</h5>
      </div>

      <div>
        <div class="justify-content-between d-flex">

            @forelse ($celana as $produk)
            <?php
              $created = new Carbon\Carbon($produk->created_at);
              $now = Carbon\Carbon::now();
              $difference = ($created->diff($now)->days < 1)
                  ? 'today'
                  : $created->diffForHumans($now);
            ?>
            <a href="{{ route('preview', $produk->id) }}">
              <div class="card mb-4" style="width: 18rem">
                <img
                style="width: 300px; height: 300px"
                  src="{{ asset($produk->img1) }}"
                  class="prod card-img-top"
                  alt="..."
                />
              </a>
                <div class="card-body">
                  <p class="card-text">{{ $produk->namaproduk }}</p>
                  <h5 class="card-title">Rp.{{ $produk->hargaproduk }}</h5>
                  <div class="text-lokasi d-flex">
                    <h6 class="text-muted">{{ $difference }}</h6>
                  </div>
                </div>
              </div>

            @empty

            @endforelse
        </div>
      </div>
    </div>

    <!-- Kategori Kemeja -->
    <div class="container">
      <div class="d-flex align-items-center">
        <img class="icon-kategori" src="Asset/icon-kategori/shirt.png" alt="" />
        <h5 id="kemeja">Kemeja</h5>
      </div>

      <div class="d-flex justify-content-between">
        @forelse ($kemeja as $produk)
        <?php
          $created = new Carbon\Carbon($produk->created_at);
          $now = Carbon\Carbon::now();
          $difference = ($created->diff($now)->days < 1)
              ? 'today'
              : $created->diffForHumans($now);
        ?>
        <a href="{{ route('preview', $produk->id) }}">
          <div class="card mb-4" style="width: 18rem">
            <img
            style="width: 300px; height: 300px"
              src="{{ asset($produk->img1) }}"
              class="prod card-img-top"
              alt="..."
            />
          </a>
            <div class="card-body">
              <p class="card-text">{{ $produk->namaproduk }}</p>
              <h5 class="card-title">Rp.{{ $produk->hargaproduk }}</h5>
              <div class="text-lokasi d-flex">
                <h6 class="text-muted">{{ $difference }}</h6>
              </div>
            </div>
          </div>

        @empty

        @endforelse
      </div>
    </div>

    <!-- Kategori Jaket -->
    <div class="container">
      <div class="d-flex align-items-center">
        <img
          class="icon-kategori"
          src="Asset/icon-kategori/jacket 1.png"
          alt=""
        />
        <h5 id="jaket">Jaket</h5>
      </div>

      <div class="d-flex justify-content-between">
        @forelse ($jaket as $produk)
        <?php
          $created = new Carbon\Carbon($produk->created_at);
          $now = Carbon\Carbon::now();
          $difference = ($created->diff($now)->days < 1)
              ? 'today'
              : $created->diffForHumans($now);
        ?>
        <a href="{{ route('preview', $produk->id) }}">
          <div class="card mb-4" style="width: 18rem">
            <img
            style="width: 300px; height: 300px"
              src="{{ asset($produk->img1) }}"
              class="prod card-img-top"
              alt="..."
            />
          </a>
            <div class="card-body">
              <p class="card-text">{{ $produk->namaproduk }}</p>
              <h5 class="card-title">Rp.{{ $produk->hargaproduk }}</h5>
              <div class="text-lokasi d-flex">
                <h6 class="text-muted">{{ $difference }}</h6>
              </div>
            </div>
          </div>

        @empty

        @endforelse
      </div>
    </div>

    <!-- Kategori Sepatu -->
    <div class="container">
      <div class="d-flex align-items-center">
        <img
          class="icon-kategori"
          src="Asset/icon-kategori/sneakers.png"
          alt=""
        />
        <h5 id="sepatu">Sepatu</h5>
      </div>

      <div class="d-flex justify-content-between">
        @forelse ($sepatu as $produk)
        <?php
          $created = new Carbon\Carbon($produk->created_at);
          $now = Carbon\Carbon::now();
          $difference = ($created->diff($now)->days < 1)
              ? 'today'
              : $created->diffForHumans($now);
        ?>
        <a href="{{ route('preview', $produk->id) }}">
          <div class="card mb-4" style="width: 18rem">
            <img
            style="width: 300px; height: 300px"
              src="{{ asset($produk->img1) }}"
              class="prod card-img-top"
              alt="..."
            />
          </a>
            <div class="card-body">
              <p class="card-text">{{ $produk->namaproduk }}</p>
              <h5 class="card-title">Rp.{{ $produk->hargaproduk }}</h5>
              <div class="text-lokasi d-flex">
                <h6 class="text-muted">{{ $difference }}</h6>
              </div>
            </div>
          </div>

        @empty

        @endforelse

      </div>
    </div>

    <!-- Kategori Topi -->
    <div class="container">
      <div class="d-flex align-items-center">
        <img class="icon-kategori" src="Asset/icon-kategori/cap.png" alt="">
        <h5 id="topi">Topi</h5>
      </div>

      <div class="d-flex justify-content-between">

        @forelse ($topi as $produk)
            <?php
              $created = new Carbon\Carbon($produk->created_at);
              $now = Carbon\Carbon::now();
              $difference = ($created->diff($now)->days < 1)
                  ? 'today'
                  : $created->diffForHumans($now);
            ?>
            <a href="{{ route('preview', $produk->id) }}">
              <div class="card mb-4" style="width: 18rem">
                <img
                style="width: 300px; height: 300px"
                  src="{{ asset($produk->img1) }}"
                  class="prod card-img-top"
                  alt="..."
                />
              </a>
                <div class="card-body">
                  <p class="card-text">{{ $produk->namaproduk }}</p>
                  <h5 class="card-title">Rp.{{ $produk->hargaproduk }}</h5>
                  <div class="text-lokasi d-flex">
                    <h6 class="text-muted">{{ $difference }}</h6>
                  </div>
                </div>
              </div>

            @empty

            @endforelse
      </div>
    </div>

    <!-- Kategori Tas -->
    <div class="container">
      <div class="d-flex align-items-center">
        <img class="icon-kategori" src="Asset/icon-kategori/school-bag 1.png" alt="">
        <h5 id="tas">Tas</h5>
      </div>

      <div class="d-flex justify-content-between">
        @forelse ($tas as $produk)
            <?php
              $created = new Carbon\Carbon($produk->created_at);
              $now = Carbon\Carbon::now();
              $difference = ($created->diff($now)->days < 1)
                  ? 'today'
                  : $created->diffForHumans($now);
            ?>
            <a href="{{ route('preview', $produk->id) }}">
              <div class="card mb-4" style="width: 18rem">
                <img
                style="width: 300px; height: 300px"
                  src="{{ asset($produk->img1) }}"
                  class="prod card-img-top"
                  alt="..."
                />
              </a>
                <div class="card-body">
                  <p class="card-text">{{ $produk->namaproduk }}</p>
                  <h5 class="card-title">Rp.{{ $produk->hargaproduk }}</h5>
                  <div class="text-lokasi d-flex">
                    <h6 class="text-muted">{{ $difference }}</h6>
                  </div>
                </div>
              </div>

            @empty

            @endforelse

      </div>
    </div>

    <!-- Nyobain -->

    <!-- footer -->
    <div class="footer d-flex">
      <div class="container d-flex align-items-center">
        <img class="logo-footer" src="Asset/logo-thrifty.svg" alt="">
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
