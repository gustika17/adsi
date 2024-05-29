
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./output.css" />
  </head>

  <body class="bg-nav">
  <?php include "layout/header.php" ?>
    <div class="sidebar" id="sidebar">
      <a href="#">Profile</a>
      <a href="Setting.html">Setting</a>
      <a href="pemilik.php">Start Selling</a>
      <a href="logout.php">Log Out</a>
    </div>

    <section class="w-96 mx-auto my-10 py-6">
    <div class="bg-primary rounded-full py-6 text-white text-center mx-0">
      <h1 class="text-5xl font-bold ">About Us</h1>
    </div>
  </section>

  <section class="mt-10 pb-20 justify-center px-12">
    <div class="bg-primary rounded-lg p-6 text-white text-center max-w-5xl mx-auto">
      <p class="text-white py-6 px-6 my-10 text-xl mx-auto">EventGear Berlokasi di Jl. Marga, Beringin Raya, Kemiling, Bandar Lampung,telah beroperasi sejak tahun 2015. 
        EventGear adalah solusi penyewaan alat-alat pesta yang efisien dan praktis. 
        Dengan layanan kami, pelanggan dapat dengan mudah menemukan perlengkapan pesta yang mereka butuhkan, 
        mulai dari pesta pernikahan hingga ulang tahun dan acara pesta lainnya.EventGear menyediakan akses cepat dan efisien ke katalog lengkap alat-alat pesta yang tersedia untuk disewa, 
        termasuk meja, kursi, dekorasi, dan perlengkapan lainnya. Informasi detail tentang setiap peralatan, seperti gambar, deskripsi, dan harga sewa, 
        disediakan untuk membantu pelanggan membuat keputusan yang tepat sesuai dengan kebutuhan dan anggaran mereka. 
        Dengan EventGear, penyewaan alat pesta menjadi lebih praktis dan menyenangkan.</p>
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
