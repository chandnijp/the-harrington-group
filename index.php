<?php 

  header("Access-Control-Allow-Origin: *");
    
    if(isset($_POST['create'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];

      $connection = mysqli_connect('localhost', 'root', '', 'harrington-db');

      if($connection) {
          echo "we are connected";
      } else {
          die('db not connected');
      }

      $query = "INSERT INTO accounts(username,password,email) ";
      $query .= "VALUES ('$username', '$password', '$email')";

      $result = mysqli_query($connection, $query);

      if(!$result) {
          die('Query failed!' . mysqli_error());
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Test</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="./style.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
</head>
<body id="page-top">
    <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-custom navbar-light fixed-top">
        <a class="navbar-brand" href="#page-top"><i class="fas fa-home"></i></a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#nav-collapse" aria-controls="nav-collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="nav-collapse">
          <ul class="navbar-nav d-flex align-items-end ml-md-auto mt-2 mt-lg-0" data-toggle="collapse" data-target="#nav-collapse">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./portfolio.php">MORE</a>
          </li>  		  
          <li class="nav-item">
            <a class="nav-link" href="#contact">SIGN UP</a>
          </li>
          </ul>
        </div>
    </nav>


    <section class="page-header">
        <div class="page-header__container">

        </div>
    </section>

    <section class="mb-5">
      <h1>Harrington</h1>
      <div id="carousel-1" class="carousel slide" data-ride="carousel">
          
        <div class="carousel-inner" role="listbox">

        </div><!-- e carousel-inner -->
        
        <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">prev</span>
        </a>
        
        <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">next</span>
        </a>
            
      </div><!-- e carousel -->
    </section><!-- e section -->
    <section class="mb-5">
      <h1>Cornwall</h1>
      <div id="carousel-2" class="carousel slide" data-ride="carousel">
          
        <div class="carousel-inner" role="listbox">

        </div><!-- e carousel-inner -->
        
        <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">prev</span>
        </a>
        
        <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">next</span>
        </a>
            
      </div><!-- e carousel -->
    </section><!-- e section -->
    <section class="mb-5">
      <h1>Southwell</h1>
      <div id="carousel-3" class="carousel slide" data-ride="carousel">
          
        <div class="carousel-inner" role="listbox">

        </div><!-- e carousel-inner -->
        
        <a class="carousel-control-prev" href="#carousel-3" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">prev</span>
        </a>
        
        <a class="carousel-control-next" href="#carousel-3" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">next</span>
        </a>
            
      </div><!-- e carousel -->
    </section><!-- e section -->
    <section class="mb-5">
      <h1>Mews</h1>
      <div id="carousel-4" class="carousel slide" data-ride="carousel">
          
        <div class="carousel-inner" role="listbox">

        </div><!-- e carousel-inner -->
        
        <a class="carousel-control-prev" href="#carousel-4" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">prev</span>
        </a>
        
        <a class="carousel-control-next" href="#carousel-4" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">next</span>
        </a>
          
      </div><!-- e carousel -->
    </section><!-- e section -->
    <section class="mb-5">
      <h1>Kensington</h1>
      <div id="carousel-5" class="carousel slide" data-ride="carousel">
          
        <div class="carousel-inner" role="listbox">

        </div><!-- e carousel-inner -->
        
        <a class="carousel-control-prev" href="#carousel-5" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">prev</span>
        </a>
        
        <a class="carousel-control-next" href="#carousel-5" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">next</span>
        </a>
          
      </div><!-- e carousel -->
    </section><!-- e section -->
    <section class="mb-5">
      <h1>Tourist</h1>
      <div id="carousel-6" class="carousel slide" data-ride="carousel">
          
        <div class="carousel-inner" role="listbox">

        </div><!-- e carousel-inner -->
        
        <a class="carousel-control-prev" href="#carousel-6" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">prev</span>
        </a>
        
        <a class="carousel-control-next" href="#carousel-6" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">next</span>
        </a>
          
      </div><!-- e carousel -->
    </section><!-- e section -->
    <section class="mb-5">
      <h1>Apartments</h1>
      <div id="carousel-7" class="carousel slide" data-ride="carousel">
          
        <div class="carousel-inner" role="listbox">

        </div><!-- e carousel-inner -->
        
        <a class="carousel-control-prev" href="#carousel-7" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">prev</span>
        </a>
        
        <a class="carousel-control-next" href="#carousel-7" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">next</span>
        </a>
          
      </div><!-- e carousel -->
    </section><!-- e section -->    


    <footer class="page-section page-footer">
      <form id="contact" action="index.php" method="post">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-md-6 col-lg-4 mx-auto">
              <h1>Sign Up!</h1>
              <hr class="mb-3">

              <div class="form-group">
                  <input type="text" name="username" id="usernames" class="form-control" placeholder="Username">
                  <h5 id="usercheck" style="color: red;">**Username is missing</h5>
              </div>

              <div class="form-group">
                  <input type="email" name="email" id="email" required class="form-control" placeholder="Email">
                  <small id="emailvalid" class="form-text text-muted invalid-feedback">Your email must be a valid email</small>
              </div>

              <div class="form-group">
                  <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                  <h5 id="passcheck" style="color: red;">**Please Fill the password</h5>
              </div>

              <div class="form-group">
                  <input type="password" name="password" id="conpassword" class="form-control" placeholder="Confirm Password">
                  <h5 id="conpasscheck" style="color: red;">**Password didn't match</h5>
              </div>

              <hr class="mb-3">
              <input class="btn btn-primary" type="submit" name="create" value="Register" />
            </div>
          </div>
        </div>
      </form>
    </footer>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- My JavaScript -->
    <script src="./script.js"></script>

</body>
</html>