<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: logins.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventGear Party Equipment</title>
    <link rel="stylesheet" href="output.css">
    <style>
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
            padding: 10px;
            border-radius: 8px;
            font-size: 20px;
        }

        .payment-info {
            background-color: #6F0B0B;
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin: 20px;
        }
        .payment-info h1 {
            font-size: 24px;
            font-weight: bold;
        }
        .payment-info p {
            font-size: 18px;
        }
        .payment-info img {
            width: 150px;
            display: block;
            margin: 20px auto;
        }
        .payment-info .bank-details {
            font-size: 20px;
            margin: 10px 0;
        }
        .payment-info .instructions {
            margin: 20px 0;
        }
        .payment-info .upload-section {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }
        .payment-info .upload-section button {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            background-color: #000;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-nav">
    <?php include "layout/header.php" ?>
    <div class="sidebar" id="sidebar">
      <a href="#">Profile</a>
      <a href="Setting.php">Setting</a>
      <a href="pemilik.php">Start Selling</a>
      <a href="logout.php">Log Out</a>
    </div>
    <div class="overlay" id="overlay"></div>

    <div class="content">
        <div class="payment-info">
            <h1>MAKE PAYMENT IMMEDIATELY!</h1>
            <p>Your order will be processed after you make the payment.</p>
            <img src="asset/icons/BNI.webp" alt="BNI Logo">
            <div class="bank-details">
                <p>Account Number: 1497652434</p>
                <p>Account Holder: Safira Aulia</p>
            </div>
            <div class="instructions">
                <p>Send your proof of payment to the place we have provided below!</p>
            </div>
            <div class="upload-section">
                <input type="file" id="proof_of_payment" style="display:none;">
                <button onclick="document.getElementById('proof_of_payment').click()">Add image</button>
                <button>Send</button>
                <button>Cancel</button>
            </div>
        </div>
    </div>
    
    <?php include "layout/footer.php"; ?>
    <style>
      .sidebar {
      position: fixed;
      top: 30px;
      right: -250px; /* Initially hidden on the right */
      width: 200px;
      background-color: #6F0B0B;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      transition: right 0.3s ease;
      z-index: 1000; /* Ensure sidebar is above other elements */
      border-top-left-radius: 50px; /* Top-right corner radius */
      border-bottom-left-radius: 50px; /* Bottom-right corner radius */
    }
    .sidebar a:last-child {
      margin-top: 100px; /* Push the last item to the bottom */
      margin-bottom: 10px; /* Remove bottom margin for the last item */
    }

    .sidebar.active {
      right: 0; /* Show sidebar */
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
      display: none; 
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