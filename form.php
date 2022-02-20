<?php
include("video_config.php");
 
if(isset($_POST['but_upload'])){
   $maxsize = 20971520; //
   if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
       $name = $_FILES['file']['name'];
       $target_dir = "videos/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg", "mkv");

       // Check extension
       if( in_array($extension,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
             $_SESSION['message'] = "File too large.";
          }else{
             // Upload
             if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
               // Insert record
               $query = "INSERT INTO videos(name,location) VALUES('".$name."','".$target_file."')";

               mysqli_query($con,$query);
               $_SESSION['message'] = "Upload successfully.";
             }
          }

       }else{
          $_SESSION['message'] = "Invalid file extension.";
       }
   }else{
       $_SESSION['message'] = "Please select a file.";
   }
   header('location: form.php');
   exit;
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
                font-family: sans-serif;


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
                        rifat.hossain05@northsouth.edu
                    </div>
                    <div class="col-sm-6">
                        +88 0 222244433
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">Home</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="product-list.php" class="nav-item nav-link">Movies</a>
                            <a href="movie-list.php" class="nav-item nav-link">Movie Lists</a>
                            
                            <a style="display: inline-block; border: 1px solid tomato; color: white;background-color: dodgerblue; float: right;" href="form.php" class="nav-item nav-link active">Admin Panel</a>
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
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="form.php">Admin Panel</a></li>
                    
                </ul>
            </div>
        </div>
        <br><br>
        <!-- Breadcrumb End -->

<?php include('db_connect.php'); ?>



<div style=" margin-bottom: 30px; margin-left: auto; margin-right: auto; width: 70%; display:block;border: 2px solid tomato; border-radius: 4px;">
  <form style="padding: 15px; width: 60%; margin-left: auto; margin-right: auto;"action="process.php" method="POST" enctype="multipart/form-data">
    
        
        <label>Movie Name:</label><br>
        <input type="text" name="name" value=""><br><br>

        <label>Movie Cover Photo:</label><br>
        <input type="file" name="photo" ><br><br>

        <label>Plot:</label><br>
        <textarea type="text" name="plot" rows="1" cols="5"></textarea> <br><br>

        <label>Movie type:</label><br>
        <input type="text" name="type" ><br><br>

        <label>Website Title:</label><br>
        <input type="text" name="title" ><br><br>

        <label>Description:</label><br>
        <textarea type="text" name="description" rows="1" cols="7"></textarea><br><br>

        

        <label>Cast & Crew:</label><br>
        <input type="text" name="cast" ><br><br>

        <label>Director:</label><br>
        <input type="text" name="director" ><br><br>

        <label>Country:</label><br>
        <input type="text" name="country" ><br><br>

        <label>Language:</label><br>
        <input type="text" name="language" ><br><br>

        <label>Rank:</label><br>
        <input type="text" name="rank" ><br><br>

        <label>Price:  </label><br>
        <input type="text" name="price" ><br><br>

        <button style="color: black; background-color: orange; display: inline-block; border: 1px solid red; border-radius: 2px; padding: 4px; " type="submit" name="submit"> Submit </button><br><br><br>

        
    
  </form>
<form style="padding: 15px; width: 60%; margin-left: auto; margin-right: auto;"method="post" action="process.php" enctype='multipart/form-data'>
      <label for="but_upload">Choose a video for the movie</label><br>
      <input type='file' name='file' /><br> <br>
      <input style="color: white; display: inline-block; border: 2px solid blue; background-color: red; border-radius: 2px; padding:4px;" type='submit' value='Upload' name='but_upload'><br>
</form>
</div>

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


