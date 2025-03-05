<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Doa Digital Modern</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:300,400,500" rel="stylesheet">
  <!-- Google Font untuk teks Arab (Lateef) -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lateef&display=swap">
  <!-- Font Awesome untuk icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="../assets/css/doa.css">
  <style>
    /* Global Styles */
    
  </style>
</head>
<body>
  <!-- Loader (jika diperlukan, atau bisa dihapus) -->
  <section class="em_loading" id="loaderPage">
    <div class="spinner_flash"></div>
  </section>

  <div id="app">
    <!-- Navbar dengan sticky-top -->
    <nav class="navbar sticky-top">
      <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="#">Doa Digital Modern</a>
        <div class="d-flex align-items-center">
          <form class="search-form">
            <input type="text" id="doaSearch" v-model="searchQuery" placeholder="Cari doa...">
          </form>
          <button class="bookmark-btn" @click="showBookmarksModal" title="Bookmark Doa">
            <i class="fas fa-bookmark"></i>
          </button>
        </div>
      </div>
    </nav>

    <!-- Konten Utama -->
    <div class="container my-4">
      <!-- Daftar Doa dalam grid -->
      <div v-if="loading" class="text-center">
        <div class="spinner-border text-light" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      <div v-else>
        <div v-if="filteredDoas.length === 0" class="text-center">
          <p>Tidak ada doa yang ditemukan.</p>
        </div>
        <div v-else class="doa-list">
          <div class="doa-card" v-for="doa in filteredDoas" :key="doa.id" @click="openDetailModal(doa.id)">
            <h5>{{ doa.judul }}</h5>
            <p><small>{{ doa.source }}</small></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Detail Doa -->
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">{{ detail.judul || 'Detail Doa' }}</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div v-if="loading2" class="text-center">
              <div class="spinner-border text-light" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </div>
            <div v-else>
              <p v-if="detail.arab" class="arabic-text">
                {{ detail.arab }}
              </p>
              <p v-else class="text-muted">Teks Arab tidak tersedia.</p>
              <p v-if="detail.latin"><small>{{ detail.latin }}</small></p>
              <p v-if="detail.indo"><small class="text-muted">{{ detail.indo }}</small></p>
              <p><small><strong>Sumber:</strong> {{ detail.source }}</small></p>
              <!-- Share Options -->
              <div v-if="showShareOptions" class="share-options">
                <a :href="shareWhatsAppUrl" target="_blank" title="Share ke WhatsApp">
                  <i class="fab fa-whatsapp"></i>
                </a>
                <a :href="shareFacebookUrl" target="_blank" title="Share ke Facebook">
                  <i class="fab fa-facebook"></i>
                </a>
                <a :href="shareTwitterUrl" target="_blank" title="Share ke Twitter">
                  <i class="fab fa-twitter"></i>
                </a>
                <a :href="shareLinkedInUrl" target="_blank" title="Share ke LinkedIn">
                  <i class="fab fa-linkedin"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="modal-footer d-flex justify-content-between">
            <div>
              <button class="btn btn-secondary" @click="previousDoa" :disabled="!hasPreviousDoa">Doa Sebelumnya</button>
              <button class="btn btn-secondary" @click="nextDoa" :disabled="!hasNextDoa">Doa Selanjutnya</button>
            </div>
            <div>
              <button class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button class="btn btn-primary" @click="copyDoa" :disabled="!detail.arab">
                <i class="fas fa-copy"></i> Copy
              </button>
              <button class="btn btn-info" @click="toggleShareOptions" :disabled="!detail.arab">
                <i class="fas fa-share-alt"></i> Share
              </button>
              <button class="btn btn-warning" @click="toggleBookmark(detail)" :disabled="!detail.arab">
                <i :class="isBookmarked(detail) ? 'fas fa-bookmark' : 'far fa-bookmark'"></i>
                {{ isBookmarked(detail) ? ' Hapus Bookmark' : ' Bookmark' }}
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Bookmark Doa -->
    <div class="modal fade" id="bookmarksModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Doa yang Dibookmark</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div v-if="bookmarkedDoas.length === 0" class="text-center">
              <p>Belum ada doa yang dibookmark.</p>
            </div>
            <div v-else>
              <div class="doa-card" v-for="doa in bookmarkedDoas" :key="doa.id" @click="openBookmarkedDoa(doa)">
                <h5>{{ doa.judul }}</h5>
                <p><small>{{ doa.source }}</small></p>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Sticky Footer -->
  <footer class="footer-nav">
    <nav>
      <a href="../index.html">
        <i class="fas fa-home"></i>
        <span>Home</span>
      </a>
      <a href="quran.html">
        <i class="fas fa-book"></i>
        <span> Al Quran</span>
      </a>
      <a href="../jadwal.html">
        <i class="fas fa-book-open"></i>
        <span>Jadwal Sholat</span>
      </a>
      <a href="../kalender.html">
        <i class="fas fa-mosque"></i>
        <span>Kalender Hijriyah</span>
      </a>
      <a href="../doa.html">
        <i class="fas fa-praying-hands"></i>
        <span>Doa Sehari hari</span>
      </a>
    </nav>
  </footer>
  
  <!-- Script Dependencies -->
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="script.js"></script>
</body>
</html>
