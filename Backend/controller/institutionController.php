<?php 

include('../model/db.php');

if(isset($_POST['instaupdate']))
{

    $instID = $_POST['instID'];
    $instName = $_POST['instName'];
    $instaAddress = $_POST['instaAddress'];
    $instaEmail = $_POST['instaEmail'];
    $instaRegistratioNo  = $_POST['instaRegistratioNo'];
    $instaContactNumber  = $_POST['instaContactNumber'];


    $instaLogo = "AdminLTELogo.png";
    	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	
      if($image == "")
      {
        $image = $instaLogo;
      }

  	// image file directory
  	$target = "uploads/".basename($image);

  	//$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
    $sql = "UPDATE `tblinstitution` SET `instName`='".$instName."',`instaAddress`='". $instaAddress."',
    `instaLogo`='".$image."',`instaRegistratioNo`='".$instaRegistratioNo."',`instaContactNumber`='". $instaContactNumber ."',
    `instaEmail`='".$instaEmail."'";
  	// execute query
  	mysqli_query($con, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      echo '<script>alert("Institution Details has been update") </script>' ;
      header("location:../view/dashboard.php");  

  	}else{
      echo '<script>alert("Institution Details not update ! Try again") </script>' ;
  	}
}


?> 