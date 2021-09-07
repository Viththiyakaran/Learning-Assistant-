<?php


include("../model/db.php");


if(isset($_POST['videoAdd']))
{
  $msg = "";
  $videoName = $_POST['videoName'];
  $videoPath  = $_POST['videoPath'];
  $videoCategoryId = $_POST['videoCategoryId'];

  // If upload button is clicked ...
  
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	

  	// image file directory
  	$target = "uploads/".basename($image);

  	//$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
    $sql = "INSERT INTO `tblvideos`(`videoName`, `videoPath`, `isActive`, `videoCategoryId`, `videoImage`)
     VALUES ('". $videoName."','".$videoPath."',1,'". $videoCategoryId."','".$image ."')";
  	// execute query
  	mysqli_query($con, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      echo '<script>alert("New category been created") </script>' ;
      header("location:../view/videoAdd.php");  

  	}else{
      echo '<script>alert("Category has been not created ! Try again") </script>' ;
  	}
}


?>
