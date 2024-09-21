<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pemesanan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Detail Pemesanan Terbaru</h2>

    <?php
    $conn = new mysqli("localhost", "root", "", "sertifikasi_martin");
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM pemesanan_kamar ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="card mb-3">';
            echo '<div class="card-body">';
            echo '<h3 class="card-title">Informasi Pemesanan:</h3>';
            echo '<p class="card-text"><strong>Nama Pemesan:</strong> ' . htmlspecialchars($row['nama_pemesan']) . '</p>';
            echo '<p class="card-text"><strong>Nomor Identitas:</strong> ' . htmlspecialchars($row['nomor_identitas']) . '</p>';
            echo '<p class="card-text"><strong>Jenis Kelamin:</strong> ' . htmlspecialchars($row['jenis_kelamin']) . '</p>';
            echo '<p class="card-text"><strong>Tipe Kamar:</strong> ' . htmlspecialchars($row['tipe_kamar']) . '</p>';
            echo '<p class="card-text"><strong>Durasi Penginapan:</strong> ' . htmlspecialchars($row['durasi']) . ' Hari</p>';
            echo '<p class="card-text"><strong>Diskon:</strong> ' . htmlspecialchars($row['diskon']) . '</p>';
            echo '<p class="card-text"><strong>Total Bayar:</strong> Rp ' . number_format($row['total_bayar'], 2, ',', '.') . '</p>';
            
            $tipe_kamar = htmlspecialchars($row['tipe_kamar']);
            echo '<div class="mt-3" style="display: flex; flex-direction: column; align-items: center;">';
            echo '<h5>Foto dan Video Kamar</h5>';
            echo '<img id="gambar-kamar" src="" alt="Gambar Kamar" class="img-fluid mb-3" style="max-width: 52.5%; height: 50%;">';
            echo '<div id="video-embed"></div>'; 
            echo '</div>';

            echo '</div>'; 
            echo '</div>'; 
        }
    } else {
        echo '<div class="alert alert-warning" role="alert">Belum ada data pemesanan.</div>';
    }

    $conn->close();
    ?>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const tipeKamar = "<?php echo $tipe_kamar; ?>";
        const gambarKamar = document.getElementById("gambar-kamar");
        const videoEmbed = document.getElementById("video-embed");

        switch (tipeKamar) {
            case "Standar":
                gambarKamar.src = "images/Standar.jpg"; 
                videoEmbed.innerHTML = '<iframe width="560" height="315" src="https://www.youtube.com/embed/PkFe_4FZmAQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                break;
            case "Deluxe":
                gambarKamar.src = "images/Deluxe.jpg"; 
                videoEmbed.innerHTML = '<iframe width="560" height="315" src="https://www.youtube.com/embed/Vmg92BlpTT0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                break;
            case "Family":
                gambarKamar.src = "images/Family.jpg"; 
                videoEmbed.innerHTML = '<iframe width="560" height="315" src="https://www.youtube.com/embed/WUU2K8yBRZY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                break;
            default:
                gambarKamar.src = "images/default.jpg";
                videoEmbed.innerHTML = '<iframe width="560" height="315" src="https://www.youtube.com/embed/default" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                break;
        }
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
