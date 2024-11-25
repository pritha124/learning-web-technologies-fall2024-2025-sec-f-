<?php
    session_start();
 
    if(isset($_POST['submit'])){
        $formData = [
            'username' => htmlspecialchars($_POST['username']),
            'password'=> htmlspecialchars($_POST['password']),
            'email' => htmlspecialchars($_POST['email']),
            'date'=> date($_POST['date']),
           
        ];
 
        $username  =  trim($_REQUEST['username']);
        $password  =  trim($_REQUEST['password']);
 
        if($username == null || empty($password) ){
            echo "Null data found!";
        }
        else if ($username == $formData['username'] && $password == $formData['password']){
            //echo "Valid User!";
            $_SESSION['flag'] = true;
            //$_SESSION['username'] = $username;
            //$_SESSION['password'] = $Password;
            header('location: home.php');
        }
        else{
            echo "Invalid user";
        }
    }else{
        //echo "Invalid request!";
        header('location: login.html');
    }
 
?>