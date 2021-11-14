<?php


include("../model/db.php");
//======================================================================================================//

if(isset($_POST['noteAdd']))
{
  $msg = "";
  $noteName= $_POST['noteName'];

  $noteCategoryId = $_POST['noteCategoryId'];

  // If upload button is clicked ...
  
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	

  	// image file directory
  	$target = "uploads/".basename($image);

  	//$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
    $sql = "INSERT INTO `tblnotes`( `noteTitle`, `noteCatID`, `noteDocument`)
     VALUES ('".$noteName."','". $noteCategoryId ."','".$image."')";
  	// execute query
  	mysqli_query($con, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      echo '<script>alert("New category been created") </script>' ;
      header("location:../view/noteAdd.php");  

  	}else{
      echo '<script>alert("Category has been not created ! Try again") </script>' ;
  	}
}


//======================================================================================================//


if(isset($_GET['enID'])){


}

//======================================================================================================//


if(isset($_GET['dnID'])){

     $deleteID = $_GET['dnID'];
     $sql = "DELETE FROM `tblnotes` WHERE nID = $deleteID";

     if(mysqli_query($con, $sql))
     {
        echo '<script>alert("Category has been Delete") </script>' ;
        header("location:../view/noteAdd.php");  
     }
     else{
        echo '<script>alert("Category has been not created ! Try again") </script>' ;
     }

}




//======================================================================================================//


if(isset($_POST['noteUpdate'])){

   $nID = $_POST['nID'];
   $noteName = $_POST['noteName'];
   $noteCategoryId  = $_POST['noteCategoryId'];
   $oldpdf  = $_POST['existingimage'];

   $image = $_FILES['image']['name'];
   $target = "uploads/".basename($image);
   
   if($image == "")
   {
      $image =   $oldpdf;
   }



     
   	//$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
      $sql = "UPDATE `tblnotes` SET `noteTitle`='". $noteName."',`noteCatID`='".$noteCategoryId."',`noteDocument`='". $image."' WHERE nID ='".$nID."'" ;
      // execute query
      mysqli_query($con, $sql);
 
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
       echo '<script>alert("New category been Updates") </script>' ;
       header("location:../view/noteAdd.php");  
 
      }else{
       echo '<script>alert("Category has been not Updated! Try again") </script>' ;
      }
 }

?>




