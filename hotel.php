<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Hotel Martin</title>
  <link rel="stylesheet" href="css/banner.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Hotel Martin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#beranda">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tipeKamar">Tipe Kamar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#harga">Harga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Banner Hotel -->
  <div class="container-fluid p-0 banner" id="beranda">
    <img src="images/Hotel.jpg" class="img-fluid" alt="Banner">
  </div>
  
  <!-- Tipe Kamar -->
  <div class="container mt-5" id="tipeKamar">
    <h1 class="text-center mb-4">Tipe Kamar</h1>
    <div class="d-flex justify-content-around flex-wrap">
      <div class="card mb-4" style="width: 18rem;">
        <img src="images/Standar.jpg" class="card-img-top" alt="Paket 1" style="height: 192px;">
        <div class="card-body">
          <h5 class="card-title">Standard</h5>
          <p class="card-text">Pilihan tepat untuk Anda yang mencari kenyamanan dan harga terjangkau. Nikmati tidur nyenyak dalam suasana yang tenang</p>
        </div>
      </div>
      <div class="card mb-4" style="width: 18rem;">
        <img src="images/Deluxe.jpg" class="card-img-top" alt="Paket 2">
        <div class="card-body">
          <h5 class="card-title">Deluxe</h5>
          <p class="card-text">Lebih luas, lebih mewah, lebih nyaman. Sempurna untuk Anda yang menginginkan kemewahan dengan fasilitas lengkap.</p>
        </div>
      </div>
      <div class="card mb-4" style="width: 18rem;">
        <img src="images/Family.jpg" class="card-img-top" alt="Paket 3"  style="height: 192px;">
        <div class="card-body">
          <h5 class="card-title">Family</h5>
          <p class="card-text">Kamar luas untuk kebersamaan keluarga. Tempat yang ideal untuk menginap bersama orang-orang tersayang.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Harga -->
  <div class="container mt-5" id="harga">
  <h1 class="text-center mb-4">Harga</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h4>Standard</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Rp 500,000</h5>
                        <p class="card-text">Per Malam</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Free Wi-Fi</li>
                            <li class="list-group-item">Breakfast Included</li>
                            <li class="list-group-item">Air Conditioning</li>
                        </ul>
                        <a href="form_pemesanan.php" class="btn btn-primary mt-3">Booking Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center shadow-lg">
                    <div class="card-header bg-success text-white">
                        <h4>Deluxe</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Rp 800,000</h5>
                        <p class="card-text">Per Malam</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Free Wi-Fi</li>
                            <li class="list-group-item">Breakfast & Dinner Included</li>
                            <li class="list-group-item">Air Conditioning & Mini Bar</li>
                        </ul>
                        <a href="form_pemesanan.php" class="btn btn-success mt-3">Booking Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center shadow-lg">
                    <div class="card-header bg-danger text-white">
                        <h4>Family</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Rp 1,200,000</h5>
                        <p class="card-text">Per Malam</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Free Wi-Fi</li>
                            <li class="list-group-item">All Meals Included</li>
                            <li class="list-group-item">Family Spot Fun</li>
                        </ul>
                        <a href="form_pemesanan.php" class="btn btn-danger mt-3">Booking Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!-- About -->
  <section class="py-3 py-md-5 mt-5" id="about">
  <div class="container">
    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-stretch">
      <div class="col-12 col-lg-6 col-xl-5">
        <img class="img-fluid rounded h-100" loading="lazy" src="images/Hotel.jpg" alt="About 1"> 
      </div>
      <div class="col-12 col-lg-6 col-xl-7 d-flex align-items-center"> 
        <div class="row justify-content-xl-center w-100">
          <div class="col-12 col-xl-11">
            <h2 class="mb-3">Hotel Martin</h2>
            <p class="lead fs-4 text-secondary mb-3">Temukan Pengalaman Menginap Tak Terlupakan di Hotel Martin.</p>
            <p class="mb-5">Selamat datang di Hotel Martin, tempat di mana kenyamanan bertemu dengan kemewahan! Terletak strategis di jantung kota, Hotel Martin menawarkan pengalaman menginap yang sempurna untuk segala kebutuhan Anda baik untuk liburan keluarga, perjalanan bisnis, maupun staycation romantis.</p>
            
            <div class="mb-5">
              <h5>📍 Alamat:</h5>
              <p>Jalan Mawar No. 123, Jakarta Pusat, Indonesia</p>

              <h5>📞 Telepon:</h5>
              <p>(021) 1234-5678</p>

              <h5>📧 Email:</h5>
              <p><a href="mailto:info@hotelmartin.com">info@hotelmartin.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
