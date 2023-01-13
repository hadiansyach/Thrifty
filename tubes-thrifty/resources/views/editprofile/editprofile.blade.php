<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.4.2/css/bootstrap.min.css">  
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


    <title>Thrifty</title>
  </head>
  {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
    <!-- CDN Google Font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter&display=swap"
      rel="stylesheet"
    />

    <title>Thrifty</title>
  </head> --}}
  <body>
    <!-- headers -->
    <div class="header">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <a href="tampilanAdmin"><img class="" src="images/logo-thrifty.svg" alt="" /></a>
        </div>
        <div class="d-flex justify-content-around align-items-center">
          <div class="d-sm-none d-sm-block ">
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
    <hr>
    <div class="container bootstrap snippet">
      <form class="form" action="{{ route('editprofile') }}" enctype="multipart/form-data" method="post" id="registrationForm">
        <div class="row">
          <div class="col-sm-3"><!--left col-->
                  
    
          <div class="text-center">
            <img src="{{ $user->img ? asset($user->img) : 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png' }}" class="avatar img-circle img-thumbnail" alt="avatar">
            <h6>Upload a different photo...</h6>
            <input type="file" class="text-center center-block file-upload" name="img">
          </div><br>
            </div><!--/col-3-->
          <div class="col-sm-9">
                  
              <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>
                      {{-- <form class="form" action="{{ route('editprofile') }}" method="post" id="registrationForm"> --}}
                        @csrf
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="fullname"><h4>Fullname</h4></label>
                                  <input type="text" class="form-control" name="fullname" id="fullname" value="{{ $user->fullname }}" placeholder="" title="enter your first name if any.">
                              </div>
                          </div>
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                <label for="email"><h4>Email</h4></label>
                                  <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" placeholder="" title="enter your last name if any.">
                              </div>
                          </div>
              
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="phonenumber"><h4>Phone Number</h4></label>
                                  <input type="text" class="form-control" name="phonenumber" id="phonenumber" value="{{ $user->phonenumber }}" placeholder="" title="enter your phone number if any.">
                              </div>
                          </div>
              
                          <div class="form-group">
                              <div class="col-xs-6">
                                 <label for="gender"><h4>Gender</h4></label>
                                  <input type="text" class="form-control" name="gender" id="gender" value="{{ $user->gender }}" placeholder="" title="enter your mobile number if any.">
                              </div>
                          </div>
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="birthdate"><h4>Birth Date</h4></label>
                                  <input type="date" class="form-control" name="birthdate" id="birthdate" value="{{ $user->birthdate }}" placeholder="you@email.com" title="enter your email.">
                              </div>
                          </div>
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="password"><h4>Password</h4></label>
                                  <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                              </div>
                          </div>
                          <div class="form-group">
                               <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                     <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                </div>
                          </div>
                    {{-- </form> --}}
                  </div>
                  </div><!--/tab-pane-->
              </div><!--/tab-content-->
    
            </div><!--/col-9-->
      </form>
        </div><!--/row-->
                                    
  </body>
  <script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"
></script>
</html>
