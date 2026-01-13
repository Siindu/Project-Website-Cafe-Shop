<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- PRIMARY META TAGS -->
  <title>The Tropical Ants</title>
  <meta name="title" content="The Tropical Ants">
  <meta name="description" content="Cafe Shop di Bali">

  <!-- FAVICON -->
  <link rel="shortcut icon" href="Media/Favicon.png" type="image/svg+xml">

  <!-- FEATHER ICONS -->
   <script src="https://unpkg.com/feather-icons"></script>

  <!-- GOOGLE FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
  
  <!-- CSS -->
  <link rel="stylesheet" href="CSS/style.css">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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


    <!-- LOKASI & RESERVASI -->

    <section class="section lokasi text-center">
      <div class="container">

        <div class="map-wrapper">
          <h2 class="headline-1 section-title text-center">Lokasi Kami</h2>

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.8569403823594!2d115.250354!3d-8.513268000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23d10f089943d%3A0xc3e1ca2d3c5318fc!2sThe%20Tropical%20Ants!5e0!3m2!1sid!2sid!4v1749020691648!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        </div>

        <img src="Media/shape-1.png" width="246" height="412" loading="lazy" alt="shape"
        class="shape shape-1">
        <img src="Media/shape-2.png" width="343" height="345" loading="lazy" alt="shape"
        class="shape shape-6">

      </div>
      </section>

    <section class="reservation" id="reservation">
      <div class="container">

        <div class="form-overlay form reservation-form">

          <form action="reservasi-data.php" method="POST" class="form-left">

            <h2 class="headline-1 text-center">Reservasi Online</h2>

            <p class="form-text text-center">
              Permintaan pemesanan <a href="tel:+628123456789" class="link">+62 812 345 6789</a>
              atau isi formulir pemesanan
            </p>

            <div class="input-wrapper">
              <input type="text" name="nama_pelanggan" placeholder="Nama Anda" autocomplete="off" class="input-field" id="name" required>
              <input type="tel" name="no_hp" placeholder="Nomor Telepon" autocomplete="off" class="input-field" id="phone" required>
            </div>

            <div class="input-wrapper">
              <div class="icon-wrapper">
                <ion-icon name="table-outline" aria-hidden="true"></ion-icon>
                <select name="nomor_meja" class="input-field" id="table" required>
                  <option value="1">Table 1</option>
                  <option value="2">Table 2</option>
                  <option value="3">Table 3</option>
                  <option value="4">Table 4</option>
                  <option value="5">Table 5</option>
                  <option value="6">Table 6</option>
                  <option value="7">Table 7</option>
                  <option value="8">Table 8</option>
                  <option value="9">Table 9</option>
                  <option value="10">Table 10</option>
                  <option value="11">Table 11</option>
                  <option value="12">Table 12</option>
                  <option value="13">Table 13</option>
                  <option value="14">Table 14</option>
                  <option value="15">Table 15</option>
                  <option value="16">Table 16</option>
                </select>
                <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
              </div>

              <div class="icon-wrapper">
                <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>
                <input type="date" name="tanggal_reservasi" class="input-field" id="reservation-date" required>
                <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
              </div>

              <div class="icon-wrapper">
                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                <select name="jam_reservasi" class="input-field" id="time" required>
                  <option value="">Pilih Meja & Tanggal dahulu</option>
                </select>
                <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
              </div>
            </div>

            <textarea name="pesan" placeholder="Pesan" autocomplete="off" class="input-field" id="message"></textarea>

            <button type="submit" name="submit_reservasi" class="btn btn-slide" id="pesanBtn">
              <span class="text text-1">Pesan Meja</span>
            </button>

          </form>

          <div class="form-right text-center" style="background-image: url('./Media/form-pattern.png')">
            <h2 class="headline-1 text-center">Hubungi Kami</h2>

            <p class="contact-label">Permintaan Pemesanan</p>
            <a href="tel:+628123456789" class="body-1 contact-number">+62 812 345 6789</a>

            <p class="contact-label">Lokasi</p>
            <address class="body-3">
              The Tropical Ants,<br>Jl. Katik Lantang Jl. Campuhan III, Singakerta,<br>Kecamatan Ubud, Kabupaten Gianyar, Bali
            </address>

            <p class="contact-label">Hari Biasa</p>
            <p class="body-3">
              Senin - Jumat <br>
              11.00 am - 10.30 pm
            </p>

            <p class="contact-label">Akhir Pekan</p>
            <p class="body-3">
              Sabtu & Minggu <br>
              9.00 am - 11.59 pm
            </p>
          </div>
        </div>

      </div>
    </section>
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


  <!-- JAVASCRIPT -->
  <script src="JS/script.js"></script>

  <!-- ION ICON LINK -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  
</body>
</html>