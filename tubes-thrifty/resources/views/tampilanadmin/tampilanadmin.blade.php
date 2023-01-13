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
          <img class="" src="images/logo-thrifty.svg" alt="" />
        </div>


        <div class="d-none d-sm-block">
          <h3 style="font-weight: bold; color: white">Admin Dashboard</h3>
        </div>

        <div class="d-flex justify-content-around align-items-center">
            <a href="editprofile">
                <img src="{{ $user->img ? asset($user->img) : 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png' }}" class="rounded-circle" height="50" width="50 " >
              </a>
          <button class="btn btn kolay dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="editprofile">Edit Profile</a></li>
            <li><a class="dropdown-item" href="logout">Logout</a></li>
          </ul>
          <!-- <div>
            <button type="button" class="btn btn-danger">+ Jual</button>
          </div> -->
        </div>
      </div>
    </div>
    <!-- Table -->
    <div class="container">
      <h3 style="font-weight: bold">Daftar User</h3>
      <table class="table" id="datatable">
        <thead>
          <tr>
            <th >id</th>
            <th >fullname</th>
            <th >gender</th>
            <th >phonenumber</th>
            <th >email</th>
            <th>nama_role</th>
          </tr>
        </thead>
        </tbody>
      </table>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script >
    $(document).ready( function () {
        $('#datatable').DataTable({
          processing: true,
          serverSide: true,
          ajax: {
            url: "{{ url('getAllUser') }}"
          },
          columns: [
            {
              data: 'id',
              name: 'id'
            },
            {
              data: 'fullname',
              name: 'fullname'
            },
            {
              data: 'gender',
              name: 'gender'
            },
            {
              data: 'phonenumber',
              name: 'phonenumber'
            },
            {
              data: 'email',
              name: 'email'
            },

              {
              data: 'nama_role',
              name: 'nama_role'
            },
          ]
        });
    } );


    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
>   </script>
  </body>
</html>
