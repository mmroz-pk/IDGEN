<?php
session_start();

if ($_SESSION['user'] !== "Admin"){
    echo "You do not belong here!";
    header('Refresh: 2; URL=../index.php');
}else {
    echo "Welcome Admin!";
}
?>
