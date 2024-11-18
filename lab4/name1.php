<?php
    session_start();

    if(isset($_POST['submit'])){

        $name  =  $_REQUEST['name'];
        

        if($name == null ){
            echo "Null data found!";
        }else if ($name == pew ){
            //echo "Valid User!";
            $_SESSION['flag'] = true;
            header('location: name.php');
        }else{
            echo "Invalid user";
        }
    }else{
        //echo "Invalid request!";
        header('location: name.html');
    }


    //print_r($_GET);
    //echo "Test";
?>