<?php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("Location:../index.php");  
 }  
 
 ?>


<h1> HELLO </h1> 


<a href="../controller/sessionDistoryController.php?q=logout" >Logout</a>