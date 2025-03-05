<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kumpulan Hadits - Modern</title>
  <link rel="stylesheet" href="../assets/css/hadist.css">
  <!-- Import Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600&display=swap" rel="stylesheet">
  <!-- Font Awesome untuk ikon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 
</head>
<body>
  <!-- Loader (jika diperlukan, atau bisa dihapus) -->
  <section class="em_loading" id="loaderPage">
    <div class="spinner_flash"></div>
  </section>

  <header>
    <div class="header-left">
      <h1>Kumpulan Hadits</h1>
    </div>
    <button id="viewBookmarks">Lihat Bookmark</button>
  </header>
  
  <div class="container">
    <!-- Sidebar: Pilihan Buku & Daftar Hadits -->
    <aside class="sidebar">
      <label for="bookSelect">Pilih Buku Hadits:</label>
      <select id="bookSelect">
        <option value="">-- Pilih Buku --</option>
      </select>
      <h2>Daftar Hadits</h2>
      <ul id="hadithMenu">
        <!-- List hadits akan di-render secara dinamis (tanpa ikon bintang) -->
      </ul>
      <button id="loadMore" class="load-more-btn">Muat Hadits Lainnya</button>
    </aside>
    
    <!-- Konten Utama: Detail Hadits -->
    <section class="content" id="hadithContent">
      <p>Pilih salah satu hadits dari daftar di sebelah kiri untuk melihat detailnya.</p>
    </section>
  </div>
  
  <!-- Dashboard Bookmark Modal -->
  <div id="bookmarkDashboard">
    <div class="dashboard-content">
      <h2>Bookmark Hadits</h2>
      <ul id="bookmarkList">
        <!-- Daftar bookmark akan ditampilkan di sini -->
      </ul>
      <button class="close-dashboard">Tutup Dashboard</button>
    </div>
  </div>
  
  <!-- Sticky Footer -->
  <footer class="em_main_footer">
    <div class="em_body_navigation">
      <!-- Home -->
      <div class="item_link">
        <a href="../index.html" class="btn btn_navLink">
          <div class="icon_current">
            <svg id="Iconly_Curved_Home" data-name="Iconly/Curved/Home" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
              <g transform="translate(2 1.667)">
                <path d="M0,.5H4.846" transform="translate(5.566 11.28)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                <path d="M0,9.761C0,5.068.512,5.4,3.266,2.842,4.471,1.872,6.346,0,7.965,0S11.5,1.862,12.712,2.842c2.754,2.554,3.265,2.227,3.265,6.919,0,6.906-1.633,6.906-7.988,6.906S0,16.667,0,9.761Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
              </g>
            </svg>
          </div>
          <div class="txt__tile">Home</div>
        </a>
      </div>
      <!-- Hadits -->
      <div class="item_link">
        <a href="index.html" class="btn btn_navLink">
          <div class="icon_current">
            <i class="fa-solid fa-book"></i>
          </div>
          <div class="txt__tile">Hadits</div>
        </a>
      </div>
      <!-- Quran -->
      <div class="item_link">
        <a href="../quran/index.html" class="btn btn_navLink">
          <div class="icon_current">
            <i class="fa-solid fa-book-open"></i>
          </div>
          <div class="txt__tile">Quran</div>
        </a>
      </div>
      <!-- Jadwal Sholat -->
      <div class="item_link">
        <a href="../jadwal/index.html" class="btn btn_navLink">
          <div class="icon_current">
            <i class="fa-solid fa-mosque"></i>
          </div>
          <div class="txt__tile">Jadwal Sholat</div>
        </a>
      </div>
      <!-- Doa Harian -->
      <div class="item_link">
        <a href="../doa/index.html" class="btn btn_navLink">
          <div class="icon_current">
            <i class="fa-solid fa-praying-hands"></i>
          </div>
          <div class="txt__tile">Doa Harian</div>
        </a>
      </div>
    </div>
  </footer>
  
  <!-- jQuery, Bootstrap, Select2, dan JS lainnya -->
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
  <script src="../assets/js/hadist.js"></script>
</body>
</html>
