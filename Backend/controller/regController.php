<?php
  include('../model/db.php');
  
  if(isset($_POST['reg']))
  {   
      
      $username = $_POST['username'];
      $fullname = $_POST['fullname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $repassword = $_POST['repassword'];

      $sql = "INSERT INTO `tbllogin`( `username`, `password`, `password2`, `email`, `fullname`, `type`, `createdDate`, `updatedDate`,`isActive`) 
      VALUES ('".$username."','".$password."','".$repassword."','".$email."','".$fullname."','User',now(),now(),1)" or die("Here plm");

      if(mysqli_query($con,$sql))
      {
        echo '<script>alert("Your accout has been created") </script>' ;
        header("location:../index.php");  
      }
      else{
        echo '<script>alert("Your accout has been not created ! Try again") </script>' ;
        header("location:../view/registration.php");  
      }


  }


  function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

  
?>