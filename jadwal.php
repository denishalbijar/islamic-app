<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jadwal Sholat & Imsakiyah</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Select2 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/jadwal.css">
  
</head>
<body>
  <!-- Loader (jika diperlukan, atau bisa dihapus) -->
  <section class="em_loading" id="loaderPage">
    <div class="spinner_flash"></div>
  </section>

  <div class="container my-4">
    <h2 class="mb-4 text-center">Jadwal Sholat & Imsakiyah</h2>
    <!-- Prayer Alert -->
    <div id="prayerAlert"></div>
    <!-- Real-Time Clock -->
    <div id="currentTimeDisplay" class="mb-3 text-center"></div>
    <p id="displaySelection" class="text-center fw-bold mb-3"></p>
    
    <!-- Form Section (Dropdown Kota & Tombol) -->
    <div class="form-section mb-3">
      <div class="row g-3 align-items-end">
        <!-- Dropdown Kota -->
        <div class="col-12 col-md-8">
          <label for="citySelect" class="form-label">Pilih Kota :</label>
          <select id="citySelect" class="form-select"></select>
        </div>
        <!-- Tombol Tampilkan -->
        <div class="col-12 col-md-4 d-grid">
          <button id="tampilkan" class="btn btn-custom mt-4">Tampilkan</button>
        </div>
      </div>
    </div>
    
    <!-- View Selector dengan Radio Button -->
    <div class="view-selector mb-3 text-center">
      <label class="me-3">
        <input type="radio" name="viewOption" value="bulan" /> Bulan
      </label>
      <label>
        <input type="radio" name="viewOption" value="hari" checked /> Hari
      </label>
    </div>
    
    <!-- Konten View -->
    <div id="viewBulan">
      <!-- Tampilan Bulanan akan muncul di sini -->
    </div>
    <div id="viewHari">
      <!-- Tampilan Harian akan muncul di sini -->
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
      <!-- Al-Quran -->
      <div class="item_link">
        <a href="../quran.html" class="btn btn_navLink">
          <div class="icon_current">
            <i class="fa-solid fa-book-open"></i>
          </div>
          <div class="txt__tile">Quran</div>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="../assets/js/jadwal.js"></script>
</body>
</html>
