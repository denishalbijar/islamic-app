<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kalender Hijriyah Modern</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <!-- Sertakan file CSS eksternal (jika ada) -->
  <link rel="stylesheet" href="../assets/css/kalender.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>

  <div class="content">
    <!-- Kalender Container -->
    <div class="calendar-container">
      <h1 class="text-center mb-4">Kalender Hijriyah Modern</h1>
      <div id="locationDisplay" class="location text-center mb-3">Mendeteksi lokasi...</div>
      <div class="d-flex justify-content-center controls mb-3">
        <select id="yearSelect" class="form-select w-auto mx-2"></select>
        <select id="monthSelect" class="form-select w-auto mx-2"></select>
      </div>
      <div class="d-flex justify-content-center nav-buttons mb-3">
        <button id="prevMonth" class="btn btn-primary mx-1 mb-1">Bulan Sebelumnya</button>
        <button id="nextMonth" class="btn btn-primary mx-1 mb-1">Bulan Selanjutnya</button>
        <button id="viewEventList" class="btn btn-secondary mx-1 mb-1">Lihat Daftar Acara</button>
      </div>
      <div class="result text-center mb-3" id="result">
        Pilih tahun dan bulan untuk menampilkan kalender.
      </div>
      <div class="calendar-grid" id="calendarGrid"></div>
    </div>
  </div>

  <!-- Modal untuk Edit Acara -->
  <div id="eventModal" class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2>Edit Acara</h2>
          <button type="button" class="btn-close" id="closeModal"></button>
        </div>
        <div class="modal-body">
          <label for="eventTitle" class="form-label">Judul Acara:</label>
          <input type="text" id="eventTitle" placeholder="Judul Acara" class="form-control mb-2">
          <label for="eventNote" class="form-label">Catatan:</label>
          <textarea id="eventNote" placeholder="Catatan acara" class="form-control mb-2"></textarea>
        </div>
        <div class="modal-footer">
          <button id="saveEvent" class="btn btn-success">Simpan</button>
          <button id="deleteEvent" class="btn btn-danger">Hapus</button>
          <button id="cancelEvent" class="btn btn-secondary">Batal</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal untuk Daftar Acara -->
  <div id="eventListModal" class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2>Daftar Acara</h2>
          <button type="button" class="btn-close" id="closeListModal"></button>
        </div>
        <div class="modal-body">
          <ul id="modalEventList" class="list-group"></ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Sticky Footer -->
  <footer class="em_main_footer">
    <div class="em_body_navigation">
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

  <!-- Sertakan file JavaScript eksternal -->
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
  <script src="../assets/js/kalender.js"></script>
</body>
</html>
