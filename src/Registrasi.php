<?php
include("Koneksi.php");


if(isset($_POST["submit"])) {
    $nama = $_POST['nama'];
    $no_telephone = $_POST['no_telephone'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $password = hash('sha256', $_POST['password']); 


    $sql = "SELECT * FROM pengguna WHERE email ='$email'";
    $result = mysqli_query($conn, $sql);

    if(!$result->num_rows > 0) {
        $sql = "INSERT INTO `pengguna` (`id`, `nama`, `no_telephone`, `email`, `alamat`, `password`) VALUES (NULL, '$nama', '$no_telephone', '$email', '$alamat', '$password');";
        $result = mysqli_query($conn, $sql);

        if($result) {
            echo "<script>alert('registrasi berhasil');</script>";
            header("Location: Berhasil%20registrasi.html");
            exit();
        } else {
            echo "<script>alert('registrasi gagal');</script>";
            header("Location: Registrasi.html");
            exit();
        }
    } else {
        echo "<script>alert('email sudah ada');</script>";
        header("Location: Registrasi.html");
        exit();

    }
    
}
?>