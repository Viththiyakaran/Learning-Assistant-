<?php
  include('../model/db.php');
  
  if(isset($_POST['reg']))
  {   
      
      $username = $_POST['username'];
      $fullname = $_POST['fullname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $repassword = $_POST['repassword'];

      $sql = "INSERT INTO `tbllogin`( `username`, `password`, `password2`, `email`, `fullname`, `type`, `createdDate`, `updatedDate`) 
      VALUES ('".$username."','".$password."','".$repassword."','".$email."','".$fullname."','User','now()','now()')" or die("Here plm");

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

  
?>