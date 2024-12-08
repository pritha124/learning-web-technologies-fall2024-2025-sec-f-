<?php
 session_start();
if(!isset($_SESSION['status2']))
{
    header('location welcome.php');
}
?>

<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <form action="registercheek.php" method="post">
            <table align="center">
                 <h1 align='center'>Registration Page</h1>
                 <hr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" id=""></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" id=""></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" id=""></td>
                </tr>
                <tr>
                    <td>Confirm Password:</td>
                    <td><input type="password" name="cpassword" id=""></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="gender" id="">Male
                        <input type="radio" name="gender" id="">Female
                        <input type="radio" name="gender" id="">Other
                    </td>
                </tr>
                <tr>
                    <td>Date Of Birth:</td>
                    <td><input type="date" name="dob" id=""></td>
                </tr>
                <tr>
                    <td>Blood Group:</td>
                    <td>
                        <select name="blood" id="" name="blood">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Degree:</td>
                    <td>
                        <input type="checkbox" name="" id="" value="SSC">SSC
                        <input type="checkbox" name="" id="">HSC
                        <input type="checkbox" name="" id="">BSC
                        <input type="checkbox" name="" id="">MSC


                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Submit" name="submit">
                    <input type="submit" value="Reset" name="reset>
                </td>
                </tr>
            </table>
        </form>
    </body>
</html>