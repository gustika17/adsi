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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="./output.css" />
  <style>
    /* Custom styles for the sidebar menu */
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
  

  </style>
</head>
  <body class="bg-nav">
    
    <header class="">
      <nav
        class="flex items-center justify-between py-6 px-4 container mx-auto"
      >
        <div class="flex items-center">
          <img class="w-24" src="./asset/logo.png" alt="logo" />
          <a class="font-bold max-w-xs" href="#"
            >Make Your Party Unforgettable with the Best Selection!</a
          >
        </div>

        <div class="flex items-center gap-x-10 me-10">
        <p><?php echo "Hi, " . $_SESSION['login']['nama']; ?></p>
          <div class="w-20 h-20 rounded-full">
            <img
              class="w-20 h-20 rounded-full object-cover"
              src="./asset/icons/owner.jpg"
              alt=""
            />
          </div>
          <img 
               class="toggle-btn" id="toggle-btn"
              src="./asset/list 1.svg" alt="" 
              />
        </div>
      </nav>

      <nav class="font-bold text-xl ps-6 bg-primary text-white py-3">
        <div class="container mx-auto flex gap-10">
          <a href="#">Home</a>
          <a href="About.html">About</a>
          <a href="#">Catalogue</a>
        </div>
      </nav>
    </header>
     <!-- Sidebar -->
     <div class="sidebar" id="sidebar">
      <a href="#">Profile</a>
      <a href="Setting.html">Setting</a>
      <a href="pemilik.html">Start Selling</a>
      <a href="logout.php">Log Out</a>
    </div>
    <div class="overlay" id="overlay"></div>
    <section>
      <!-- Slider -->
      <div
        data-hs-carousel='{
    "loadingClasses": "opacity-0",
    "isAutoPlay": true
  }'
        class="relative"
      >
        <div
          class="hs-carousel relative overflow-hidden w-full min-h-[35.5rem] bg-white rounded-lg"
        >
          <div
            class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0"
          >
            <div class="hs-carousel-slide">
              <div
                class="flex justify-center h-full bg-gray-100 p-6 bg-no-repeat bg-cover bg-center dark:bg-items1"
                style="background-image: url(./asset/carousel/items1.jpg)"
              >
                >
              </div>
            </div>
            <div class="hs-carousel-slide">
              <div
                class="flex justify-center h-full bg-gray-200 bg-no-repeat bg-cover bg-bottom bg-fixed p-6 dark:bg-neutral-800"
                style="background-image: url(./asset/carousel/items2.jpg)"
              >
                >
              </div>
            </div>

            <div class="hs-carousel-slide">
              <div
                class="flex justify-center h-full bg-gray-200 bg-no-repeat bg-cover bg-center bg-fixed p-6 dark:bg-neutral-800"
                style="background-image: url(./asset/carousel/items3.jpg)"
              >
                >
              </div>
            </div>

            <div class="hs-carousel-slide">
              <div
                class="flex justify-center h-full bg-no-repeat bg-cover bg-center bg-gray-300 p-6 dark:bg-neutral-700"
                style="background-image: url(./asset/carousel/items4.jpg)"
              ></div>
            </div>
          </div>
        </div>

        <button
          type="button"
          class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10"
        >
          <span class="text-2xl" aria-hidden="true">
            <svg
              class="flex-shrink-0 size-5"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="m15 18-6-6 6-6"></path>
            </svg>
          </span>
          <span class="sr-only">Previous</span>
        </button>
        <button
          type="button"
          class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10"
        >
          <span class="sr-only">Next</span>
          <span class="text-2xl" aria-hidden="true">
            <svg
              class="flex-shrink-0 size-5"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="m9 18 6-6-6-6"></path>
            </svg>
          </span>
        </button>
      </div>
      <!-- End Slider -->

      <div class="mt-10 pb-20 flex justify-center gap-x-10 px-12">
        <div class="w-1/2 bg-primary rounded-3xl px-4 py-16">
          <h1 class="text-white font-bold text-center text-2xl mb-5">
            Sewa Alat Catering
          </h1>
          <img
            class="mx-auto"
            src="./asset/Alat-Catering-Group-uk-image-web-768x511-1-q219nb6syyln18z1sy4kkqhjpdv9vhb9o8bgh6o9lw 1 (1).png"
            alt=""
          />

          <p
            class="text-white text-center mt-10 max-w-[26.75rem] text-xl mx-auto"
          >
            EventGear Alat Catering sebagai pusat penyewaan alat catering
            terbesar dan paling lengkap di wilayah Kecamatan Kemiling, Kota
            Bandar Lampung. Dengan berbagai pilihan peralatan catering
            berkualitas tinggi dan harga yang terjangkau.
          </p>
        </div>
        <div class="w-1/2 bg-primary rounded-3xl px-4 py-16">
          <h1 class="text-white font-bold text-center text-2xl mb-5">
            Dekorasi
          </h1>
          <img
            class="mx-auto"
            src="./asset/Alat-Catering-Group-uk-image-web-768x511-1-q219nb6syyln18z1sy4kkqhjpdv9vhb9o8bgh6o9lw 1 (1).png"
            alt=""
          />

          <p
            class="text-white text-center mt-10 max-w-[26.75rem] text-xl mx-auto"
          >
            EventGear Dekorasi, menjadi penyedia layanan unggulan dengan paket
            dekorasi lengkap, termasuk beragam pernak-pernik klasik yang
            memukau. Dengan pilihan yang melimpah, EventGear siap mempercantik
            setiap acara Anda dengan sentuhan mewah dan berkelas.
          </p>
        </div>
      </div>
    </section>

    <footer class="pb-5">
      <div class="grid grid-cols-3 gap-4 container place-content-center ms-12">
        <div>
          <h1 class="font-bold text-xl mb-3">Kontak EventGear</h1>
          <div class="flex gap-x-5 mb-2">
            <img src="./asset/icons/call.png" alt="" />
            <span class="font-semibold">087899248741</span>
          </div>

          <div class="flex gap-x-5 mb-2">
            <img src="./asset/icons/call.png" alt="" />
            <span class="font-semibold">081368982664 | 082269688481</span>
          </div>

          <div class="flex gap-x-5 mb-2">
            <img src="./asset/icons/whatsapp 2.png" alt="" />
            <span class="font-semibold">0895640121372</span>
          </div>

          <div class="flex gap-x-5 mb-2">
            <img src="./asset/icons/sms.png" alt="" />
            <span class="font-semibold">eventgear.alatpesta@gmail.com</span>
          </div>
        </div>

        <div>
          <h1 class="font-bold text-xl mb-3 text-center">Alamat</h1>
          <span class="font-semibold"
            >Kemiling Permai, Kec. Kemiling, Kota Bandar Lampung, Lampung
            35151</span
          >
        </div>

        <div>
          <h1 class="font-bold text-xl mb-3 text-center">Join With Us</h1>
          <div class="flex justify-center gap-3">
          <a href=" https://www.facebook.com/satriosktiardka.satriosktiardka" target="_blank">
    <img src="./asset/icons/fb.png" alt="fb">
</a>
<a href="https://x.com/unila_base?s=21" target="_blank">
    <img src="./asset/icons/x.png" alt="x">
</a>
            <a href="https://www.instagram.com/gstkdw_?igsh=Znp5NnZzMnI5N282&utm_source=qr" target="_blank">
    <img src="./asset/icons/ig.png" alt="Instagram">
</a>

<a href=" https://youtube.com/@safiraaulia2584?si=a_-ut5eXtf0mVKZf" target="_blank">
    <img src="./asset/icons/yt.png" alt="Yt">
</a>
<a href=" http://wa.me/87899258741" target="_blank">
    <img src="./asset/icons/getcontact.png" alt="wa">
</a>
          </div>
        </div>
      </div>
    </footer>
   

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
