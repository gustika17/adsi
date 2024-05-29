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
    <title>STORE INFORMATION</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-beige-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="bg-custom-red text-white w-1/4 p-6 flex flex-col items-center">
            <img src="./asset/icons/owner.jpg" alt="" class="w-20 h-20 mb-2 rounded-full object-cover">
            <div class="text-center">
            <p><?php echo $_SESSION['login']['nama']."!"; ?></p>
                <p class="text-lg mt-2">Welcome !</p>
            </div>
            <button class="mt-auto py-2 px-6 w-24 bg-beige-300 text-custom-red font-semibold rounded-full"
            
            >
                
                NEXT</button>
            <button class="mt-2 py-2 px-3 w-24 bg-beige-300 text-custom-red font-semibold rounded-full"
            onclick="window.location.href = 'index.php';"
            >
                
                CANCEL</button>
            
        </div>
        <!-- Main Content -->
        <div class="bg-beige-100 flex-1 p-16">
          <div class=" space-y-4"> 
          <input
            type="text"
            placeholder="STORE NAME"
            class="w-full py-4 bg-custom-red text-white text-xl font-semibold rounded text-left px-4 placeholder-white"
          />
          <input
            type="text"
            placeholder="STORE ADDRESS"
            class="w-full py-4 bg-custom-red text-white text-xl font-semibold rounded text-left px-4 placeholder-white"
          />
          <input
            type="text"
            placeholder="EMAIL"
            class="w-full py-4 bg-custom-red text-white text-xl font-semibold rounded text-left px-4 placeholder-white"
          />
          <input
            type="text"
            placeholder="PHONE NUMBER"
            class="w-full py-4 bg-custom-red text-white text-xl font-semibold rounded text-left px-4 placeholder-white"
          />
        </div>

        </div>
    </div>

    <style>
        .bg-beige-100 {
            background-color: #f5e9d2;
        }

        .bg-beige-300 {
            background-color: #f4d8a4;
        }

        .bg-custom-red {
            background-color: #6F0B0B;
        }

        .text-custom-red {
            color: #6F0B0B;
        }
    </style>
</body>

</html>
