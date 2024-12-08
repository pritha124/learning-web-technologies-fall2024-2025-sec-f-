<?php
session_start();
if(!isset($_SESSION['status1']))
{
    header('location:welcome.php');
}
else if(!isset($_SESSION['status3']))
{
    header('location:register.php');
}
?>
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <form action="logincheek.php" method="post">
            <table align="center">
                <h1 align="center">Login Page</h1>
                <hr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="uname" id=""></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="upassword" id=""></td>
                </tr>
                <tr>
                    <td ><input type="submit" value="submit" name="submit"></td>
                    
                </tr>
                
            </table>
        </form>
    </body>
</html>