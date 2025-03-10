<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta name="format-detection" content="telephone=no">
  <meta name="theme-color" content="#ffffff">
  <title>Islamic Hub – Sumber Daya Islami Digital</title>
  <meta name="description" content="Islamic Hub – Sumber Daya Islami Digital">
  <meta name="keywords" content="Al-Quran, Hadits, Jadwal Sholat, Doa, Kalender Hijriyah, Arah Kiblat, Artikel Islami">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/img/favicon/32.png" sizes="32x32">
  <link rel="apple-touch-icon" href="assets/img/favicon/favicon192.png">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/remixicon.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/normalize.css">

  <!-- Font Islami -->
  <link href="https://fonts.googleapis.com/css2?family=Scheherazade:wght@400;700&display=swap" rel="stylesheet">

  <!-- Manifest -->
  <link rel="manifest" href="_manifest.json">

  <!-- Custom CSS -->
  <style>
    /* Global Styles */
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fff;
      color: #333;
      margin: 0;
      padding: 0;
      transition: background-color 0.3s, color 0.3s;
      padding-bottom: 70px;
    }
    /* Header Styling */
    .main_haeder {
      background: linear-gradient(135deg, #004d00, #00cc00);
      color: #fff;
      padding: 10px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: sticky;
      top: 0;
      z-index: 1000;
    }
    .em_menu_sidebar button {
      background: none;
      border: none;
      color: #fff;
      font-size: 1.5rem;
    }
    .em_brand a img {
      height: 40px;
    }
    .em_side_right a {
      color: #fff;
      position: relative;
    }
    .flashCircle {
      width: 8px;
      height: 8px;
      background: red;
      border-radius: 50%;
      position: absolute;
      top: -2px;
      right: -2px;
    }
    /* Hero Section */
    .hero-section {
      position: relative;
      height: 500px;
      background-image: url('mekkah.jpg');
      background-size: cover;
      background-position: center;
      overflow: hidden;
    }
    .hero-content {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 2;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 0 20px;
      background: rgba(0, 0, 0, 0.4);
    }
    .hero-content h1 {
      font-size: 3rem;
      margin-bottom: 10px;
      color: #fff;
    }
    .hero-content p {
      font-size: 1.25rem;
      color: #fff;
    }
    /* Box Container, Quick Access, dll. */
    .box-container {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      padding: 20px;
      margin: 20px 0;
      transition: background 0.3s, color 0.3s;
    }
    .np__bkOperationsService .contentBox_grid {
      display: flex;
      flex-wrap: nowrap;
      justify-content: center;
      gap: 40px;
    }
    .em__actions .btn {
      width: 100px;
      text-align: center;
    }
    /* Image Sweeper (Menu Lainnya) */
    .menu_sweeper .swiper-slide {
      text-align: center;
    }
    .menu_sweeper .swiper-slide img {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }
    .menu_sweeper .caption {
      margin-top: 8px;
      font-weight: bold;
    }
    /* Kajian Section (Swiper Carousel) */
    .swiper-container {
      padding: 20px 0;
    }
    .swiper-slide {
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    .swiper-slide img {
      display: block;
      width: 100%;
      height: auto;
      max-height: 200px;
    }
    .swiper-slide .caption {
      opacity: 0;
      transition: opacity 0.3s;
    }
    .swiper-slide:hover .caption {
      opacity: 1;
    }
    main {
      animation: fadeIn 1s ease-in;
      background: #fff;
      margin: 20px;
      border-radius: 10px;
      overflow: hidden;
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    /* Footer Styling (Sticky Footer) */
    .em_main_footer {
      position: sticky;
      bottom: 0;
      width: 100%;
      background: #004d00;
      border-top: 1px solid #eaeaea;
      padding: 10px 0;
      text-align: center;
      z-index: 1000;
    }
    .em_body_navigation {
      display: flex;
      justify-content: space-around;
      align-items: center;
    }
    .btn_navLink {
      color: #fff;
      text-decoration: none;
      display: flex;
      flex-direction: column;
      align-items: center;
      font-size: 0.75rem;
    }
    .btn_navLink .icon_current {
      margin-bottom: 4px;
    }
    .btn_navLink:hover {
      color: #ffcc00;
    }
    .items_basket_circle {
      background: red;
      color: #fff;
      border-radius: 50%;
      padding: 2px 6px;
      font-size: 0.65rem;
      position: absolute;
      top: -5px;
      right: -5px;
    }
    /* Responsive adjustments */
    @media (max-width: 576px) {
      .hero-section { height: 300px; }
      .hero-content h1 { font-size: 2rem; }
      .hero-content p { font-size: 1rem; }
      .swiper-slide img { max-height: 150px; }
      .np__bkOperationsService .contentBox_grid {
        flex-wrap: wrap;
        gap: 20px;
      }
    }
    
    /* Perbaikan Modal - Tampilan Baru */
    /* Modal Content */
    .modal-content {
      border: none;
      border-radius: 10px;
      background: #fff;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      overflow: hidden;
    }
    /* Modal Header */
    .modal-header {
      background: linear-gradient(135deg, #004d00, #00cc00);
      color: #fff;
      padding: 15px 20px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.3);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .modal-header .close {
      color: #fff;
      font-size: 1.5rem;
      opacity: 1;
      background: transparent;
      border: none;
    }
    /* Modal Body */
    .modal-body {
      padding: 20px;
    }
    .modal-body ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .modal-body ul li {
      border-bottom: 1px solid #eaeaea;
    }
    .modal-body ul li a {
      display: block;
      padding: 15px 20px;
      color: #333;
      text-decoration: none;
      transition: background 0.3s, color 0.3s;
      border-radius: 5px;
    }
    .modal-body ul li a:hover {
      background: #f2f2f2;
      color: #004d00;
    }
    /* Modal Footer (jika diperlukan) */
    .modal-footer {
      padding: 10px 20px;
      border-top: 1px solid #eaeaea;
      text-align: right;
    }
    /* Modal Sidebar - Modernisasi Tampilan Slide-out */
    .modal-dialog-slideout {
      position: fixed;
      margin: 0;
      width: 30%;
      height: 100%;
      top: 0;
      left: 0;
      transform: translateX(-100%);
      transition: transform 0.3s ease-in-out;
      z-index: 1050;
    }
    .modal.fade.show .modal-dialog.modal-dialog-slideout {
      transform: translateX(0);
    }
    @media (max-width: 576px) {
      .modal-dialog-slideout {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <!-- Loader -->
  <section class="em_loading" id="loaderPage">
    <div class="spinner_flash"></div>
  </section>

  <div id="wrapper">
    <div id="content">
      <!-- Header -->
      <header class="main_haeder header-sticky multi_item">
        <div class="em_menu_sidebar">
          <button type="button" class="btn btn_menuSidebar item-show" data-toggle="modal" data-target="#mdllSidebarMenu-background">
            <i class="ri-menu-fill"></i>
          </button>
        </div>
        <div class="em_brand">
          <a href="index.html">
            <img src="assets/img/kitaberbagi-community-logo-biru.png" alt="Islamic Hub">
          </a>
        </div>
        <div class="em_side_right">
          <a href="#" class="btn justify-content-center relative stroke-secondary">
            <svg id="Iconly_Two-tone_Notification" data-name="Iconly/Two-tone/Notification"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <g transform="translate(3.5 2)">
                <path d="M0,11.787v-.219A3.6,3.6,0,0,1,.6,9.75,4.87,4.87,0,0,0,1.8,7.436c0-.666,0-1.342.058-2.009C2.155,2.218,5.327,0,8.461,0h.078c3.134,0,6.306,2.218,6.617,5.427.058.666,0,1.342.049,2.009A4.955,4.955,0,0,0,16.4,9.759a3.506,3.506,0,0,1,.6,1.809v.209a3.566,3.566,0,0,1-.844,2.39A4.505,4.505,0,0,1,13.3,15.538a45.078,45.078,0,0,1-9.615,0A4.554,4.554,0,0,1,.835,14.167,3.6,3.6,0,0,1,0,11.787Z"
                      fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                <path d="M0,0A3.061,3.061,0,0,0,2.037,1.127,3.088,3.088,0,0,0,4.288.5,2.886,2.886,0,0,0,4.812,0"
                      fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" opacity="0.4" />
              </g>
            </svg>
            <span class="flashCircle"></span>
          </a>
        </div>
      </header>

      <!-- Hero Section -->
      <section class="hero-section">
        <div class="hero-content">
          <h1 class="display-4">Selamat Datang di Islamic Hub</h1>
          <p class="lead">Sumber Daya Islami Digital Terpercaya</p>
        </div>
      </section>

      <!-- Quick Access Section -->
      <section class="np__bkOperationsService">
        <div class="container">
          <div class="box-container">
            <div class="contentBox_grid">
              <div class="em__actions d-flex flex-nowrap justify-content-center" style="gap: 40px;">
                <a href="../quran.html" class="btn">
                  <div class="icon bg-yellow fill-white mb-2">
                    <i class="fa-solid fa-book-open"></i>
                  </div>
                  <span>Al-Quran</span>
                </a>
                <a href="../jadwal.html" class="btn">
                  <div class="icon bg-primary fill-white mb-2">
                    <i class="fa-solid fa-mosque"></i>
                  </div>
                  <span>Jadwal Sholat</span>
                </a>
                <a href="../kalender.html" class="btn">
                  <div class="icon bg-green fill-white mb-2">
                    <i class="fa-solid fa-calendar-days"></i>
                  </div>
                  <span>Kalender Hijriyah</span>
                </a>
                <a href="../doa.html" class="btn">
                  <div class="icon bg-purple fill-white mb-2">
                    <i class="fa-solid fa-praying-hands"></i>
                  </div>
                  <span>Doa Harian</span>
                </a>
                <button type="button" class="btn" data-toggle="modal" data-target="#mdllOthers">
                  <div class="icon border border-snow stroke-secondary mb-2">
                    <i class="fa-solid fa-ellipsis"></i>
                  </div>
                  <span>Lainnya</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Image Sweeper (Menu Lainnya) -->
      <section class="menu_sweeper np__ServicePackage p-3">
        <div class="title d-flex justify-content-between align-items-center mb-3">
          <h3 class="size-18 weight-500 color-secondary m-0">Menu Lainnya</h3>
        </div>
        <div class="swiper-container menu-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="../hadist.html">
                <img src="Hadis.png" alt="Hadits">
                <div class="caption">Hadits</div>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="../quran.html">
                <img src="quran.jpg" alt="Al-Quran">
                <div class="caption">Al-Quran</div>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="../doa.html">
                <img src="Perbanyaklah-Doa-Kepada-Allah.webp" alt="Doa Sehari-hari">
                <div class="caption">Doa Sehari-hari</div>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="../jadwal.html">
                <img src="ilustrasi-orang-salat-dan-berdoa-3.jpg" alt="Jadwal Sholat">
                <div class="caption">Jadwal Sholat</div>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="../asmaul.html">
                <img src="2-2067859369.webp" alt="Asmaul husna">
                <div class="caption">Asmaul husna</div>
              </a>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </section>

      <!-- Main Content: Kajian Islami -->
      <main>
        <div class="container">
          <div class="box-container">
            <section class="banner_swiper np__ServicePackage p-3">
              <div class="title d-flex justify-content-between align-items-center mb-3">
                <div>
                  <h3 class="size-18 weight-500 color-secondary m-0">Kajian Islami</h3>
                  <p class="size-13 color-text m-0 pt-1">Tonton kajian terbaru!</p>
                </div>
                <a href="kajian.html" class="d-block color-blue size-14 m-0 hover:color-blue">Lihat semua</a>
              </div>
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="https://youtu.be/kHTreZpIdRM?si=NQZdDn84iOlF-Qwt" target="_blank" class="position-relative">
                      <img src="https://img.youtube.com/vi/kHTreZpIdRM/hqdefault.jpg" alt="Kajian 1">
                      <div class="caption position-absolute bottom-0 start-0 end-0 bg-dark bg-opacity-75 text-white p-2 text-center">
                        Cara agar selalu ditolong oleh Allah
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="https://youtu.be/Q5S31dahbVg?si=q75CqVSVNMEJ-bwU" target="_blank" class="position-relative">
                      <img src="https://img.youtube.com/vi/Q5S31dahbVg/hqdefault.jpg" alt="Kajian 2">
                      <div class="caption position-absolute bottom-0 start-0 end-0 bg-dark bg-opacity-75 text-white p-2 text-center">
                        Judul Kajian 2
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="https://www.youtube.com/live/APsf1IC-NMk?si=rxc0lejErbm4Uz5D" target="_blank" class="position-relative">
                      <img src="https://img.youtube.com/vi/APsf1IC-NMk/hqdefault.jpg" alt="Kajian 3">
                      <div class="caption position-absolute bottom-0 start-0 end-0 bg-dark bg-opacity-75 text-white p-2 text-center">
                        Judul Kajian 3
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="https://youtu.be/vx0-L5hHzQI?si=3zCMoKJNw3mMqAFx" target="_blank" class="position-relative">
                      <img src="https://img.youtube.com/vi/vx0-L5hHzQI/hqdefault.jpg" alt="Kajian 4">
                      <div class="caption position-absolute bottom-0 start-0 end-0 bg-dark bg-opacity-75 text-white p-2 text-center">
                        Manusia mengejar semua apa yang ia ingin kan
                      </div>
                    </a>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </section>
          </div>
        </div>
      </main>

      <!-- Modal 'Lainnya' -->
      <div class="modal fade" id="mdllOthers" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Menu Lainnya</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body px-0">
              <div class="np__bkOperationsService p-3">
                <div class="em__actions d-flex flex-wrap justify-content-around">
                  <a href="../hadist.html" class="btn m-2">
                    <div class="icon bg-blue bg-opacity-10 mb-2">
                      <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <span>Hadits</span>
                  </a>
                  <a href="../kalkulator.html" class="btn m-2">
                    <div class="icon bg-orange bg-opacity-10 mb-2">
                      <i class="fa-solid fa-calculator"></i>
                    </div>
                    <span>Kalkulator Zakat</span>
                  </a>
                  <a href="../kajian.html" class="btn m-2">
                    <div class="icon bg-yellow bg-opacity-10 mb-2">
                      <i class="fa-solid fa-book"></i>
                    </div>
                    <span>Kajian</span>
                  </a>
                  <a href="../asmaul.html" class="btn m-2">
                    <div class="icon bg-red bg-opacity-10 mb-2">
                      <i class="fas fa-star-and-crescent"></i>
                    </div>
                    <span>Asmaul Husna</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Sidebar -->
      <div class="modal fade" id="mdllSidebarMenu-background" tabindex="-1" role="dialog" aria-labelledby="sidebarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="sidebarLabel">Menu</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Optional: Profile Section di Sidebar -->
              <div class="sidebar-profile">
                <img src="assets/img/user-placeholder.png" alt="User">
                <h6>Nama Pengguna</h6>
                <small>email@example.com</small>
              </div>
              <!-- Menu Sidebar -->
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="../quran/index.html">Al-Quran</a></li>
                <li><a href="../jadwal/index.html">Jadwal Sholat</a></li>
                <li><a href="../kalender/index.html">Kalender Hijriyah</a></li>
                <li><a href="../doa/index.html">Doa Harian</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Register</a></li>
                <li><a href="profile.html">Profil</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Footer (Sticky Footer) -->
  <footer class="em_main_footer ouline_footer with__text">
    <div class="em_body_navigation -active-links">
      <div class="item_link">
        <a href="index.html" class="btn btn_navLink">
          <div class="icon_current">
            <svg id="Iconly_Curved_Home" data-name="Iconly/Curved/Home" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
              <g transform="translate(2 1.667)">
                <path d="M0,.5H4.846" transform="translate(5.566 11.28)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                <path d="M0,9.761C0,5.068.512,5.4,3.266,2.842,4.471,1.872,6.346,0,7.965,0S11.5,1.862,12.712,2.842c2.754,2.554,3.265,2.227,3.265,6.919,0,6.906-1.633,6.906-7.988,6.906S0,16.667,0,9.761Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
              </g>
            </svg>
          </div>
          <div class="txt__tile">Home</div>
        </a>
      </div>
      <div class="item_link">
        <a href="../quran.html" class="btn btn_navLink">
          <div class="icon_current">
            <i class="fa-solid fa-book-open"></i>
          </div>
          <div class="txt__tile">Quran</div>
        </a>
      </div>
      <div class="item_link">
        <a href="../jadwal.html" class="btn btn_navLink">
          <div class="icon_current">
            <i class="fa-solid fa-mosque"></i>
          </div>
          <div class="txt__tile">Jadwal Sholat</div>
        </a>
      </div>
      <div class="item_link">
        <a href="../kalender.html" class="btn btn_navLink">
          <div class="icon_current">
            <i class="fa-solid fa-calendar-days"></i>
          </div>
          <div class="txt__tile">Kalender Hijriyah</div>
        </a>
      </div>
      <div class="item_link">
        <a href="../doa.html" class="btn btn_navLink">
          <div class="icon_current">
            <i class="fa-solid fa-praying-hands"></i>
          </div>
          <div class="txt__tile">Doa Harian</div>
        </a>
      </div>
    </div>
  </footer>

  <!-- JavaScript Libraries -->
  <script src="assets/js/jquery-3.6.0.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/vendor/owl.carousel.min.js"></script>
  <script src="assets/js/vendor/swiper-bundle.min.js"></script>
  <script src="assets/js/vendor/sharer.js"></script>
  <script src="assets/js/vendor/short-and-sweet.min.js"></script>
  <script src="assets/js/vendor/jquery.knob.min.js"></script>
  <script src="assets/js/main.js" defer></script>
  <script src="assets/js/pwa-services.js"></script>

  <!-- Swiper Initialization Script -->
  <script>
    // Swiper for Image Sweeper (Menu Lainnya)
    var menuSwiper = new Swiper('.menu-swiper', {
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.menu-swiper .swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        0: { slidesPerView: 2, spaceBetween: 10 },
        576: { slidesPerView: 3, spaceBetween: 10 },
        768: { slidesPerView: 4, spaceBetween: 15 },
        1024: { slidesPerView: 5, spaceBetween: 20 }
      }
    });
    
    // Swiper for Kajian Islami (in section banner_swiper)
    var kajianSwiper = new Swiper('.banner_swiper .swiper-container', {
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.banner_swiper .swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        0: { slidesPerView: 1, spaceBetween: 10 },
        576: { slidesPerView: 1.5, spaceBetween: 10 },
        768: { slidesPerView: 2, spaceBetween: 15 },
        1024: { slidesPerView: 3, spaceBetween: 20 }
      }
    });
  </script>
</body>
</html>
