<?php
   session_start();
   


   if(isset($_GET['q']))
   {
      if($_GET['q']=='logout')
      {
         if(session_destroy()) {
            header("Location: ../index.php");
         }
      }
     
   }
  
?>