<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Asmaul Husna</title>
  <link rel="stylesheet" href="../assets/css/asmaul.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="../assets/js/asmaul.js"></script>
</head>
<body>
  <div class="container">
    <h1>Asmaul Husna</h1>
    <button onclick="fetchRandomHusna()">Tampilkan Asmaul Husna Acak</button>
    <div id="husna" class="husna-card"></div>
    <h2>Daftar Lengkap Asmaul Husna</h2>
    <div class="search-container">
      <input type="text" id="search" placeholder="Cari Asmaul Husna..." onkeyup="searchHusna()">
      <i class="fas fa-search"></i>
    </div>
    <div id="all-husna"></div>
  </div>
  
  <!-- Footer (menggunakan footer dari Al-Quran) -->
  <footer class="em_main_footer">
    <div class="em_body_navigation">
      <!-- Home -->
      <div class="item_link">
        <a href="../index.html" class="btn_navLink">
          <div class="icon_current">
            <!-- Menggunakan SVG sebagai contoh ikon Home -->
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
              <g transform="translate(2 1.667)">
                <path d="M0,.5H4.846" transform="translate(5.566 11.28)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                <path d="M0,9.761C0,5.068.512,5.4,3.266,2.842,4.471,1.872,6.346,0,7.965,0S11.5,1.862,12.712,2.842c2.754,2.554,3.265,2.227,3.265,6.919,0,6.906-1.633,6.906-7.988,6.906S0,16.667,0,9.761Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
              </g>
            </svg>
          </div>
          <div class="txt__tile">Home</div>
        </a>
      </div>
      <!-- Al-Quran -->
      <div class="item_link">
        <a href="../quran.html" class="btn_navLink">
          <div class="icon_current">
            <i class="fa-solid fa-book-open"></i>
          </div>
          <div class="txt__tile">Al-Quran</div>
        </a>
      </div>
      <!-- Jadwal Sholat -->
      <div class="item_link">
        <a href="../jadwal.html" class="btn_navLink">
          <div class="icon_current">
            <i class="fa-solid fa-mosque"></i>
          </div>
          <div class="txt__tile">Jadwal Sholat</div>
        </a>
      </div>
      <!-- Kalender Hijriyah -->
      <div class="item_link">
        <a href="../kalender.html" class="btn_navLink">
          <div class="icon_current">
            <i class="fa-solid fa-calendar-days"></i>
          </div>
          <div class="txt__tile">Kalender Hijriyah</div>
        </a>
      </div>
      <!-- Doa Harian -->
      <div class="item_link">
        <a href="../doa.html" class="btn_navLink">
          <div class="icon_current">
            <i class="fa-solid fa-praying-hands"></i>
          </div>
          <div class="txt__tile">Doa Harian</div>
        </a>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
