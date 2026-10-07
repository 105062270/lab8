<?php
session_start();

$correct_username = "DuyKiet";
$correct_password = "1234567"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION['user'] = $username;
        
        header("Location: welcome.php");
        exit();
    } else {
        header("Location: login.php?error=1");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>