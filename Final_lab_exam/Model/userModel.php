<?php

function getConnection() {
    $con = mysqli_connect('127.0.0.1', 'root', '', 'online_shop');
    return $con;
}

function login($username, $password) {
    $con = getConnection();
    $sql = "SELECT * FROM employee WHERE user_name='{$username}' AND password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        return true;
    } else {
        return false;
    }
}

function addUser($name, $phone, $username, $password) {
    $con = getConnection();
    $sql = "INSERT INTO employee VALUES('', '{$name}', '{$phone}', '{$username}', '{$password}')"; // Corrected table name

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllUser() {
    $con = getConnection();
    $sql = "SELECT * FROM employee";
    $result = mysqli_query($con, $sql);
    $employees= [];

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $employees[] = $row; // Add each row to the $employees array
        }
        return $employees;
    }
}


function updateUser($user) {
    $con = getConnection();
    $sql = "UPDATE employee 
            SET name = '{$user['name']}', 
                phone = '{$user['phone']}', 
                username = '{$user['username']}', 
                password = '{$user['password']}' 
            WHERE id = '{$user['id']}'";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteUser($id) {
    $con = getConnection();
    $sql = "DELETE FROM employee WHERE id='{$id}'"; // Corrected table name

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

?>



