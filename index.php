<?php include 'partials/header.php'; ?>

<!-- Header Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Currency Converter</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#features">Fitur</a></li>
                <li class="nav-item"><a class="nav-link" href="#purpose">Tujuan</a></li>
                <li class="nav-item"><a class="nav-link" href="#developer">Pengembang</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Welcome Section -->
<section class="welcome-section text-center py-5">
    <div class="container">
        <h1 class="text-primary fw-bold">Selamat Datang di Sistem Konversi Mata Uang</h1>
        <p class="mt-3">
            Ubah Rupiah (IDR) ke Dollar (USD) dan sebaliknya dengan mudah, cepat, dan akurat.
            Kami memberikan pengalaman terbaik untuk mendukung kebutuhan transaksi Anda.
        </p>
        <a href="converter.php" class="btn btn-primary btn-lg mt-4">Mulai Konversi</a>
    </div>
</section>

<!-- Carousel -->
<div class="container-fluid px-0 mt-5">
    <div id="featuresCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/bg1.png" class="d-block w-100 carousel-image" alt="Feature 1">
                <div class="carousel-caption">
                    <h5 class="text-white fw-bold">Konversi Mata Uang Cepat</h5>
                    <p class="text-light">Ubah Rupiah ke Dollar atau sebaliknya dengan cepat dan akurat.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/bg2.png" class="d-block w-100 carousel-image" alt="Feature 2">
                <div class="carousel-caption">
                    <h5 class="text-white fw-bold">Akurat & Terpercaya</h5>
                    <p class="text-light">Gunakan kurs terbaru yang diperbarui secara berkala.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#featuresCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#featuresCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>


<!-- Features Section -->
<section id="features" class="mt-5">
    <div class="container">
        <h2 class="text-center">Fitur Unggulan</h2>
        <div class="row justify-content-center text-center mt-4">
            <div class="col-md-4">
                <div class="card p-4">
                    <i class="fas fa-sync icon-red"></i>
                    <h5 class="mt-3">Konversi Instan</h5>
                    <p>Lakukan konversi mata uang dalam hitungan detik.</p><br>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <i class="fas fa-chart-line icon-green"></i>
                    <h5 class="mt-3">Kurs Terbaru</h5>
                    <p>Kami menggunakan data kurs terkini untuk hasil yang akurat.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <i class="fas fa-user-shield icon-yellow"></i>
                    <h5 class="mt-3">Keamanan Data</h5>
                    <p>Sistem kami aman dan melindungi data pribadi Anda.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Purpose Section -->
<section id="purpose" class="mt-5 section-divider">
    <div class="container text-center">
        <h2 class="text-primary fw-bold">Tujuan Sistem</h2>
        <p>Sistem ini dibuat untuk memudahkan pengguna dalam melakukan konversi nilai mata uang secara cepat, aman, dan
            akurat.</p>
    </div>
</section>

<!-- Developer Section -->
<section id="developer" class="mt-5 section-divider">
    <div class="container">
        <h2 class="text-center text-primary fw-bold">Tentang Pengembang</h2>
        <div class="row justify-content-center mt-4">
            <div class="col-md-4 text-center">
                <div class="card developer-card p-4 d-flex flex-column align-items-center">
                    <img src="assets/img/masani.jpeg" class="rounded-circle shadow mb-3" alt="Developer" width="150">
                    <h5 class="mt-3 text-dark-purple fw-bold">Masani</h5>
                    <p>Web Developer & Designer</p>
                    <p>Saya seorang pengembang aplikasi berbasis web.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>