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
    <title>Settings Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
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

        .modal {
            display: none;
        }

        .modal.active {
            display: flex;
        }

        .bg-modal {
            background-color: #FEEEC5;
        }

        .bg-back-button {
            background-color: #6F0B0B;
        }

        .popup {
            background-color: #6F0B0B;
            color: white;
            padding: 20px;
            border-radius: 15px;
        }

        .popup button {
            background-color: #FEEEC5;
            color: #6F0B0B;
            padding: 10px 20px;
            border-radius: 10px;
            font-weight: bold;
        }
    </style>
</head>

<body class="bg-beige-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="bg-custom-red text-white w-1/4 p-6 flex flex-col items-center">
            <img src="./asset/icons/owner.jpg" alt="" class="w-20 h-20 rounded-full object-cover">
            <div class="text-center">
                <p class="font-light"><?php echo $_SESSION['login']['nama'] . " !"; ?></p>
                <p class="text-lg mt-2">Welcome !</p>
            </div>
            <button class="mt-auto py-2 px-6 bg-beige-300 text-custom-red font-semibold rounded-full" onclick="window.location.href = 'index.php';">
                HOME
            </button>
        </div>
        <!-- Main Content -->
        <div class="bg-beige-100 flex-1 p-16">
            <h1 class="text-4xl font-bold text-custom-red mb-8">SETTING</h1>
            <div class="space-y-4">
                <button class="w-full py-4 bg-custom-red text-white text-xl font-semibold rounded text-left px-4" onclick="toggleModal('languageModal')">LANGUAGE</button>
                <button class="w-full py-4 bg-custom-red text-white text-xl font-semibold rounded text-left px-4" onclick="toggleModal('priceModal')">PRICE DISPLAY</button>
                <button class="w-full py-4 bg-custom-red text-white text-xl font-semibold rounded text-left px-4">NOTIFICATIONS</button>
                <!-- Jarak antar tombol -->
                <div class="h-8"></div>
                <button class="w-full py-4 bg-custom-red text-white text-xl font-semibold rounded text-left px-4">CHANGE NAME</button>
                <button class="w-full py-4 bg-custom-red text-white text-xl font-semibold rounded text-left px-4">CHANGE PASSWORD</button>
            </div>
        </div>
    </div>

    <!-- Language Modal -->
    <div id="languageModal" class="modal fixed inset-0 bg-black bg-opacity-50 justify-center items-center">
        <div class="bg-modal rounded-lg p-6 w-1/3">
            <h2 class="text-2xl font-bold mb-4">LANGUAGE</h2>
            <div class="flex flex-col space-y-4">
                <button class="flex items-center space-x-4 py-2 px-4 bg-custom-red text-white rounded">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="Indonesian Flag" class="w-6 h-4">
                    <span>INDONESIA</span>
                </button>
                <button class="flex items-center space-x-4 py-2 px-4 bg-custom-red text-white rounded">
                    <img src="https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg" alt="English Flag" class="w-6 h-4">
                    <span>ENGLISH</span>
                </button>
                <button class="py-2 px-4 bg-back-button text-white font-semibold rounded" onclick="toggleModal('languageModal')">BACK</button>
            </div>
        </div>
    </div>

    <!-- Price Display Modal -->
    <div id="priceModal" class="modal fixed inset-0 bg-black bg-opacity-50 justify-center items-center">
        <div class="popup rounded-lg p-6 w-1/3">
            <h2 class="text-2xl font-bold mb-4">PRICE DISPLAY</h2>
            <div class="flex flex-col space-y-4">
                <button class="flex items-center space-x-4 py-2 px-4 bg-modal text-custom-red rounded">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="Indonesian Flag" class="w-6 h-4">
                    <span>Rp | IDR</span>
                </button>
                <button class="flex items-center space-x-4 py-2 px-4 bg-modal text-custom-red rounded">
                    <img src="https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg" alt="English Flag" class="w-6 h-4">
                    <span>$ | DOLLAR</span>
                </button>
                <button class="py-2 px-4 bg-modal text-custom-red font-semibold rounded" onclick="toggleModal('priceModal')">BACK</button>
            </div>
        </div>
    </div>

    <script>
        function toggleModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.toggle('active');
        }
    </script>
</body>

</html>
