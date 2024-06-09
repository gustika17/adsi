<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_management";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["name"]) ? $conn->real_escape_string($_POST["name"]) : '';
    $email = isset($_POST["email"]) ? $conn->real_escape_string($_POST["email"]) : '';
    $phone_number = isset($_POST["phone_number"]) ? $conn->real_escape_string($_POST["phone_number"]) : '';
    $address = isset($_POST["address"]) ? $conn->real_escape_string($_POST["address"]) : '';


    $sql_check = "SELECT * FROM user_profile WHERE email = '$email'";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        
        $sql = "UPDATE user_profile 
                SET name = '$name', phone_number = '$phone_number', address = '$address' 
                WHERE email = '$email'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Data berhasil diperbarui');</script>";
            echo "<script>window.location.href = 'index.php?email=$email';</script>";
        } else {
            echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
            echo "<script>window.location.href = 'index.php?email=$email';</script>";
        }
    } else {
        
        $sql = "INSERT INTO user_profile (name, email, phone_number, address)
                VALUES ('$name', '$email', '$phone_number', '$address')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Data berhasil disimpan');</script>";
            echo "<script>window.location.href = 'index.php?email=$email';</script>";
        } else {
            echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
            echo "<script>window.location.href = 'index.php?email=$email';</script>";
            
        }

    }
}

$conn->close();
?>
