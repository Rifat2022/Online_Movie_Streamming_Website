<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PopChill Online Movie Website</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style type="text/css">
            *{
                font-family: fantasy;

            }
        </style>
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                       support@northsouth.edu
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +880-2-55668200
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="product-list.php" class="nav-item nav-link">Movies</a>
                            <a href="movie-list.php" class="nav-item nav-link">Movie Lists</a>
                            
                            
                            <a style="display: inline-block; border: 1px solid tomato; color: white;background-color: dodgerblue; float: right;" href="form.php" class="nav-item nav-link active">Admin Panel</a>

                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                                <div class="dropdown-menu">
                                    <?php  if (isset($_SESSION['username'])) : ?>
                                        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                                        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                                <img style="width: 70px; height: 70px;" src="img/logo.png" alt="Logo">
                                <h3 style="color: tomato;">PopChill</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->       
        
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-tape"></i>Best Movies</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-video"></i>Latest Movies</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-file-video"></i></i>Hindi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="far fa-file-video"></i></i>Hollywood</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-file-video"></i>Bangla</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-file-video"></i>Tv Series</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-film" aria-hidden="true"></i></i>Upcoming Movies</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img src="img/slider-1.jpg" style="width: 600px;background-position: center; height: 400px;" alt="slider Image" />
                                
                                    
                                    <a class="btn" href=""><i class="fa fa-movie"></i>Watch Now</a>
                               
                            </div>
                            <div class="header-slider-item">
                                <img src="img/slider-2.jpg" style="width: 600px;background-position: center; height: 400px;" alt="slider Image" />
                               
                                    
                                    <a class="btn" href=""><i class="fa fa-movie"></i>Watch Now</a>
                         
                            </div>
                            
                            <div class="header-slider-item">
                                <img src="img/slider-3.jpg" style="width: 600px;background-position: center; height: 400px;" alt="slider Image" />
                                
                                    
                                    <a class="btn" href=""><i class="fa fa-movie"></i>Watch Now</a>
                                
                            </div>
                            <div class="header-slider-item">
                                <img src="img/slider-4.jpg" style="width: 600px;background-position: center; height: 400px;" alt="slider Image" />
                                
                                    
                                    <a class="btn" href=""><i class="fa fa-movie"></i>Watch Now</a>
                                
                            </div>
                            <div class="header-slider-item">
                                <img src="img/slider-5.jpg"  style="width: 600px;background-position: center; height: 400px;" alt="slider Image" />
                                
                                    
                                    <a class="btn" href=""><i class="fa fa-movie"></i>Watch Now</a>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="header-img" style="border: 2px solid white;">
                            <div class="img-item" style="border: 2px solid red;">
                                <img  src="img/category-1.jpg" />
                                
                            </div>
                            <div class="img-item" style="border: 2px solid red;">
                                <img src="img/product-9.jpg" />
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->      
        
        <!-- Feature Start-->
     
        <!-- Feature End-->      
        
        <!-- Category Start-->
       <div class="category">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3" style="border: 2px solid tomato;">
                        <div class="category-item ch-400">
                            <img src="img/product-1.jpg" />
                            <a class="category-name" href="">
                                <p>Watch Now</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3" style="border: 2px solid tomato;">
                        <div class="category-item ch-250">
                            <img src="img/product-2.jpg" />
                            <a class="category-name" href="">
                                <p>Watch Now</p>
                            </a>
                        </div>
                        <div class="category-item ch-150">
                            <img src="img/product-3.jpg" />
                            <a class="category-name" href="">
                                <p>Watch Now</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3" style="border: 2px solid tomato;">
                        <div class="category-item ch-150">
                            <img src="img/product-4.jpg" />
                            <a class="category-name" href="">
                                <p>Watch Now</p>
                            </a>
                        </div>
                        <div class="category-item ch-250">
                            <img src="img/product-5.jpg" />
                            <a class="category-name" href="">
                                <p>Watch Now</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3" style="border: 2px solid tomato;">
                        <div class="category-item ch-400">
                            <img src="img/product-6.jpg" />
                            <a class="category-name" href="">
                                <p>Watch Now</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>call us for any queries</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:0123456789">+880-2-55668200</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->       
        
             
        
        <!-- Newsletter Start -->
        
        <!-- Newsletter End --> 
        <!-- Featured Product Start -->
        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Hot Movies</h1>
                </div>
                      
            </div>
        </div>

        <!-- Featured Product End -->       
   
<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-view-top">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="product-search">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-short">
                                                <div class="dropdown">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-price-range">
                                                <div class="dropdown">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php include('db_connect.php'); ?>        
<?php

$res=mysqli_query($connection, "SELECT * FROM movie_information");
while($row=mysqli_fetch_array($res)){

?>

							<div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#"><?php echo $row['product_name']; ?></a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                       
                                            <img src="product_image/<?php echo $row['image']; ?>" alt="photo of product" width="200" height="300">
                                       
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span><?php echo $row['product_price']; ?></h3>
                                        <a class="btn" href="specific_product_detail.php?id=<?php echo $row['id'];  ?>">Details</a>
                                    </div>
                                </div>
                            </div>



<?php
}

?>                            
<?php mysqli_close($connection); ?>                          
                            
                        
                           
                    
                    
                </div>
            </div>
        </div>
        <!-- Product List End -->  
        
        <!-- Review Start -->
       <div class="review">
            <div class="container-fluid">
                <div class="row align-items-center review-slider normal-slider">
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="rifat.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Customer Name</h2>
                                <h3>Rifat Hossian</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                   Searching for a long time fo this type of website.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/meem.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Custome Name</h2>
                                <h3>Meem</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    "Love this site"
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/prethibi.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Custome Name</h2>
                                <h3>Prethibi</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    "Awosome site."
                                </p>
                            </div>
                        </div>
                    </div>
                   </div>
                </div>
            </div>
        </div>
        <!-- Review End -->        
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Bashundhara, Dhaka-1229, Bangladesh</p>
                                <p><i class="fa fa-envelope"></i>registrar@northsouth.edu</p>
                                <p><i class="fa fa-phone"></i>+880-2-55668200 </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    
                                    <a href="https://www.facebook.com/ahasan.islam.786/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/in/mdahasanulislam/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/whoisahasanul/"><i class="fab fa-instagram"></i></a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Company Info</h2>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                      
                    </div>
                </div>
                
                
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                  
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
