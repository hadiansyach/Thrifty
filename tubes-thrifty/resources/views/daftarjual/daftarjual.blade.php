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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

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
    <!-- Table -->
<div class="container">
    <h3 style="font-weight: bold;">Daftar Jual</h3>
    <table id="daftarjual" class="table display">
      <thead>
          <tr>
              <th>No</th>
              <th>Info Produk</th>
              <th>Harga</th>
              <th>Stok</th>
              <th>Status</th>
              <th>Operation</th>
          </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
</div>


<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script >
$(document).ready( function () {
    $('#daftarjual').DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: "{{ route('daftarjual.datatable') }}"
      },
      columns: [
        {
          data: 'id',
          name: 'id'
        },
        {
          data: 'namaproduk',
          name: 'namaproduk'
        },
        {
          data: 'hargaproduk',
          name: 'hargaproduk'
        },
        {
          data: 'stok',
          name: 'stok'
        },
        {
          data: 'status',
          name: 'status'
        },

          {
          data: 'operation',
          name: 'operation'
        },
      ]
    });
} );


</script>
  </body>
  <script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"
></script>
</html>