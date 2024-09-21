const hargaKamar = {
    'Standar': 500000,
    'Deluxe': 750000,
    'Family': 1000000
};

function hitungTotal() {
    const tipeKamar = document.querySelector('select[name="tipe_kamar"]').value;
    const durasi = parseInt(document.querySelector('input[name="durasi"]').value);
    const breakfast = document.querySelector('input[name="breakfast"]').checked;

    let harga = hargaKamar[tipeKamar] * durasi;
    let diskon = 0; // Inisialisasi diskon

    // Jika durasi menginap lebih dari 3 hari, terapkan diskon 10%
    if (durasi > 3) {
        diskon = harga * 0.1; // Diskon 10%
        harga *= 0.9; // Kurangi harga dengan 10%
    }

    // Tambahan harga untuk breakfast
    if (breakfast) {
        harga += 80000 * durasi; // Tambah 80.000 per hari jika termasuk breakfast
    }

    // Set nilai pada field harga kamar dan total bayar
    document.getElementById('harga').value = hargaKamar[tipeKamar];
    document.getElementById('total_bayar').value = harga;

    // Tampilkan diskon (jika ada)
    document.getElementById('diskon').value = diskon > 0 ? `10% (Rp ${diskon.toLocaleString()})` : "Tidak ada diskon";
}