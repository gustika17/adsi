<?php
include("Koneksi.php");
session_start();

// Pastikan pengguna sudah login
if(!isset($_SESSION['login'])) {
    header("Location: logins.php");
    exit();
}

$user = $_SESSION['login'];

// Menyimpan perubahan profil
if(isset($_POST['submit'])) {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $userId = isset($user['id']) ? $user['id'] : 0; // Pastikan kolom 'id' ada di tabel 'pengguna'

    // Update data pengguna di database
    if ($userId != 0) {
        $stmt = $conn->prepare("UPDATE pengguna SET nama = ?, email = ?, no_telephone = ?, alamat = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $name, $email, $phone, $address, $userId);

        if($stmt->execute()) {
            // Update data dalam session
            $_SESSION['login']['nama'] = $name;
            $_SESSION['login']['email'] = $email;
            $_SESSION['login']['no_telpone'] = $phone;
            $_SESSION['login']['alamat'] = $address;
            header("Location: PerbaruiProfil.php?success=1");
        } else {
            header("Location: PerbaruiProfil.php?error=1");
        }
    } else {
        header("Location: PerbaruiProfil.php?error=1");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="./output.css" />

    <style>
        body {
            background-color: #f7e3b5;
            font-family: Arial, sans-serif;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .profile-section {
           
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            
        }

        .header {
            background-color: #b8a6a5;
            border-radius: 10px 10px 10px 10px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            color: white;
            margin-bottom: 5px;
        }

        input {
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .buttons {
            display: flex;
            margin-top: 20px;
        }

        .button {
            background-color: #7d2b27;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .button.save:hover {
            background-color: #6b2420;
        }

        .button.cancel:hover {
            background-color: #6b2420;
        }

        .image-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-left: 20px; /* Adjusted to slightly move to the right */
        }

        .image-section img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid white; /* Ring around the photo */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional shadow for better visibility */
        }

        .button.save {
    margin-right: 10px; /* Tambahkan jarak ke kanan */
}

.button.cancel {
    margin-left: 10px; /* Tambahkan jarak ke kiri */
}

    </style>
</head>
<body>
    <section>
        <div class="mt-10 pb-20 flex justify-center gap-x-10 px-12">
    <div class=" bg-primary rounded-3xl px-4">
        <div class="profile-section">
            <div class="header">
                <h1>PROFILE</h1>
            </div>
            <form>
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" value="">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="">

                <label for="phone">No Telephone</label>
                <input type="text" id="phone" name="phone" value="">

                <label for="address">Address</label>
                <input type="text" id="address" name="address" value="">
            </form>
        </div>
    </div>
    <div class="mt-10 mb-10 px-4 py-16 flex flex-col items-center">
                <div class="profile-picture">
                    <img src="./asset/icons/owner.jpg" alt="Profile Picture">
                </div>
        
        </section>
       
    
    <?php include "layout/footer.php"; ?>
    
</body>
</html>
