



<?php include('db_connect.php'); ?>

<?php

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$plot = $_POST['plot'];
	$type = $_POST['type'];
	$title = $_POST['title'];
	$description = $_POST['description'];


	$cast = $_POST['cast'];
	$director = $_POST['director'];
	$country = $_POST['country'];
	$language = $_POST['language'];
	$rank = $_POST['rank'];
	$price = $_POST['price'];
	$maxsize = 36700160; // 35MB
   if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
       $name = $_FILES['file']['name'];
       $target_dir = "videos/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg","mkv");

       // Check extension
       if( in_array($extension,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
             $_SESSION['message'] = "File too large. File must be less than 35MB.";
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
   
   


	$filename = $_FILES["photo"]["name"]; 
    $tempname = $_FILES["photo"]["tmp_name"];     
        $folder = "movie_photo/".$filename;

        // Get all the submitted data from the form 
       
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 

	$query="INSERT INTO movie_information (name, plot, type,title,description,cast,director,country,language,rank,price,image) VALUES('{$name}','{$plot}','{$type}', '{$title}','{$description}','{$cast}','{$director}','{$country}','{$language}','{$rank}', '{$price}','{$filename}');";

	$performQuery=mysqli_query($connection, $query);

	if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
      
	if(!$performQuery)
		echo 'Query unsuccessful';
	else
		echo 'Query successful';

	$insertedId=mysqli_insert_id($connection);
}



?>

<script type="text/javascript">
	window.location="form.php";
</script>
	