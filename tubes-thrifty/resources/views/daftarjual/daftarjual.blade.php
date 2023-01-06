<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
</body>
</html><!DOCTYPE html>
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
    <link rel="stylesheet" href="css/css-dashboard.css" />
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
          <img class="" src="images/logo-thrifty.svg" alt="" />
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
              src="images/icon-search.svg"
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
    <!-- Table -->
<div class="container">
    <h3 style="font-weight: bold;">Daftar Jual</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Info Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td> T Shirt Vantage Uniqlo</td>
                <td>1.200.0000</td>
                <td>1</td>
                <td><div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Aktif</label>
                  </div></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td> T Shirt Vantage Uniqlo</td>
                <td>1.200.0000</td>
                <td>1</td>
                <td><div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Aktif</label>
                  </div></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td> T Shirt Vantage Uniqlo</td>
                <td>1.200.0000</td>
                <td>1</td>
                <td><div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Aktif</label>
                  </div></td>
            </tr>
        </tbody>
    </table>
</div>
  </body>
</html>