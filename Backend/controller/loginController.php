<?php
  include('../model/db.php');
  
  if(isset($_POST['AdminLogin']))
  {
        $myusername = mysqli_real_escape_string($con,$_POST['username']);
        $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
        $mytype= mysqli_real_escape_string($con,$_POST['type']); 
        // $usertype = mysqli_real_escape_string($con,$_POST['usertype']); 
        
        $sql = "SELECT loginID   FROM tbllogin WHERE username= '$myusername' and password2 = '$mypassword' and type= '$mytype' and isActive=1";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        //$active = $row['active'];
        
        $count = mysqli_num_rows($result);
        
        echo("<script>console.log('Not working'".$count."');</script>");
        // If result matched $myusername and $mypassword, table row must be 1 row
        
        if($count == 1) {
        
        session_start();
        $_SESSION['username'] = $myusername;
        $_SESSION['type'] = $mytype;
        
        header("location:../view/dashboard.php");  
        }else {

        echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
        header("location:../index.php");  
        }

  }

  
?>