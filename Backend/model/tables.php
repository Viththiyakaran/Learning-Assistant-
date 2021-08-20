<?php
include ('db.php');
//Admin Table
$adminTable = "Create table IF NOT EXISTS adminTable ( 
    adminID int unsigned auto_increment primary key,
    username varchar(50) not null,
    password varchar(50) not null,
    password2 varchar(50) not null,
    email varchar(100) not null,
    fullname varchar(150) not null,
    type varchar(10) not null,
    createdDate date,
    updatedDate date );";

if(mysqli_query($con,$adminTable)===TRUE)
{
    echo "<br>Admin Table created successfully";
}
else{
    echo "<br>Admin Table Already Exist";
}

//Users Table
$usersTable = "Create table IF NOT EXISTS usersTable(
   userID int unsigned auto_increment primary key,
   username varchar(50) not null,
   password varchar(50) not null,
   password2 varchar(50) not null,
   email varchar(100) not null,
   fullname varchar(150) not null,
   address varchar(150) not null,
   dob date,
   grade varchar(20));";

if(mysqli_query($con,$usersTable)===TRUE)
{
    echo "<br>Users Table created successfully";
}
else{
    echo "<br>Users Table Already Exist";
}
?>