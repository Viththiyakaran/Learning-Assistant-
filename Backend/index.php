<?php include('view/login.php') ?>

<?php 

if(isset($_GET['q']))
{

    if($_GET['q'] =="logout")
    {
        echo '<script>alert("You has been currenlty logout the system ! ")</script>';
    }

    if($_GET['q'] =="wronglogin")
{
    echo '<script>alert("You has been enter wrong username and password ! ")</script>';
}
    
}




?>

            