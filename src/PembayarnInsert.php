<?php
  include "Koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $no_telephone = $_POST['no_telephone'];
    $alamat = $_POST['alamat'];
    $paket_sewa = $_POST['paket_sewa'];
    $tanggal_sewa = $_POST['tanggal_sewa'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rentals";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO rentals (name, phone_number, address, package, rental_date) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nama, $no_telephone, $alamat, $paket_sewa, $tanggal_sewa);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
