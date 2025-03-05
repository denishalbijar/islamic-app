var app = new Vue({
    el: '#app',
    data: {
      allDoas: [],
      detail: {
        id: null,
        judul: 'Data Tidak Ditemukan',
        arab: '',
        latin: '(Latin tidak tersedia)',
        indo: '',
        source: 'Sumber Tidak Tersedia'
      },
      loading: false,
      loading2: false,
      searchQuery: '',
      showShareOptions: false,
      bookmarkedDoas: []
    },
    computed: {
      filteredDoas() {
        let filtered = this.allDoas;
        if (this.searchQuery) {
          const query = this.searchQuery.toLowerCase();
          filtered = filtered.filter(doa => {
            return doa.judul.toLowerCase().includes(query) || 
                   doa.arab.toLowerCase().includes(query) ||
                   doa.indo.toLowerCase().includes(query) ||
                   doa.source.toLowerCase().includes(query);
          });
        }
        return filtered;
      },
      hasPreviousDoa() {
        let list = this.searchQuery ? this.filteredDoas : this.allDoas;
        let index = list.findIndex(item => item.id === this.detail.id);
        return index > 0;
      },
      hasNextDoa() {
        let list = this.searchQuery ? this.filteredDoas : this.allDoas;
        let index = list.findIndex(item => item.id === this.detail.id);
        return index !== -1 && index < list.length - 1;
      },
      shareText() {
        if (!this.detail.arab) return '';
        return `${this.detail.judul}\n\nArab: ${this.detail.arab}\n\nLatin: ${this.detail.latin}\n\nTerjemahan: ${this.detail.indo}\n\n(Dibagikan dari Doa Digital Modern)`;
      },
      shareWhatsAppUrl() {
        return `https://api.whatsapp.com/send?text=${encodeURIComponent(this.shareText)}`;
      },
      shareFacebookUrl() {
        return `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent('https://example.com')}&quote=${encodeURIComponent(this.shareText)}`;
      },
      shareTwitterUrl() {
        return `https://twitter.com/intent/tweet?text=${encodeURIComponent(this.shareText)}`;
      },
      shareLinkedInUrl() {
        return `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent('https://example.com')}`;
      }
    },
    methods: {
      // Fungsi transliterasi Arab ke Latin
      arabicToLatin(arabicText) {
        const mapping = {
          'ا': 'a', 'أ': 'a', 'إ': 'i', 'آ': 'aa',
          'ب': 'b', 'ت': 't', 'ث': 'th',
          'ج': 'j', 'ح': 'h', 'خ': 'kh',
          'د': 'd', 'ذ': 'dh',
          'ر': 'r', 'ز': 'z',
          'س': 's', 'ش': 'sh',
          'ص': 's', 'ض': 'd',
          'ط': 't', 'ظ': 'z',
          'ع': 'ʿ',
          'غ': 'gh',
          'ف': 'f', 'ق': 'q',
          'ك': 'k', 'ل': 'l',
          'م': 'm', 'ن': 'n',
          'ه': 'h', 'و': 'w',
          'ي': 'y',
          'ئ': 'y', 'ء': 'ʾ', 'ى': 'a'
        };
        let latin = '';
        for (let char of arabicText) {
          latin += mapping[char] !== undefined ? mapping[char] : char;
        }
        return latin;
      },
      fetchAllDoas() {
        this.loading = true;
        let promises = [];
        for (let i = 1; i <= 108; i++) {
          const url = `https://api.myquran.com/v2/doa/${i}`;
          promises.push(
            fetch(url)
              .then(response => response.json())
              .then(res => {
                if (res && res.status && res.data && res.data.arab && res.data.indo) {
                  return {
                    id: i,
                    judul: res.data.judul || `Doa ${i}`,
                    arab: res.data.arab,
                    latin: this.arabicToLatin(res.data.arab),
                    indo: res.data.indo,
                    source: res.data.source || 'Sumber Tidak Tersedia'
                  };
                }
                return null;
              })
              .catch(() => null)
          );
        }
        Promise.all(promises).then(results => {
          this.allDoas = results.filter(item => item !== null);
          this.loading = false;
        }).catch(() => {
          this.loading = false;
          alert('Gagal memuat doa.');
        });
      },
      getDetail(doaId) {
        this.loading2 = true;
        this.detail = {
          id: doaId,
          judul: 'Memuat...',
          arab: '',
          latin: '(Latin tidak tersedia)',
          indo: '',
          source: 'Sumber Tidak Tersedia'
        };
        const url = `https://api.myquran.com/v2/doa/${doaId}`;
        fetch(url)
          .then(response => response.json())
          .then(res => {
            if (res && res.status && res.data && res.data.arab && res.data.indo) {
              this.detail = {
                id: doaId,
                judul: res.data.judul || 'Judul Tidak Tersedia',
                arab: res.data.arab,
                latin: this.arabicToLatin(res.data.arab),
                indo: res.data.indo,
                source: res.data.source || 'Sumber Tidak Tersedia'
              };
            } else {
              this.detail = {
                id: doaId,
                judul: 'Data Tidak Ditemukan',
                arab: '',
                latin: '(Latin tidak tersedia)',
                indo: '',
                source: 'Sumber Tidak Tersedia'
              };
            }
            this.loading2 = false;
          })
          .catch(() => {
            this.detail = {
              id: doaId,
              judul: 'Gagal Memuat Data',
              arab: '',
              latin: '(Latin tidak tersedia)',
              indo: '',
              source: 'Sumber Tidak Tersedia'
            };
            this.loading2 = false;
            alert('Gagal memuat detail doa.');
          });
      },
      openDetailModal(doaId) {
        this.getDetail(doaId);
        this.showShareOptions = false;
        $('#detailModal').modal('show');
      },
      copyDoa() {
        if (this.detail.arab) {
          const text = `${this.detail.judul}\nArab: ${this.detail.arab}\nLatin: ${this.detail.latin}\nTerjemahan: ${this.detail.indo}`;
          navigator.clipboard.writeText(text).then(() => {
            alert('Teks doa telah disalin.');
          });
        } else {
          alert('Tidak ada data untuk disalin.');
        }
      },
      toggleShareOptions() {
        this.showShareOptions = !this.showShareOptions;
      },
      // Bookmark Methods
      toggleBookmark(doa) {
        if (!doa.arab) return;
        const index = this.bookmarkedDoas.findIndex(item => item.id === doa.id);
        if (index >= 0) {
          this.bookmarkedDoas.splice(index, 1);
        } else {
          this.bookmarkedDoas.push(Object.assign({}, doa));
        }
        this.saveBookmarks();
      },
      isBookmarked(doa) {
        return this.bookmarkedDoas.some(item => item.id === doa.id);
      },
      saveBookmarks() {
        localStorage.setItem('bookmarkedDoas', JSON.stringify(this.bookmarkedDoas));
      },
      loadBookmarks() {
        const saved = localStorage.getItem('bookmarkedDoas');
        if (saved) {
          this.bookmarkedDoas = JSON.parse(saved) || [];
        }
      },
      showBookmarksModal() {
        $('#bookmarksModal').modal('show');
      },
      // Membuka doa dari modal bookmark dan menutup modal tersebut
      openBookmarkedDoa(doa) {
        this.openDetailModal(doa.id);
        $('#bookmarksModal').modal('hide');
      },
      // Navigasi ke doa sebelumnya
      previousDoa() {
        let list = this.searchQuery ? this.filteredDoas : this.allDoas;
        let index = list.findIndex(item => item.id === this.detail.id);
        if (index > 0) {
          let prevDoa = list[index - 1];
          this.openDetailModal(prevDoa.id);
        }
      },
      // Navigasi ke doa selanjutnya
      nextDoa() {
        let list = this.searchQuery ? this.filteredDoas : this.allDoas;
        let index = list.findIndex(item => item.id === this.detail.id);
        if (index !== -1 && index < list.length - 1) {
          let nextDoa = list[index + 1];
          this.openDetailModal(nextDoa.id);
        }
      }
    },
    mounted() {
      this.fetchAllDoas();
      this.loadBookmarks();
    }
  });
   // Script untuk modal 'Lainnya'
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