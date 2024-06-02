<header class="">
      <nav
        class="flex items-center justify-between py-6 px-4 container mx-auto"
      >
        
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
          <a href="index.php">Home</a>
          <a href="About.php">About</a>
          <a href="catalogue.php">Catalogue</a>
        </div>
      </nav>
    </header>