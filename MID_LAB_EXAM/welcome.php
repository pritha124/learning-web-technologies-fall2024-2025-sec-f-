<?php
session_start();
?>
<html>
    <head>
        <title>Welcome Page</title>
    </head>
    <body>
    <form action="welcomecheek.php" method="post">
        <table align="center">
            <tr>
                <h1 align="center">Welcome Page</h1>
                <hr>
            </tr>
            <tr>
                <td><input type="submit" value="Login" name="login"></td>
                <td><input type="submit" value="Register" name="register"></td>
            </tr>
            
        </table>
    </form>
    </body>
</html>