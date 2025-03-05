<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kalkulator Zakat Lengkap</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/kalkulator.css">
</head>
<body>
  <div class="container">
    <h1 class="text-center my-4"><i class="fas fa-hand-holding-heart"></i> Kalkulator Zakat Lengkap</h1>
    
    <!-- Loader -->
    <section class="em_loading" id="loaderPage">
      <div class="spinner_flash"></div>
    </section>

    <!-- Navigation Tab -->
    <ul class="nav nav-tabs" id="zakatTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="mal-tab" data-bs-toggle="tab" data-bs-target="#zakatMal" type="button" role="tab">
          Zakat Mal
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="fitrah-tab" data-bs-toggle="tab" data-bs-target="#zakatFitrah" type="button" role="tab">
          Zakat Fitrah
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pertanian-tab" data-bs-toggle="tab" data-bs-target="#zakatPertanian" type="button" role="tab">
          Zakat Pertanian
        </button>
      </li>
    </ul>
    
    <!-- Tab Content -->
    <div class="tab-content" id="zakatTabContent">
      <!-- Zakat Mal/Harta -->
      <div class="tab-pane fade show active" id="zakatMal" role="tabpanel" aria-labelledby="mal-tab">
        <div class="card p-4">
          <h4 class="card-title mb-3"><i class="fas fa-coins"></i> Zakat Mal/Harta</h4>
          <form id="formZakatMal">
            <div class="mb-3">
              <label for="wealth" class="form-label">Total Harta (Rp)</label>
              <input type="number" class="form-control" id="wealth" placeholder="Contoh: 10000000">
            </div>
            <div class="mb-3">
              <label for="nisab" class="form-label">Nisab (opsional, Rp)</label>
              <input type="number" class="form-control" id="nisab" placeholder="Contoh: 8500000">
            </div>
            <button type="button" class="btn btn-success w-100" onclick="calculateZakatMal()">
              Hitung Zakat <i class="fas fa-calculator"></i>
            </button>
          </form>
          <div class="mt-3" id="resultZakatMal"></div>
          <div class="mt-2 text-muted small">
            <em>* Zakat dikenakan sebesar 2,5% jika harta melebihi nisab</em>
          </div>
        </div>
      </div>
      
      <!-- Zakat Fitrah -->
      <div class="tab-pane fade" id="zakatFitrah" role="tabpanel" aria-labelledby="fitrah-tab">
        <div class="card p-4">
          <h4 class="card-title mb-3"><i class="fas fa-pray"></i> Zakat Fitrah</h4>
          <form id="formZakatFitrah">
            <div class="mb-3">
              <label for="people" class="form-label">Jumlah Orang (Keluarga)</label>
              <input type="number" class="form-control" id="people" placeholder="Contoh: 4">
            </div>
            <div class="mb-3">
              <label for="costPerPerson" class="form-label">Biaya Per Orang (Rp)</label>
              <input type="number" class="form-control" id="costPerPerson" placeholder="Contoh: 30000">
            </div>
            <button type="button" class="btn btn-primary w-100" onclick="calculateZakatFitrah()">
              Hitung Zakat <i class="fas fa-calculator"></i>
            </button>
          </form>
          <div class="mt-3" id="resultZakatFitrah"></div>
          <div class="mt-2 text-muted small">
            <em>* Zakat Fitrah dihitung berdasarkan biaya per orang</em>
          </div>
        </div>
      </div>
      
      <!-- Zakat Pertanian -->
      <div class="tab-pane fade" id="zakatPertanian" role="tabpanel" aria-labelledby="pertanian-tab">
        <div class="card p-4">
          <h4 class="card-title mb-3"><i class="fas fa-tractor"></i> Zakat Pertanian</h4>
          <form id="formZakatPertanian">
            <div class="mb-3">
              <label for="produce" class="form-label">Jumlah Hasil Pertanian (Kg)</label>
              <input type="number" class="form-control" id="produce" placeholder="Contoh: 100">
            </div>
            <div class="mb-3">
              <label class="form-label">Metode Irigasi</label>
              <select class="form-select" id="irrigation">
                <option value="10">Irigasi Alam (10%)</option>
                <option value="5">Irigasi Buatan (5%)</option>
              </select>
            </div>
            <button type="button" class="btn btn-warning w-100" onclick="calculateZakatPertanian()">
              Hitung Zakat <i class="fas fa-calculator"></i>
            </button>
          </form>
          <div class="mt-3" id="resultZakatPertanian"></div>
          <div class="mt-2 text-muted small">
            <em>* Zakat pertanian dihitung berdasarkan persentase hasil</em>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Tombol Back -->
    <a href="../index.html" class="btn btn-secondary mt-3">
      <i class="fas fa-arrow-left"></i> Kembali
    </a>
  </div>
  
  <!-- Bootstrap JS Bundle -->
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/kalkulator.js"></script>
</body>
</html>
