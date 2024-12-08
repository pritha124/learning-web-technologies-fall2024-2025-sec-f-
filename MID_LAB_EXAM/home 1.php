<?php
session_start();
if(!isset($_SESSION['status4']))
{
    header('location: login.php');
}
?>

<html>
    <head>
        <title>Home Page</title>
    </head>
    <body>
        
    <h1 align="center">Home Page</h1>
    <hr>

   <div align="center">
   <h3>Name : <?=$_SESSION['name']?></h3>
    <h3>Email :<?=$_SESSION['email']?></h3>
    <h3>Gender :<?=$_SESSION['gender']?></h3>
    <h3>Date Of Birth: <?=$_SESSION['dob']?></h3>
    <h3>Degree:</h3>
    <h3>Blood Group:</h3>
    <a href="logout.php">Logout</a>
   </div>

    
    </body>
</html>