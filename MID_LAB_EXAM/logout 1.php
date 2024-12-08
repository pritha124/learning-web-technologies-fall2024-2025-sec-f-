<?php
session_start();
unset($_SESSION['status4']);
header('location: login.php');
?>