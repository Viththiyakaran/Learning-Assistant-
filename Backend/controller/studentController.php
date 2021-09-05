<?php 

include('../model/db.php');

if(isset($_GET['loginID']))
{
   $sql = "delete from tbllogin where loginID=".$_GET['loginID'];

   if(mysqli_query($con , $sql))
   {
        echo '<script type="text/javascript">alert("Deleted student details ") </script>' ;
        header("location: ../view/students.php");
   }
   else 
   {
       echo '<script>alert("Sorry ! Check The System") </script>' ;
   }
}


if(isset($_POST['update']))
{
    $loginID = $_POST['loginID'];
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $dob = $_POST['dob'];
    $contactnumber = $_POST['contactnumber'];
    $address = $_POST['address'];
    $hobbies = $_POST['hobbies'];
    $active = $_POST['active'];

    $sql = "UPDATE `tbllogin` SET `username`='".$username."',`password`='".$password."',`password2`='".$password2."',
    `email`='".$email."',`fullname`='". $fullname ."',`updatedDate`=now(),`isActive`='".  $active ."',
    `address`='".$address."',`hobbies`='".$hobbies."',`dob`='". $dob."',`contactnumber`='".$contactnumber."' WHERE loginID ='". $loginID."'";

    
   if(mysqli_query($con , $sql))
   {
        echo '<script type="text/javascript">alert("Student details has been updated") </script>' ;
        header("location: ../view/students.php");
   }
   else 
   {
       echo '<script>alert("Sorry ! Check The System") </script>' ;
   }

 echo "it working";
}

?>