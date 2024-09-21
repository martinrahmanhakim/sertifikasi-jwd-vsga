Aplikasi Pemesanan Hotel (Hotel Martin)

Deskripsi
Aplikasi pemesanan hotel ini memungkinkan pengguna untuk melakukan pemesanan kamar hotel dengan berbagai tipe kamar yang tersedia. Pengguna dapat memilih tipe kamar, memasukkan durasi menginap, dan menambahkan layanan seperti breakfast (sarapan). Total biaya akan dihitung secara otomatis berdasarkan pilihan pengguna, dan aplikasi akan melakukan validasi pada setiap input yang dimasukkan.

Fitur Utama
Formulir Pemesanan: Pengguna dapat mengisi detail pemesanan seperti nama pemesan, jenis kelamin, nomor identitas, tipe kamar, tanggal pesan, durasi menginap, dan layanan tambahan.
Validasi Nomor Identitas: Nomor identitas wajib diisi dengan 16 digit. Aplikasi akan menampilkan pesan peringatan jika nomor identitas kurang atau lebih dari 16 digit.
Perhitungan Total Bayar Otomatis: Total bayar dihitung berdasarkan tipe kamar yang dipilih, durasi menginap, dan layanan tambahan (breakfast).
Tombol Submit Ter-disable Otomatis: Tombol submit tidak akan aktif hingga semua input sudah diisi dengan benar, terutama nomor identitas yang harus berisi 16 digit.
Tombol Reset: Tersedia tombol reset untuk mengosongkan semua field form dan mengembalikan form ke keadaan semula.

Struktur File


├── css/                    # Folder untuk file CSS
│   ├── banner.css          # Styling untuk banner
│   └── required.css        # Styling umum yang digunakan dalam aplikasi
│
├── images/                 # Folder untuk gambar-gambar hotel
│   ├── Deluxe.jpg          # Gambar tipe kamar Deluxe
│   ├── Family.jpg          # Gambar tipe kamar Family
│   ├── Hotel.jpg           # Gambar utama hotel
│   └── Standar.jpg         # Gambar tipe kamar Standar
│
├── js/                     # Folder untuk file JavaScript
│   ├── main.js             # File JavaScript untuk perhitungan total bayar
│   └── validasi.js         # File JavaScript untuk validasi form
│             
├── display.php             # Halaman untuk menampilkan data pemesanan atau informasi lain
├── form_pemesanan.php       # Halaman utama form pemesanan hotel
├── hotel.php               # File utama yang mungkin memuat informasi detail hotel
└── proses_pemesanan.php     # File untuk memproses data pemesanan yang disubmit


Cara Kerja
Formulir Pemesanan:

Pengguna mengisi data seperti nama, jenis kelamin, nomor identitas, tipe kamar, dan tanggal pemesanan.
Input nomor identitas wajib diisi dengan tepat 16 digit.
Jika nomor identitas yang diisi kurang atau lebih dari 16 digit, aplikasi akan menampilkan pesan peringatan dan tombol submit akan dinonaktifkan hingga nomor tersebut benar.
Pengguna dapat memilih layanan tambahan seperti "Breakfast" yang akan mempengaruhi total biaya.
Validasi Form:

Validasi pada input nomor identitas dilakukan secara otomatis. Jika input tidak valid (bukan 16 digit), akan muncul pesan kesalahan "Nomor identitas harus 16 digit."
Validasi juga dilakukan pada seluruh field yang wajib diisi. Jika semua form belum diisi dengan benar, tombol submit tidak akan aktif.
Perhitungan Total Bayar:

Pengguna menekan tombol Hitung Total Bayar untuk menghitung total biaya.
Biaya dihitung berdasarkan tipe kamar, durasi menginap, dan apakah layanan sarapan (breakfast) dipilih.
Setelah perhitungan, total biaya ditampilkan pada kolom Total Bayar.
Teknologi yang Digunakan
HTML5: Untuk struktur halaman.
CSS3/Bootstrap: Untuk styling halaman dan layout yang responsif.
JavaScript: Untuk validasi form dan perhitungan otomatis.
PHP: Untuk memproses data form setelah disubmit ke server (melalui file proses_pemesanan.php).
