<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventGear Alat Pesta</title>
    <link rel="stylesheet" href="output.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #730000;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #FFF3CD;
            color: rgb(0, 0, 0);
            padding: 10px 20px;
        }
        header img {
            width: 50px;
            vertical-align: middle;
        }
        header h1 {
            margin-right: 40%;
            justify-content: left;
            font-size: 18px;
        }

        header .profile {
            display: flex;
            align-items: center;
        }
        header .profile img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin-left: 10px;
        }
        nav {
            margin-right: 70%;
            display: flex;
            justify-content: center;
            background-color: #730000;
        }
        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
            font-weight: bold;
        }
        nav a:hover {
            color: #730000;
        }
        .content {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            background-color: #FFF3CD;
            padding: 20px;
        }
        .row {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
        }
        .card {
            background-color: #730000;
            margin: 10px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.1);
            text-align: center;
            width: 200px;
        }
        .card img {
            width: 100%;
            border-radius: 8px;
        }
        .card h2 {
            color: white;
            background-color: #730000; 
            padding: 10px;
            border-radius: 8px;
            font-size: 20px;
        }
        footer {
            background-color: #FFF3CD;
            color: black;
            padding: 20px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        footer .contact, footer .address, footer .social {
            margin: 10px;
            flex: 1;
            min-width: 200px;
        }
        footer .social img {
            width: 30px;
            margin: 0 5px;
        }
    </style>
</head>
<body>

    <header>
        <img src="./asset/logo.png" alt="EventGear Logo">
        <h1>Make Your Party Unforgettable with the Best Selection!</h1>
        <div class="profile">
            <span>Hi, Ibu Owner Loli Cafe!</span>
            <img src="./asset/icons/owner.jpg" alt="Profile Picture">
        </div>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="#">About us</a>
        <a href="#">Catalogue</a>
    </nav>

    <section class="content">
        <div class="row">
            <div class="card">
                <img src="./asset/catering.png" alt="Paket Catering">
                <h2>Paket Catering</h2>
            </div>
            <div class="card">
                <img src="./asset/wedding.png" alt="Paket Wedding">
                <h2>Paket Wedding</h2>
            </div>
            <div class="card">
                <img src="./asset/engagement.png" alt="Paket Engagement">
                <h2>Paket Engagement</h2>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <img src="./asset/birthday.png" alt="Paket Birthday">
                <h2>Paket Birthday</h2>
            </div>
            <div class="card">
                <img src="./asset/aqiqah.png" alt="Paket Aqiqah">
                <h2>Paket Aqiqah</h2>
            </div>
            <div class="card">
                <img src="./asset/khitanan.png" alt="Paket Khitanan">
                <h2>Paket Khitanan</h2>
            </div>
        </div>
    </section>
    <?php include "layout/footer.php"; ?>

</body>
</html>
