<?php


include("../model/db.php");



$sql = "SELECT * FROM tblvideocomments";

        $result = mysqli_query($con,$sql);

        if (mysqli_num_rows($result) > 0) {
            
            while($row = mysqli_fetch_assoc($result)) {

               echo'
               <div class="col-md-12">
               <div class="callout callout-danger">
                  <h5>Comment By : '.$row['commentsby'].'</h5>
                  <p>Comment : '.$row['comments'].'</p>
				<p>Comment Date :  '.$row['commentdate'].'</p>
                </div>
             </div>';
                }
            } else {
                echo "0 results";
         }





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


//======================================================================================================//


if($_POST)
{
	$commets = $_POST['comment'];
	$vid = $_POST['vid'];
	$commentby = $_POST['commentby'];
	

	$sql = "INSERT INTO `tblvideocomments`(`vid`, `comments`, `commentsby`, `commentdate`)
	 VALUES ('".$vid ."','".$commets ."','".$commentby."',now())";

	mysqli_query($con,$sql);
	
	
}




?>
