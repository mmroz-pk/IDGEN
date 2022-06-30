<?php
#ini_set('display_errors', '1');
#ini_set('display_startup_errors', '1');
#error_reporting(E_ALL);

include ("../php/connect.php");

session_start();

$type = $_POST['type'];

$username = $_POST['username'];
$password = hash('SHA512', $_POST['password']);

if ($_POST['type'] === "register"){
    $register = pg_query($connect, "INSERT INTO users (username, password) VALUES ('$username', '$password')") or die ("This user already exists!" . header('Refresh: 2; URL=./index.php'));
    echo "Registered!";
    header('Refresh: 2; URL=./index.php');
}elseif ($_POST['type'] === "login"){
    $login = pg_query($connect, "SELECT * FROM users WHERE username='$username' AND password='$password'") or die ("Error!");

    if ($username !== "Admin") {
        $_SESSION['user'] = 'User';
        echo "Logged in as $username!";
        header('Refresh: 2; URL=../index.php');
    }else {
        $_SESSION['user'] = 'Admin';
        header('location: ./control.php');
    }
}
?>
