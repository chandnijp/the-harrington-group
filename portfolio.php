<?php 
    
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


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- Owl Carousel CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="./style.css">
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

    <div class="page-section">
    <div class="page-section__container">
        <h1>Locations</h1>
        <div class="page-section__locations-mobile">
            <div id="locations-mobile" class="owl-carousel">
                <div class="item">
                    <div class="location">
                        <div class="location__item">
                            <img class="location__item-image" src="img/image-1.jfif" alt="Harrington">
                            <p class="location__item-title">Harrington</p>
                        </div>
                        <div class="location__item-open">
                            <img class="location__item-open-image" src="img/image-1.jfif" alt="Harrington">
                            <p class="location__item-open-title">Harrington</p>
                            <p class="location__item-open-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="location">
                        <div class="location__item">
                            <img class="location__item-image" src="img/image-2.jfif" alt="Cornwall">
                            <p class="location__item-title">Cornwall</p>
                        </div>
                        <div class="location__item-open">
                            <img class="location__item-open-image" src="img/image-2.jfif" alt="Cornwall">
                            <p class="location__item-open-title">Cornwall</p>
                            <p class="location__item-open-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="location">
                        <div class="location__item">
                            <img class="location__item-image" src="img/image-3.jfif" alt="Southwell">
                            <p class="location__item-title">Southwell</p>
                        </div>
                        <div class="location__item-open">
                            <img class="location__item-open-image" src="img/image-3.jfif" alt="Southwell">
                            <p class="location__item-open-title">Southwell</p>
                            <p class="location__item-open-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="location">
                        <div class="location__item">
                            <img class="location__item-image" src="img/image-4.jfif" alt="Mews">
                            <p class="location__item-title">Mews</p>
                        </div>
                        <div class="location__item-open">
                            <img class="location__item-open-image" src="img/image-4.jfif" alt="Mews">
                            <p class="location__item-open-title">Mews</p>
                            <p class="location__item-open-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="location">
                        <div class="location__item">
                            <img class="location__item-image" src="img/image-5.jfif" alt="Kensington">
                            <p class="location__item-title">Kensington</p>
                        </div>
                        <div class="location__item-open">
                            <img class="location__item-open-image" src="img/image-5.jfif" alt="Kensington">
                            <p class="location__item-open-title">Kensington</p>
                            <p class="location__item-open-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="location">
                        <div class="location__item">
                            <img class="location__item-image" src="img/image-6.jfif" alt="Tourist">
                            <p class="location__item-title">Tourist</p>
                        </div>
                        <div class="location__item-open">
                            <img class="location__item-open-image" src="img/image-6.jfif" alt="Tourist">
                            <p class="location__item-open-title">Tourist</p>
                            <p class="location__item-open-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="location">
                        <div class="location__item">
                            <img class="location__item-image" src="img/image-7.jfif" alt="Apartments">
                            <p class="location__item-title">Apartments</p>
                        </div>
                        <div class="location__item-open">
                            <img class="location__item-open-image" src="img/image-7.jfif" alt="Apartments">
                            <p class="location__item-open-title">Apartments</p>
                            <p class="location__item-open-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section__locations">
            <div id="locations" class="owl-carousel">
                <div class="item location__items">
                    <div class="location">
                        <div class="location__item">
                            <img class="location__item-image" src="img/image-1.jfif" alt="Harrington">
                            <p class="location__item-title">Harrington</p>
                        </div>
                        <div class="location__item-open">
                            <img class="location__item-open-image" src="img/image-1.jfif" alt="Harrington">
                            <p class="location__item-open-title">Harrington</p>
                            <p class="location__item-open-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="location">
                        <div class="location__item">
                            <img class="location__item-image" src="img/image-2.jfif" alt="Cornwall">
                            <p class="location__item-title">Cornwall</p>
                        </div>
                        <div class="location__item-open">
                            <img class="location__item-open-image" src="img/image-2.jfif" alt="Cornwall">
                            <p class="location__item-open-title">Cornwall</p>
                            <p class="location__item-open-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="location">
                        <div class="location__item">
                            <img class="location__item-image" src="img/image-3.jfif" alt="Southwell">
                            <p class="location__item-title">Southwell</p>
                        </div>
                        <div class="location__item-open">
                            <img class="location__item-open-image" src="img/image-3.jfif" alt="Southwell">
                            <p class="location__item-open-title">Southwell</p>
                            <p class="location__item-open-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="location">
                        <div class="location__item">
                            <img class="location__item-image" src="img/image-4.jfif" alt="Mews">
                            <p class="location__item-title">Mews</p>
                        </div>
                        <div class="location__item-open">
                            <img class="location__item-open-image" src="img/image-4.jfif" alt="Mews">
                            <p class="location__item-open-title">Mews</p>
                            <p class="location__item-open-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="item location__items">
                    <div class="location">
                        <div class="location__item">
                            <img class="location__item-image" src="img/image-5.jfif" alt="Kensington">
                            <p class="location__item-title">Kensington</p>
                        </div>
                        <div class="location__item-open">
                            <img class="location__item-open-image" src="img/image-5.jfif" alt="Kensington">
                            <p class="location__item-open-title">Kensington</p>
                            <p class="location__item-open-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="location">
                        <div class="location__item">
                            <img class="location__item-image" src="img/image-6.jfif" alt="Tourist">
                            <p class="location__item-title">Tourist</p>
                        </div>
                        <div class="location__item-open">
                            <img class="location__item-open-image" src="img/image-6.jfif" alt="Tourist">
                            <p class="location__item-open-title">Tourist</p>
                            <p class="location__item-open-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="location">
                        <div class="location__item">
                            <img class="location__item-image" src="img/image-7.jfif" alt="Apartments">
                            <p class="location__item-title">Apartments</p>
                        </div>
                        <div class="location__item-open">
                            <img class="location__item-open-image" src="img/image-7.jfif" alt="Apartments">
                            <p class="location__item-open-title">Apartments</p>
                            <p class="location__item-open-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer class="page-section page-footer">
        <div class="page-section__container">
            <h1>Sign Up!</h1>
            <hr class="mb-3">
            <div class="container">
                <div class="col-lg-6 m-auto d-block">
                    <form id="contact" action="portfolio.php" method="post">
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
                        <input class="btn btn-primary" id="submitbtn" type="submit" name="create" value="Register" />  
                    </form>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- Owl Carousel files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js'></script>


    <!-- My JavaScript -->
    <script src="./script.js"></script>
    
</body>
</html>