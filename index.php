<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Sehat Bersama</title>
    <link href ="style.css" rel="stylesheet">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

   
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary p-3">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Klinik Sehat Bersama</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="user_tambah.php">Ambil Antrian</a></li>
                <li class="nav-item"><a class="nav-link" href="cek_antrian.php">Cek Antrian</a></li>
                <li class="nav-item"><a class="nav-link" href="admin_login.php">Admin</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO SECTION -->
<section class="hero">
    <div class="overlay d-flex flex-column justify-content-center align-items-start">
        <h1 class="fw-bold display-4">Selamat Datang di Klinik Sehat Bersama</h1>
        <p class="lead mt-3">Pelayanan kesehatan terbaik untuk keluarga Anda.</p>
        <a href="user_tambah.php" class="btn btn-light btn-lg mt-4 fw-bold">Ambil Antrian Sekarang</a>
    </div>
</section>

<!-- FITUR -->
<section class="container text-center my-5">
    <h2 class="fw-bold mb-4">Layanan Utama Kami</h2>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card shadow p-4">
                <div class="fitur-icon mb-3">🩺</div>
                <h5 class="fw-bold">Pemeriksaan Umum</h5>
                <p>Konsultasi kesehatan untuk segala keluhan umum.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow p-4">
                <div class="fitur-icon mb-3">🦷</div>
                <h5 class="fw-bold">Poli Gigi</h5>
                <p>Perawatan gigi dan mulut oleh dokter berpengalaman.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow p-4">
                <div class="fitur-icon mb-3">👶</div>
                <h5 class="fw-bold">Poli Anak</h5>
                <p>Perawatan khusus untuk anak dengan suasana ramah.</p>
            </div>
        </div>

    </div>
</section>



