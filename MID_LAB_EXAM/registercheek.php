<?php
session_start();
if(isset($_REQUEST['submit']))
{
    $name=trim($_REQUEST['name']);
    $email=trim($_REQUEST['email']);
    $password=trim($_REQUEST['password']);
    $cpassword=trim($_REQUEST['cpassword']);
    $dob=trim($_REQUEST['dob']);
    $_SESSION['name']=$name;
    $_SESSION['password']=$password;
    $_SESSION['dob']=$dob;
    $_SESSION['email']=$email;


    if(empty($name) )
    {
        echo "Please Fill the Name";
    }
    else if(empty($email))
    {
        echo "Please Fill the Email";
    }
    else if(empty($password))
    {
        echo "Please fill the Password";
    }
    else if(empty($cpassword))
    {
        echo "Please fill the Confirm Password";
    }
    else if(strlen($password)<4)
    {
        echo "Password should be at least 8 character";
    }
    else if($password != $cpassword)
    {
        echo "Password and Confirm Password should be same";
    }
    else if(empty($dob))
    {
        echo "Fill the date of birth";
    }

    else  {
       
        $_SESSION['status3']=true;
    
       header('location: login.php');
    }
}

?>