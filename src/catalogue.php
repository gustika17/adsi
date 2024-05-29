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
<body class="bg-nav">
<?php include "layout/header.php" ?>
    <div class="sidebar" id="sidebar">
      <a href="#">Profile</a>
      <a href="Setting.html">Setting</a>
      <a href="pemilik.php">Start Selling</a>
      <a href="logout.php">Log Out</a>
    </div>
    <div class="overlay" id="overlay"></div>

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
    <style>
      .sidebar {
      position: fixed;
      top: 30px;
      right: -250px; /* Awalnya tersembunyi di sebelah kanan */
      width: 200px;
      background-color: #6F0B0B;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      transition: right 0.3s ease;
      z-index: 1000; /* Pastikan sidebar berada di atas elemen lainnya */
      border-top-left-radius: 50px; /* Radius sudut kanan bagian atas */
      border-bottom-left-radius: 50px; /* Radius sudut kanan bagian bawah */
    }
    .sidebar a:last-child {
      margin-top: 100px; /* Dorong item terakhir ke bawah */
      margin-bottom: 10px; /* Hilangkan margin bawah untuk item terakhir */
    }


    .sidebar.active {
      right: 0; /* Tampilkan sidebar */
    }

    .sidebar a {
      display: block;
      width: 150px;
      height: 50px;
      padding: 15px;
      margin-top: 10px;
      margin-bottom: 0;
      background-color: #F5DEB3;
      color: #6f0b0b;
      text-align: center;
      text-decoration: none;
      border-radius: 20px;
      font-weight: bold;
    }
    .toggle-btn {
      top: 20px;
      right: 20px;
      cursor: pointer;
    }
    .overlay {
      display: none; /* Initially hidden */
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
      z-index: 999; /* Ensure overlay is above other elements but below sidebar */
    }
    .overlay.active {
      display: block; /* Show overlay when active */
    }
    body.body-lock-scroll {
      overflow: hidden; /* Lock scroll when sidebar is active */
    }
      .text-justify {
      text-align: justify;
    }

      .bg-beige-100 {
          background-color:#6F0B0B ;
      }
  </style>

    <script src="./../node_modules/preline/dist/preline.js"></script>
    <script>
      const toggleBtn = document.getElementById('toggle-btn');
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('overlay');
  
      toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('active');
        overlay.classList.toggle('active');
        document.body.classList.toggle('body-lock-scroll');
      });
  
      overlay.addEventListener('click', () => {
        sidebar.classList.remove('active');
        overlay.classList.remove('active');
        document.body.classList.remove('body-lock-scroll');
      });
    </script>

</body>
</html>
