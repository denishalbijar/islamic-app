<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kajian Islami Terbaru</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/kajian.css">
  <style>
    /* Global Styles & Reset */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
      color: #333;
      min-height: 100vh;
      padding-bottom: 70px; /* agar konten tidak tertutup footer */
    }
    a {
      text-decoration: none;
      color: inherit;
    }
    /* Header Minimal */
    header {
      background: #fff;
      padding: 1rem 0;
      border-bottom: 1px solid #ddd;
    }
    .navbar {
      padding: 0;
    }
    .navbar-brand {
      font-size: 1.5rem;
      font-weight: 600;
    }
    /* Main Content */
    main.container {
      margin-top: 20px;
    }
    main h1 {
      text-align: center;
      margin-bottom: 1.5rem;
    }
    .row.g-4 {
      gap: 1rem;
    }
    .card {
      border: none;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: translateY(-3px);
    }
    .card-img-top {
      width: 100%;
      height: auto;
    }
    .card-body {
      padding: 1rem;
    }
    .card-title {
      font-size: 1.1rem;
      margin-bottom: 0.75rem;
      font-weight: 600;
      color: #333;
    }
    .btn-primary {
      background-color: #4caf50;
      border: none;
    }
    .btn-primary:hover {
      background-color: #43a047;
    }
    /* Footer (menggunakan CSS footer dari Al‑Quran) */
    .em_main_footer {
      position: sticky;
      bottom: 0;
      width: 100%;
      background: #004d00;  /* Latar gelap */
      border-top: 1px solid #eaeaea;
      padding: 10px 0;
      text-align: center;
      z-index: 1000;
    }
    .em_body_navigation {
      display: flex;
      justify-content: space-around;
      align-items: center;
      flex-wrap: wrap;
    }
    .btn_navLink {
      color: #fff;
      text-decoration: none;
      display: flex;
      flex-direction: column;
      align-items: center;
      font-size: 0.75rem;
      margin: 5px;
    }
    .btn_navLink .icon_current {
      margin-bottom: 4px;
    }
    .btn_navLink:hover {
      color: #ffcc00;
    }
  </style>
</head>
<body>
  <!-- Header Minimal -->
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand mx-auto" href="#">Kajian Islami</a>
      </div>
    </nav>
  </header>

  <!-- Main Content -->
  <main class="container mt-4">
    <h1 class="text-center mb-4">Kajian Islami Terbaru</h1>
    <div id="video-list" class="row g-4">
      <!-- Video Card 1 -->
      <div class="col-md-3 col-sm-6">
        <div class="card">
          <img src="https://img.youtube.com/vi/kHTreZpIdRM/hqdefault.jpg" class="card-img-top" alt="Judul Kajian 1">
          <div class="card-body">
            <h5 class="card-title">Judul Kajian 1</h5>
            <a href="https://www.youtube.com/watch?v=kHTreZpIdRM" target="_blank" class="btn btn-primary">Tonton</a>
          </div>
        </div>
      </div>
      <!-- Video Card 2 -->
      <div class="col-md-3 col-sm-6">
        <div class="card">
          <img src="https://img.youtube.com/vi/Q5S31dahbVg/hqdefault.jpg" class="card-img-top" alt="Judul Kajian 2">
          <div class="card-body">
            <h5 class="card-title">Judul Kajian 2</h5>
            <a href="https://www.youtube.com/watch?v=Q5S31dahbVg" target="_blank" class="btn btn-primary">Tonton</a>
          </div>
        </div>
      </div>
      <!-- Video Card 3 -->
      <div class="col-md-3 col-sm-6">
        <div class="card">
          <img src="https://img.youtube.com/vi/APsf1IC-NMk/hqdefault.jpg" class="card-img-top" alt="Judul Kajian 3">
          <div class="card-body">
            <h5 class="card-title">Judul Kajian 3</h5>
            <a href="https://www.youtube.com/watch?v=APsf1IC-NMk" target="_blank" class="btn btn-primary">Tonton</a>
          </div>
        </div>
      </div>
      <!-- Video Card 4 -->
      <div class="col-md-3 col-sm-6">
        <div class="card">
          <img src="https://img.youtube.com/vi/vx0-L5hHzQI/hqdefault.jpg" class="card-img-top" alt="Judul Kajian 4">
          <div class="card-body">
            <h5 class="card-title">Judul Kajian 4</h5>
            <a href="https://www.youtube.com/watch?v=vx0-L5hHzQI" target="_blank" class="btn btn-primary">Tonton</a>
          </div>
        </div>
      </div>
      <!-- Video Card 5 -->
      <div class="col-md-3 col-sm-6">
        <div class="card">
          <img src="https://img.youtube.com/vi/6KSuq1xioP4/hqdefault.jpg" class="card-img-top" alt="Judul Kajian 5">
          <div class="card-body">
            <h5 class="card-title">Judul Kajian 5</h5>
            <a href="https://www.youtube.com/watch?v=6KSuq1xioP4" target="_blank" class="btn btn-primary">Tonton</a>
          </div>
        </div>
      </div>
      <!-- Video Card 6 -->
      <div class="col-md-3 col-sm-6">
        <div class="card">
          <img src="https://img.youtube.com/vi/_d-T8G4TeAc/hqdefault.jpg" class="card-img-top" alt="Judul Kajian 6">
          <div class="card-body">
            <h5 class="card-title">Judul Kajian 6</h5>
            <a href="https://www.youtube.com/watch?v=_d-T8G4TeAc" target="_blank" class="btn btn-primary">Tonton</a>
          </div>
        </div>
      </div>
      <!-- Video Card 7 -->
      <div class="col-md-3 col-sm-6">
        <div class="card">
          <img src="https://img.youtube.com/vi/zU54a8aJbss/hqdefault.jpg" class="card-img-top" alt="Judul Kajian 7">
          <div class="card-body">
            <h5 class="card-title">Judul Kajian 7</h5>
            <a href="https://www.youtube.com/watch?v=zU54a8aJbss" target="_blank" class="btn btn-primary">Tonton</a>
          </div>
        </div>
      </div>
      <!-- Video Card 8 -->
      <div class="col-md-3 col-sm-6">
        <div class="card">
          <img src="https://img.youtube.com/vi/4rbO39alQRU/hqdefault.jpg" class="card-img-top" alt="Judul Kajian 8">
          <div class="card-body">
            <h5 class="card-title">Judul Kajian 8</h5>
            <a href="https://www.youtube.com/watch?v=4rbO39alQRU" target="_blank" class="btn btn-primary">Tonton</a>
          </div>
        </div>
      </div>
      <!-- Tambahkan lebih banyak video sesuai kebutuhan -->
    </div>
  </main>

  <!-- Footer (mengambil footer dari Al-Quran) -->
  <footer class="em_main_footer ouline_footer with__text">
    <div class="em_body_navigation -active-links">
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

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
