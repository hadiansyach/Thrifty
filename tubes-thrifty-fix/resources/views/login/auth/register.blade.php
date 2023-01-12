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
    <link rel="stylesheet" href="css/style.css">

    <title>Register</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/image8.png');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row pt-5 justify-content-center">
          <div class="col-md-7 colom">
            <center><img src="images/logo.svg" alt=""></center>
                <div class="tabel">
                    <h3 class="pb-3">Sign Up</h3>
                    <!-- <h3 style="color:#3E92CC;"><center><strong>Thrifty.</strong></center></h3> -->
                    <form action="{{ route('register2') }}" method="get">
                        <div class="form-group first">
                            <label for="username">Full Name</label>
                            <input type="text" class="form-control" placeholder="Full Name" id="username" name="fullname">
                          </div>
                      <div class="form-group first">
                        <label for="username">Email Address</label>
                        <input type="text" class="form-control" placeholder="Email Address" id="Email" name="email">
                      </div>
                      <div class="form-group first">
                        <label for="gender">Gender</label>
                        <select class="form-control"  id="gender" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                      <div class="form-group last mb-3">
                        <label for="password">Birth Date</label>
                        <input type="date" class="form-control" placeholder="Birth Date" id="Birthdate" name="birthdate">
                      </div>            
        
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