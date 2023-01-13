<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Login</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/image1.png ');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row pt-5 justify-content-center">
          <div class="col-md-7">
            <center><img src="images/logo.svg" alt=""></center>
                <div class="tabel">
                    <h3 class="pb-3">Login</h3>
                    
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                      <div class="form-group first">
                        <label for="username">Email Address</label>
                        <input type="text" class="form-control" placeholder="Email Address" id="username" name="email">
                      </div>
                      <div class="form-group last mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Password (8+ Characters)" id="password" name="password" >
                      </div>     
                      <p>Doesnt Have Account?  <a class="regis" href="register">Register</a></p>       
                      <input type="submit" value="Continue" class="btn btn-block btn-primary"> 
                    </form>
                </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>