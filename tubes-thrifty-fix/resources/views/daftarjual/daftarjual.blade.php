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
    <link rel="stylesheet" href="css/css-dashboard.css" />
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
  <x-navbar />
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
        }
      ]
    });
} );


</script>
  </body>
</html>