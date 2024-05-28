<?php

include("Koneksi.php");
session_start();


if(isset($_SESSION['login'])) {
    header("Location: index.php");
}

if(isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = hash("sha256", $_POST['password']);

    $sql = "SELECT * FROM pengguna WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['login'] = $row;
        header("Location: index.php");
    } else {
        header("Location: logins.php?alert=wrong");
        exit();
    }
}


?>