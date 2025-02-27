// Data acara yang tersimpan (format key: "YYYY-MM-DD")
let events = {};
let currentEventDate = "";

// Fungsi untuk menyimpan data acara ke localStorage
function saveEventsToLocalStorage() {
  localStorage.setItem("calendarEvents", JSON.stringify(events));
}

// Fungsi untuk memuat data acara dari localStorage
function loadEventsFromLocalStorage() {
  const stored = localStorage.getItem("calendarEvents");
  if (stored) {
    events = JSON.parse(stored);
  }
}

// Muat data acara saat halaman dibuka
loadEventsFromLocalStorage();

// Fungsi konversi Gregorian ke Hijriyah (algoritma aproksimasi)
function gregorianToHijri(gy, gm, gd) {
  let m = gm + 1;
  let y = gy;
  let a = Math.floor((14 - m) / 12);
  y = y + 4800 - a;
  m = m + 12 * a - 3;
  let jd = gd + Math.floor((153 * m + 2) / 5) + 365 * y +
           Math.floor(y / 4) - Math.floor(y / 100) +
           Math.floor(y / 400) - 32045;
  let l = jd - 1948440 + 10632;
  let n = Math.floor((l - 1) / 10631);
  l = l - 10631 * n + 354;
  let j = (Math.floor((10985 - l) / 5316)) *
          (Math.floor((50 * l) / 17719)) +
          (Math.floor(l / 5670)) *
          (Math.floor((43 * l) / 15238));
  l = l - (Math.floor((30 - j) / 15)) *
          (Math.floor((17719 * j) / 50)) -
          (Math.floor(j / 16)) *
          (Math.floor((15238 * j) / 43)) + 29;
  let hm = Math.floor((24 * l) / 709);
  let hd = l - Math.floor((709 * hm) / 24);
  let hy = 30 * n + j - 30;
  return { day: hd, month: hm, year: hy };
}

// Nama-nama bulan Hijriyah
const hijriMonths = ['Muharram', 'Safar', "Rabi'ul Awal", "Rabi'ul Akhir", 'Jumadil Awal', 'Jumadil Akhir', 'Rajab', 'Syaban', 'Ramadan', 'Syawal', 'Dzulqaidah', 'Dzulhijjah'];

// Populate dropdown tahun dan bulan
const yearSelect = document.getElementById('yearSelect');
const monthSelect = document.getElementById('monthSelect');
const currentYearVal = new Date().getFullYear();
for (let y = currentYearVal - 10; y <= currentYearVal + 10; y++) {
  let option = document.createElement('option');
  option.value = y;
  option.text = y;
  if (y === currentYearVal) option.selected = true;
  yearSelect.appendChild(option);
}
const gregorianMonths = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
for (let m = 0; m < 12; m++) {
  let option = document.createElement('option');
  option.value = m;
  option.text = gregorianMonths[m];
  if (m === new Date().getMonth()) option.selected = true;
  monthSelect.appendChild(option);
}

// Fungsi untuk membuka modal edit acara
function openEventModal(dateStr) {
  currentEventDate = dateStr;
  const eventData = events[dateStr] || { title: "", note: "" };
  document.getElementById('eventTitle').value = eventData.title;
  document.getElementById('eventNote').value = eventData.note;
  document.getElementById('eventModal').style.display = 'block';
}

// Fungsi untuk menutup modal edit acara
function closeEventModal() {
  document.getElementById('eventModal').style.display = 'none';
}

// Fungsi untuk membuat grid kalender berdasarkan tahun dan bulan terpilih
function loadCalendarGrid() {
  const grid = document.getElementById('calendarGrid');
  grid.innerHTML = '';

  // Header hari
  const defaultDays = ['Ahad', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
  defaultDays.forEach(day => {
    let header = document.createElement('div');
    header.classList.add('day-header');
    header.innerText = day;
    grid.appendChild(header);
  });

  // Ambil tahun dan bulan terpilih
  const year = parseInt(yearSelect.value);
  const month = parseInt(monthSelect.value);
  const numDays = new Date(year, month + 1, 0).getDate();
  const firstDayWeekday = new Date(year, month, 1).getDay();

  // Dapatkan tanggal hari ini
  const today = new Date();
  const deviceYear = today.getFullYear();
  const deviceMonth = today.getMonth();
  const deviceDay = today.getDate();

  // Sel kosong sebelum tanggal pertama
  for (let i = 0; i < firstDayWeekday; i++) {
    let emptyCell = document.createElement('div');
    emptyCell.classList.add('empty-cell');
    grid.appendChild(emptyCell);
  }

  // Buat sel untuk tiap tanggal
  for (let day = 1; day <= numDays; day++) {
    let cell = document.createElement('div');
    cell.classList.add('date-cell');

    // Format tanggal: YYYY-MM-DD
    let dateStr = year + '-' + (month + 1).toString().padStart(2, '0') + '-' + day.toString().padStart(2, '0');

    // Highlight jika hari ini
    if (year === deviceYear && month === deviceMonth && day === deviceDay) {
      cell.classList.add('today');
    }

    // Tampilkan tanggal Gregorian
    let gregDateDiv = document.createElement('div');
    gregDateDiv.classList.add('greg-date');
    gregDateDiv.innerText = day;

    // Konversi ke Hijriyah
    let hijri = gregorianToHijri(year, month, day);
    let hijriDateDiv = document.createElement('div');
    hijriDateDiv.classList.add('hijri-date');
    hijriDateDiv.innerText = hijri.day + ' ' + hijriMonths[hijri.month - 1];

    cell.appendChild(gregDateDiv);
    cell.appendChild(hijriDateDiv);

    // Jika ada acara, tampilkan penanda
    if (events[dateStr] && (events[dateStr].title || events[dateStr].note)) {
      let marker = document.createElement('div');
      marker.classList.add('event-marker');
      marker.innerText = "E";
      cell.appendChild(marker);
      cell.title += events[dateStr].title + "\n" + events[dateStr].note;
    }

    // Klik sel untuk edit acara
    cell.addEventListener('click', () => {
      openEventModal(dateStr);
    });

    grid.appendChild(cell);
  }
}

// Fungsi untuk mengupdate daftar acara dalam modal daftar
function updateEventListModal() {
  const year = parseInt(yearSelect.value);
  const month = parseInt(monthSelect.value);
  const modalList = document.getElementById('modalEventList');
  modalList.innerHTML = "";
  let eventKeys = Object.keys(events).filter(key => {
    let parts = key.split("-");
    return parseInt(parts[0]) === year && parseInt(parts[1]) === month + 1;
  });
  eventKeys.sort((a, b) => {
    let dayA = parseInt(a.split("-")[2]);
    let dayB = parseInt(b.split("-")[2]);
    return dayA - dayB;
  });
  if (eventKeys.length === 0) {
    modalList.innerHTML = "<li>Tidak ada acara untuk bulan ini.</li>";
  } else {
    eventKeys.forEach(key => {
      let parts = key.split("-");
      let day = parts[2];
      let title = events[key].title || "(Tidak ada judul)";
      let note = events[key].note;
      let li = document.createElement('li');
      li.innerText = day + " " + gregorianMonths[parseInt(parts[1]) - 1] + " " + parts[0] + " - " + title + (note ? " (" + note + ")" : "");
      
      // Tombol hapus di setiap item daftar acara
      let deleteBtn = document.createElement('button');
      deleteBtn.classList.add('list-delete-btn');
      deleteBtn.innerText = "Hapus";
      deleteBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        if (confirm("Apakah Anda yakin ingin menghapus acara ini?")) {
          delete events[key];
          saveEventsToLocalStorage();
          updateEventListModal();
          loadCalendarGrid();
        }
      });
      li.appendChild(deleteBtn);
      modalList.appendChild(li);
    });
  }
}

// Event listener untuk perubahan pada dropdown
yearSelect.addEventListener('change', loadCalendarGrid);
monthSelect.addEventListener('change', loadCalendarGrid);

// Tombol navigasi bulan: sebelumnya
document.getElementById('prevMonth').addEventListener('click', () => {
  let currentMonth = parseInt(monthSelect.value);
  let currentYear = parseInt(yearSelect.value);
  if (currentMonth === 0) {
    currentMonth = 11;
    currentYear--;
    yearSelect.value = currentYear;
  } else {
    currentMonth--;
  }
  monthSelect.value = currentMonth;
  loadCalendarGrid();
});

// Tombol navigasi bulan: selanjutnya
document.getElementById('nextMonth').addEventListener('click', () => {
  let currentMonth = parseInt(monthSelect.value);
  let currentYear = parseInt(yearSelect.value);
  if (currentMonth === 11) {
    currentMonth = 0;
    currentYear++;
    yearSelect.value = currentYear;
  } else {
    currentMonth++;
  }
  monthSelect.value = currentMonth;
  loadCalendarGrid();
});

// Tombol untuk membuka modal daftar acara
document.getElementById('viewEventList').addEventListener('click', () => {
  updateEventListModal();
  document.getElementById('eventListModal').style.display = 'block';
});

// Event listener untuk menutup modal daftar acara
document.getElementById('closeListModal').addEventListener('click', () => {
  document.getElementById('eventListModal').style.display = 'none';
});

// Deteksi lokasi menggunakan Geolocation API
if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(
    function(position) {
      const lat = position.coords.latitude;
      const lon = position.coords.longitude;
      document.getElementById('locationDisplay').innerText = "Lokasi: " + lat.toFixed(2) + ", " + lon.toFixed(2);
    },
    function(error) {
      document.getElementById('locationDisplay').innerText = "Lokasi tidak tersedia";
    }
  );
} else {
  document.getElementById('locationDisplay').innerText = "Geolokasi tidak didukung browser ini";
}

// Modal event handlers untuk modal edit acara
document.getElementById('saveEvent').addEventListener('click', () => {
  const title = document.getElementById('eventTitle').value.trim();
  const note = document.getElementById('eventNote').value.trim();
  events[currentEventDate] = { title, note };
  saveEventsToLocalStorage();
  closeEventModal();
  loadCalendarGrid();
});
document.getElementById('deleteEvent').addEventListener('click', () => {
  if (events[currentEventDate]) {
    delete events[currentEventDate];
  }
  saveEventsToLocalStorage();
  closeEventModal();
  loadCalendarGrid();
});
document.getElementById('cancelEvent').addEventListener('click', closeEventModal);
document.getElementById('closeModal').addEventListener('click', closeEventModal);

// Tutup modal edit atau modal daftar jika pengguna klik di luar konten modal
window.addEventListener('click', (e) => {
  const modal = document.getElementById('eventModal');
  const listModal = document.getElementById('eventListModal');
  if (e.target === modal) {
    closeEventModal();
  }
  if (e.target === listModal) {
    listModal.style.display = 'none';
  }
});

// Muat kalender saat halaman pertama kali dibuka
loadCalendarGrid();