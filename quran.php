<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Baca Al-Quran</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <!-- Font Awesome untuk ikon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- File CSS Utama (jika ada) -->
  <link rel="stylesheet" href="../assets/css/quran.css">
  <!-- CSS Inline untuk contoh -->
</head>
<body>
  <!-- Loader -->
  <section class="em_loading" id="loaderPage">
    <div class="spinner_flash"></div>
  </section>

  <!-- Header dengan Tombol Dashboard -->
  <header>
    <div class="header-buttons">
      <!-- Tombol "Kembali" telah dihapus -->
      <button id="backBtn" class="btn" onclick="location.href='index.html'">Dashboard</button>
    </div>
    <h1>Baca Al-Quran</h1>
  </header>

  <!-- Container untuk Daftar Surah -->
  <div class="surah-container">
    <input type="text" id="surahSearch" placeholder="Cari Surah..." />
    <div id="surahButtons" class="surah-buttons">
      <!-- Tombol surah akan di-generate di sini -->
    </div>
  </div>

  <!-- Detail Surah atau Tampilan Bookmark -->
  <main class="detail" id="detail">
    <!-- Tampilan Dashboard Bookmark (List Bookmark) -->
    <div id="bookmarkDashboard" style="display: none;">
      <h2>Daftar Bookmark</h2>
      <ul id="bookmarkList">
        <li>Bookmark 1</li>
        <li>Bookmark 2</li>
      </ul>
      <button id="backFromBookmark" class="btn" onclick="hideBookmarkDashboard()">Kembali</button>
    </div>
    <!-- Tampilan Default Detail -->
    <div id="defaultDetail">
      <p>Tampilan awal akan muncul di sini.</p>
    </div>
  </main>

  <!-- Footer Sticky (disinkronkan dengan menu yang ada) -->
  <footer class="em_main_footer ouline_footer with__text">
    <div class="em_body_navigation -active-links">
      <!-- Home -->
      <div class="item_link">
        <a href="../index.html" class="btn btn_navLink">
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
      <!-- Al-Quran -->
      <div class="item_link">
        <a href="../quran.html" class="btn btn_navLink">
          <div class="icon_current">
            <i class="fa-solid fa-book-open"></i>
          </div>
          <div class="txt__tile">Al-Quran</div>
        </a>
      </div>
      <!-- Jadwal Sholat -->
      <div class="item_link">
        <a href="../jadwal.html" class="btn btn_navLink">
          <div class="icon_current">
            <i class="fa-solid fa-mosque"></i>
          </div>
          <div class="txt__tile">Jadwal Sholat</div>
        </a>
      </div>
      <!-- Kalender Hijriyah -->
      <div class="item_link">
        <a href="../kalender.html" class="btn btn_navLink">
          <div class="icon_current">
            <i class="fa-solid fa-calendar-days"></i>
          </div>
          <div class="txt__tile">Kalender Hijriyah</div>
        </a>
      </div>
      <!-- Doa Harian -->
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

  <!-- JavaScript Libraries (jika diperlukan) -->
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
  <script src="../assets/js/quran.js"></script>
  <script>
    function hideBookmarkDashboard() {
      document.getElementById('bookmarkDashboard').style.display = 'none';
      document.getElementById('defaultDetail').style.display = 'block';
    }
    function showBookmarkDashboard() {
      document.getElementById('bookmarkDashboard').style.display = 'block';
      document.getElementById('defaultDetail').style.display = 'none';
    }
  </script>
</body>
</html>
