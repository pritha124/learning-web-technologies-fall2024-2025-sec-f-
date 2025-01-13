<?php
session_start();
if(isset($_COOKIE['flag'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="../Static/css/welcome.css">
</head>
<body>
    <div class="container">
        <h1>Welcome Home! <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
        <a href="userlist.php">View All Users</a>
        <a href="search.php">SEARCH HERE</a>
        <a href="../controller/logout.php">Logout</a>
    </div>
</body>
</html>
<?php
} else {
    header('Location: login.html');
    exit();
}
?>
