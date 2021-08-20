<?php

  if(isset($_POST['AdminLogin']))
  {
      $username = $_POST['username'];
      $password = $_POST['password'];

      print_r($username .  $password);

  }
?>