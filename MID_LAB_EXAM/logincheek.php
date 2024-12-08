<?php
session_start();
if(isset($_REQUEST['submit']))
{
    $uname=trim($_REQUEST['uname']);
    $upassword=trim($_REQUEST['upassword']);

     if(empty($uname))
    {
        echo "Null Name";
    }
    else if(empty($upassword))
    {
        echo "Null Password";
    }

   else if($_SESSION['name'] == $uname && $_SESSION['password']==$upassword)
    {
        $_SESSION['status4']=true;
        header('location: home.php');
    }
    
    else{
        echo "Please fill the registration form";
    }
    
}

?>