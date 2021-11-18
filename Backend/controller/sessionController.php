<?php
include("../model/db.php");
   session_start();

   if(isset($_GET['q']))
   {
      if($_GET['q']=='logout')
      {

         if(session_destroy()) {
            header("Location: ../index.php?q=logout");
            echo '<script>alert("User has been currenlty logout the system ! ")</script>';
         }
      }
     
   }
  
   
   
   
?>