 // Variabel global
 let start = 1;
 let end = 10;
 let hadithData = [];
 let currentHadithIndex = -1;
 let selectedBook = "";
 let bookmarkedHadiths = [];
 
 // Load bookmark dari localStorage jika ada
 if (localStorage.getItem("bookmarkedHadiths")) {
   bookmarkedHadiths = JSON.parse(localStorage.getItem("bookmarkedHadiths"));
 }
 
 const bookSelect = document.getElementById("bookSelect");
 const hadithMenu = document.getElementById("hadithMenu");
 const loadMoreBtn = document.getElementById("loadMore");
 const hadithContent = document.getElementById("hadithContent");
 const viewBookmarksBtn = document.getElementById("viewBookmarks");
 const bookmarkDashboard = document.getElementById("bookmarkDashboard");
 const bookmarkList = document.getElementById("bookmarkList");
 const closeDashboardBtn = document.querySelector("#bookmarkDashboard .close-dashboard");
 
 // Fungsi mengambil daftar buku
 async function fetchBookList() {
   try {
     const response = await fetch("https://api.hadith.gading.dev/books");
     if (!response.ok) {
       throw new Error("Gagal mengambil data buku hadits.");
     }
     const result = await response.json();
     const books = result.data ? result.data : result;
     books.forEach(book => {
       const option = document.createElement("option");
       option.value = book.id;
       option.textContent = book.name;
       bookSelect.appendChild(option);
     });
   } catch (error) {
     console.error("Error:", error);
     bookSelect.innerHTML = '<option value="">Gagal memuat buku</option>';
   }
 }
 fetchBookList();
 
 // Fungsi untuk memeriksa apakah sebuah hadits sudah dibookmark
 function isBookmarked(hadith) {
   return bookmarkedHadiths.some(b => b.number === hadith.number);
 }
 
 // Fungsi menampilkan detail hadits
 function displayHadits(hadith, index) {
   currentHadithIndex = index;
   hadithContent.innerHTML = "";
   
   const title = document.createElement("h2");
   title.textContent = `Hadits No. ${hadith.number}`;
   hadithContent.appendChild(title);
   
   // Tambahkan ikon bookmark hanya di halaman detail
   const bookmarkIcon = document.createElement("span");
   bookmarkIcon.className = "bookmark-icon " + (isBookmarked(hadith) ? "bookmarked" : "not-bookmarked");
   bookmarkIcon.textContent = isBookmarked(hadith) ? "★" : "☆";
   bookmarkIcon.addEventListener("click", () => {
     if (isBookmarked(hadith)) {
       bookmarkedHadiths = bookmarkedHadiths.filter(b => b.number !== hadith.number);
       alert("Bookmark dihapus!");
     } else {
       bookmarkedHadiths.push(hadith);
       alert("Hadits berhasil di-bookmark!");
     }
     localStorage.setItem("bookmarkedHadiths", JSON.stringify(bookmarkedHadiths));
     bookmarkIcon.textContent = isBookmarked(hadith) ? "★" : "☆";
     bookmarkIcon.classList.toggle("bookmarked");
     bookmarkIcon.classList.toggle("not-bookmarked");
   });
   title.appendChild(bookmarkIcon);
   
   const arabic = document.createElement("p");
   arabic.className = "arabic";
   arabic.textContent = hadith.arab;
   hadithContent.appendChild(arabic);
   
   const translation = document.createElement("p");
   translation.className = "translation";
   translation.textContent = hadith.id ? hadith.id : "Terjemahan tidak tersedia.";
   hadithContent.appendChild(translation);
   
   // Share Dropdown
   const shareDropdown = document.createElement("div");
   shareDropdown.className = "share-dropdown";
   const shareToggle = document.createElement("button");
   shareToggle.className = "share-toggle";
   shareToggle.textContent = "Share";
   const shareMenu = document.createElement("div");
   shareMenu.className = "share-menu";
   
   const shareUrl = window.location.href.split('#')[0] + "#hadits-" + hadith.number;
   const shareText = `Hadits No. ${hadith.number}\n\n${hadith.arab}\n\n${hadith.id ? hadith.id : "Terjemahan tidak tersedia."}`;
   
   const fbBtn = document.createElement("button");
   fbBtn.textContent = "Facebook";
   fbBtn.addEventListener("click", () => {
     const url = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(shareUrl);
     window.open(url, "_blank");
     shareDropdown.classList.remove("active");
   });
   
   const waBtn = document.createElement("button");
   waBtn.textContent = "WhatsApp";
   waBtn.addEventListener("click", () => {
     const url = "https://api.whatsapp.com/send?text=" + encodeURIComponent(shareText + "\n" + shareUrl);
     window.open(url, "_blank");
     shareDropdown.classList.remove("active");
   });
   
   const twBtn = document.createElement("button");
   twBtn.textContent = "Twitter";
   twBtn.addEventListener("click", () => {
     const url = "https://twitter.com/intent/tweet?text=" + encodeURIComponent(shareText + "\n" + shareUrl);
     window.open(url, "_blank");
     shareDropdown.classList.remove("active");
   });
   
   const copyLinkBtn = document.createElement("button");
   copyLinkBtn.textContent = "Salin Link";
   copyLinkBtn.addEventListener("click", () => {
     navigator.clipboard.writeText(shareUrl)
       .then(() => alert("Link berhasil disalin!"))
       .catch((error) => console.error("Error saat menyalin link:", error));
     shareDropdown.classList.remove("active");
   });
   
   shareMenu.appendChild(fbBtn);
   shareMenu.appendChild(waBtn);
   shareMenu.appendChild(twBtn);
   shareMenu.appendChild(copyLinkBtn);
   shareDropdown.appendChild(shareToggle);
   shareDropdown.appendChild(shareMenu);
   
   shareToggle.addEventListener("click", (e) => {
     e.stopPropagation();
     shareDropdown.classList.toggle("active");
   });
   document.addEventListener("click", function(e) {
     if (!shareDropdown.contains(e.target)) {
       shareDropdown.classList.remove("active");
     }
   });
   hadithContent.appendChild(shareDropdown);
   
   // Tombol Copy Hadits
   const copyHadithBtn = document.createElement("button");
   copyHadithBtn.className = "copy-hadith-btn";
   copyHadithBtn.textContent = "Copy Hadits";
   copyHadithBtn.addEventListener("click", () => {
     navigator.clipboard.writeText(shareText)
       .then(() => alert("Hadits berhasil disalin!"))
       .catch((error) => console.error("Error saat menyalin hadits:", error));
   });
   hadithContent.appendChild(copyHadithBtn);
   
   // Navigasi Hadits Sebelumnya & Selanjutnya
   const navDiv = document.createElement("div");
   navDiv.style.marginTop = "20px";
   navDiv.style.display = "flex";
   navDiv.style.justifyContent = "space-between";
   
   const prevBtn = document.createElement("button");
   prevBtn.className = "nav-btn";
   prevBtn.textContent = "Hadits Sebelumnya";
   prevBtn.addEventListener("click", () => {
     if (currentHadithIndex > 0) {
       currentHadithIndex--;
       displayHadits(hadithData[currentHadithIndex], currentHadithIndex);
     } else {
       alert("Ini adalah hadits pertama.");
     }
   });
   
   const nextBtn = document.createElement("button");
   nextBtn.className = "nav-btn";
   nextBtn.textContent = "Hadits Selanjutnya";
   nextBtn.addEventListener("click", () => {
     if (currentHadithIndex < hadithData.length - 1) {
       currentHadithIndex++;
       displayHadits(hadithData[currentHadithIndex], currentHadithIndex);
     } else {
       alert("Ini adalah hadits terakhir yang dimuat.");
     }
   });
   
   navDiv.appendChild(prevBtn);
   navDiv.appendChild(nextBtn);
   hadithContent.appendChild(navDiv);
 }
 
 // Fungsi menambahkan hadits ke menu sidebar (tanpa ikon bintang)
 function addHadithToMenu(hadith, index) {
   const li = document.createElement("li");
   li.dataset.index = index;
   
   const textSpan = document.createElement("span");
   textSpan.textContent = hadith.name ? hadith.name : `Hadits No. ${hadith.number}`;
   textSpan.style.cursor = "pointer";
   textSpan.addEventListener("click", () => {
     displayHadits(hadith, index);
   });
   
   li.appendChild(textSpan);
   hadithMenu.appendChild(li);
 }
 
 // Fungsi mengambil hadits dari API berdasarkan buku yang dipilih
 function fetchHadiths() {
   if (!selectedBook) {
     hadithContent.innerHTML = "<p>Silakan pilih buku hadits terlebih dahulu.</p>";
     loadMoreBtn.disabled = true;
     loadMoreBtn.textContent = "Pilih Buku Terlebih Dahulu";
     return;
   }
   loadMoreBtn.disabled = true;
   loadMoreBtn.textContent = "Memuat...";
   fetch(`https://api.hadith.gading.dev/books/${selectedBook}?range=${start}-${end}`)
     .then(response => {
       if (!response.ok) {
         throw new Error("Terjadi kesalahan: " + response.statusText);
       }
       return response.json();
     })
     .then(data => {
       if (data && data.data && data.data.hadiths && data.data.hadiths.length > 0) {
         data.data.hadiths.forEach(hadith => {
           hadithData.push(hadith);
           addHadithToMenu(hadith, hadithData.length - 1);
         });
         // Tampilkan hadits pertama jika pemuatan pertama
         if (hadithData.length === data.data.hadiths.length) {
           displayHadits(hadithData[0], 0);
         }
         start = end + 1;
         end = end + 10;
         loadMoreBtn.disabled = false;
         loadMoreBtn.textContent = "Muat Hadits Lainnya";
       } else {
         loadMoreBtn.textContent = "Tidak ada hadits lagi";
         loadMoreBtn.disabled = true;
       }
     })
     .catch(error => {
       console.error("Error fetching hadith:", error);
       loadMoreBtn.textContent = "Error, coba lagi";
       loadMoreBtn.disabled = false;
     });
 }
 
 // Reset data saat pengguna memilih buku
 bookSelect.addEventListener("change", () => {
   selectedBook = bookSelect.value;
   hadithData = [];
   hadithMenu.innerHTML = "";
   start = 1;
   end = 10;
   if (selectedBook) {
     hadithContent.innerHTML = "<p>Memuat hadits...</p>";
     loadMoreBtn.disabled = false;
     loadMoreBtn.textContent = "Muat Hadits Lainnya";
     fetchHadiths();
   } else {
     hadithContent.innerHTML = "<p>Pilih buku hadits terlebih dahulu.</p>";
     loadMoreBtn.disabled = true;
     loadMoreBtn.textContent = "Pilih Buku Terlebih Dahulu";
   }
 });
 
 loadMoreBtn.addEventListener("click", fetchHadiths);
 
 // Fungsi memperbarui tampilan dashboard bookmark (tanpa ikon bintang dan tombol hapus)
 function updateBookmarkList() {
   bookmarkList.innerHTML = "";
   if (bookmarkedHadiths.length === 0) {
     const li = document.createElement("li");
     li.textContent = "Belum ada bookmark.";
     bookmarkList.appendChild(li);
   } else {
     bookmarkedHadiths.forEach((hadith) => {
       const li = document.createElement("li");
       const textSpan = document.createElement("span");
       textSpan.textContent = hadith.name ? hadith.name : `Hadits No. ${hadith.number}`;
       textSpan.style.cursor = "pointer";
       textSpan.addEventListener("click", () => {
         displayHadits(hadith, -1);
         bookmarkDashboard.style.display = "none";
       });
       li.appendChild(textSpan);
       bookmarkList.appendChild(li);
     });
   }
 }
 
 viewBookmarksBtn.addEventListener("click", () => {
   updateBookmarkList();
   bookmarkDashboard.style.display = "flex";
 });
 
 closeDashboardBtn.addEventListener("click", () => {
   bookmarkDashboard.style.display = "none";
 });

  // Script sederhana untuk modal 'Lainnya'
  const openOthersBtn = document.getElementById('openOthers');
  const othersModal = document.getElementById('mdllOthers');
  const closeOthersBtn = document.getElementById('closeOthers');

  openOthersBtn.addEventListener('click', () => {
    othersModal.style.display = 'block';
  });

  closeOthersBtn.addEventListener('click', () => {
    othersModal.style.display = 'none';
  });

  window.addEventListener('click', (event) => {
    if (event.target === othersModal) {
      othersModal.style.display = 'none';
    }
  });
