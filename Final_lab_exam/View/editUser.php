<?php
session_start();
require_once('userModel.php'); // Include the file with the getConnection() function

if (isset($_COOKIE['flag'])) {
    // Check if an ID is provided in the URL
    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];

        // Fetch user data from the database based on the ID
        $con = getConnection();
        $sql = "SELECT * FROM employee WHERE id = '{$id}'";
        $result = mysqli_query($con, $sql);

        if ($result && mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
        } else {
            echo "User not found!";
            exit;
        }
    } else {
        echo "No user ID provided!";
        exit;
    }

    // Handle the form submission to update user data
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        // Update the user data in the database
        $sql = "UPDATE employee SET user_name = '{$username}', password = '{$password}', email = '{$email}' WHERE id = '{$id}'";
        if (mysqli_query($con, $sql)) {
            echo "User updated successfully!";
            header("Location: user_list.php"); // Redirect to the user list page
            exit;
        } else {
            echo "Failed to update user!";
        }
    }
    ?>

    <html lang="en">
    <head>
        <title>Edit User</title>
    </head>
    <body>
    <h2>Edit User</h2>
    <form method="post" action="">
        Username: <input type="text" name="username" value="<?= $user['user_name'] ?>" required /> <br>
        Password: <input type="password" name="password" value="<?= $user['password'] ?>" required /> <br>
        Email: <input type="email" name="email" value="<?= $user['email'] ?>" required /> <br>
        <input type="submit" name="submit" value="Update" />
    </form>
    </body>
    </html>

    <?php
} else {
    header('location: login.html');
}
?>
