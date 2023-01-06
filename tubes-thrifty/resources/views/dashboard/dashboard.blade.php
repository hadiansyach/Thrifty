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
    <link rel="stylesheet" href="CSS/dashboard.css" />
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
          <img class="" src="Asset/logo-thrifty.svg" alt="" />
        </div>

        <div>
          <div class="kotak-cari">
            <input
              class="text-cari"
              type="text"
              placeholder="Cari di Thrifty"
            />
            <img
              class="icon-search"
              src="Asset/icon-search.svg"
              alt=""
              usemap="#usemap"
            />
            <map name="usemap">
              <area shape="default" coords="" href="#" alt="" />
            </map>
          </div>
        </div>

        <div class="d-flex justify-content-around align-items-center">
          <div>
            <img src="Asset/icon-chatt.svg" alt="" />
          </div>

          <div>
            <button type="button" class="btn btn-danger">+ Jual</button>
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
          <img class="kategori" src="Asset/kategori/icon-kaos.svg" alt="" />
          <h6 class="txt-iconktgr">Kaos</h6>
        </div>

        <div class="text-center">
          <img class="kategori" src="Asset/kategori/icon-celana.svg" alt="" />
          <h6 class="txt-iconktgr">Celana</h6>
        </div>

        <div class="text-center">
          <img class="kategori" src="Asset/kategori/icon-kemeja.svg" alt="" />
          <h6 class="txt-iconktgr">Kemeja</h6>
        </div>

        <div class="text-center">
          <img class="kategori" src="Asset/kategori/icon-jaket.svg" alt="" />
          <h6 class="txt-iconktgr">Jaket</h6>
        </div>

        <div class="text-center">
          <img class="kategori" src="Asset/kategori/icon-sepatu.svg" alt="" />
          <h6 class="txt-iconktgr">Sepatu</h6>
        </div>

        <div class="text-center">
          <img class="kategori" src="Asset/kategori/icon-topi.svg" alt="" />
          <h6 class="txt-iconktgr">Topi</h6>
        </div>

        <div class="text-center">
          <img class="kategori" src="Asset/kategori/icon-tas.svg" alt="" />
          <h6 class="txt-iconktgr">Tas</h6>
        </div>
      </div>
      <hr class="garis-kategori" />
    </div>

    <!-- Pilihan Hari Ini -->
    <div class="container">
      <h5>Pilihan Hari Ini</h5>
      <div class="justify-content-between d-flex">
        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-kemeja.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Kemeja Kalcer</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted">CIBIRU, BANDUNG</h6>
              <h6 class="text-muted">7 Hari Yang Lalu</h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-jaket.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Jaket Carhart</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>Margahayu, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-kemeja.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Kemeja Kalcer</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted">CIBIRU, BANDUNG</h6>
              <h6 class="text-muted">7 Hari Yang Lalu</h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-celana.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Celana Uniqlo Slimfit</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>Pasteur, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-tas.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Tas Vintage</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>Lembang, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-sepatu.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Reebok Classic</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>Tamansari, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>
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
        <h5>Kaos</h5>
      </div>

      <div>
        <div class="justify-content-between d-flex">
          <div class="card" style="width: 18rem">
            <img
              src="Asset/produk/produk-kaos.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-text">Kaos Punkers</p>
              <h5 class="card-title">Rp 230.000</h5>
              <div class="text-lokasi d-flex">
                <h6 class="text-muted">CIBIRU, BANDUNG</h6>
                <h6 class="text-muted">7 Hari Yang Lalu</h6>
              </div>
            </div>
          </div>

          <div class="card" style="width: 18rem">
            <img
              src="Asset/produk/produk-kaos.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-text">Kaos Punkers</p>
              <h5 class="card-title">Rp 230.000</h5>
              <div class="text-lokasi d-flex">
                <h6 class="text-muted">CIBIRU, BANDUNG</h6>
                <h6 class="text-muted">7 Hari Yang Lalu</h6>
              </div>
            </div>
          </div>

          <div class="card" style="width: 18rem">
            <img
              src="Asset/produk/produk-kaos.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-text">Kaos Punkers</p>
              <h5 class="card-title">Rp 230.000</h5>
              <div class="text-lokasi d-flex">
                <h6 class="text-muted">CIBIRU, BANDUNG</h6>
                <h6 class="text-muted">7 Hari Yang Lalu</h6>
              </div>
            </div>
          </div>

          <div class="card" style="width: 18rem">
            <img
              src="Asset/produk/produk-kaos.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-text">Kaos Punkers</p>
              <h5 class="card-title">Rp 230.000</h5>
              <div class="text-lokasi d-flex">
                <h6 class="text-muted">CIBIRU, BANDUNG</h6>
                <h6 class="text-muted">7 Hari Yang Lalu</h6>
              </div>
            </div>
          </div>

          <div class="card" style="width: 18rem">
            <img
              src="Asset/produk/produk-kaos.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-text">Kaos Punkers</p>
              <h5 class="card-title">Rp 230.000</h5>
              <div class="text-lokasi d-flex">
                <h6 class="text-muted">CIBIRU, BANDUNG</h6>
                <h6 class="text-muted">7 Hari Yang Lalu</h6>
              </div>
            </div>
          </div>

          <div class="card" style="width: 18rem">
            <img
              src="Asset/produk/produk-kaos.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-text">Kaos Punkers</p>
              <h5 class="card-title">Rp 230.000</h5>
              <div class="text-lokasi d-flex">
                <h6 class="text-muted">CIBIRU, BANDUNG</h6>
                <h6 class="text-muted">7 Hari Yang Lalu</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Kategori Celana -->
    <div class="container">
      <div class="d-flex align-items-center">
        <img
          class="icon-kategori"
          src="Asset/icon-kategori/jeans.png"
          alt="kaos"
        />
        <h5>Celana</h5>
      </div>

      <div>
        <div class="justify-content-between d-flex">
          <div class="card" style="width: 18rem">
            <img
              src="Asset/produk/produk-celana.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-text">Celana Uniqlo Slimfit</p>
              <h5 class="card-title">Rp 230.000</h5>
              <div class="text-lokasi d-flex">
                <h6 class="text-muted">CIBIRU, BANDUNG</h6>
                <h6 class="text-muted">7 Hari Yang Lalu</h6>
              </div>
            </div>
          </div>

          <div class="card" style="width: 18rem">
            <img
              src="Asset/produk/produk-celana.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-text">Celana Uniqlo Slimfit</p>
              <h5 class="card-title">Rp 230.000</h5>
              <div class="text-lokasi d-flex">
                <h6 class="text-muted">CIBIRU, BANDUNG</h6>
                <h6 class="text-muted">7 Hari Yang Lalu</h6>
              </div>
            </div>
          </div>

          <div class="card" style="width: 18rem">
            <img
              src="Asset/produk/produk-celana.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-text">Celana Uniqlo Slimfit</p>
              <h5 class="card-title">Rp 230.000</h5>
              <div class="text-lokasi d-flex">
                <h6 class="text-muted">CIBIRU, BANDUNG</h6>
                <h6 class="text-muted">7 Hari Yang Lalu</h6>
              </div>
            </div>
          </div>

          <div class="card" style="width: 18rem">
            <img
              src="Asset/produk/produk-celana.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-text">Celana Uniqlo Slimfit</p>
              <h5 class="card-title">Rp 230.000</h5>
              <div class="text-lokasi d-flex">
                <h6 class="text-muted">CIBIRU, BANDUNG</h6>
                <h6 class="text-muted">7 Hari Yang Lalu</h6>
              </div>
            </div>
          </div>

          <div class="card" style="width: 18rem">
            <img
              src="Asset/produk/produk-celana.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-text">Celana Uniqlo Slimfit</p>
              <h5 class="card-title">Rp 230.000</h5>
              <div class="text-lokasi d-flex">
                <h6 class="text-muted">CIBIRU, BANDUNG</h6>
                <h6 class="text-muted">7 Hari Yang Lalu</h6>
              </div>
            </div>
          </div>

          <div class="card" style="width: 18rem">
            <img
              src="Asset/produk/produk-celana.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-text">Celana Uniqlo Slimfit</p>
              <h5 class="card-title">Rp 230.000</h5>
              <div class="text-lokasi d-flex">
                <h6 class="text-muted">CIBIRU, BANDUNG</h6>
                <h6 class="text-muted">7 Hari Yang Lalu</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Kategori Kemeja -->
    <div class="container">
      <div class="d-flex align-items-center">
        <img class="icon-kategori" src="Asset/icon-kategori/shirt.png" alt="" />
        <h5>Kemeja</h5>
      </div>

      <div class="d-flex justify-content-between">
        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-kemeja.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Kemeja Kalcer</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted">CIBIRU, BANDUNG</h6>
              <h6 class="text-muted">7 Hari Yang Lalu</h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-kemeja.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Kemeja Kalcer</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted">CIBIRU, BANDUNG</h6>
              <h6 class="text-muted">7 Hari Yang Lalu</h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-kemeja.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Kemeja Kalcer</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted">CIBIRU, BANDUNG</h6>
              <h6 class="text-muted">7 Hari Yang Lalu</h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-kemeja.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Kemeja Kalcer</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted">CIBIRU, BANDUNG</h6>
              <h6 class="text-muted">7 Hari Yang Lalu</h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-kemeja.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Kemeja Kalcer</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted">CIBIRU, BANDUNG</h6>
              <h6 class="text-muted">7 Hari Yang Lalu</h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-kemeja.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Kemeja Kalcer</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>CIBIRU, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>
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
        <h5>Jaket</h5>
      </div>

      <div class="d-flex justify-content-between">
        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-jaket.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Jaket Carhart</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>CIBIRU, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-jaket.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Jaket Carhart</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>CIBIRU, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-jaket.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Jaket Carhart</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>CIBIRU, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-jaket.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Jaket Carhart</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>CIBIRU, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-jaket.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Jaket Carhart</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>CIBIRU, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-jaket.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Jaket Carhart</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>CIBIRU, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>
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
        <h5>Sepatu</h5>
      </div>

      <div class="d-flex justify-content-between">
        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-sepatu.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Reebok Classic</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>Tamansari, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-sepatu.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Reebok Classic</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>Tamansari, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-sepatu.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Reebok Classic</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>Tamansari, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-sepatu.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Reebok Classic</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>Tamansari, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-sepatu.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Reebok Classic</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>Tamansari, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-sepatu.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Reebok Classic</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>Tamansari, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Kategori Topi -->
    <div class="container">
      <div class="d-flex align-items-center">
        <img class="icon-kategori" src="Asset/icon-kategori/cap.png" alt="">
        <h5>Topi</h5>
      </div>

      <div class="d-flex justify-content-between">
        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-topi.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Topi Vintage Yosemite</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>CIBIRU, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-topi.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Topi Vintage Yosemite</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>CIBIRU, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-topi.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Topi Vintage Yosemite</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>CIBIRU, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-topi.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Topi Vintage Yosemite</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>CIBIRU, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-topi.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Topi Vintage Yosemite</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>CIBIRU, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-topi.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Topi Vintage Yosemite</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>CIBIRU, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Kategori Tas -->
    <div class="container">
      <div class="d-flex align-items-center">
        <img class="icon-kategori" src="Asset/icon-kategori/school-bag 1.png" alt="">
        <h5>Tas</h5>
      </div>

      <div class="d-flex justify-content-between">
        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-tas.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Tas Vintage</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>Lembang, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-tas.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Tas Vintage</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>Lembang, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-tas.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Tas Vintage</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>Lembang, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-tas.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Tas Vintage</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>Lembang, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-tas.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Tas Vintage</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>Lembang, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <img
            src="Asset/produk/produk-tas.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <p class="card-text">Tas Vintage</p>
            <h5 class="card-title">Rp 230.000</h5>
            <div class="text-lokasi d-flex">
              <h6 class="text-muted"><small>Lembang, BANDUNG</small></h6>
              <h6 class="text-muted"><small>7 Hari Yang Lalu</small></h6>
            </div>
          </div>
        </div>

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