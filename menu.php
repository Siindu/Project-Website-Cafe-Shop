<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
     <!-- ICON FORWARD -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
    <!-- LINK SWIPER -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

  <!-- PRIMARY META TAGS -->
  <title>The Tropical Ants</title>
  <meta name="title" content="The Tropical Ants">
  <meta name="description" content="Cafe Shop di Bali">

  <!-- FAVICON -->
  <link rel="shortcut icon" href="Media/Favicon.png" type="image/svg+xml">

  <!-- GOOGLE FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
  
  <!-- CSS -->
  <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

    <!-- HEADER -->

  <header class="header" data-header>
    <div class="container">
      <a href="index.php" class="logo logo-header">
        <img src="Media/Favicon.png" width="69" alt="The Tropical Ants logo">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="close-menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#top" class="logo">
          <img src="Media/Favicon.png" width="110" alt="The Tropical Ants logo">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="index.php" class="navbar-link">
              <span class="span">Home</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="menu.php" class="navbar-link">
              <span class="span">Menu</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="galeri.php" class="navbar-link">
              <span class="span">Galeri</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="promo-event.php" class="navbar-link">
              <span class="span">Promo & Event</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="kontak-lokasi.php" class="navbar-link">
              <span class="span">Kontak & Lokasi</span>
            </a>
          </li>

        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">Kunjungi</p>

          <address class="body-3">
            The Tropical Ants,<br>Jl. Katik Lantang Jl. Campuhan III, Singakerta,<br>Kecamatan Ubud, Kabupaten Gianyar, Bali
          </address>

          <p class="body-3 navbar-text">Buka : 10.00 am - 22.00 pm</p>

          <a href="mailto:thertopicalants.com" class="body-3 sidebar-link">tropicalants@gmail.com</a>

        </div>

      </nav>

      <a href="kontak-lokasi.php#reservation" class="btn btn-slide">
        <span class="text text-1">Pesan Meja</span>
      </a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>


  <main class="main" id="top">
    <article>

      <!-- MENU -->

      <section class="section menu" aria-label="menu" id="menu">
        <div class="container">

          <h2 class="headline-1 section-title text-center">Menu</h2>

          <div class="container swiper">
            <div class="card-wrapper">

              <ul class="card-list swiper-wrapper">

                <li class="swiper-slide">
                  <a class="card-link">
                    <img src="Media/MenuPage1.jpg" alt="Card Image" 
                    class="card-image">
                    <button class="material-symbols-rounded"></button>
                  </a>
                </li>

                <li class="swiper-slide">
                  <a class="card-link">
                    <img src="Media/MenuPage2.jpg" alt="Card Image" 
                    class="card-image">
                    <button class="material-symbols-rounded"></button>
                  </a>
                </li>

                <li class="swiper-slide">
                  <a class="card-link">
                    <img src="Media/MenuPage3.jpg" alt="Card Image" 
                    class="card-image">
                    <button class="material-symbols-rounded"></button>
                  </a>
                </li>

                <li class="swiper-slide">
                  <a class="card-link">
                    <img src="Media/MenuPage4.jpg" alt="Card Image" 
                    class="card-image">
                    <button class="material-symbols-rounded"></button>
                  </a>
                </li> 
                <li class="swiper-slide">
                  <a class="card-link">
                    <img src="Media/MenuPage5.jpg" alt="Card Image" 
                    class="card-image">
                    <button class="material-symbols-rounded"></button>
                  </a>
                </li> 
                <li class="swiper-slide">
                  <a class="card-link">
                    <img src="Media/MenuPage6.jpg" alt="Card Image" 
                    class="card-image">
                    <button class="material-symbols-rounded"></button>
                  </a>
                </li>

                <li class="swiper-slide">
                  <a class="card-link">
                    <img src="Media/MenuPage7.jpg" alt="Card Image" 
                    class="card-image">
                    <button class="material-symbols-rounded"></button>
                  </a>
                </li> 
                <li class="swiper-slide">
                  <a class="card-link">
                    <img src="Media/MenuPage8.jpg" alt="Card Image" 
                    class="card-image">
                    <button class="material-symbols-rounded"></button>
                  </a>
                </li>
              </ul>
              
              <div class="swiper-pagination"></div>
              <div class="swiper-slide-button swiper-button-prev"></div>
              <div class="swiper-slide-button swiper-button-next"></div>

            </div>            
          </div>

          <div class="container text-center">

            <div class="grid-list menu filter-button">
              <ul class="ul-grid-list">
                <li>
                  <button class="section-filter active label-2 grid-link" data-filter="Semua">Semua</button>
                </li>
                <li>
                  <button class="section-filter label-2 grid-link" data-filter="Makanan">Makanan</button>
                </li>
                <li>
                  <button class="section-filter label-2 grid-link" data-filter="Spesial">Spesial</button>
                </li>
                <li>
                  <button class="section-filter label-2 grid-link" data-filter="Black-Coffee">Black Coffee</button>
                </li>
              </ul>
              <ul class="ul-grid-list list-2">
                <li>
                  <button class="section-filter label-2 grid-link" data-filter="White-Coffee">White Coffee</button>
                </li>
                <li>
                  <button class="section-filter label-2 grid-link" data-filter="Coffee-Flavour">Coffee Flavour</button>
                </li>
                <li>
                  <button class="section-filter label-2 grid-link" data-filter="Milk-Based">Milk Based</button>
                </li>
                <li>
                  <button class="section-filter label-2 grid-link" data-filter="Lainnya">Lainnya</button>
                </li>
              </ul>
            </div>

          </div>

          <p class="section-subtitle text-center label-2">Daftar</p>

          <ul class="grid-list filterable-cards">
            <div id="menuPopup" class="popup-modal hidden">
              <div class="popup-content">
                <span class="close-btn" id="closeMenuPopup">&times;</span>
                <img id="popupImage" src="" alt="Menu Image" class="popup-img">
                <h3 id="popupTitle" class="popup-title"></h3>
                <p id="popupDesc" class="popup-desc"></p>
              </div>
            </div>

            <?php
            $ambil = mysqli_query($conn, "SELECT * FROM menu");
            while($pecah = mysqli_fetch_assoc($ambil)) {
            ?>
              <li class="all <?php echo $pecah['kategori']; ?>">
                <div class="menu-card hover:card card <?php echo $pecah['kategori']; ?>" data-name="<?php echo $pecah['kategori']; ?>">

                  <figure class="card-banner img-holder" style="--width: 69; --height: 69;">
                    <img src="Media/<?php echo $pecah['gambar']; ?>" width="69" height="69" loading="lazy" alt="Menu" class="img-cover">
                  </figure>

                  <div>
                    <div class="title-wrapper">
                      <h3 class="title-2">
                        <a class="card-title"><?php echo $pecah['nama_menu']; ?></a>
                      </h3>
                      
                      <span class="span body-3">IDR.<?php echo number_format($pecah['harga'] / 1000); ?>K</span>
                    </div>
                    
                    <p class="card-text label-1">
                      <?php echo isset($pecah['deskripsi']) ? $pecah['deskripsi'] : "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores fugiat esse minima!"; ?>
                    </p>
                  </div>

                </div>
              </li>
            <?php } ?>

          </ul>

          <p class="menu-text text-center">
              Sabtu & Minggu<br>
              <span class="span">9:00 am</span> -
              <span class="span">11:59 pm</span>
          </p>

          <img src="Media/shape-1.png" width="246" height="412" loading="lazy" alt="shape"
            class="shape shape-1">
          <img src="Media/shape-2.png" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-2">

          <img src="Media/shape-1.png" width="246" height="412" loading="lazy" alt="shape"
            class="shape shape-3">
          <img src="Media/shape-2.png" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-4">

          <img src="Media/shape-1.png" width="246" height="412" loading="lazy" alt="shape"
            class="shape shape-5">
          <img src="Media/shape-2.png" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-6">

        </div>
      </section>

    </article>
  </main>


    <!-- FOOTER -->

  <footer class="section section-footer text-center">
    <div class="container">

      <div class="grid-list footer">

        <ul class="ul-grid-list">

          <li>
            <a href="index.php" class="label-2 grid-link">Home</a>
          </li>
          <li>
            <a href="menu.php" class="label-2 grid-link">Menu</a>
          </li>
          <li>
            <a href="kontak-lokasi.php" class="label-2 grid-link">Kontak</a>
          </li>
          <li>
            <a href="https://www.facebook.com/" class="label-2 grid-link">Facebook</a>
          </li>

        </ul>

        <ul class="ul-grid-list list-2">

          <li>
            <a href="https://www.instagram.com/tropicalants/" class="label-2 grid-link">Instagram</a>
          </li>
          <li>
            <a href="https://x.com/" class="label-2 grid-link">X</a>
          </li>
          <li>
            <a href="https://youtube.com/" class="label-2 grid-link">Youtube</a>
          </li>
          <li>
            <a href="kontak-lokasi.php" class="label-2 grid-link">GoogleMap</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">
        <p class="copyright">
          &copy; 2025 The Tropical Ants. All Rights Reserved | Dibuat oleh
          <a href="https://github.com/Siindu/Project-Website-Cafe-Shop" target="blank" class="link">kelompokPaguyubanPasek</a>
        </p>
      </div>

    </div>
  </footer>


  <!-- SWIPER JAVASCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- JAVASCRIPT -->
  <script src="JS/script.js"></script>

  <!-- ION ICON LINK -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>
</html>