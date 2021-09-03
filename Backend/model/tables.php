<?php
include ('db.php');


//Admin Table
$tbllogin = "Create table IF NOT EXISTS adminTable ( 
    loginID int unsigned auto_increment primary key,
    username varchar(50) not null,
    password varchar(50) not null,
    password2 varchar(50) not null,
    email varchar(100) not null,
    fullname varchar(150) not null,
    type varchar(10) not null,
    createdDate date,
    updatedDate date );";

if(mysqli_query($con,$tbllogin)===TRUE)
{
    echo "<br>Admin Table created successfully";
}
else{
    echo "<br>Admin Table Already Exist";
}


?>