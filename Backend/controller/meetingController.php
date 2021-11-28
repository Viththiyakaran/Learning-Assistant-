<?php 
include("../model/db.php");


$sqlnextID = "Select * from tblmeetings";
$result = mysqli_query($con,$sqlnextID);
$row=  mysqli_num_rows($result);
$next = $row + 1 ;
//========================================================================================//



  if(isset($_POST['addMeet']))
  {
      //$meetingID = $_POST['meetingID'];
      $meetingTopic  = $_POST['meetingTopic'];
      $meetingDate = $_POST['meetingDate'];
      $meetingDuration = $_POST['meetingDuration'];
      $meetingPassword = $_POST['meetingPassword'];
      $meetingCategoryID = $_POST['meetingCategoryID'];

      $sql = "INSERT INTO `tblmeetings`(`meetingTopic`, `meetingDate`, `meetingDuration`, `meetingPassword`, `meetingCategoryID`) 
      VALUES ('". $meetingTopic."','".$meetingDate."','".$meetingDuration."','".$meetingPassword."','". $meetingCategoryID."')";

    if(mysqli_query($con,$sql))
    {
        echo '<script>alert("New meeting been created") </script>' ;
        header("location:../view/meetings.php");  
    }
    else{
        echo '<script>alert("Meeting has been not created ! Try again") </script>' ;
    }
  }
?>