<?php
session_start();
 
if(isset($_REQUEST['login']))
{
    $_SESSION['status1']=true;
    header('location:login.php');
}
elseif(isset($_REQUEST['register']))
{
    header('location:register.php');
}




?>