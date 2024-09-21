<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/required.css">
</head>
<body>
<div class="container mt-5">
    <form id="pemesananForm" action="proses_pemesanan.php" method="POST">
        <h2 class="mb-4">Form Pemesanan</h2>

        <div class="form-group">
            <label class="required">Nama Pemesan:</label>
            <input type="text" name="nama_pemesan" class="form-control" required>
        </div>

        <div class="form-group">
            <label class="required">Jenis Kelamin:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" required>
                <label class="form-check-label">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" required>
                <label class="form-check-label">Perempuan</label>
            </div>
        </div>

        <div class="form-group">
            <label class="required" for="nomor_identitas">Nomor Identitas (16 digit):</label>
            <input type="number" class="form-control" id="nomor_identitas" name="nomor_identitas" 
                   min="1000000000000000" max="9999999999999999" required>
            <span id="nomor_error" style="color: red;"></span>
        </div>

        <div class="form-group">
            <label class="required">Tipe Kamar:</label>
            <select name="tipe_kamar" class="form-control" required>
                <option value="">Pilih Tipe Kamar</option>
                <option value="Standar">Standar</option>
                <option value="Deluxe">Deluxe</option>
                <option value="Family">Family</option>
            </select>
        </div>

        <div class="form-group">
            <label>Harga:</label>
            <input type="text" id="harga" class="form-control" readonly>
        </div>

        <div class="form-group">
            <label class="required">Tanggal Pesan:</label>
            <input type="date" name="tanggal_pesan" class="form-control" required>
        </div>

        <div class="form-group">
            <label class="required">Durasi Menginap:</label>
            <input type="number" name="durasi" class="form-control" min="1" required>
        </div>

        <div class="form-group">
            <label>Termasuk Breakfast:</label> <br>
            <input type="checkbox" name="breakfast" value="Ya"> Ya
        </div>

        <div class="form-group">
            <label>Total Bayar:</label>
            <input type="text" name="total_bayar" id="total_bayar" class="form-control" readonly>
        </div>

        <div class="form-group">
            <label>Diskon:</label>
            <input type="text" name="diskon" id="diskon" class="form-control" readonly>
        </div>

        <div class="form-group d-flex">
            <button type="button" class="btn btn-primary mr-3" onclick="hitungTotal()">Hitung Total Bayar</button>
            <button type="submit" class="btn btn-success mr-3" id="submitButton" disabled>Simpan</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </form>
</div>

<script src="js/validasi.js"></script>
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
